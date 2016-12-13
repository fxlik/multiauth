<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Survey;
use App\Response;
use DB;

class Admin2Controller extends Controller
{
    /**
     * Admin index
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $surveys = Survey::all();
        $tanggapan = DB::table('responses')->count();
        return view('admin.index', compact('surveys', 'tanggapan'));
    }

}
