<?php namespace Foostart\Quicktab\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foostart\Quicktab\Models\Quicktabs;
/**
 * Validators
 */
use Foostart\Quicktab\Validators\QuicktabAdminValidator;

class QuicktabAdminController extends Controller {

    public $data_view = array();

    private $obj_quicktab = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_quicktab = new Quicktabs();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {

        $params = $request->all();

        $list_quicktab = $this->obj_quicktab->get_quicktabs($params);

        $this->data_view = array_merge($this->data_view, array(
            'quicktabs' => $list_quicktab,
            'request' => $request,
            'params' => $params
        ));
        return view('quicktab::quicktab.admin.quicktab_list', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function edit(Request $request) {

        $quicktab = NULL;
        $quicktab_id = (int) $request->get('id');


        if (!empty($quicktab_id) && (is_int($quicktab_id))) {
            $quicktab = $this->obj_quicktab->find($quicktab_id);
        }

        $this->data_view = array_merge($this->data_view, array(
            'quicktab' => $quicktab,
            'request' => $request
        ));
        return view('quicktab::quicktab.admin.quicktab_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function post(Request $request) {

        $this->obj_validator = new QuicktabAdminValidator();

        $input = $request->all();

        $quicktab_id = (int) $request->get('id');
        $quicktab = NULL;

        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($quicktab_id) && is_int($quicktab_id)) {

                $quicktab = $this->obj_quicktab->find($quicktab_id);
            }

        } else {
            if (!empty($quicktab_id) && is_int($quicktab_id)) {

                $quicktab = $this->obj_quicktab->find($quicktab_id);

                if (!empty($quicktab)) {

                    $input['quicktab_id'] = $quicktab_id;
                    $quicktab = $this->obj_quicktab->update_quicktab($input);

                    //Message
                    \Session::flash('message', trans('quicktab::quicktab_admin.message_update_successfully'));
                    return Redirect::route("admin_quicktab.edit", ["id" => $quicktab->quicktab_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('quicktab::quicktab_admin.message_update_unsuccessfully'));
                }
            } else {

                $quicktab = $this->obj_quicktab->add_quicktab($input);

                if (!empty($quicktab)) {

                    //Message
                    \Session::flash('message', trans('quicktab::quicktab_admin.message_add_successfully'));
                    return Redirect::route("admin_quicktab.edit", ["id" => $quicktab->quicktab_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('quicktab::quicktab_admin.message_add_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'quicktab' => $quicktab,
            'request' => $request,
        ), $data);

        return view('quicktab::quicktab.admin.quicktab_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function delete(Request $request) {

        $quicktab = NULL;
        $quicktab_id = $request->get('id');

        if (!empty($quicktab_id)) {
            $quicktab = $this->obj_quicktab->find($quicktab_id);

            if (!empty($quicktab)) {
                  //Message
                \Session::flash('message', trans('quicktab::quicktab_admin.message_delete_successfully'));

                $quicktab->delete();
            }
        } else {

        }

        $this->data_view = array_merge($this->data_view, array(
            'quicktab' => $quicktab,
        ));

        return Redirect::route("admin_quicktab");
    }

}