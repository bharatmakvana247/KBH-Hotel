<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback=feedback::all();
        return view('feedback.index',compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $feedback=new feedback();
        $feedback->feedback_name=$request->get('feedback_name');
        $feedback->feedback_email=$request->get('feedback_email');
        $feedback->feedback_phone=$request->get('feedback_phone');
        $feedback->feedback_message=$request->get('feedback_message');
        $feedback->save();
       
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(feedback $feedback)
    {
        return view('feedback.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(feedback $feedback)
    {
        //
    }
}
