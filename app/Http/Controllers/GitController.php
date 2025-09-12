<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Git;

class GitController extends Controller
{
    public function index()
    {
        $conts= Git::all();
        return view("index", compact("conts"));
    }

    public function create()
    {
        return view("create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "email" => "required|email"
        ]);
       $conts = Git::create([
            "email" => $request->input("email"),
        ]);

        return redirect()->route("index",["conts"=>$conts]);
    }

    public function edit($id)
    {
        $cont= Git::find($id);
        return view("edit",["cont"=>$cont]);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            "email"=>"required|email"
        ]);
        $cont= Git::findOrFail($id);
        $cont->update([
            "email"=>$request->input("email")
        ]);
        
        return view('show', ["cont"=>$cont]);
    }

    public function show()
    {
        
        return view('show');
    }
}