<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = Person::all();
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
        //
        DB::table('person')->insert([
            ['name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'gender'=>$request->input('gender'),
            'birthday'=>$request->input('birthday'),
            'bloodtype'=>$request->input('bloodtype'),
            'phone'=>$request->input('phone'),
            'religion'=>$request->input('religion'),
            'nik'=>$request->input('nik')]
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
        //
        $person = DB::table('person')->where(['id'=>$id])->get();

        return $person;
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

        $person =  Person::find($id);
        return view('testper.editPerson', compact('person','id'));
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
        DB::table('person')
              ->where(['id'=>$id])
              ->update([
                'name'=>$request->name,
                'address'=>$request->address,
                'gender'=>$request->gender,
                'birthday'=>$request->birthday,
                'bloodtype'=>$request->bloodtype,
                'phone'=>$request->phone,
                'religion'=>$request->religion,
                'nik'=>$request->nik
            ]);
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
