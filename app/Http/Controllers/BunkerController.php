<?php

namespace App\Http\Controllers;

use App\Bunker;
use Illuminate\Http\Request;

class BunkerController extends Controller
{

    public function index()
    {
        $bunkers = Bunker::all();
        return view('bunker.index', ['bunker'=> $bunkers]);
    }


    public function create()
    {
        return view('bunker.create');
    }


    public function store(Request $request)
    {
        Bunker::create($request->all());
        return view('bunker.index');
    }


    public function show(Bunker $bunker)
    {
        //
    }


    public function edit(Bunker $bunker)
    {
        return view('bunker.edit', ['bunker'=>$bunker]);
    }


    public function update(Request $request, Bunker $bunker)
    {
        $bunker->update($request->all());
        return redirect(route('bunker.index'));
    }


    public function destroy(Bunker $bunker)
    {
        $bunker->delete();
        return redirect(route('bunker.index'));
    }
}
