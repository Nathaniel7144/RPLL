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
{    public function getPatient(Request $request){
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
        $guardian = $request->input('guardian');
        $guardianPhone = $request->input('guardianPhone');
        $rgister = $request->input('rgister');
        $patient = DB::table(patient)->select('*')->where(['guardian'=>$guardian,'guardianPhone'=>$guardianPhone,'rgister'=>$rgister])->toArray();

        return $patient;
    }

    public function patientRegistration(Request $request){ 
        $name = $request->input('name');
        $address = $request->input('address');
        $gender = $request->input('gender');
        $birthDay = $request->input('birthDay');
        $blodtype = $request->input('blodtype');
        $phone = $request->input('phone');
        $religion = $request->input('religion');
        $nik = $request->input('nik');
        
        $data = array('name' => $name,'address' => $address,'gender' => $gender,'birthDay' => $birthDay,
        'blodtype' => $blodtype,'phone' => $phone, 'religion' => $religion, 'nik' => $nik);

        DB::table('person') -> insert($data);
        $ckeckPerson = DB::table('person')->select('id')->where(['nik'=>$nik])->get();
        if(count($ckeckPerson) > 0)
        {
            //     echo "success";
            $person_id = $ckeckPerson;
            $guardian = $request->input('guardian');
            $guardianPhone = $request->input('guardianPone');
        
            $data2 = array('person_id' => $person_id,'guardian' => $guardian,'guardianPone' => $guardianPone);

            DB::table('patient') -> insert($data2);

            Log::debug("succeeded");
        }
        else
        {
            Log::debug("failed");
            $result = (object) ["error" => "can't insert"];
        }
    }
    public function updatePatientInfo(Request $request, $id){
        $person_id = $request->input('person_id');
        $guardian = $request->input('guardian');
        $guardianPhone = $request->input('guardianPone');

        $update = array('person_id' => $person_id,'guardian' => $guardian,'guardianPone' => $guardianPone);

        DB::table('patient') -> update($update) -> where(['id'=>$id]);
    }
}
?>