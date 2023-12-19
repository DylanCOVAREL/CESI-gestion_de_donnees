<?php
// src/Entity/Consoles.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Consoles")
 */
class Console
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $fabricant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(name="conso_NomDeCode", type="string", length=255)
     */
    private $nomDeCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(name="conso_Generation", type="integer")
     */
    private $generation;

    /**
     * @ORM\Column(name="conso_DateSortie", type="date")
     */
    private $dateSortie;

    /**
     * @ORM\Column(name="conso_OS", type="string", length=255)
     */
    private $os;

    /**
     * @ORM\Column(name="conso_CPU", type="string", length=255)
     */
    private $cpu;

    /**
     * @ORM\Column(name="conso_GPU", type="string", length=255)
     */
    private $gpu;

    /**
     * @ORM\Column(name="conso_RAM", type="string", length=255)
     */
    private $ram;

    /**
     * @ORM\Column(name="conso_Stockage", type="string", length=255)
     */
    private $stockage;

    /**
     * @ORM\Column(name="conso_NbVentes", type="integer")
     */
    private $nbVentes;

    /**
     * @ORM\ManyToOne(targetEntity="Fabricant")
     * @ORM\JoinColumn(name="conso_Fabricant", referencedColumnName="fab_id")
     */
    private $fabricantObj;

   // Getter et Setter pour la propriété "id"
   public function getId()
   {
       return $this->id;
   }

   public function getNom()
   {
       return $this->nom;
   }

   public function setNom($nom)
   {
       $this->nom = $nom;
   }

   public function getFabricant()
   {
       return $this->fabricant;
   }

   public function setFabricant($fabricant)
   {
       $this->fabricant = $fabricant;
   }

   public function getNomDeCode()
   {
       return $this->nomDeCode;
   }

   public function setNomDeCode($nomDeCode)
   {
       $this->nomDeCode = $nomDeCode;
   }

}
