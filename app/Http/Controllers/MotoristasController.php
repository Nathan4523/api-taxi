<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MotoristasRepository;

class MotoristasController extends Controller
{
    private $userMotorisRespo;
    public function __construct(MotoristasRepository $userRespo)
    {
        $this->userMotorisRespo = $userRespo;
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motoristas = $this->userMotorisRespo->listarMotorista();
        
        return response()->json([
            'motorista' => $motoristas,
            'success' => 'sucesso'
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        
        $this->userMotorisRespo->criarMotorista($dados);
        
        return response()->json([
            'success' => 'sucesso'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motorista = $this->userMotorisRespo->listarMotoristaId($id);
        
        return response()->json([
            'motorista' => $motorista,
            'success' => 'sucesso'
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = $request->all();
        
        $this->userMotorisRespo->atualizarMotorista($id, $dados);
        
        return response()->json([
            'success' => 'sucesso'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
