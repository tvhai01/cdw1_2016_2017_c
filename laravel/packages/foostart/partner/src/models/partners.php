<?php

namespace Foostart\Partner\Models;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model {

    protected $table = 'partners';
    public $timestamps = false;
    protected $fillable = [
        'partner_img',
        'partner_link'
    ];
    protected $primaryKey = 'partner_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_partners($params = array()) {
        $eloquent = self::orderBy('partner_id');

        //partner_name


        if (!empty($params['partner_img'])) {
            $eloquent->where('partner_img', 'like', '%' . $params['partner_img'] . '%');
        }

        if (!empty($params['partner_link'])) {
            $eloquent->where('partner_link', 'like', '%' . $params['partner_link'] . '%');
        }
        $partners = $eloquent->paginate(10); //TODO: change number of item per page to configs

        return $partners;
    }

    /**
     *
     * @param type $input
     * @param type $partner_id
     * @return type
     */
    public function update_partner($input, $partner_id = NULL) {

        if (empty($partner_id)) {
            $partner_id = $input['partner_id'];
        }

        $partner = self::find($partner_id);

        if (!empty($partner)) {

            $partner->partner_img = $input['partner_img'];
            $partner->partner_link = $input['partner_link'];

            $partner->save();

            return $partner;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_partner($input) {

        $partner = self::create([
                    'partner_img' => $input['partner_img'],
                    'partner_link' => $input['partner_link'],
        ]);
        return $partner;
    }

}
