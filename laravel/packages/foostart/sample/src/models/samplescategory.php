<?php

namespace Foostart\Sample\Models;

use Illuminate\Database\Eloquent\Model;

class Samplescategory extends Model {

    protected $table = 'samples_categories';
    public $timestamps = false;
    protected $fillable = [
        'sample_category_name'
    ];
    protected $primaryKey = 'sample_category_id';

    public function get_samples_category($params = array()) {
        $sample_category = self::paginate(10);

        return $sample_category;
    }



    /**
     *
     * @param type $input
     * @param type $sample_id
     * @return type
     */
    public function update_sample_category($input, $sample_category_id = NULL) {

        if (empty($sample_category_id)) {
            $sample_category_id = $input['sample_category_id'];
        }

        $sample_category = self::find($sample_category_id);

        if (!empty($sample_category)) {

            $sample_category->sample_category_name = $input['sample_category_name'];

            $sample_category->save();

            return $sample_category;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_sample_category($input) {

        $sample_category = self::create([
                    'sample_category_name' => $input['sample_category_name'],
        ]);
        return $sample_category;
    }
}
