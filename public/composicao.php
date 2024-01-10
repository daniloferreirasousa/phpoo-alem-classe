<?php

class Endereco
{
    public $rua;
    public $bairro;
}

class User
{
    public $name;
    private $endereco;

    public function  setEndereco($rua, $bairro)
    {
        $endereco = new Endereco;
        $endereco->rua = $rua;
        $endereco->bairro = $bairro;

        $this->endereco = $endereco;
    }

    public function getEndereco(): String
    {
        return "<br>Endereço: rua: {$this->endereco->rua}, bairro: {$this->endereco->bairro}";
    }
}

$user = new User;
$user->name = 'Danilo de Andrade';
$user->setEndereco('Rua XX1', 'Bairro ZZ2');

echo $user->name;
echo $user->getEndereco();