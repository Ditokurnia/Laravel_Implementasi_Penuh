<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Tube extends Model
{
    const PHI = 3.14;
    public $radius = 7;

    //BAD
    public function getWideArea($radius, $high)
    {
        try{
            //menjalankan kalkulasi
            return $this->PHI * pow($radius, 2) * $high;
        }catch(\Exception $e){
            //error
            Log::error($e);
        }
    }

    //GOOD
    public function getWideAreaObject($radius, $high)
    {
        try{
            //menjalankan kalkulasi perhitungan luas permukaan
            return $this->PHI * pow($radius, 2) * $high;
        }catch(\Exception $e){
            //mencatat error apabila terdapat kesalahan perhitungan
            Log::error($e);
        }
    }
}
