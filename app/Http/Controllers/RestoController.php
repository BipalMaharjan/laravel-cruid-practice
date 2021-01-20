<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restaurant;
use Session;

class RestoController extends Controller
{
    //
    function index()
    {
    	return view("home");
    }	
    function lists()
    {
    	$data= restaurant::all();
    	return view("list",["data"=>$data]);
    }
    function add(Request $req)
    {
    	//return $req->input();
    	$resto =new restaurant;
    	$resto->name=$req->input('name');
    	$resto->email=$req->input('email');
    	$resto->phone=$req->input('phone');
    	$resto->save();
    	$req->session()->flash('status','Restaurant entered successfullly');
    	return redirect("list");
    }
    function delete($id)
    {
    	restaurant::find($id)->delete();
    	session::flash('status','Restaurant has been deleted successfully');
    	return redirect("list");

    }

    function edit($id)
    {
    	$data= restaurant::find($id);
    	return view('edit',['data'=>$data]);
    	//return restaurant::find($id);
    }

        function update(Request $req)
    {
    	//return $req->input();
    	$resto = restaurant::find($req->id);
    	$resto->name=$req->input('name');
    	$resto->email=$req->input('email');
    	$resto->phone=$req->input('phone');
    	$resto->save();
    	$req->session()->flash('status','Restaurant updated successfullly');
    	return redirect("list");
    }
}
