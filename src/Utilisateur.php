<?php


namespace App;


use function PHPUnit\Framework\throwException;

class Utilisateur
{
    public $nom;
    public $prenom;
    public $mail;
    public $age;

    function __construct()
    {
    }

    function isValid(string $nom, string $prenom, string $mail, string $age) {

        if (isset($nom) && !empty($nom)
            && isset($prenom) && !empty($prenom))
        {
            echo 'Les champs sont remplis';
        } else {
            throw new Exception('Tous les champs ne sont pas remplis');
        }

        if(preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $mail)){
            echo 'L\adresse mail est valide';
        } else {
            throw new Exception('veuillez vérifier votre adresse email');
        }

        if ($age >= 13) {
            echo 'L\'âge est valide';
        } else {
            throw new Exception('Vous êtes trop jeune');
        }


    }


}