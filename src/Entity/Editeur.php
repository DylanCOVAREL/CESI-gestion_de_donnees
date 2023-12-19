<?php
// src/Entity/Editeur.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Editeur")
 */
class Editeur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="edit_id", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(name="edit_DateCrea", type="date")
     */
    private $dateCrea;

    /**
     * @ORM\Column(name="edit_SiegeSocial", type="string", length=255)
     */
    private $siegeSocial;

    /**
     * @ORM\Column(name="edit_Activite", type="string", length=255)
     */
    private $activite;

    /**
     * @ORM\Column(name="edit_Produit", type="string", length=255)
     */
    private $produit;

    /**
     * @ORM\Column(name="edit_Effectif", type="integer")
     */
    private $effectif;

    /**
     * @ORM\Column(name="edit_Direction", type="string", length=255)
     */
    private $direction;

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

    public function getSiegeSocial()
    {
        return $this->siegeSocial;
    }

    public function setSiegeSocial($siegeSocial)
    {
        $this->siegeSocial = $siegeSocial;
    }

    public function getActivite()
    {
        return $this->activite;
    }

    public function setActivite($activite)
    {
        $this->activite = $activite;
    }

    public function getProduit()
    {
        return $this->produit;
    }

    public function setProduit($produit)
    {
        $this->produit = $produit;
    }

    public function getEffectif()
    {
        return $this->effectif;
    }

    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

}
