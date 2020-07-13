<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seancetraitement extends Model
{
    protected $fillable=['enfant_id','traitant_id','duree','commentaire','methode','description','conseils'];
    public function enfant(){
        return  $this->belongsTo('App\Enfant');
    }
    #region relationship:many to many
    public function traitant(){
        return  $this->belongsTo('App\Traitant');
    }
}
