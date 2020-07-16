<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\Calculatrice;
use Mock\MathMock;

class CalculatriceTest extends TestCase
{
    // Addition
    public function testAddValid()
    {
        $add = new Calculatrice();
        $add = $add->addition(4, 2);
        $this->assertEquals(6, $add);
    }

    public function testAddNotValid()
    {
        $add = new Calculatrice();
        $add = $add->addition(4, 2);
        $this->assertNotEquals(200, $add);
    }

    // Substraction
    public function testSubValid()
    {
        $sub = new Calculatrice();
        $sub = $sub->soustraction(4, 2);
        $this->assertEquals(2, $sub);
    }

    public function testSubNotValid()
    {
        $sub = new Calculatrice();
        $sub = $sub->soustraction(4, 2);
        $this->assertNotEquals(3, $sub);
    }

    // Multiplication
    public function testMulValid()
    {
        $mul = new Calculatrice();
        $mul = $mul->multiplication(5, 5);
        $this->assertEquals(25, $mul);
    }

    public function testMulNotValid()
    {
        $mul = new Calculatrice();
        $mul = $mul->muliplication(5, 5);
        $this->assertNotEquals(30, $mul);
    }

    // Division
    public function testDivValid()
    {
        $div = new Calculatrice();
        $div = $div->division(100, 2);
        $this->assertEquals(50, $div);
    }

    public function testAddPi()
    {
        $pi = new MathMock();
        $pi = $pi->pi();
        $add = new Calculatrice();
        $add = $add->addition(10, $pi);
        $this->assertEquals(13, $add);
    }
}
