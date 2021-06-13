@extends('layouts.template_cuisinier')

@section('content')
 <head>
  <title>CookerRecipes</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">   
 </head>
 
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-moncef border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form action="{{ route('recette.search') }}" method="GET" class="navbar-search navbar-search-light form-inline mr-sm-3" id="search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="search.." type="text" name="search" id="search"/>
              </div>
              
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ $cuisinier->first_name }} {{$cuisinier->last_name}}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="{{route('profileC')}}" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{route('myKitchen.allRecettes')}}" class="dropdown-item">
                  <i class="ni ni-bold-left"></i>
                  <span>Go to home page</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="ni ni-user-run"></i>
                  <span>{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="header bg-moncef pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark" style="margin-left: -20px;">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Recipes</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Recipes</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6" id="app">
      
      <!-- Dark table -->
      <div class="row" >
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">The Recipes</h3>
             <!--button type="button" class="btn btn-outline-success  btn-sm float-right" style="margin-top: -25px;">
                <b>Add a recipe</b>
              </button-->
              <img src="assetsCuisinier/icons/ajouter.png " alt="..."  class="float-right" data-bs-toggle="modal" data-bs-target="#recipeModal" style="margin-top: -25px; cursor: pointer;" data-toggle="tooltip" title="Add recipe" data-placement="top"  / >
            </div>
            <div class="table-responsive" id="divid">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" style="text-align: center;">All Recipes</th>
                  </tr>
                </thead>
              </table>
              <table  class="table align-items-center table-dark table-flush">
                <tbody id="recettes">
                  @foreach($recettes as $rec)
                  <tr id="sid{{$rec->id}}">
                    
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar mr-3">
                          <img  src="{{ asset('storage/'.$rec->image)}}" alt="...">
                        </a>
                          <div class="media-body">
                            <span class="name mb-0 text-sm">{{$rec->titre}}</span>
                          </div>    
                      </div>
                    </th>
                    <td class="text-right">
                      <!--div class="dropdown" style="margin-left: 350px;">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" >
                          <a class="dropdown-item" href="#" >See more</a>
                         </div>
                      </div-->
                      <img src="assetsCuisinier/icons/voir_plus.png" alt="..." class="ml-8" data-bs-toggle="modal" data-bs-target="#showDetailsRecipe_{{$rec->id}}"  data-toggle="tooltip" title="See more" data-placement="top" style="cursor: pointer;  margin-top: 8px;"  />
                    </td>
                    <td>
                      <!--button type="button" class="btn btn-outline-warning  btn-sm " style="margin-left: 100px;">
                       <b>update</b>
                      </button>
                      <button type="button" class="btn btn-outline-danger  btn-sm " >
                       <b>delete</b>
                      </button-->
                      <img src="assetsCuisinier/icons/delete.png " alt="..." class=" float-right" style="cursor: pointer;" data-toggle="tooltip" title="Delete recipe" data-placement="top" onclick="deleteRecipe({{$rec->id}})" />
                        <img src="assetsCuisinier/icons/modifier.png " alt="..." class="mr-4 float-right" data-bs-toggle="modal" data-bs-target="#recipeEditModal"  style="cursor: pointer;" data-toggle="tooltip" title="Edit recipe" data-placement="top" onclick="editRecipe({{$rec->id}})" />

                        <img src="assetsCuisinier/icons/deleteIng.png " alt="..." class="mr-4 float-right" data-bs-toggle="modal" data-bs-target="#ingredientModalEdit_{{$rec->id}}"  style="cursor: pointer;" data-toggle="tooltip" title="see more ingredient" data-placement="top"  />
                        
                        <img src="assetsCuisinier/icons/ajouter.png " alt="..."  class="mr-4 float-right" data-bs-toggle="modal" data-bs-target="#ingredientModal" style=" cursor: pointer;" data-toggle="tooltip" title="Add ingredients" data-placement="top" onclick="function_idRecette({{$rec->id}})" / >
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Add recipe Modal -->
      <div class="modal fade" id="recipeModal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" v-if="voirRecipe">
          <div class="modal-dialog modal-lg mr-9">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new recipe</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                <form action="{{route('recette.add')}}" id="recipeForm" enctype="multipart/form-data" method="POST">
                  @csrf
                  <input type="hidden" value="{{$cuisinier->id}}" name="cuisinier_id" id="cuisinier_id"/>
                  <div class="row">
                    <div class="form-group col-md-6" >
                      <label for="titre">recipe title</label>
                      <input type="text" name="titre" id="titre" class="form-control  @error('titre') is-invalid @enderror" placeholder="title..." value="{{ old('titre') }}" />
                       
                      @error('titre')
                               <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                               </span>
                      @enderror

                    </div>
                    <div class="form-group col-md-6">
                      <label for="categorie_id">category</label> 
                      <select  class="form-control" id="categorie_id" name="categorie_id" onchange="function_select()"> 
                           <option  value="" hidden="hidden" selected>Select a Category</option> 
                           @foreach($categories as $categorie)
                           <option value="{{ $categorie['id'] }}">{{ $categorie->libelle }}</option>
                           @endforeach 
                      </select>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="form-group col-md-6" >
                      <label for="temps_prepar">preparation time</label>
                      <input type="text" name="temps_prepar" id="temps_prepar" class="form-control @error('temps_prepar') is-invalid @enderror" placeholder="preparation time..." value="{{ old('temps_prepar') }}"/>
                       
                       @error('temps_prepar')
                               <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                               </span>
                      @enderror

                    </div>
                    <div class="form-group col-md-6">
                      <label for="temps_cuiss">cooking time</label>
                      <input type="text" name="temps_cuiss" id="temps_cuiss" class="form-control  @error('temps_cuiss') is-invalid @enderror" placeholder="cooking time..." value="{{ old('temps_cuiss') }}" />
                       
                        @error('temps_cuiss')
                               <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                               </span>
                      @enderror

 
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="form-group col-md-6">
                      <label for="image_profile">profile picture</label>
                      <input type="file" name="image" id="image" class="form-control"/>
                    </div>
                    <!--div class="form-group col-md-6">
                      <label for="images">recipe pictures</label>
                      <input type="file" name="images[]" id="images" accept="image/png, image/jpeg" class="form-control"  multiple />
                    </div-->
                  </div>
                  <div class="row mt-3">
                    <div class="form-group col-md-12">
                      <label for="etapes">steps</label>
                      <textarea  name="etapes" id="etapes" class="form-control @error('etapes') is-invalid @enderror"  placeholder="steps...">{{ old ('etapes') }}</textarea>
                       
                        @error('etapes')
                               <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                               </span>
                        @enderror 
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="form-group col-md-12 ">
                      <label for="niveau">niveau</label>
                      <select  class="form-control @error('niveau') is-invalid @enderror" id="niveau" name="niveau"> 
                           <option value="" hidden="hidden" selected>Select a level</option> 
                           <option value="beginner">beginner</option>
                           <option value="medium">medium</option>
                           <option value="expert">expert</option>
                      </select>

                      @error('niveau')
                               <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                               </span>
                        @enderror 
                    </div>
                  </div>
                  <button  class="btn btn-success btn-sm mt-4 " type="submit">Save</button>
                  <button  class="btn btn-warning btn-sm float-right mt-4" data-bs-dismiss="modal" >Cancel</button>
                   <span id="recipe_result" ></span>
                </form>
              </div>
            </div>
          </div>
      </div>

      <!-- Edit recipe modal -->
      <div class="modal fade" id="recipeEditModal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg mr-9">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit recipe</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                <form id="recipeEditForm" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" id="id" />
                  <input type="hidden" value="{{$cuisinier->id}}" name="cuisinier_id" id="cuisinier_id"/>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="titreEdit">recipe title</label>
                      <input type="text" name="titreEdit" id="titreEdit" class="form-control" placeholder="title..."  />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="categorie_idEdit">category</label> 
                      <select  class="form-control" id="categorie_idEdit" name="categorie_idEdit" onchange="function_select()"> 
                           <option  value="" hidden="hidden" selected>Select a Category</option> 
                           @foreach($categories as $categorie)
                           <option value="{{ $categorie['id'] }}">{{ $categorie->libelle }}</option>
                           @endforeach 
                      </select>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="form-group col-md-6">
                      <label for="temps_preparEdit">preparation time</label>
                      <input type="text" name="temps_preparEdit" id="temps_preparEdit" class="form-control" placeholder="preparation time..."/>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="temps_cuissEdit">cooking time</label>
                      <input type="text" name="temps_cuissEdit" id="temps_cuissEdit" class="form-control" placeholder="cooking time..."/>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="form-group col-md-6">
                      <label for="image_profileEdit">profile picture</label>
                      <input type="file" name="image_Edit" id="image_profileEdit" class="form-control"/>
                    </div>
                    <!--div class="form-group col-md-6">
                      <label for="images">recipe pictures</label>
                      <input type="file" name="images[]" id="images" accept="image/png, image/jpeg" class="form-control"  multiple />
                    </div-->
                  </div>
                  <div class="row mt-3">
                    <div class="form-group col-md-12">
                      <label for="etapesEdit">steps</label>
                      <textarea  name="etapesEdit" id="etapesEdit" class="form-control"  placeholder="steps..."></textarea>   
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="form-group col-md-12 ">
                      <label for="niveauEdit">niveau</label>
                      <select  class="form-control" id="niveauEdit" name="niveauEdit"> 
                           <option value="" hidden="hidden" selected>Select a level</option> 
                           <option value="beginner">beginner</option>
                           <option value="medium">medium</option>
                           <option value="expert">expert</option>
                      </select>   
                    </div>
                  </div>
                  <button  class="btn btn-success btn-sm mt-4">update</button>
                  <button  class="btn btn-warning btn-sm float-right mt-4" data-bs-dismiss="modal" >Cancel</button>
                   <span id="recipe_resultEdit" ></span>
                </form>
              </div>
            </div>
          </div>
      </div>
      <!-- Fin edit Recipe modal-->

      <!-- details recipe -->
      @foreach($recettes as $r)
      <div class="modal fade" id="showDetailsRecipe_{{$r->id}}" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg mr-9">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">show recipe</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" >
                <div class="container-fluid">
                  <center>
                  <img
                      src="{{asset('storage/'.$rec->image)}}" alt="..."
                      class="img-fluid rounded"
                      width="500"
                    />
                  </center>
                  <center><h2 class="mt-4">{{$r->titre}}</h2></center>
                  <h3 class="mt-5">Ingredients </h3>
                    <div class="row">
                      @foreach($ingredients as $ingr)
                        <?php if ($r->id == $ingr->recette_id): ?>
                          <div class="col-md-4">
                            <p> {{$ingr->nom_produit}} : {{$ingr->quantité}} {{$ingr->unité}}</p>
                          </div>  
                        <?php endif ?>
                      @endforeach
                    </div>
                    <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <h3> Steps </h3>
                      <p>{{$r->etapes}} </p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-4">
                      <h3> Preparation Time </h3>
                      <p>{{$r->temps_de_preparation}}</p>
                    </div>
                    <div class="col-md-4">
                      <h3> Cooking Time </h3>
                      <p>{{$r->temps_de_cuisson}}</p>
                    </div>
                    <div class="col-md-4">
                      <h3>difficulty level</h3>
                      <p>{{$r->niveau}}</p>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
      </div>
      @endforeach
      <!-- fin details recipe -->

      <!-- add ingredients modal -->

       <div class="modal fade ml-6" id="ingredientModal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add ingredients</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"  >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="ingredientForm">
                @csrf
               
                <input type="hidden" name="recette_id" id="recette_id"/>
               
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="nom">Product Name</label>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="name..."  />
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="form-group col-md-6">
                    <label for="quantite">Quantity</label>
                    <input type="text" name="quantite" id="quantite" class="form-control" placeholder="quantity...">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="unite">Unit</label>
                    <input type="text" name="unite" id="unite" class="form-control" placeholder="unit...">
                  </div>
                </div>
                <div class="button">
                  <button class="btn btn-success btn-sm" >Save</button>
                  <button  class="btn btn-warning btn-sm float-right " data-bs-dismiss="modal">Cancel</button>
                  <span id="ingredient_result"></span>
                </div>
              </form>
            </div>
          </div>
        </div>
     </div>
      <!-- fin modal add ingredients -->

      <!-- edit ingredient modal -->
      @foreach($recettes as $rece)
      <div class="modal fade ml-6" id="ingredientModalEdit_{{$rece->id}}" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ingredients</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"  >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form >
                @csrf
                <input type="hidden" name="id" id="id" />
                      @foreach($ingredients as $ing)
                        <?php if ($rece->id == $ing->recette_id): ?>
                          <div class="row" id="sid{{$ing->id}}">
                            <div class="form-group col-md-4">
                              <input type="text" name="nomProduitEdit" id="nomProduitEdit" class="form-control" value="{{$ing->nom_produit}}" disabled>
                            </div>
                            <div class=" form-group col-md-4 ">
                              <input type="text" name="quantiteEdit" id="quantiteEdit" class="form-control " value="{{$ing->quantité}}" disabled>
                            </div>
                            <div class=" form-group col-md-2 ">
                              <input type="text" name="uniteEdit" id="uniteEdit" class="form-control " value="{{$ing->unité}}" disabled>
                            </div>
                            <div class="col-md-2">
                              <img src="assetsCuisinier/icons/supprimerIng.png " alt="..." style="cursor: pointer;" data-toggle="tooltip" title="Delete Ingredient" data-placement="top" onclick="deleteIngredient({{$ing->id}})" />
                            </div>  
                          </div>
                        <?php endif ?>
                        @endforeach
              </form>
            </div>
          </div>
        </div>
   </div>
   @endforeach
    

    
   
@endsection

@push('scripts')

<script type="text/javascript">
  function  function_select(){

     var selected_cat = document.getElementById('categorie_id').value;

      $.ajax({
          url: '/getId/' + selected_cat,
          type: 'get',
          data: {},
          success: function(data) {
             console.log(data);
           
       }
     });
    }
     
     
    </script>

    <script type="text/javascript">
      function deleteRecipe(id){
        
        if(confirm("do you really want to delete this recipe ?"))
        {
            $.ajax({
              url:'/delete-recipe/'+id,
              type:'DELETE',
              data:{
                _token:$("input[name=_token]").val()
              },
              success:function(response)
              {
                 $('#sid'+id).remove();
              }

            })
        }
      }
    </script>

    <script>
      
       function editRecipe(id){
         $.get('/recettesC/'+id,function(recipe){

           $('#id').val(recipe.id);
           $('#titreEdit').val(recipe.titre);
           $('#categorie_idEdit').val(recipe.categorie_id);
           $('#temps_preparEdit').val(recipe.temps_de_preparation);
           $('#temps_cuissEdit').val(recipe.temps_de_cuisson);
           $('#image_Edit').val(recipe.temps_de_cuisson);
           $('#etapesEdit').val(recipe.etapes);
           $('#niveauEdit').val(recipe.niveau);
           //$('#recipeEditModal').modal('toggle');
         });
       }

       $('#recipeEditModal').submit(function(e){
        e.preventDefault();
        var id = $('#id').val();
        var titre = $('#titreEdit').val();
        var etapes = $('#etapesEdit').val();
        var temps_prepar = $('#temps_preparEdit').val();
        var image = $('#image_Edit').val();
        var temps_cuiss = $('#temps_cuissEdit').val();
        var categorie_id = $('#categorie_idEdit').val();
        var niveau = $('#niveauEdit').val();
        var cuisinier_id = $('#cuisinier_id').val();
        var _token = $("input[name=_token]").val();
        $.ajax({
           url:"{{route('recipe.update')}}",
           type:"PUT",
           dataType: "json",
           data: {

              id:id,
              titre:titre,
              etapes:etapes,
              temps_prepar:temps_prepar,
              image:image,
              temps_cuiss:temps_cuiss,
              categorie_id:categorie_id,
              niveau:niveau,
              cuisinier_id:cuisinier_id,
              _token:_token,

            },
           success:function(response){
              console.log(response)
              var html = '';
              if(response.errors){

                html = '<div class="alert alert-danger mt-3">';
                for(var count = 0; count < response.errors.length; count++)
                {
                  html += '<p>' + response.errors[count] + '</p>';
                }
                html += '</div>';
                

              }
              else{
                $('.modal').modal('hide');
                $('#recipeEditForm')[0].reset();

                $('#divid').load(' #divid');
                
                
              }
              $('#recipe_resultEdit').html(html);
              
           },
        });
       });
    </script>

    <!-- script ingredients -->

    <script type="text/javascript">
    
   function function_idRecette(id){
         $.get('/recetteC/'+id,function(recette){

           $('#recette_id').val(recette.id);
         });
       }
     $(document).ready(function(){
      $('#ingredientForm').submit(function(e){
        e.preventDefault();
         var data = $("#ingredientForm").serialize();
        
        $.ajax({
           url:"{{route('ingredient.add')}}",
           type:"POST",
           data: data,
           dataType: "json",
           success:function(response){
              console.log(response)
              var html = '';
              if(response.errors){

                html = '<div class="alert alert-danger mt-3">';
                for(var count = 0; count < response.errors.length; count++)
                {
                  html += '<p>' + response.errors[count] + '</p>';
                }
                html += '</div>';
                

              }
              else{
                $('.modal').modal('hide');
                $('#ingredientForm')[0].reset();

                $('#divid').load(' #divid');
                
                
              }
              $('#ingredient_result').html(html);
                window.location.reload(); 
           },
              
        });
       });
      }); 
     
    </script>
    
    <script type="text/javascript">
      function deleteIngredient(id){
        
        if(confirm("do you really want to delete this ingredient ?"))
        {
            $.ajax({
              url:'/delete-ingredient/'+id,
              type:'DELETE',
              data:{
                _token:$("input[name=_token]").val()
              },
              success:function(response)
              {
                 $('#sid'+id).remove();
              }

            })
        }
      }
    </script>

    <!-- recipe search -->
   
@endpush