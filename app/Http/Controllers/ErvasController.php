<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ervas;

class ErvasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function planta_artigo()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ervas = Ervas::all();

        //return view('planta_artigo', compact('ervas'));
        return view('index', compact('ervas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
             'nome_erva' => 'required|max:50',
             'descricao' => 'required|max:255',
             'foto' => 'required|image|max:2048'
         ]);

        $foto = $request->file('foto');
        $foto_nome = $foto->getClientOriginalName(). '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('../../../public/images/fotos_ervas'), $foto_nome);
            
        $erva = Ervas::create([
             'nome' => $validatedData['nome_erva'],
             'descricao' => $validatedData['descricao'],
             'foto' => $foto_nome
         ]);
         

         return redirect('/Ervas')->with('success', 'Erva cadastrada com sucesso! '.$foto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $erva = Ervas::findOrFail($id);

        return view('planta_artigo', compact('erva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $erva = Ervas::findOrFail($id);

        return view('edit', compact('erva'));
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
         $validatedData = $request->validate([
             'nome_erva' => 'required|max:50',
             'descricao' => 'required|max:255',
         ]);
            
        $erva = Ervas::create([
             'nome' => $validatedData['nome_erva'],
             'descricao' => $validatedData['descricao'],
             'foto' => 0,
         ]);
        Ervas::whereId($id)->update($validatedData);

        return redirect('/Ervas')->with('success', 'Erva atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $erva = Ervas::findOrFail($id);
        $erva->delete();

        return redirect('/Ervas')->with('success', 'Erva deletada com sucesso');
    }
}
