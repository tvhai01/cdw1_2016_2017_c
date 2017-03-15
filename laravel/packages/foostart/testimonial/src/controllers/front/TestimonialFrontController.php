<?php

namespace Foostart\Testimonial\Controlers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;
use Foostart\Testimonial\Models\Testimonials;

class TestimonialFrontController extends Controller
{
    public $data = array();
    public function __construct() {

    }

    public function index(Request $request)
    {

        $obj_testimonial = new Testimonials();
        $testimonials = $obj_testimonial->get_testimonials();
        $this->data = array(
            'request' => $request,
            'testimonials' => $testimonials
        );
        return view('testimonial::testimonial.index', $this->data);
    }

}