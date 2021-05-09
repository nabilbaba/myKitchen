<?php

namespace App\Http\Controllers;

use Redirect;
use Validator;
use App\Admin;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Categorie;
use App\Cuisinier;
use DB;


class AdminController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function profile_admin(){
    	$admin=Admin::find(Auth::user()->id);
        return view('profile_admin',['admin'=>$admin]);
    }

    /*public function updateProfile(Request $request){
       
    
        $admin = Admin::find($request->id);
        $user = User::find($request->id);
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->user_id = $request->user_id;
        $admin->num = $request->num;
        $admin->email = $request->email; 
        $admin->date_of_birth = $request->date_of_birth;
        $admin->code_postal = $request->code_postal;
        $admin->adresse = $request->adresse;
        $user->num = $request->num;
        $user->email = $request->email; 
        $admin->save();
        $user->save();
       
        return Response()->json(['etat' => true,'admin'=> $admin]);
    }*/

    public function getCategorie(){ 
       
            $admin=Admin::find(Auth::user()->id);
            $categories = Categorie::orderBy('id','desc')->paginate(10);
            return view('catégorie_admin',compact('categories','admin'));
       
    }

    public function getCategoriepagination(Request $request){
           
           if($request->ajax()){
              $admin=Admin::find(Auth::user()->id);
              $categories = Categorie::orderBy('id','desc')->paginate(10);
              return view('paginate_data_categories',compact('categories','admin'))->render();
           }
    }

    public function addCategorie(Request $request){
        
        $validator = Validator::make($request->all(),[
               
               'libelle'  => 'required|string',
        ]);      
        if ($validator->fails()){
            return Response()->json(['errors' => 'il ya un erreur']);
        }
        else{
        $categorie = new Categorie();
        $categorie->libelle = $request->libelle;
        $categorie->save();
        
        return Response()->json($categorie); 
      }
    }

    public function getCategorieById($id){
      
        $categorie = Categorie::find($id);
        return Response()->json($categorie);
 
    }

    public function updateCategorie(Request $request){

        $categorie = Categorie::find($request->id);
        $categorie->libelle = $request->libelle;
        $categorie->save();

        return Response()->json($categorie);
    }

    public function deleteCategorie($id){

        $categorie = Categorie::find($id);
        $categorie->delete();
        return Response()->json(['success' => 'category has benn deleted!']); 
    }


    public function getCooker(){

        $admin=Admin::find(Auth::user()->id);
        $cuisinier = Cuisinier::orderBy('id','asc')->where('deleted_at',null)->paginate(10);
        return view('utilisateurs_admin',['cuisinier'=>$cuisinier,'admin'=>$admin])->with('no', 1);

    }



    public function getDetailsCuis(Request $request)
    {
       $details_cuisinier = \DB::table('cuisiniers')->where('id', $request->idC)->get();
       return $details_cuisinier;
    }

    public function desactiverCuisinier($id){
         $cuisinier = Cuisinier::where('id',$id)->update(['deleted_at' => new \dateTime]);
        return Response()->json(['etat' => true]);
    }

    public function recupererCuisinier(){
        
        $admin=Admin::find(Auth::user()->id); 
        $cuisinier_recup = Cuisinier::where('deleted_at','<>',null)->get();
        return view('comptes_desactivés',['cuisinier_recup' => $cuisinier_recup,'admin'=>$admin]);
    }
     
    public function recupeConfirmer($id){
        $cuisinier = \DB::table('cuisiniers')->where('id', $id)->update(['deleted_at' => null]);
        return Response()->json(['etat' => true]);
    }
   
}
