<?php

namespace App\Repositories;

use App\Models\Motoristas;

/**
 * Class MotoristasRepository
 * @package App\Repositories
 * @version March 16, 2019, 8:41 pm UTC
*/

class MotoristasRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Motoristas::class;
    }

    /**
     * Listando os motoristas
     * @author Nicolas
     */
    public function listarMotorista()
    {
        return Motoristas::listar();
    }

    /**
     * Listando o motorista
     * @author Nicolas
     */
    public function listarMotoristaId($id)
    {
        return Motoristas::listarPorId($id);
    }

    /**
     * Cadastrando os motoristas
     * @author Nicolas
     */
    public function criarMotorista($dados)
    {
        return Motoristas::criar($dados);
    }

    /**
     * Atualizar o motorista
     * @author Nicolas
     */
    public function atualizarMotorista($id, $dados)
    {
        return Motoristas::atualizar($id, $dados);
    }
}
