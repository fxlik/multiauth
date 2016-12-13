<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Response;
use App\Answer;
use App\Question;
use DB;


class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $responses = Response::orderBy('id', 'DESC')->paginate(7);
        return view('admin.response', compact('responses'))->with('i', ($request->input('page', 1) - 1) * 7);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $jawabans = DB::table('answers')
        ->join('responses', 'answers.response_id','=','responses.id')
        ->join('questions', 'answers.question_id','=','questions.id')
        ->where('response_id','=',$id)
        ->get();
        //hitung jawaban sudah
        $hitungs = DB::table('answers')
        ->join('responses', 'answers.response_id','=','responses.id')
        ->join('questions', 'answers.question_id','=','questions.id')
        ->where('response_id','=',$id)
        ->Where('value','=','sudah') 
        ->count();
        //hitung jawaban belum
        $hitungb = DB::table('answers')
        ->join('responses', 'answers.response_id','=','responses.id')
        ->join('questions', 'answers.question_id','=','questions.id')
        ->where('response_id','=',$id)
        ->Where('value','=','belum') 
        ->count();
        
        $respon = Response::find($id);

        return view('admin.responseView', compact('respon', 'jawabans', 'hitungs', 'hitungb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
