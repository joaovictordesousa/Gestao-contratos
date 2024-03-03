<?php

namespace App\Http\Controllers;

use App\Models\Auxdiretoria;
use App\Models\Auxsituacao;
use App\Models\Auxstatus;
use App\Models\Cadastro;
use Illuminate\Http\Request;


class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diretoria = Auxdiretoria::all();
        $situacao = Auxsituacao::all();
        $status = Auxstatus::all();

        return view('cadastro', ['diretoria' => $diretoria, 'situacao' => $situacao, 'status' => $status]);
    }

    public function pesquisa()
    {
        $diretoria = Auxdiretoria::all();
        $status = Auxstatus::all();

        return view('pesquisa', ['diretoria' => $diretoria, 'status' => $status]);
    }

    public function resultado(Request $request)
    {
        // Recuperar os valores dos filtros do formulário de pesquisa
        $numContrato = $request->input('numcontrato');
        $empresa = $request->input('empresa');
        $diretoriaId = $request->input('diretoria');
        $statusId = $request->input('status');
    
        // Inicializar a query de pesquisa
        $query = Cadastro::query();
    
        // Aplicar os filtros de pesquisa, se fornecidos
        if (!is_null($numContrato)) {
            $query->where('numcontrato', $numContrato);
        }
        if (!is_null($empresa)) {
            $query->where('empresa', 'like', '%' . $empresa . '%');
        }
        if (!is_null($diretoriaId)) {
            $query->where('auxdiretoria', $diretoriaId);
        }
        if (!is_null($statusId)) {
            $query->where('auxstatus', $statusId);
        }
    
        // Executar a query de pesquisa apenas se algum filtro foi aplicado
        if ($numContrato || $empresa || $diretoriaId || $statusId) {
            $resultados = $query->get();
        } else {
            // Se nenhum filtro foi aplicado, retornar uma coleção vazia
            $resultados = collect();
        }
    
        // Retornar os resultados para a visão
        return view('resultpesquisa', ['resultados' => $resultados]);
    }
    

    public function totalcadastros() 
    {
        $total = Cadastro::all();
        return view('totalcontratos', [ 'total' => $total ]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $diretoria = Auxdiretoria::all();
        $situacao = Auxsituacao::all();
        $status = Auxstatus::all();

        return view('welcome', ['diretoria' => $diretoria, 'situacao' => $situacao, 'status' => $status]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cadastro = new Cadastro();
        $cadastro->fill($request->all());
        $cadastro->save();

        return redirect()->route('welcome.store', ['cadastro' => $cadastro])->with('success', 'Guia de recolhimento cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cadastro = Cadastro::findOrFail($id);
        $cadastro->delete();
    
        return redirect()->route('welcome.totalcontratos')->with('danger', 'Excluído com sucesso. 🔥');
    }
}
