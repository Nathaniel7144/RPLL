<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Person;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = Patient::all();
        return view('testpat.Patient',compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('testpat.createPatient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('patient')->insert([
            ['person_id'=>$request->input('person_id'),
            'register'=>$request->input('register'),
            'guardian'=>$request->input('guardian'),
            'guardianphone'=>$request->input('guardianphone')]
        ]);

        return view('testpat.createPatient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //menampilkan by id
         $patient = DB::table('patient')->where(['id'=>$id])->get();

         return $patient;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient =  Patient::find($id);
        return view('testpat.editPatient', compact('patient','id'));
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
        DB::table('patient')
              ->where(['id'=>$id])
              ->update([
                'person_id'=>$request->person_id,
                'register'=>$request->register,
                'guardian'=>$request->guardian,
                'guardianphone'=>$request->guardianphone
            ]);
        return redirect('testpat/Patient');
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
        return view('testpat.createPatient');
    }

    /**
     * Show the form for view details the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        $patient =  Person::find($id);
        return $patient;
    }

    /**
     * Show the form for view details the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('testpat.searchid');
    }

    public function searchperson(Request $request)
    {
        $name = $request->name;
        $gender = $request->gender;
        $address = $request->address;
        $id = DB::table('person')->select('id')->where(['name'=>$name, 'gender'=>$gender, 'address'=>$address])->get();
        $patient =  Person::find($id);
        return $patient;
    }
}
?>