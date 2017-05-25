<?php
namespace CDC\Exemplos;

require "./vendor/autoload.php";

use CDC\Exemplos\ConversorDeNumeroRomano;
use PHPUnit_Framework_TestCase as PHPUnit;

class ConversorDeNumeroRomanoTest extends PHPUnit
{
	/**
	* @group romanos
	*/
	public function testDeveEntenderOSimboloI(){
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converte("I");
		$this->assertEquals($numero, 1);
	}

	/**
	* @group romanos
	*/
	public function testDeveEntenderOSimboloV(){
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converte('V');
		$this->assertEquals($numero, 5);
	}

	/**
	* @group romanos
	*/
	public function testDeveEntenderOSimboloX(){
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converte('X');
		$this->assertEquals($numero, 10);
	}

	/**
	* @group romanos
	*/
	public function testDeveEntenderOSimboloL(){
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converte('L');
		$this->assertEquals($numero, 50);
	}

	/**
	* @group romanos
	*/
	public function testDeveEntenderOSimboloC(){
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converte('C');
		$this->assertEquals($numero, 100);
	}

	/**
	* @group romanos
	*/
	public function testDeveEntenderOSimboloD(){
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converte('D');
		$this->assertEquals($numero, 500);
	}

	/**
	* @group romanos
	*/
	public function testDeveEntenderOSimboloM(){
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converte('M');
		$this->assertEquals($numero, 1000);
	}

	/**
	* @group romanos
	*/
	public function testDeveEntenderOSimboloXXII(){
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converte('XXII');
		$this->assertEquals($numero, 22);
	}

	/**
	* @group romanos
	*/
	public function testDeveEntenderOSimboloIX(){
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converte('IX');
		$this->assertEquals($numero, 9);
	}

	/**
	* @group romanos
	*/
	public function testDeveEntenderOSimboloXXIV(){
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converte('XXIV');
		$this->assertEquals($numero, 24);
	}
}

