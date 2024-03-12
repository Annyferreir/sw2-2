<?php 

namespace App\Http\Controllers;

class UserController extends Controllers
{
    //atributo
    public string $name;
    protected int $age;

    //métodos

    public function meuMetodo(): string //função
    {
        return $this->name = "Aqui vai meu nome";
    }
    public function meuMetodo2(): void //procedimento
    {
        return $this->name = "Aqui vai meu nome";
    }
}
 