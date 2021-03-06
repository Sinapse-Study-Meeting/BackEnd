<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Interesse;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use function GuzzleHttp\describe_type;

class InteresseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create (Request $request)
    {
        $request->validate([
            'interesse' => ['required'],
            'categoria' => ['required', 'exists:categorias,nome'],
            'nivel' => ['required', Rule::in(['basico', 'intermediario', 'avancado'])],
        ]);

        $interessecriado = Auth::user()->interesses()->create([
           'assunto'=>$request->interesse,
           'nivel_conhecimento'=>$request->nivel,
        ]);

       $criacaocategoria = Categoria::where('nome', $request->categoria)->first();

       $interessecriado->categorias()->attach($criacaocategoria);

        return redirect()->back()->with('status', 'Interesse atualizado com sucesso');
    }

    public function interesses(){

        $ListarInteresses = Auth::user()->interesses;
        $categorias = Categoria::all();
        return view('perfilinteresses', ['ListarInteresses' => $ListarInteresses, 'categorias' => $categorias]);
    }

    public function  editar(Request $request, Interesse $interesse){

        $request->validate([
            'interesse' => ['required'],
            'categoria' => ['required', 'exists:categorias,nome'],
            'nivel' => ['required', Rule::in(['basico', 'intermediario', 'avancado'])],
        ]);

        $interesse->update(['assunto'=>$request->interesse, 'nivel_conhecimento' => $request->nivel]);
        //novo interesse desejado atualização

        $novacategoria = Categoria::where('nome', $request->categoria)->first();
        //obtendo a primeira condigitção que bate com o que o usuário escolheu
        $interesse->categorias()->detach();

        $interesse->categorias()->attach($novacategoria);
        //relacionando novo interesse com nova categoria

        return redirect()->back()->with('status', 'Interesse atualizado com sucesso');

    }
    public function apagar(Interesse $interesse) {
        $mensagem = 'Interesse apagado com sucesso';
        DB::beginTransaction();
        try {
            $interesse->categorias()->detach();
            $interesse->delete();
            DB::commit();
        }
        catch(Exception $ex)
        {
            DB::rollback();
            $mensagem = 'Não foi possível apagar seu interesse, tente novamente mais tarde.';
        }
        return redirect()->back()->with('status', $mensagem);
    }
}
