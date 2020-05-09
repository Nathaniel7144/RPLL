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
    public function createQueue(Request $request){
        $line = $request->input('line');
        $starttime = $request->input('starttime');
        $patientvis = DB::table(patientvisit)->select('*')->where(['starttime'=>$starttime, 'istrated' => '0'])->toArray();
        for ($i = 0;$i < $line;$i++){
            $result = [
                "patient_id"=>$patientvis["patient_id"]
            ];
        }
    }

    public function getPatientsPer(Request $request){
        $date = $request->input('date');
        $ckeckPatient = DB::table('patientvisit')->where(['starttime'=>$date])->get();

        for ($i = 0;$i < count($ckeckPatient);$i++){
            //     echo "success";
            $patient = DB::table('patientvisit')->select(
                "patient_id", "istrated"
            )->where(['starttime'=>$date])->get();
            $patient = (array) $patient[0];

            $result = [
                "patient_id"=>$patient["patient_id"],
                "istrated"=>$patient["istrated"]
            ];
            Log::debug("succeeded");
        }
    }

    public function markTreated(Request $request, $id){
        $inserted = $request->input('inserted');

        $update = array('inserted' => $inserted);

        DB::table('patientvisit') -> update($update) -> where(['id'=>$id]);
    }
}