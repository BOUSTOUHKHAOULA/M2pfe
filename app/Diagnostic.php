<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Diagnostic extends Model
{
    protected $fillable=['enfant_id','specialiste_id','date','niveau','remarque','methode','id_superviseur'];
    public function enfant(){
        return  $this->belongsTo('App\Enfant');
    }
    #region relationship:many to many
    public function specialiste(){
        return  $this->belongsTo('App\Specialiste');
    }
    public function detail(){
        return $this->hasMany('App\Detail');

    }
}
