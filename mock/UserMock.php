<?php

namespace User;

class UserMock
{
    public function __construct() {
    }

    public function pi() {
        return array($nom => 'nom', $prenom => 'prenom', $mail => 'mail', $age => '15');
    }

}