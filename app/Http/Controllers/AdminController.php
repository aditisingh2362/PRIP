<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	return view('admin');
    }

    public function show(){
    	$petitions= \App\petition::all();
    	return view('seepetition',compact('petitions'));
    }

    public function approve($id){

    	
    		$petition=\App\petition::find($id);
    		$petition->approved_at=now();
    		$petition->save();
    	
    	

    	return redirect('/admin/seepetitions');
    }

    public function destroy($id){

    		$petition=\App\petition::find($id);
    		$petition->delete();
    		return redirect('/admin/seepetitions');
	
    }

    

}   
