<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cuisinier;
use App\Recette;
use App\ImageRecette;
use Auth;
use App\Ingredient;
use App\Categorie;
use DB;
use App\User;
use Response;
use Validator;
use Redirect;

class CuisinierController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function profile_cuisinier(){
    	$cuisinier=Cuisinier::find(Auth::user()->id);
        return view('profile_cuisinier',['cuisinier'=>$cuisinier]);
    }
    public function editProfile($id){
      $cuisinier = Cuisinier::find($id);

      return response()->json(['cuisinier' => $cuisinier]);
    }

    public function updateProfile(Request $request){
        
       $cuisinier=Cuisinier::find(Auth::user()->id);
        $user = Auth::user();
        if($cuisinier->user_id == $user->id){
          $user->num = $request->num;
          $user->email = $request->email;
        }
        $cuisinier->num = $request->num;
        $cuisinier->email = $request->email;
        $cuisinier->first_name = $request->first_name;
        $cuisinier->last_name = $request->last_name;
        $cuisinier->date_of_birth = $request->date_of_birth;
        $cuisinier->code_postal = $request->code_postal;
        $cuisinier->adresse = $request->adresse;
        $cuisinier->save();
        $user->save(); 
        return redirect('profileC');

    }

    public function getRecipes(){
       
         $cuisinier=Cuisinier::find(Auth::user()->id);
         $recettes = \DB::table('recettes')->where([['cuisinier_id',$cuisinier->id],['deleted_at',null]])->get();
         $categories = Categorie::all();
         $ingredients = Ingredient::all();
         return view('recettes_cuisinier',compact('recettes','cuisinier','categories','ingredients'));
       
    }
    public function getIcons(){

        $cuisinier=Cuisinier::find(Auth::user()->id);

        return view('icons_cuisinier',compact('cuisinier'));
    }

    public function getIngredients(){

       
        $cuisinier=Cuisinier::find(Auth::user()->id);
        $ingredients = \DB::table('ingredients')->join('recettes','recettes.id','=','ingredients.recette_id')->where('cuisinier_id',$cuisinier->id)->get();
        return Response()->json(['ingredients'=>$ingredients]);
    }
    
   
    public function getID($id)
     {
       $cat = DB::table('categories')->where('id', $id)->get();

       return Response::json(['success'=>true, 'cat'=>$cat]);
     }

     public function getRecetteById($id){
 
        $recette = Recette::find($id);
        return Response()->json($recette);
 	
     }

     
    public function addRecette(Request $request){
        
        $rules = array(
                'titre'                 => 'required|unique:recettes|string|max:255',
                'etapes'                => 'required|string',
                'temps_prepar'          => 'required|string',
                'temps_cuiss'           => 'required|string',
                'niveau'                => 'required',    
                
        );
        
        $error = Validator::make($request->all(),$rules);

        if($error->fails())
        {
        	return Response()->json(['errors' => $error->errors()->all()]);
        }      
            
        $recette = new Recette();
        $recette->titre = $request->titre;
        $recette->temps_de_preparation = $request->temps_prepar;
        $recette->temps_de_cuisson = $request->temps_cuiss;
        $recette->etapes = $request->etapes;
        $recette->niveau = $request->niveau;
        $recette->cuisinier_id = $request->cuisinier_id;
        $recette->categorie_id = $request->categorie_id;
        
         
        if($request->hasFile('image')){ 
          $path = $request->image->store('recettes_image');
        }
        $recette->image = $path;
        
        $recette->save();
        
        return redirect('recettesC'); 
      
    }
    

     public function addIngredient(Request $request){
         $rules = array(
                'nom'                 => 'required|string|max:255',
                'quantite'            => 'required|string',
                'unite'               => 'required|string', 
                
        );
        
        $error = Validator::make($request->all(),$rules);

        if($error->fails())
        {
            return Response()->json(['errors' => $error->errors()->all()]);
        }      
        
        $ingredient = new Ingredient();
        $ingredient->recette_id = $request->recette_id;
        $ingredient->nom_produit = $request->nom;
        $ingredient->quantité = $request->quantite;
        $ingredient->unité = $request->unite;

        $ingredient->save();
        return Response()->json(['ingredient'=>$ingredient]); 
      
    }

     public function deleteRecipe($id){
        $recette = Recette::where('id',$id)->update(['deleted_at' => new \dateTime]);
        return Response()->json($recette);
    }

    public function deleteIngredient($id){
        $ingredient = Ingredient::find($id);
         $ingredient->delete();
        return Response()->json($ingredient);
    }
    public function getRecipeById($id){
      
        $recette = Recette::find($id);
        return Response()->json($recette);
 
    }
 

    public function updateRecipe(Request $request){

        
        $rules = array(
                'titre'                 => 'required|string|max:255',
                'etapes'                => 'required|string',
                'temps_prepar'          => 'required|string',
                'temps_cuiss'           => 'required|string',
                'niveau'                => 'required',    
                
        );
        
        $error = Validator::make($request->all(),$rules);

        if($error->fails())
        {
            return Response()->json(['errors' => $error->errors()->all()]);
        }      
        $recette = Recette::find($request->id);
        $recette->titre = $request->titre;
        $recette->temps_de_preparation = $request->temps_prepar;
        $recette->temps_de_cuisson = $request->temps_cuiss;
        $recette->etapes = $request->etapes;
        $recette->niveau = $request->niveau;
        $recette->cuisinier_id = $request->cuisinier_id;
        $recette->categorie_id = $request->categorie_id;

        $recette->save();
        
        return Response()->json($recette);
    }

    public function notifRecipes(){

        $cuisinier = Cuisinier::find(Auth::user()->id);
         $notifications = \DB::table('recettes')->get();
        return view('notifications_cuisinier',compact('cuisinier','notifications'));
    }

    public function searchRecette(Request $request){
        $cuisinier = Cuisinier::find(Auth::user()->id);
        $search = $request->get('search');
        $categories = Categorie::all();
        $ingredients = Ingredient::all();

        $recettes  =\DB::table('recettes')->where([['titre', 'like', '%'.$search.'%'],['deleted_at',null]])->orWhere([['etapes', 'like', '%'.$search.'%'],['deleted_at',null]])->get();
        
     return view('searchRecette_cuisinier',compact('cuisinier','categories','ingredients','recettes'));
    }

    
}
