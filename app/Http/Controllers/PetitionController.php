<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetitionController extends Controller
{
  
    	public function index()
	    {
	    	$petitions= \App\petition::orderBy('created_at','desc')->get();

	    	return view('petition',compact('petitions'));
	    }

	    public function show($id){
    	$petition=\App\petition::find($id);
    	return view('fullpetition',compact('petition'));
    }

	    public function create(){
	    	return view('writepetition');
	    }

	    public function store(Request $request){
	    	$petition= new \App\petition;
	    	$petition->user_id=auth()->id();
	    	$petition->title=$request->subject;
	    	$petition->content=$request->message;
	    	$petition->save();
	    	return redirect('/writepetition');
	    }

	    public function comment(Request $request,$id){
	    	$comment= new \App\commentpetition;
	    	$comment->user_id=auth()->id();
	    	$comment->comment=$request->comment;
	    	$comment->petition_id=$id;
	    	$comment->save();
	    	return redirect("/fullpetition/$id/#comment");
	    }

	    public function like($id){
	    	$like= new \App\likepetition;
	    	$old=\App\likepetition::all()->where('petition_id',$id)->where('user_id',auth()->id());

	    	
	    		if(!count($old)){
	    			$like->user_id=auth()->id();
	    			$like->petition_id=$id;
	    			$like->save();
	    		}
	    		

	    	return redirect("/fullpetition/$id/#like");

	    }
}
