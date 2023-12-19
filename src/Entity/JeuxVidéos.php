<?php
// src/Entity/JeuxVideos.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Jeux_Videos")
 */
class JeuxVideos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @ORM\Column(name="jeu_Plateforme", type="string", length=255)
     */
    private $plateforme;

    /**
     * @ORM\Column(name="jeu_Genre", type="string", length=255)
     */
    private $genre;

    /**
     * @ORM\Column(name="jeu_AgeMini", type="integer")
     */
    private $ageMini;

    /**
     * @ORM\Column(name="jeu_Prix", type="decimal", precision=10, scale=2)
     */
    private $prix;

    /**
     * @ORM\Column(name="jeu_Description", type="text")
     */
    private $description;

    /**
     * @ORM\Column(name="jeu_Editeur", type="integer")
     */
    private $editeur;

    /**
     * @ORM\Column(name="jeu_DebutProjet", type="date")
     */
    private $debutProjet;

    /**
     * @ORM\Column(name="jeu_DateSortie", type="date")
     */
    private $dateSortie;

    /**
     * @ORM\Column(name="jeu_ModeDeJeu", type="string", length=255)
     */
    private $modeDeJeu;

    /**
     * @ORM\Column(name="jeu_Moteur", type="string", length=255)
     */
    private $moteur;

    /**
     * @ORM\ManyToOne(targetEntity="Editeur")
     * @ORM\JoinColumn(name="jeu_Editeur", referencedColumnName="edit_id")
     */
    private $editeurObj;

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

    public function getPlateforme()
    {
        return $this->plateforme;
    }

    public function setPlateforme($plateforme)
    {
        $this->plateforme = $plateforme;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function getAgeMini()
    {
        return $this->ageMini;
    }

    public function setAgeMini($ageMini)
    {
        $this->ageMini = $ageMini;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getEditeur()
    {
        return $this->editeur;
    }

    public function setEditeur($editeur)
    {
        $this->editeur = $editeur;
    }

    public function getDebutProjet()
    {
        return $this->debutProjet;
    }

    public function setDebutProjet($debutProjet)
    {
        $this->debutProjet = $debutProjet;
    }

    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;
    }

    public function getModeDeJeu()
    {
        return $this->modeDeJeu;
    }

    public function setModeDeJeu($modeDeJeu)
    {
        $this->modeDeJeu = $modeDeJeu;
    }

    public function getMoteur()
    {
        return $this->moteur;
    }

    public function setMoteur($moteur)
    {
        $this->moteur = $moteur;
    }
}
