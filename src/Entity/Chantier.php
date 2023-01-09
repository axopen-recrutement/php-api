<?php

namespace App\Entity;

use App\Repository\ChantierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChantierRepository::class)]
#[ORM\Table(name: 'chantier')]
class Chantier
{

    #[ORM\Id]
    #[ORM\Column]
    private ?int $numero = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $city = null;

    #[ORM\Column]
    private ?int $city_cp = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_debut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_fin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $status = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lien_sharepoint = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lien_files = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lien_gearth = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 20, scale: 2, nullable: true)]
    private ?string $prix_moyen_moe_jour = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 20, scale: 2, nullable: true)]
    private ?string $prix_moyen_moe_nuit = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 20, scale: 2, nullable: true)]
    private ?string $prix_moyen_materiel = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $journal_pointage_erp = null;
    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCityCp(): ?int
    {
        return $this->city_cp;
    }

    public function setCityCp(?int $city_cp): self
    {
        $this->city_cp = $city_cp;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(?\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(?\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLienSharepoint(): ?string
    {
        return $this->lien_sharepoint;
    }

    public function setLienSharepoint(?string $lien_sharepoint): self
    {
        $this->lien_sharepoint = $lien_sharepoint;

        return $this;
    }

    public function getLienFiles(): ?string
    {
        return $this->lien_files;
    }

    public function setLienFiles(?string $lien_files): self
    {
        $this->lien_files = $lien_files;

        return $this;
    }

    public function getLienGearth(): ?string
    {
        return $this->lien_gearth;
    }

    public function setLienGearth(?string $lien_gearth): self
    {
        $this->lien_gearth = $lien_gearth;

        return $this;
    }

    public function getPrixMoyenMoeJour(): ?string
    {
        return $this->prix_moyen_moe_jour;
    }

    public function setPrixMoyenMoeJour(?string $prix_moyen_moe_jour): self
    {
        $this->prix_moyen_moe_jour = $prix_moyen_moe_jour;

        return $this;
    }

    public function getPrixMoyenMoeNuit(): ?string
    {
        return $this->prix_moyen_moe_nuit;
    }

    public function setPrixMoyenMoeNuit(?string $prix_moyen_moe_nuit): self
    {
        $this->prix_moyen_moe_nuit = $prix_moyen_moe_nuit;

        return $this;
    }

    public function getPrixMoyenMateriel(): ?string
    {
        return $this->prix_moyen_materiel;
    }

    public function setPrixMoyenMateriel(?string $prix_moyen_materiel): self
    {
        $this->prix_moyen_materiel = $prix_moyen_materiel;

        return $this;
    }

    public function getJournalPointageErp(): ?string
    {
        return $this->journal_pointage_erp;
    }

    public function setJournalPointageErp(?string $journal_pointage_erp): self
    {
        $this->journal_pointage_erp = $journal_pointage_erp;

        return $this;
    }
}
