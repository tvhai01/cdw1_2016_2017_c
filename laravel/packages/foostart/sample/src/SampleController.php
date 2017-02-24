<?php 
namespace Foostart\Sample;


use App\Http\Controllers\Controller;
use Foostart\Sample\Models\Sample;

Class SampleController extends Controller
{

//    public function index()
//    {
//    	return view('sample::index', array());
//    }
     public function getsample()
    {
         $obj_sample = new Sample();
         $result = $obj_sample ->get();
    	return view('sample::viewsample', array('sample'=> $result));
            
    }
    
}
