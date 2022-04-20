<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // join with offers table and users table
        $offers = Offer::join('users', 'offers.user_id', '=', 'users.id')
            ->select('offers.*', 'users.name')
            ->latest()->get();
        return view('dashboard', ['offers' => $offers]);

        dd($offers);
    }
    public function home()
    {
        // join with offers table and users table
        $offers = Offer::join('users', 'offers.user_id', '=', 'users.id')
            ->select('offers.*', 'users.name')
            ->latest()->get();
        return view('welcome', ['offers' => $offers]);

        dd($offers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('layouts.addOffer');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offer = new Offer;
        $offer->OfferTitle = $request->input('OfferTitle');
        $offer->CompanyName = $request->input('CompanyName');
        $offer->Remote	 = $request->input('Remote');
        $offer->OfferDescription = $request->input('OfferDescription');
        $offer->TimeWork = $request->input('TimeWork');
        $offer->SalaryRange = $request->input('SalaryRange');
        $offer->Requirement = $request->input('Requirement');
        $offer->Image = $request->input('Image');
        $offer->WhoWeAre = $request->input('WhoWeAre');
        $offer->County = $request->input('County');
        $offer->City = $request->input('City');
        $offer->Experience = $request->input('Experience');
        $offer->user_id = auth()->user()->id;

        $offer->save();
        // return  redirect('/dashboard')->back()->with('status','Student Added Successfully');
        return redirect()->route('dashboard')->with('status','Offer Added Successfully');

    // dd($offer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        return view('layouts.detailOffer', [
            'offer' => $offer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
    return view('layouts.editOffer', ['offer' => $offer]);
    dd($offer);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        // $offer->update($request->all());

        // return redirect()->route('dashboard')->with('success','Post updated successfully');
        $request->validate([
            'OfferTitle' => 'required',
            'CompanyName' => 'required',
            'Remote' => 'required',
            'OfferDescription' => 'required',
            'TimeWork' => 'required',
            'SalaryRange' => 'required',
            'Requirement' => 'required',
            'WhoWeAre' => 'required',
            'County' => 'required',
            'City' => 'required',
            'Experience' => 'required'
        ]);

        $offer->update([
            'OfferTitle' => $request->OfferTitle,
            'CompanyName' => $request->CompanyName,
            'Remote' => $request->Remote,
            'OfferDescription' => $request->OfferDescription,
            'TimeWork' => $request->TimeWork,
            'SalaryRange' => $request->SalaryRange,
            'Requirement' => $request->Requirement,
            'Image' => $request->Image,
            'WhoWeAre' => $request->WhoWeAre,
            'County' => $request->County,
            'City' => $request->City,
            'Experience' => $request->Experience


        ]);
        // $offer = new Offer;
        // $offer->OfferTitle = $request->input('OfferTitle');
        // $offer->CompanyName = $request->input('CompanyName');
        // $offer->Remote	 = $request->input('Remote');
        // $offer->OfferDescription = $request->input('OfferDescription');
        // $offer->TimeWork = $request->input('TimeWork');
        // $offer->SalaryRange = $request->input('SalaryRange');
        // $offer->Requirement = $request->input('Requirement');
        // $offer->Image = $request->input('Image');
        // $offer->WhoWeAre = $request->input('WhoWeAre');
        // $offer->County = $request->input('County');
        // $offer->City = $request->input('City');
        // $offer->Experience = $request->input('Experience');
        // $offer->save();
        // dd($offer);

        return redirect()->route('dashboard')
                    ->with('success','User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
    }
}
