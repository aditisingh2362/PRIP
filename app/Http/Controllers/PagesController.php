<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }

    public function mail(Request $request){

    	\Mail::to('adusingh2362@gmail.com')->send(new \App\Mail\contact($request)
    );

    	return redirect('/contact');
    }

     public function myform()
    {
        $states = DB::table("states")->pluck("name","id");
        return view('myform',compact('states'));
    }


    /**
     * Get Ajax Request and restun Data
     *
     * @return \Illuminate\Http\Response
     */
    public function myformAjax($id)
    {
        $cities = DB::table("cities")
                    ->where("state_id",$id)
                    ->pluck("name","id");
        return json_encode($cities);
    }

    public function show(Request $request){
	    	$city= \App\cities::where('id',$request->city)->get();
	    	$city=$city[0];
    	return view('mp',compact('city'));
    }
}
