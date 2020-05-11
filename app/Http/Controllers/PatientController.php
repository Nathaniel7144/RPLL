<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Person;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
    public function store(Request $request)
    {
        DB::table('patient')->insert([
            ['person_id'=>$request->input('person_id'),
            'register'=>$request->input('register'),
            'guardian'=>$request->input('guardian'),
            'guardianphone'=>$request->input('guardianphone')]
        ]);

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
    }

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

    public function destroy($id)
    {
        //

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
        
    }

    public function searchPatient(Request $request)
    {
        return DB::table('person')
        ->select(
            'patient.id as id',
            'name',
            'gender',
            'birthday'
        )
        ->join(
            'patient', 'person.id', '=', 'patient.person_id'
        )
        ->where(
            [
                'name'=>$request->input('name'),
                'gender'=> (int) $request->input('gender'),
                'birthday'=>parent::formatDate($request->input('birthday'))
            ]
        )->get()->toArray();
    }
}
?>