<?php

namespace Renan\LeitorCnabDesafio;

class Translate
{
    private $tipo = [
        '1' => 'Débito',
        '2' => 'Boleto',
        '3' => 'Financiamento',
        '4' => 'Crédito',
        '5' => 'Recebimento Empréstimo',
        '6' => 'Vendas',
        '7' => 'Recebimento TED',
        '8' => 'Recebimento DOC',
        '9' => 'Aluguel',
    ];
    private $result;

    public function __construct($type)
    {
        return $this->result = $this->tipo[$type];
    }

    public function render()
    {
        return $this->result;
    }
}
