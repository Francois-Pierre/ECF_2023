<?php

namespace App\Entity;

use App\Repository\DishRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DishRepository::class)]
class Dish
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ID = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setID(string $ID): self
    {
        $this->ID = $ID;

        return $this;
    }
}
