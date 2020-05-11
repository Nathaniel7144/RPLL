<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    private function decodeResult($result)
    {
        return (array) json_decode($result);
    }

    public function resultsToArray($result)
    {
        $arrResult = array();
        foreach (self::decodeResult($result) as $singleResult) {
            array_push($arrResult, (array)$singleResult);
        }
        return $arrResult;
    }

    public function formatDate($date)
    {
        $date = new \DateTime($date);
        return $date->format('Y-m-d');
    }
}
