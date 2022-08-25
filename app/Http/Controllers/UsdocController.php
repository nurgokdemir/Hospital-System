<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Usdoc;
use Illuminate\Http\Request;

class UsdocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::query()
            ->select("doctor.id as id","doctor.name as name ","doctor.surname as surname","doctor.profession as profession")
            ->get();
        return \view("doctors",compact("doctors"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
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
     * @param  \App\Models\Usdoc  $usdoc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::query()
            ->select("doctor.id as id ","doctor.name as name ","doctor.surname as surname","doctor.profession as profession")
            ->where("id","=",$id)->first();
        return \view("profile",compact("doctor"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usdoc  $usdoc
     * @return \Illuminate\Http\Response
     */
    public function edit(Usdoc $usdoc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usdoc  $usdoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usdoc $usdoc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usdoc  $usdoc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usdoc $usdoc)
    {
        //
    }
}
