<?php

namespace Foostart\Testimonial\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foostart\Testimonial\Models\Testimonials;
/**
 * Validators
 */
use Foostart\Testimonial\Validators\TestimonialAdminValidator;

class TestimonialAdminController extends Controller {

    public $data_view = array();
    private $obj_testimonial = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_testimonial = new Testimonials();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {
        $params = $request->all();
 
        $list_testimonial = $this->obj_testimonial->get_testimonials($params);


        $this->data_view = array_merge($this->data_view, array(
            'testimonials' => $list_testimonial,
            'request' => $request,
            'params' => $params
        ));
        return view('testimonial::testimonial.admin.testimonial_list', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function edit(Request $request) {

        $testimonial = NULL;
        $testimonial_id = (int) $request->get('id');

        if (!empty($testimonial_id) && (is_int($testimonial_id))) {
            $testimonial = $this->obj_testimonial->find($testimonial_id);
        }

        $this->data_view = array_merge($this->data_view, array(
            'testimonial' => $testimonial,
            'request' => $request
        ));
        return view('testimonial::testimonial.admin.testimonial_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function post(Request $request) {

        $this->obj_validator = new TestimonialAdminValidator();

        $input = $request->all();

        $testimonial_id = (int) $request->get('id');
        $testimonial = NULL;

        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($testimonial_id) && is_int($testimonial_id)) {

                $testimonial = $this->obj_testimonial->find($testimonial_id);
            }
        } else {
            if (!empty($testimonial_id) && is_int($testimonial_id)) {

                $testimonial = $this->obj_testimonial->find($testimonial_id);

                if (!empty($testimonial)) {

                    $input['testimonial_id'] = $testimonial_id;
                    $testimonial = $this->obj_testimonial->update_testimonial($input);

                    //Message
                    \Session::flash('message', trans('testimonial::testimonial_admin.message_update_successfully'));
                    return Redirect::route("admin_testimonial.edit", ["id" => $testimonial->testimonial_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('testimonial::testimonial_admin.message_update_unsuccessfully'));
                }
            } else {

                $testimonial = $this->obj_testimonial->add_testimonial($input);

                if (!empty($testimonial)) {

                    //Message
                    \Session::flash('message', trans('testimonial::testimonial_admin.message_add_successfully'));
                    return Redirect::route("admin_testimonial.edit", ["id" => $testimonial->testimonial_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('testimonial::testimonial_admin.message_add_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'testimonial' => $testimonial,
            'request' => $request,
                ), $data);

        return view('testimonial::testimonial.admin.testimonial_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function delete(Request $request) {

        $testimonial = NULL;
        $testimonial_id = $request->get('id');

        if (!empty($testimonial_id)) {
            $testimonial = $this->obj_testimonial->find($testimonial_id);

            if (!empty($testimonial)) {
                //Message
                \Session::flash('message', trans('testimonial::testimonial_admin.message_delete_successfully'));

                $testimonial->delete();
            }
        } else {
            
        }

        $this->data_view = array_merge($this->data_view, array(
            'testimonial' => $testimonial,
        ));

        return Redirect::route("admin_testimonial");
    }

}
