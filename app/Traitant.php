<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traitant extends Model
{
    protected $primaryKey = "id_traitant";
    protected $fillable=['nom','prenom','dateNaissance','motpass','email','numTel','address','specialiste','image'];

    #region relationship:many to many
    public function seancetraitements(){
        return $this->hasMany('App\Seancetraitement');
    }

}
