<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    protected $primaryKey = "id_enfant";
    protected $fillable=['nom','prenom','dateNaissance','lieuNaissannce','sexe','groupage','wilaya','commune','domicile'];
    #region relationship:one to many
    public function parentts(){
        return $this->hasMany('App\Parentt',"enfant_id");
    }
    public function exercices(){
        return $this->hasMany('App\Exercice',"enfant_id");
    }
    #region relationship:many to many
    public function seancetraitements(){
        return $this->hasMany('App\Seancetraitement');
    }
    public function diagnostics(){
        return $this->hasMany('App\Diagnostic');
    }




}
