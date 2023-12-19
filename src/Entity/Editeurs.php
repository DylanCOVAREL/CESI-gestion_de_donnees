<?php
// src/Entity/Editeur.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Editeurs")
 */
class Editeur
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
}
