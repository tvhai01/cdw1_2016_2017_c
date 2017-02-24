<?php

namespace Foostart\Sample\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App;

class Catalog extends Model {

    protected $table = 'catalogs';
    protected $primarykey = 'catalog_id';
    protected $fillable = array('catalog_name', 'catalog_parentid', 'catalog_sortoder');
    public $timestamps = false;

    public function getData() {

        return self::paginate(5);
    }

}
