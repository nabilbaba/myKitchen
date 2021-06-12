<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Categorie;
use App\Recette;
use App\Ingredient;
use App\Commentaire;
use App\User;
use App\Evaluation;
use DB;

class HomeController extends Controller
{
    
    public function index(Request $request){
         $categories = Categorie::orderBy('id','asc')->get();
         $recettesAll = \DB::table('recettes')->where([['accepte',1],['deleted_at',null]])->get();
         $recettes = Recette::where([['categorie_id',$request->id],['accepte',1],['deleted_at',null]])->get();
         $user = User::where('type_compte','a')->get();
         $chef = \DB::table('cuisiniers')->get();
         $team = \DB::table('admins')->get();
        return view('myKitchen_visiteur',compact('categories','recettes','recettesAll','user','chef','team'));
    }

    public function index2(Request $request){
         $categories = Categorie::orderBy('id','asc')->get();
         $recettesAll = \DB::table('recettes')->where([['accepte',1],['deleted_at',null]])->get();
         $user = User::where('type_compte','a')->get();
         $chef = \DB::table('cuisiniers')->get();
          $team = \DB::table('admins')->get();
         return view('myKitchen_allRecettes',compact('categories','recettesAll','user','chef','team'));

    }
    public function getDetailleRecette(Request $request){
        $recette = \DB::table('recettes')->where('id',$request->id)->get();
        $commentaires = \DB::table('commentaires')->orderBy('id','desc')->get();
        $categories = Categorie::all();
        $ingredients = Ingredient::all();
        return view ('details_recettes_visiteur',compact('recette','categories','ingredients','commentaires')); 
    }
    
     public function addCommentaires(Request $request){
        
        $commentaire = new Commentaire();
        $commentaire->nom = $request->name;
        $commentaire->email = $request->email;
        $commentaire->message = $request->msg;
        $commentaire->recette_id = $request->recette_id;
        $commentaire->save();
        
        return Response()->json($commentaire); 
      
    }

    public function searchRecette(Request $request){
        
        $search = $request->get('search2');
        $recettesAll = \DB::table('recettes')->where([['accepte',1],['deleted_at',null]])->get(); 
        $recettes = Recette::where([['categorie_id',$request->id],['accepte',1],['deleted_at',null]])->get();
        $recettes_search =\DB::table('recettes')->where([['titre', 'like', '%'.$search.'%'],['deleted_at',null],['accepte',1]])->orWhere([['etapes', 'like', '%'.$search.'%'],['deleted_at',null],['accepte',1]])->get();
         $categories = Categorie::orderBy('id','asc')->get();
         $user = User::where('type_compte','a')->get();
         $chef = \DB::table('cuisiniers')->get();
         $team = \DB::table('admins')->get();
        
     return view('searchRecettes_visiteur',compact('recettesAll','categories','recettes_search','recettes','user','chef','team'));
    }

    

    /*public function addEvaluations(Request $request){
        
        $evaluation = new Evaluation();
        $evaluation->nombre_etoiles = $request->name;
        $evaluation->save();
        
        return Response()->json($evaluation); 
      
    }*/
   
    
    
    
}
