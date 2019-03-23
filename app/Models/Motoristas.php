<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Support\Facades\DB;

class Motoristas extends Model
{
    /**
     * Query de listar todos motoristas
     * @author Nicolas
     */
    protected function listar()
    {
        try 
        {
            return DB::table('tb_motoristas')->select('*')->paginate();
        } 
        catch (Exception $e) 
        {
            return array('Error', $e->getMessage());      
        }
    }

    /**
     * Query de listar por id
     * @author Nicolas
     */
    protected function listarPorId($id)
    {
        try 
        {
            return DB::table('tb_motoristas')->select('*')->where(['id' => $id])->first();
        } 
        catch (Exception $e) 
        {
            return array('Error', $e->getMessage());      
        }
    }

    /**
     * Query de criar novos motoristas
     * @author Nicolas
     */
    protected function criar($dados)
    {
        try 
        {
            return DB::table('tb_motoristas')->insert($dados);
        } 
        catch (Exception $e) 
        {
            return array('Error', $e->getMessage());      
        }
    }

    /**
     * Query de criar novos motoristas
     * @author Nicolas
     */
    protected function atualizar($id, $dados)
    {
        try 
        {
            return DB::table('tb_motoristas')->where('id', $id)->update($dados);
        } 
        catch (Exception $e) 
        {
            return array('Error', $e->getMessage());      
        }
    }
}
