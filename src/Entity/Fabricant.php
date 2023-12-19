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
