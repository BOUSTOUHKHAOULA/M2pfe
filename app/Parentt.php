<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentt extends Model
{
    protected $primaryKey = "id_parentt";

    protected $fillable=['enfant_id','nom','prenom','dateNaissance','motpass','numTel','email','niveauEduc','lieuTravail'];
    #region relationship:one to many
    public function enfant(){
       return  $this->belongsTo('App\Enfant',"enfant_id");
    }
    #region relationship:many to many
    public function notifications(){
       return $this->hasMany('App\Notification');
    }

    public function remarques(){
        return $this->hasMany('App\Remarque');

    }
}
