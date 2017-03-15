<?php

namespace Foostart\Testimonial\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model {

    protected $table = 'testimonials';
    public $timestamps = false;
    protected $fillable = [
        'testimonial_name',
        'testimonial_feedback_1',
        'testimonial_img_1',
    ];
    protected $primaryKey = 'testimonial_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_testimonials($params = array()) {
        $eloquent = self::orderBy('testimonial_id');

        //testimonial_name
        if (!empty($params['testimonial_name'])) {
            $eloquent->where('testimonial_name', 'like', '%' . $params['testimonial_name'] . '%');
        }

        $testimonials = $eloquent->paginate(10); //TODO: change number of item per page to configs

        return $testimonials;
    }

    /**
     *
     * @param type $input
     * @param type $testimonial_id
     * @return type
     */
    public function update_testimonial($input, $testimonial_id = NULL) {

        if (empty($testimonial_id)) {
            $testimonial_id = $input['testimonial_id'];
        }

        $testimonial = self::find($testimonial_id);

        if (!empty($testimonial)) {

            $testimonial->testimonial_name = $input['testimonial_name'];
            $testimonial->testimonial_feedback_1 = $input['testimonial_feedback_1'];
            $testimonial->testimonial_img_1 = $input['testimonial_img_1'];

            $testimonial->save();

            return $testimonial;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_testimonial($input) {

        $testimonial = self::create([
                    'testimonial_name' => $input['testimonial_name'],
                    'testimonial_feedback_1' => $input['testimonial_feedback_1'],
                    'testimonial_img_1' => $input['testimonial_img_1'],
        ]);
        return $testimonial;
    }

}
