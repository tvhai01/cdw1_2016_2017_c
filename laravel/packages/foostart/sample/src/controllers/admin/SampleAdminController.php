<?php namespace Foostart\Sample\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foostart\Sample\Models\Samples;
use Foostart\Sample\Models\Slideshow;
use Foostart\Sample\Models\Samplescategory;
/**
 * Validators
 */
use Foostart\Sample\Validators\SampleAdminValidator;
use Foostart\Sample\Validators\SlideshowAdminValidator;
use Foostart\Sample\Validators\SampleCategoryAdminValidator;
class SampleAdminController extends Controller {

    public $data_view = array();

    private $obj_sample = NULL;
    private $obj_slideshow = NULL;
    private $obj_sample_category = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_sample = new Samples();
        $this->obj_slideshow = new Slideshow();
        $this->obj_sample_category = new Samplescategory();
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
    /**
     *
     * @return type
     */
    public function index_category(Request $request) {

        $params = array();

        $list_sample_category = $this->obj_sample_category->get_samples_category($params);

        $this->data_view = array_merge($this->data_view, array(
            'samples_category' => $list_sample_category,
            'request' => $request
        ));
        return view('sample::sample.admin.sample_category.sample_category_list', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function edit_sample_category(Request $request) {

        $sample_category = NULL;
        $sample_category_id = (int) $request->get('id');
        //var_dump($sample_category_id);
        


        if (!empty($sample_category_id) && (is_int($sample_category_id))) {
            $sample_category = $this->obj_sample_category->find($sample_category_id);
            //var_dump($sample_category->toArray());

        }

        $this->data_view = array_merge($this->data_view, array(
            'sample_category' => $sample_category,
            'request' => $request
        ));
        return view('sample::sample.admin.sample_category.sample_category_edit', $this->data_view);
    }
    /**
     *
     * @return type
     */
    public function post_sample_category(Request $request) {
                $this->obj_validator = new SampleCategoryAdminValidator();


        $input = $request->all();

        $sample_category_id = (int) $request->get('id');
        $sample_category = NULL;


        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($sample_category_id) && is_int($sample_category_id)) {

                $sample_category = $this->obj_sample_category->find($sample_category_id);
            }

        } else {
            if (!empty($sample_category_id) && is_int($sample_category_id)) {

                $sample_category = $this->obj_sample_category->find($sample_category_id);

                if (!empty($sample_category)) {

                    $input['sample_category_id'] = $sample_category_id;
                    $sample_category = $this->obj_sample_category->update_sample_category($input);

                    //Message
                    \Session::flash('message', trans('sample::sample.message_update_successfully'));
                    return Redirect::route("admin_sample_category.edit", ["id" => $sample_category->sample_category_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('sample::sample.message_update_unsuccessfully'));
                }
            } else {

                $sample_category = $this->obj_sample_category->add_sample_category($input);

                if (!empty($sample_category)) {

                    //Message
                    \Session::flash('message', trans('sample::sample.message_add_successfully'));
                    return Redirect::route("admin_sample_category.edit", ["id" => $sample_category->sample_category_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('sample::sample.message_add_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'sample_category' => $sample_category,
            'request' => $request,
        ), $data);

        return view('sample::sample.admin.sample_category.sample_category_edit', $this->data_view);
    }
    /**
     *s
     * @return type
     */
    public function delete_category(Request $request) {

         $sample_category = NULL;
        $sample_category_id = $request->get('id');

        if (!empty($sample_category_id)) {
            $sample_category = $this->obj_sample_category->find($sample_category_id);

            if (!empty($sample_category)) {
                  //Message
                \Session::flash('message', trans('sample::sample.message_delete_successfully'));

                $sample_category->delete();
            }
        } else {

        }

        $this->data_view = array_merge($this->data_view, array(
            'sample_category' => $sample,
        ));

        return Redirect::route("admin_sample_category");
    }
}