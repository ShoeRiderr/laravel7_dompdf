<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use DB;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view('pages.index')->with('patients', $patients);
        return Patient::find($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->get('buildNumCor'));
        $request->validate([
        'forname'     => 'required',
        'surname'     => 'required',
        'pesel'       => 'required',
        'streetRes'   => 'required',
        'buildNumRes' => 'required',
        'apartNumRes' => 'required',
        'cityRes'     => 'required',
        'provinceRes' => 'required',
        'postCodeRes' => 'required',
        'streetCor'   => 'required',
        'buildNumCor' => 'required',
        'apartNumCor' => 'required',
        'cityCor'     => 'required',
        'provinceCor' => 'required',
        'postCodeCor' => 'required',
        'phone'       => 'required',
        'email'       => 'required',

        ]);
         
        $patient = new Patient([
            'forname'     => $request->get('forname'),
            'surname'     => $request->get('surname'),
            'pesel'       => $request->get('pesel'),
            'streetRes'   => $request->get('streetRes'),
            'buildNumRes' => $request->get('buildNumRes'),
            'apartNumRes' => $request->get('apartNumRes'),
            'cityRes'     => $request->get('cityRes'),
            'provinceRes' => $request->get('provinceRes'),
            'postCodeRes' => $request->get('postCodeRes'),
            'streetCor'   => $request->get('streetCor'),
            'buildNumCor' => $request->get('buildNumCor'),
            'apartNumCor' => $request->get('apartNumCor'),
            'cityCor'     => $request->get('cityCor'),
            'provinceCor' => $request->get('provinceCor'),
            'postCodeCor' => $request->get('postCodeCor'),
            'phone'       => $request->get('phone'),
            'email'       => $request->get('email'),
        ]);
        $patient->save();
        //dd('dupa');
        //dd($patient->save());
        return redirect('registration/create')->withInput(); //->with('succes', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $patients = Patient::find($id);
        return view('pages.patientData')->with('patient', $patients);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->validate([
            'forname'     => 'required',
            'surname'     => 'required',
            'pesel'       => 'required',
            'streetRes'   => 'required',
            'buildNumRes' => 'required',
            'apartNumRes' => 'required',
            'cityRes'     => 'required',
            'provinceRes' => 'required',
            'postCodeRes' => 'required',
            'streetCor'   => 'required',
            'buildNumCor' => 'required',
            'apartNumCor' => 'required',
            'cityCor'     => 'required',
            'provinceCor' => 'required',
            'postCodeCor' => 'required',
            'phone'       => 'required',
            'email'       => 'required',
        ]);

        Patient::find($id)->update($data);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Patient::find($id)->delete();
        return redirect('/');
    }
}
