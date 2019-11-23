<?php

namespace App\Http\Controllers;

use App\RezeptComment AS Comment;
use Illuminate\Http\Request;

class RezeptCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'comment'=>'required',
            'rezept_id'=>'required |exists:rezeptes,id',
            'user_id'=>'required|exists:users,id'
            
        ]);
        
        Comment::create($data);
        $request->session()->flash('message','Kommentar hinzugefügt.');
        return redirect(route('frontend.show', $data['rezept_id']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RezeptComment  $rezeptComment
     * @return \Illuminate\Http\Response
     */
    public function show(RezeptComment $rezeptComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RezeptComment  $rezeptComment
     * @return \Illuminate\Http\Response
     */
    public function edit(RezeptComment $rezeptComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RezeptComment  $rezeptComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RezeptComment $rezeptComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RezeptComment  $rezeptComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(RezeptComment $rezeptComment)
    {
        //
    }
}
