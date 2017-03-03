<?php

namespace Foostart\Sample\Models;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model {

    protected $table = 'slideshows';
    public $timestamps = false;
    protected $fillable = [
        'slideshow_title',
        'slideshow_content',
        'slideshows_img'
    ];
    protected $primaryKey = 'slideshow_id';

    public function get_slideshows($params = array()) {
        $slideshow = self::paginate(10);
        return $slideshow;
    }



    /**
     *
     * @param type $input
     * @param type $sample_id
     * @return type
     */
    public function update_slideshow($input, $slideshow_id = NULL) {

        if (empty($slideshow_id)) {
            $slideshow_id = $input['slideshow_id'];
        }

        $slideshow = self::find($slideshow_id);

        if (!empty($slideshow)) {
//note
            $slideshow->slideshow_title = $input['slideshow_title'];
            $slideshow->slideshow_content = $input['slideshow_content'];
            $slideshow->slideshows_img = $input['slideshows_img'];
//note
            $slideshow->save();

            return $slideshow;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_slideshow($input) {

        $slideshow = self::create([
                    'slideshow_title' => $input['slideshow_title'],
                    'slideshow_content' => $input['slideshow_content'],
                    'slideshows_img'=> $input['slideshow_img'],
        ]);
        return $slideshow;
    }
}
