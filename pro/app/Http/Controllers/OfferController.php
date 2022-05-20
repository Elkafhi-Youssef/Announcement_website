<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $offers = Offer::where('OfferTitle','like','%'.$request->search.'%')->latest()->paginate(4);
        $offers = Offer::join('users', 'offers.user_id', '=', 'users.id')
            ->select('offers.*', 'users.name')
            ->latest()->paginate(4);

        return view('dashboard', ['offers' => $offers]);

    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $offers = Offer::query()
            ->where('OfferTitle', 'LIKE', "%{$search}%")
            // ->orWhere('body', 'LIKE', "%{$search}%")
            ->latest()->paginate(4);

        // Return the search view with the resluts compacted
        return view('dashboard', compact('offers'));
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
        $offer->WhoWeAre = $request->input('WhoWeAre');
        $offer->County = $request->input('County');
        $offer->City = $request->input('City');
        $offer->Experience = $request->input('Experience');
        $offer->user_id = auth()->user()->id;
        if($request->file('Image'))
        {

            $file = $request->file('Image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/companyImage/', $filename);
            $offer->Image = $filename;
        }


        $offer->save();
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
            'Experience' => 'required',
            'Image' => 'required'
        ]);
            $offer = Offer::find($offer->id);
            $offer->OfferTitle = $request->input('OfferTitle');
            $offer->CompanyName = $request->input('CompanyName');
            $offer->Remote = $request->input('Remote');
            $offer->OfferDescription = $request->input('OfferDescription');
            $offer->TimeWork = $request->input('TimeWork');
            $offer->SalaryRange = $request->input('SalaryRange');
            $offer->Requirement = $request->input('Requirement');
            $offer->WhoWeAre = $request->input('WhoWeAre');
            $offer->County = $request->input('County');
            $offer->City = $request->input('City');
            $offer->Experience = $request->input('Experience');
        if($request->file('Image')->isValid()){
            $file = $request->file('Image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/companyImage/', $filename);
            $offer->Image = $filename;
        }
            $offer->update();

            return redirect()->route('dashboard')
            ->with('status','Offer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('dashboard')
        ->with('status','User deleted successfully');
    }
}
