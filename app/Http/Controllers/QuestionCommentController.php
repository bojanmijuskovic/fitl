<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionCommentController extends Controller
{
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $questionId
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $questionId)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $questionId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    
    public function update(Request $request, $questionId, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $questionId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($questionId, $id)
    {
        //
    }
}
