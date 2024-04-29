<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Conatct;
use Illuminate\Http\Request;

class ConatctController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(request $request)
    {
        dd($request->all());
        Conatct::create($request->all());
        return view("portfolio.contact.contact")->with("message","votre demande été validée");
    }

    /**
     * Display the specified resource.
     */
    public function show(Conatct $conatct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conatct $conatct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Conatct $conatct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conatct $conatct)
    {
        //
    }
}
