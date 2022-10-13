<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ActionTests extends TestCase
{
    public function home($data){
        $this->assertTrue($data);
    }

    public function index($data){
        $this->assertTrue($data);
    }

    public function logIn($data){
        $this->assertTrue($data);
    }

    public function logOut($data){
        $this->assertTrue($data);
    }

    public function register($data){
        $this->assertTrue($data);
    }

    public function signUp($data){
        $this->assertTrue($data);
    }

}