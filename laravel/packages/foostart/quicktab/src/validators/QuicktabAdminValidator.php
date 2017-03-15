<?php
namespace Foostart\Quicktab\Validators;

use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;

use Illuminate\Support\MessageBag as MessageBag;

class QuicktabAdminValidator extends AbstractValidator
{
    protected static $rules = array(
        'quicktab_title_1' => 'required',
    );

    protected static $messages = [];


    public function __construct()
    {
        Event::listen('validating', function($input)
        {
        });
        $this->messages();
    }

    public function validate($input) {

        $flag = parent::validate($input);

        $this->errors = $this->errors?$this->errors:new MessageBag();

        $flag = $this->isValidTitle($input)?$flag:FALSE;

        return $flag;
    }


    public function messages() {
        self::$messages = [
            'required' => ':attribute '.trans('quicktab::quicktab_admin.required')
        ];
    }

    public function isValidTitle($input) {

        $flag = TRUE;

        $min_lenght = config('quicktab_admin.name_min_length');
        $max_lenght = config('quicktab_admin.name_max_length');

        $quicktab_title_1 = @$input['quicktab_title_1'];

        if ((strlen($quicktab_title_1) < $min_lenght)  || ((strlen($quicktab_title_1) > $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }

        return $flag;
    }
}