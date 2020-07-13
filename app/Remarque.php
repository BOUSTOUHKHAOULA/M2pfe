<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remarque extends Model
{
    protected $fillable=['parentt_id','dateRemarque','detail'];
    public function parentt(){
        return  $this->belongsTo('App\Parentt');
    }
}
