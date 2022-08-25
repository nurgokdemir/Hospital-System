<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\UserAppointment;
use Illuminate\Http\Request;

class UserAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('welcome');
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
        $appointment = new Appointment();
        $appointment->customer_full_name = $request->customer_name;
        $appointment->customer_mail = $request->mail;
        $appointment->appointment_date = $request->date;
        $appointment->customer_message = $request->message;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAppointment  $userAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(UserAppointment $userAppointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAppointment  $userAppointment
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAppointment $userAppointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserAppointment  $userAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserAppointment $userAppointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAppointment  $userAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAppointment $userAppointment)
    {
        //
    }
}
