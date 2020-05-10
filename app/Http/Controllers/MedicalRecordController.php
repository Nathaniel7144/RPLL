<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicalrecord;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class MedicalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data

        $medicalrecord = Medicalrecord::all();
        return view('testmed.MedicalRecord',compact('medicalrecord'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('testmed.createmedrec');
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
        DB::table('medicalrecord')->insert([
            ['problem'=>$request->input('problem'),
            'diagnosis'=>$request->input('diagnosis'),
            'treatment'=>$request->input('treatment'),
            'patient_id'=>$request->input('patient_id'),
            'physician_id'=>$request->input('physician_id'),
            'patvist_id'=>$request->input('patvist_id')]
        ]);

        // Medicalrecord::create($request->all());

        return redirect('/testmed/MedicalRecord');
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
        $medrec = DB::table('medicalrecord')->where(['id'=>$id])->get();

        return $medrec;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicalrecord $med)
    {
        //
        return view('testmed.edit',compact('med'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicalrecord $med)
    {
        //update data
        DB::table('medicalrecord')
              ->where('id', $med->id)
              ->update([
                  'problem' => $request->problem, 
                  'diagnosis' => $request->diagnosis, 
                  'treatment' => $request->treatment, 
                  'patient_id' => $request->patient_id, 
                  'physician_id' => $request->physician_id, 
                  'patvist_id' => $request->patvist_id 
              ]);
        return redirect('/testmed/MedicalRecord');      
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
    }
}
