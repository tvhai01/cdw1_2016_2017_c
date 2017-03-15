<?php

namespace Foostart\Partner\Controlers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;
use Foostart\Partner\Models\Partners;

class PartnerFrontController extends Controller
{
    public $data = array();
    public function __construct() {

    }

    public function index(Request $request)
    {

        $obj_partner = new Partners();
        $partners = $obj_partner->get_partners();
        $this->data = array(
            'request' => $request,
            'partners' => $partners
        );
        return view('partner::partner.index', $this->data);
    }

}