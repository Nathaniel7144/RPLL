<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
// // use Illuminate\Foundation\Bus\DispatchesJobs;
// // use Illuminate\Routing\Controller as BaseController;
// // use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function create(){
        return view('patient.create');
    }

    public function edit($id){
        $patient =  Patient::find($id)
        return view('patient.edit', compact('name', 'id'));
    }

    public function getPatient(Request $request){
        $idPatient = $request->input('idpatient');
        $ckeckPatient = DB::table('patient')->where(['id'=>$idPatient])->get();
        
        if(count($ckeckPatient) > 0)
        {
            //     echo "success";
            $idPerson = DB::table('patient')->select('person_id')->where(['id'=>$idPatient])->get();
            $person = DB::table('person')->select(
                "name", "gender", "blodType", "address", "phone"
            )->where(['id'=>$idPerson])->get();
            $person = (array) $person[0];

            $result = [
                "name"=>$person["name"],
                "gender"=>$person["gender"],
                "blodType"=>$person["blodType"],
                "address"=>$person["address"],
                "phone"=>$person["phone"]
            ];
            Log::debug("succeeded");
        }
        else
        {
            Log::debug("failed");
            $result = (object) ["error" => "No Patient"];
        }
    }

    public function getPatientsPer(Request $request){
        $idPatient = $request->input('line');
        $ckeckPatient = DB::table('patient')->where(['id'=>$idPatient])->get();
        for ($i = 0;$i < $idPatient;$i++){
            if(count($ckeckPatient) > 0)
            {
                //     echo "success";
                $idPerson = DB::table('patient')->select('person_id')->where(['id'=>$idPatient])->get();
                $person = DB::table('person')->select(
                    "name", "gender", "blodType", "address", "phone"
                )->where(['id'=>$idPerson])->get();
                $person = (array) $person[0];

                $result = [
                    "name"=>$person["name"],
                    "gender"=>$person["gender"],
                    "blodType"=>$person["blodType"],
                    "address"=>$person["address"],
                    "phone"=>$person["phone"]
                ];
                Log::debug("succeeded");
            }
            else
            {
                Log::debug("failed");
                $result = (object) ["error" => "No Patient"];
            }
        }
    }

    public function patientRegistration(Request $request){
        $this->validate($request, [
            'name' => 'reqired',
            'address' => 'reqired',
            'gender' => 'reqired',
            'birthDay' => 'reqired',
            'blodtype' => 'reqired',
            'phone' => 'reqired',
            'religion' => 'reqired',
            'nik' => 'reqired'
        ]);
        
        $person = new person([
            'name' = $request->get('name');
            'address' = $request->get('address');
            'gender' = $request->get('gender');
            'birthDay' = $request->get('birthhDay');
            'blodtype' = $request->get('blodtype');
            'phone' = $request->get('phone');
            'religion' = $request->get('religion');
            'nik' = $request->get('nik');

        ]);
        $person->save();

        $ckeckPerson = DB::table('person')->where(['nik'=>$person["nik"]])->get();
        if(count($ckeckPerson) > 0)
        {
            //     echo "success";
            $idPerson = DB::table('person')->select('id')->where(['nik'=>$ckeckPerson])->get();
            $this->validate($request, [
                'person_id' => 'reqired',
                'guardian' => 'reqired',
                'guardianPhone' => 'reqired'
            ]);
            
            $patient = new person([
                'person_id' = $request->get($idPerson);
                'guardian' = $request->get('guardian');
                'guardianPhone' = $request->get('guardianPone');    
            ]);
            $patient->save();
            Log::debug("succeeded");
        }
        else
        {
            Log::debug("failed");
            $result = (object) ["error" => "can't insert"];
        }
    }
    public function updatePatientInfo(Request $request, $id){
        $this->validate($request, [
            'guardian' => 'reqired',
            'guardianPhone' => 'reqired'
        ]);

        $patient = Patient::find($id);
        $patient -> guardian = $request->get(guardian);
        $patient -> guardianPhone = $request->get(guardianPhone);
        $patieent->save();
    }
}
?>