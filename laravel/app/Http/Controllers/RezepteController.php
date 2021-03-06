<?php

namespace App\Http\Controllers;

use App\Rezepte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RezepteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Rezepte $rezeptes)
    {
        return view('Rezepte.index', compact('rezeptes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Rezepte.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'gericht'=>'required',
            'zutaten'=>'required',
            'zubereitung'=>'required',
            'user_id'=>'required|exists:users,id'

        ]);
        $data['user_id']= Auth::user()->id;
        Rezepte::create($data);
        $request->session()->flash('message','Rezept hinzugefügt.');
        return redirect(route('rezepte.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rezepte  $rezepte
     * @return \Illuminate\Http\Response
     */
    public function show(Rezepte $rezepte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rezepte  $rezepte
     * @return \Illuminate\Http\Response
     */
    public function edit(Rezepte $rezepte)
    {
        return view('Rezepte.edit', compact('rezepte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rezepte  $rezepte
     * @return \Illuminate\Http\Response
     */
    public function update(Rezepte $rezepte)
    {
        $data = $this->validate(request(),[
            'gericht'=>'required',
            'zutaten'=>'required',
            'zubereitung'=>'required',
        ]);

        $rezepte->update(request()->except('_token'));
        Session()->flash('message', 'Rezept erfolgreich bearbeitet.');
        return redirect(route('rezepte.index'));
    }

    public function delete(Rezepte $rezepte)
    {
        return view('rezepte.delete', compact('rezepte'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rezepte  $rezepte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rezepte $rezepte)
    {
        $rezepte->delete();
        Session()->flash('message', 'Rezept wurde gelöscht.');
        return redirect(route('rezepte.index'));
    }
}
