<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposalController extends Controller
{
   
    	public function index()
    {
    	$proposals= \App\proposal::orderBy('created_at','desc')->get();

    	return view('proposal',compact('proposals'));
    }

    public function show($id){
    	$proposal=\App\proposal::find($id);
    	return view('fullproposal',compact('proposal'));
    }

     public function create(){
	    	return view('uploadproposals');
	    }

	    public function store(Request $request){
	    	$proposal= new \App\proposal;
	    	$proposal->user_id=auth()->id();
	    	$proposal->title=$request->subject;
	    	$proposal->content=$request->message;
	    	$proposal->save();
	    	return redirect('/admin/uploadproposals')->with('message','Uploaded');
	    }

	     public function comment(Request $request,$id){
	    	$comment= new \App\commentproposal;
	    	$comment->user_id=auth()->id();
	    	$comment->comment=$request->comment;
	    	$comment->proposal_id=$id;
	    	$comment->save();
	    	return redirect("/fullproposal/$id/#comment");
	    }

	    public function like($id){
	    	$like= new \App\likeproposal;
	    	$old=\App\likeproposal::all()->where('proposal_id',$id)->where('user_id',auth()->id());

	    	
	    		if(!count($old)){
	    			$like->user_id=auth()->id();
	    			$like->proposal_id=$id;
	    			$like->save();
	    		}
	    		

	    	return redirect("/fullproposal/$id/#like");

	    }
    
}
