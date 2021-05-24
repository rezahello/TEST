<?php
namespace App\Http\Controllers\front;
use App\Models\star;
use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $stars = Star::get()->sortBy('prenom'); 
       $pagetitle = "stars";
     
      return view('front.myTheme', compact('stars', 'pagetitle'));

       }
   
}
