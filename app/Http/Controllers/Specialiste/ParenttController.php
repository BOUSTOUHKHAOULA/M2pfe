<?php

namespace App\Http\Controllers\Specialiste;
use App\Enfant;
use App\Parentt;
use App\Traitant;
use Cassandra\FutureRows;
use Cassandra\Rows;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use mysql_xdevapi\RowResult;
use Session;
class ParenttController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $arr['enfants']=Enfant::paginate(5);
        return view('pagespecialiste.parentts.index')->with($arr);
    }
    public function create()
    {
        $arr['enfants']=Enfant::all();
        $arr['traitants']=Traitant::all();

        return view('pagespecialiste.parentts.create')->with($arr);
    }

    public function show($enfant_id)
    {
        $parentt = parentt::find($enfant_id);


        $idf= $parentt->enfant_id;
        $enfant=Enfant::find($idf);
        // $enfant->show();
        //$enfant = enfant::find($id_enfant);

        return view('pagespecialiste.parentts.show', compact('parentt'),compact('enfant'));
    }

    public function edit(Parentt $parentt)
    {
        $arr['parentt'] =$parentt;
        $arr['enfants']=Enfant::all();



        return view('pagespecialiste.parentts.edit',compact('parentt'))->with($arr);
    }

    public function update(Request $request,Parentt $parentt)
    {

        if(isset($request->imageMother) && $request->image->getClientOriginalName()){
            $ext =  $request->imageMother->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;
            $request->imageMother->storeAs('public/familles',$file);
        }
        else
        {
            if(!$parentt->image)
                $file = '';
            else
                $file = $parentt->image;
        }
        $parentt->image=$file;
        $parentt->prenom=$request->prenomParent;
        $parentt->nom=$request->nomParent;
        $parentt->dateNaissance=$request->dateNaissanceParent;
        $parentt->motpass=$request->motpass;
        $parentt->numTel=$request->numTel;
        $parentt->email=$request->email;
        $parentt->niveauEduc=$request->niveauEduc;
        $parentt->lieuTravail=$request->lieuTravailParent;
        $parentt->save();

        $idf= $parentt->enfant_id;
        $enfant=Enfant::find($idf);
        if(isset($request->imageChild) && $request->image->getClientOriginalName()){
            $ext =  $request->imageChild->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;
            $request->imageChild->storeAs('public/enfants',$file);
        }
        else
        {
            if(!$enfant->image)
                $file = '';
            else
                $file = $enfant->image;
        }
        $enfant->image=$file;
        $enfant->prenom=$request->prenom;
        $enfant->nom=$request->nom;
        $enfant->dateNaissance=$request->dateNaissance;
        $enfant->lieuNaissannce=$request->lieuNaissannce;
        $enfant->sexe=$request->sexe;
        $enfant->groupage=$request->groupage;
        $enfant->wilaya=$request->wilaya;
        $enfant->commune=$request->commune;
        $enfant->domicile=$request->domicile;
        $enfant->save();


        return redirect()->route('pagespecialiste.$parentts.index')->with('success','تمت عملية التعديل بنجاح ');
    }


    public function destroy(Parentt $parentt)
    {

        $idf= $parentt->enfant_id;
        Parentt::destroy($idf);
        $enfant=Enfant::find($idf);
        $enfant->delete();
        // Enfant::destroy($id_enfant);
        //$traitant->delete();
        return redirect()->route('pagespecialiste.parentts.index')->with('success','تمت عملية الحذف بنجاح '); ;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
