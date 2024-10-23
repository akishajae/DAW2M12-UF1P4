<?php

namespace App\Entity;

use App\Repository\RecordsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecordsRepository::class)]
class Records
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $weight_height = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $diet = null;

    #[ORM\Column(nullable: true)]
    private ?int $breathing = null;

    #[ORM\Column(nullable: true)]
    private ?int $blood_pressure = null;

    #[ORM\Column(nullable: true)]
    private ?int $pulse = null;

    #[ORM\Column(nullable: true)]
    private ?int $temperature = null;

    #[ORM\Column(nullable: true)]
    private ?int $intake = null;

    #[ORM\Column(nullable: true)]
    private ?int $discharge = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $record_date = null;

    #[ORM\Column(length: 1, nullable: true)]
    private ?string $record_time = null;

    #[ORM\Column]
    private ?int $patient_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getWeightHeight(): ?string
    {
        return $this->weight_height;
    }

    public function setWeightHeight(?string $weight_height): static
    {
        $this->weight_height = $weight_height;

        return $this;
    }

    public function getDiet(): ?string
    {
        return $this->diet;
    }

    public function setDiet(?string $diet): static
    {
        $this->diet = $diet;

        return $this;
    }

    public function getBreathing(): ?int
    {
        return $this->breathing;
    }

    public function setBreathing(?int $breathing): static
    {
        $this->breathing = $breathing;

        return $this;
    }

    public function getBloodPressure(): ?int
    {
        return $this->blood_pressure;
    }

    public function setBloodPressure(?int $blood_pressure): static
    {
        $this->blood_pressure = $blood_pressure;

        return $this;
    }

    public function getPulse(): ?int
    {
        return $this->pulse;
    }

    public function setPulse(?int $pulse): static
    {
        $this->pulse = $pulse;

        return $this;
    }

    public function getTemperature(): ?int
    {
        return $this->temperature;
    }

    public function setTemperature(?int $temperature): static
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getIntake(): ?int
    {
        return $this->intake;
    }

    public function setIntake(?int $intake): static
    {
        $this->intake = $intake;

        return $this;
    }

    public function getDischarge(): ?int
    {
        return $this->discharge;
    }

    public function setDischarge(?int $discharge): static
    {
        $this->discharge = $discharge;

        return $this;
    }

    public function getRecordDate(): ?\DateTimeInterface
    {
        return $this->record_date;
    }

    public function setRecordDate(\DateTimeInterface $record_date): static
    {
        $this->record_date = $record_date;

        return $this;
    }

    public function getRecordTime(): ?string
    {
        return $this->record_time;
    }

    public function setRecordTime(?string $record_time): static
    {
        $this->record_time = $record_time;

        return $this;
    }

    public function getPatientId(): ?int
    {
        return $this->patient_id;
    }

    public function setPatientId(int $patient_id): static
    {
        $this->patient_id = $patient_id;

        return $this;
    }
}
