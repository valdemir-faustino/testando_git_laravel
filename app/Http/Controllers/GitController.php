<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Git;

class GitController extends Controller
{
    public function index()
    {
        $conts = Git::all();
        return view("index", compact("conts"));
    }

    public function create()
    {
        return view("create");
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                "email" => "required|email|unique:contatos,email"
            ],

            [
                "email.unique" => "Email já cadastrado no banco de dados!",
                "email.required" => "O campo e-mail é obrigatório.",
                "email.email" => "O campo deve conter um e-mail válido.",
            ]
        );
        $conts = Git::create([
            "email" => $request->input("email"),
        ]);

        return redirect()->route("index", ["conts" => $conts])->with("success", "Email criado com sucesso!!");
    }

    public function edit($id)
    {
        $cont = Git::find($id);
        return view("edit", ["cont" => $cont]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "email" => "required|email"
        ]);
        $cont = Git::findOrFail($id);
        $cont->update([
            "email" => $request->input("email")
        ]);

        return view('show', ["cont" => $cont])->with("success", "Cadastro atualizado com sucesso!");
    }

    public function show($id)
    {
        $cont = Git::findOrFail($id);
        return view('show', ['cont' => $cont]);
    }

    public function destroy($id)
    {
        $cont = Git::findOrFail($id);
        $cont->delete();

        return redirect()->route("index", ["cont" => $cont])->with("success", "Email apagado com sucesso!!");
    }
}