<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::query()
        ->select("doctor.id as id","doctor.name as name","doctor.surname as surname","doctor.profession as profession")->get();

        return view('admin.doctor.index',\compact("doctors"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.doctor.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->doc_surname);

        $doc = new Doctor();
        $doc->name = $request->doc_name;
        $doc->surname = $request->doc_surname;
        $doc->profession = $request->doc_profession;
        $doc->save();

       return \redirect()->to(route("admin.doctor.index"));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::query()
            ->select("doctor.id as id", "doctor.name as name","doctor.surname as surname","doctor.profession as profession")
            ->where("id","=",$id)->first();
        return \view("admin.doctor.profile",compact("doctor"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::query()
            ->select("doctor.id as id", "doctor.name as name","doctor.surname as surname","doctor.profession as profession")
            ->where("id","=",$id)->first();



        return view("admin.doctor.edit",compact("doctor"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::query()->where("id","=",$id)->first();

        $doctor->name = $request->doc_name;
        $doctor->surname = $request->doc_surname;
        $doctor->profession = $request->doc_profession;
        $doctor->update();

        return \redirect()->to(route("admin.doctor.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::query()->where("id","=",$id)->first();
        $doctor->delete();

        return \redirect()->to(route("admin.doctor.index"));
    }
}
