<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/nurse', name: 'Nurse Methods')]
class NurseController extends AbstractController
{
    static $nurses = array(
        "juan.perez@email.com" => array("name" => "Juan Pérez", "password" => "a1B2c3D4e5"),
        "maria.gomez@email.com" => array("name" => "María Gómez", "password" => "F6g7H8i9J0"),
        "carlos.martinez@email.com" => array("name" => "Carlos Martínez", "password" => "k1L2m3N4o5"),
        "ana.lopez@email.com" => array("name" => "Ana López", "password" => "P6q7R8s9T0"),
        "luis.fernandez@email.com" => array("name" => "Luis Fernández", "password" => "U1v2W3x4Y5"),
        "sara.ramirez@email.com" => array("name" => "Sara Ramírez", "password" => "Z6a7B8c9D0"),
        "diego.rodriguez@email.com" => array("name" => "Diego Rodríguez", "password" => "E1f2G3h4I5"),
        "laura.sanchez@email.com" => array("name" => "Laura Sánchez", "password" => "J6k7L8m9N0"),
        "jorge.morales@email.com" => array("name" => "Jorge Morales", "password" => "O1p2Q3r4S5"),
        "elena.garcia@email.com" => array("name" => "Elena García", "password" => "T6u7V8w9X0")
    );

    #[Route('/index', name: 'Nurses List', methods: ['GET'])]
    public function index(): JsonResponse
    {
        $return_nurses = array();
        // Comprobar si hay info en el array de nurses
        if (isset(self::$nurses)) {
            // Recorrer el array para guardarlo en otro para solo mostrar nombre y email
            foreach (self::$nurses as $email => $data) {
                $return_nurses[$email] = array("name" => $data["name"]);
            }
        }

        // return el array creado pasado a formato json
        return new JsonResponse($return_nurses);
    }

    #[Route('/name/{str_name}', name: 'nurse_list_name', methods: ['GET'])]
    public function findByName($str_name): JsonResponse
    {

        $return_nurses = array();

        if (isset(self::$nurses)) {

            foreach (self::$nurses as $email => $data) {
                if ($data['name'] == $str_name) {
                    $return_nurses[$email] = array('name' => $data['name']);
                    break;
                } else {
                    return new JsonResponse($return_nurses, 404);
                }
            }
        }

        return new JsonResponse($return_nurses, 302);
    }

    #[Route('/login', name: 'login', methods: ['POST'])]
    public function login(Request $request): JsonResponse
    {
        $email = $request->get('email');
        $password = $request->get('password');
        if ($email !== null && $password !== null) {
            if (isset(self::$nurses[$email])) {
                if (self::$nurses[$email]['password'] === $password) {
                    return new JsonResponse(['success' => true], 302);
                }
            }
        }
        return new JsonResponse(['success' => false], 404);
    }
}
