<?php

namespace Test;

use App\Utilisateur;
use App\Utilisateurs;
use PHPUnit\Framework\TestCase;

class UtilisateurTest extends TestCase
{
    public function testAddValid()
    {
        $add = new Utilisateur();
        $add = $add->isValid(maya, labeille, maya.labeille@outlook.com, 14);
    }

    public function testAddNotValid()
    {
        $add = new Utilisateur();
        $add = $add->isValid('', paf, un5e44ur, 15);
    }

    public function testAddPi()
    {
        $pi = new UserMock();
        $pi = $pi->pi();
        $add = new Utilisateur();
        $add = $add->isValid(10, $pi);
        $this->assertEquals(13, $add);
    }

}
