<?php

namespace App\Http\Controllers;
use App\wat;


use Illuminate\Http\Request;

class WatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $wor=wat::orderby('word')->get();

        return view('psychology/wat',compact('wor'));
    }

    public function create()
    {

    }

    public function store()
    {
        WAT::create(request(['word','text']));

        return redirect('/wat');
    }

    public function search(Request $request)
    {

        $x=WAT::where('word','like',$request->search)->get();

        if(count($x)>0)
            return view('/psychology/searchresult',compact('x'));
        else
        return redirect('/search');

    }

    public function destroy(Request $request)
    {


        $y=WAT::where('word','like',$request->delete)->delete();
        if($y==0)
            echo "The word can'not be find";
        if($y==1)
        return redirect('/wat');
    }


}
