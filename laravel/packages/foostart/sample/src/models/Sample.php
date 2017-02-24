<?php


namespace Foostart\Sample\models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App;

class Sample extends Model {

    protected $table = 'samples';
    protected $primarykey = 'sample_id';
    protected $fillable = array('sample_name');
    public $timestamps = false;
   

    public function getData() {

        return self::paginate(5);
    }

}

