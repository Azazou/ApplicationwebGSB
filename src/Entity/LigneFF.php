<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LigneFFRepository")
 */
class LigneFF
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFF;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(type="float")
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $repas;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateFF(): ?\DateTimeInterface
    {
        return $this->dateFF;
    }

    public function setDateFF(\DateTimeInterface $dateFF): self
    {
        $this->dateFF = $dateFF;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getRepas(): ?string
    {
        return $this->repas;
    }

    public function setRepas(string $repas): self
    {
        $this->repas = $repas;

        return $this;
    }
}
