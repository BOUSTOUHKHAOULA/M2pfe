<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercice extends Model
{
    protected $primaryKey = "id_exercice";

    protected $fillable=['enfant_id','nomExercice','dateExercice','score'];
    #region relationship:one to many
    public function enfant(){
       return  $this->belongsTo('App\Enfant',"enfant_id");
    }

}
