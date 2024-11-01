<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Livrocontroller extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));

    }

    public function create()

    {
        return view('livros.create');
    }

    public function store(Request $request)

    {
        $request->validate([
            'titulo' => 'required|max:100',
            'titulo' => 'required|max:50',
            'ano_publicacao' => 'required|integer',
            'resumo'=>'nullable|string',


        ]);

        Livro::create($request->all());

        return redirect()->route('livros.index')->with('sucess', 'Livro adicionado com sucesso');
    }
}
