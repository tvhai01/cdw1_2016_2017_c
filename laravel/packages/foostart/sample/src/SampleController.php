<?php

namespace Foostart\Sample;

use App\Http\Controllers\Controller;
use Foostart\Sample\Models\Sample;
use Foostart\Sample\models\Catalog;

Class SampleController extends Controller {

//    public function index()
//    {
//    	return view('sample::index', array());
//    }
    public function getData() {
        $obj1 = new Sample();
        $result1 = $obj1->get();
        
        $obj2 = new Catalog();
        $result2 = $obj2->get();
        
        return view('sample::viewsample', array('sample' => $result1 , 'catalog' => $result2));
    }

   

}
