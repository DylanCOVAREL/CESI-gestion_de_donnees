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
     * @ORM\Column(type="string", length=255)
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
}
