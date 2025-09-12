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
}