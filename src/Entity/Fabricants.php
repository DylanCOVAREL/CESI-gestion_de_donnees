<?php
// src/Entity/Fabricants.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Fabricants")
 */
class Fabricant
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
}
