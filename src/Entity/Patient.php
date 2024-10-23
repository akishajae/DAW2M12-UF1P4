<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $first_surname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $second_surname = null;

    #[ORM\Column]
    private ?int $nurse_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstSurname(): ?string
    {
        return $this->first_surname;
    }

    public function setFirstSurname(string $first_surname): static
    {
        $this->first_surname = $first_surname;

        return $this;
    }

    public function getSecondSurname(): ?string
    {
        return $this->second_surname;
    }

    public function setSecondSurname(?string $second_surname): static
    {
        $this->second_surname = $second_surname;

        return $this;
    }

    public function getNurseId(): ?int
    {
        return $this->nurse_id;
    }

    public function setNurseId(int $nurse_id): static
    {
        $this->nurse_id = $nurse_id;

        return $this;
    }
}
