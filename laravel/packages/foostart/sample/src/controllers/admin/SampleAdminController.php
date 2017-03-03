<?php namespace Foostart\Sample\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foostart\Sample\Models\Samples;
use Foostart\Sample\Models\Slideshow;
/**
 * Validators
 */
use Foostart\Sample\Validators\SampleAdminValidator;
use Foostart\Sample\Validators\SlideshowAdminValidator;
class SampleAdminController extends Controller {

    public $data_view = array();

    private $obj_sample = NULL;
    private $obj_slideshow = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_sample = new Samples();
        $this->obj_slideshow = new Slideshow();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {

        $params = array();

        $list_sample = $this->obj_sample->get_samples($params);

        $this->data_view = array_merge($this->data_view, array(
            'samples' => $list_sample,
            'request' => $request
        ));
        return view('sample::sample.admin.sample.sample_list', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function edit_sample(Request $request) {

        $sample = NULL;
        $sample_id = (int) $request->get('id');


        if (!empty($sample_id) && (is_int($sample_id))) {
            $sample = $this->obj_sample->find($sample_id);
        }

        $this->data_view = array_merge($this->data_view, array(
            'sample' => $sample,
            'request' => $request
        ));
        return view('sample::sample.admin.sample.sample_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function post(Request $request) {
                $this->obj_validator = new SampleAdminValidator();


        $input = $request->all();

        $sample_id = (int) $request->get('id');
        $sample = NULL;


        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($sample_id) && is_int($sample_id)) {

                $sample = $this->obj_sample->find($sample_id);
            }

        } else {
            if (!empty($sample_id) && is_int($sample_id)) {

                $sample = $this->obj_sample->find($sample_id);

                if (!empty($sample)) {

                    $input['sample_id'] = $sample_id;
                    $sample = $this->obj_sample->update_sample($input);

                    //Message
                    \Session::flash('message', trans('sample::sample.message_update_successfully'));
                    return Redirect::route("admin_sample.edit", ["id" => $sample->sample_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('sample::sample.message_update_unsuccessfully'));
                }
            } else {

                $sample = $this->obj_sample->add_sample($input);

                if (!empty($sample)) {

                    //Message
                    \Session::flash('message', trans('sample::sample.message_add_successfully'));
                    return Redirect::route("admin_sample.edit", ["id" => $sample->sample_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('sample::sample.message_add_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'sample' => $sample,
            'request' => $request,
        ), $data);

        return view('sample::sample.admin.sample.sample_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function delete_sample(Request $request) {

        $sample = NULL;
        $sample_id = $request->get('id');

        if (!empty($sample_id)) {
            $sample = $this->obj_sample->find($sample_id);

            if (!empty($sample)) {
                  //Message
                \Session::flash('message', trans('sample::sample.message_delete_successfully'));

                $sample->delete();
            }
        } else {

        }

        $this->data_view = array_merge($this->data_view, array(
            'sample' => $sample,
        ));

        return Redirect::route("admin_sample");
    }
    /*-------------------------SLIDESHOW---------------------------*/
      public function index_slideshow(Request $request) {

        $params = array();

        $list_slideshow = $this->obj_slideshow->get_slideshows($params);/// có s

        $this->data_view = array_merge($this->data_view, array(
            'slideshows' => $list_slideshow,
            'request' => $request
        ));
        return view('sample::sample.admin.slideshow.slideshow_list', $this->data_view);
    }
     public function edit_slideshow(Request $request) {

        $slideshow = NULL;
        $slideshow_id = (int) $request->get('id');


        if (!empty($slideshow_id) && (is_int($slideshow_id))) {
            $slideshow = $this->obj_slideshow->find($slideshow_id);
        }

        $this->data_view = array_merge($this->data_view, array(
            'slideshow' => $slideshow,
            'request' => $request
        ));
        return view('sample::sample.admin.slideshow.slideshow_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function post_slideshow(Request $request) {
                $this->obj_validator = new SlideshowAdminValidator();


        $input = $request->all();

        $slideshow_id = (int) $request->get('id');
        $slideshow = NULL;


        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($slideshow_id) && is_int($slideshow_id)) {

                $slideshow = $this->obj_slideshow->find($slideshow_id);
            }

        } else {
            if (!empty($slideshow_id) && is_int($slideshow_id)) {

                $slideshow = $this->obj_slideshow->find($slideshow_id);

                if (!empty($slideshow)) {

                    $input['slideshow_id'] = $slideshow_id;
                    $slideshow = $this->obj_slideshow->update_slideshow($input);

                    //Message
                    \Session::flash('message', trans('message_update_successfully'));
                    return Redirect::route("admin_slideshow.edit", ["id" => $slideshow->slideshow_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('message_update_unsuccessfully'));
                }
            } else {

                $slideshow = $this->obj_slideshow->add_slideshow($input);

                if (!empty($slideshow)) {

                    //Message
                    \Session::flash('message', trans('message_add_successfully'));
                    return Redirect::route("admin_slideshow.edit", ["id" => $slideshow->slideshow_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('message_add_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'slideshow' => $slideshow,
            'request' => $request,
        ), $data);

        return view('sample::sample.admin.slideshow.slideshow_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function delete_slideshow(Request $request) {

        $slideshow = NULL;
        $slideshow_id = $request->get('id');

        if (!empty($slideshow_id)) {
            $slideshow = $this->obj_slideshow->find($slideshow_id);

            if (!empty($slideshow)) {
                  //Message
                \Session::flash('message', trans('message_delete_successfully'));

                $slideshow->delete();
            }
        } else {

        }

        $this->data_view = array_merge($this->data_view, array(
            'slideshow' => $slideshow,
        ));

        return Redirect::route("admin_slideshow");
    }
    /*-------------------------END SLIDESHOW---------------------------*/
}