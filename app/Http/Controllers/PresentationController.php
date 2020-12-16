<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentations = Presentation::all();
        return view('backoffice.presentation',compact('presentations'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function show(Presentation $presentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presentations = Presentation::find($id);
        return view('backoffice.presentationEdit',compact('presentations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $validatedData = $request->validate([
            'src' => 'required',
            'nom_complet' => 'required',
            'catch_phrase' => 'required',
        ]);

        $update = Presentation::find($id);
        // Storage::disk('public')->delete('img/'.$update->src);
        $update->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('img','public');
        $update->nom_complet = $request->nom_complet;
        $update->catch_phrase = $request->catch_phrase;
        $update->save();
        return redirect('/presentation')->with('statuspres', 'presentation updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presentation $presentation)
    {
        //
    }
}
