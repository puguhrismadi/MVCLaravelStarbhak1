<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calonsiswa;
class SiswabaruController extends Controller
{
    public function index(){
        $csb = Calonsiswa::all();
        return view('indexcalonsiswa',['calonsiswa'=>$csb]);
    }
}
