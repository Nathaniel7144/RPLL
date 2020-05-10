<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class PatientVisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visit = Visit::all();
        return view('testvis.Visit',compact('visit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testvis.Visit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('patientvisit')->insert([
            ['starttime'=>$request->input('starttime'),
            'endtime'=>$request->input('endtime'),
            'patient_id'=>$request->input('patient_id'),
            'istreated'=>$request->input('istreated')]
        ]);

        return view('testvis.createVisit');
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
        $visit = DB::table('patientvisit')->where(['id'=>$id])->get();

         return $visit;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visit =  Visit::find($id);
        return view('testvis.editVisit', compact('visit','id'));
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
        DB::table('patientvisit')
              ->where(['id'=>$id])
              ->update([
                'istreated'=>$request->istreated
            ]);
        return redirect('testvis/Visit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('testvis.Visit');
    }
}
