<?php

/**
 * Projet : steen-web
 * Auteur : Kcram && Mbnot
 * Date : 03.10.2024
 * Description : The Games class serves as a model to represent games in the web site.
 * It allows for storing and manipulating information related to the games, such as their name, release date, description, and rating.
 * V1
 */

declare(strict_types=1);

namespace Mbnot\SteenWeb\models;


use PDOException;

class Games
{
    /**
     * @var integer | null
     */
    public ?int $id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $releaseDate = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $pseudo = null;

    /**
     * @var float|null
     */
    public ?float $note = null;
    
}