<?php

namespace App\Http\Controllers;

use App\Models\Time;
use App\Http\Requests\TimeRequest;

class TimesController extends Controller
{
    //
    public function index()
    {
        $times = Time::all()->sortBy("nome");
        return view('index', compact('times'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(TimeRequest $request)
    {
        // $request->validate([
        //     'nome' => 'bail|required|unique:times',
        //     'arquirrival' => 'bail|required',
        //     'data_de_fundacao' => 'bail|date'
        // ]);
        Time::create($request->all());
        $request->session()->flash('success', 'Time Cadastrado com Sucesso!');
        return redirect()->route('views.times.index');
    }
}
