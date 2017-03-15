<?php

namespace Foostart\Quicktab\Controlers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;
use Foostart\Quicktab\Models\Quicktabs;

class QuicktabFrontController extends Controller
{
    public $data = array();
    public function __construct() {

    }

    public function index(Request $request)
    {

        $obj_quicktab = new Quicktabs();
        $quicktabs = $obj_quicktab->get_quicktabs();
        $this->data = array(
            'request' => $request,
            'quicktabs' => $quicktabs
        );
        return view('quicktab::quicktab.index', $this->data);
    }

}