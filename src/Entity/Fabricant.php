<?php
// src/Entity/Fabricant.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Fabricant")
 */
class Fabricant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="fab_id",type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCrea;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fondateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $siegeSocial;

    /**
     * @ORM\Column(type="integer")
     */
    private $effectif;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $activite;

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

    public function getDateCrea()
    {
        return $this->dateCrea;
    }

    public function setDateCrea($dateCrea)
    {
        $this->dateCrea = $dateCrea;
    }

    public function getFondateur()
    {
        return $this->fondateur;
    }

    public function setFondateur($fondateur)
    {
        $this->fondateur = $fondateur;
    }

    public function getSiegeSocial()
    {
        return $this->siegeSocial;
    }

    public function setSiegeSocial($siegeSocial)
    {
        $this->siegeSocial = $siegeSocial;
    }

    public function getEffectif()
    {
        return $this->effectif;
    }

    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }

    public function getActivite()
    {
        return $this->activite;
    }

    public function setActivite($activite)
    {
        $this->activite = $activite;
    }
}
