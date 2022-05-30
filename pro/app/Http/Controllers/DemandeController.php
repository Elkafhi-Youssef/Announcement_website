<?php

namespace App\Http\Controllers;

use App\Models\Demade;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $demades = demade::latest()->paginate(4);
        // return view('layouts.demades',  ['demades' => $demades]);
    //     $demandes = Demade::join('users', 'demades.user_id', '=', 'users.id')
    //     ->select('demades.*', 'users.name')
    //     ->latest()->paginate(4);

    // return view('layouts.demandes', ['demandes' => $demandes]);
    $demandes = Demade::with('user')->get();
        return view('layouts.demandes', ['demandes' => $demandes]);
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $demandes = Demade::query()
            ->where('OfferTitle', 'LIKE', "%{$search}%")
            // ->orWhere('body', 'LIKE', "%{$search}%")
            ->latest()->paginate(4);

        // Return the search view with the resluts compacted
        return view('dashboard', compact('demandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.addDemande');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        demade::create($request->all());
        return redirect()->route('demandes.index')
        ->with('success','demade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demade  $demade
     * @return \Illuminate\Http\Response
     */
    public function show(demade $demade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demade  $demade
     * @return \Illuminate\Http\Response
     */
    public function edit(demade $demade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demade  $demade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, demade $demade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demade  $demade
     * @return \Illuminate\Http\Response
     */
    public function destroy(demade $demade)
    {
        $demade->delete();
        return redirect()->route('demandes.index')
        ->with('status','Request deleted successfully');
    }
}
