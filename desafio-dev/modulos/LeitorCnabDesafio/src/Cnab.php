<?php

namespace Renan\LeitorCnabDesafio;

/**
 * Classe responsável por ler o arquivo e retornar um array dos dados lidos.
 */

 class Cnab
{

    /**
     * Método responsável por ler a retornar as informações do arquivo CNAB.txt 
     * @param mixed $file
     * @return array|null
     */
    public function getInfo($file) :array|null
    {
        $array = [];
        $lines = file($file);
        foreach ($lines as $line) {
            if (preg_match('#^(?<tipo>[0-9]{1})(?<data>[^\n]{8})(?<valor>[^\n]{10})(?<cpf>[^\n]{11})(?<cartao>[0-9*]{12})(?<hora>[^\n]{6})(?<dono_loja>[^\n]{14})(?<nome_loja>[^\n]{18})#iu', $line, $arr)) {
                
                // Faz a tradução do tipo para o nome da transação
                $transacao = new Translate($arr['tipo']);

                // Armazena no array os dados extraidos no preg_match
                $array[] = [
                    'tipo' => $arr['tipo'],
                    'transacao' => $transacao->render(),
                    'data' => $arr['data'],
                    'valor' => $arr['valor'],
                    'cpf' => $arr['cpf'],
                    'cartao' => $arr['cartao'],
                    'hora' => $arr['hora'],
                    'dono_loja' => $arr['dono_loja'],
                    'nome_loja' => $arr['nome_loja']
                ];
            }
        }
        return $array;
    }
}
