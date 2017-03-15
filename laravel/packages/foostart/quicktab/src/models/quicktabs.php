<?php

namespace Foostart\Quicktab\Models;

use Illuminate\Database\Eloquent\Model;

class Quicktabs extends Model {

    protected $table = 'quicktabs';
    public $timestamps = false;
    protected $fillable = [
        'quicktab_title_1',
        'quicktab_description_1',
        'quicktab_title_2',
        'quicktab_description_2'
    ];
    protected $primaryKey = 'quicktab_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_quicktabs($params = array()) {
        $eloquent = self::orderBy('quicktab_id');

        //quicktab_name
        if (!empty($params['quicktab_title_1'])) {
            $eloquent->where('quicktab_title_1', 'like', '%'. $params['quicktab_title_1'].'%');
        }

        $quicktabs = $eloquent->paginate(10);//TODO: change number of item per page to configs

        return $quicktabs;
    }



    /**
     *
     * @param type $input
     * @param type $quicktab_id
     * @return type
     */
    public function update_quicktab($input, $quicktab_id = NULL) {

        if (empty($quicktab_id)) {
            $quicktab_id = $input['quicktab_id'];
        }

        $quicktab = self::find($quicktab_id);

        if (!empty($quicktab)) {

            $quicktab->quicktab_title_1 = $input['quicktab_title_1'];
            $quicktab->quicktab_description_1 = $input['quicktab_description_1'];
            $quicktab->quicktab_title_2 = $input['quicktab_title_2'];
            $quicktab->quicktab_description_2 = $input['quicktab_description_2'];
            

            $quicktab->save();

            return $quicktab;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_quicktab($input) {

        $quicktab = self::create([
                    'quicktab_title_1' => $input['quicktab_title_1'],
                    'quicktab_description_1'=> $input['quicktab_description_1'],
                    'quicktab_title_2' => $input['quicktab_title_2'],
                    'quicktab_description_2'=> $input['quicktab_description_2'],
        ]);
        return $quicktab;
    }
}
