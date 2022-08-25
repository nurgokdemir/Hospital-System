<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $doctors = Doctor::query()
//            ->select("doctor.id as id","doctor.name as name ","doctor.surname as surname","doctor.profession as profession")
//             ->get();
//        return \view("doctors",compact("doctors"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = new Appointment();
        $appointment->customer_full_name = $request->customer_name ;
        $appointment->customer_mail = $request->mail ;


        $appointment->save();

        return \redirect()->to(route("todo.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $doctors = Doctor::query()
//            ->select("doctor.id as id ","doctor.name as name ","doctor.surname as surname","doctor.profession as profession")
//            ->where("id","=",$id)->first();
//            return \view("profile",compact("doctors"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeController $homeController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeController $homeController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeController $homeController)
    {
        //
    }
}
