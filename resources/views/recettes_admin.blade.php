@extends('layouts.template_admin')

@section('content')

<head><title>Recipes</title></head>
  
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-moncef border-bottom">
      <div class="container-fluid ">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
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
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assetsAdmin/img/theme/bootstrap.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{$admin->first_name}} {{$admin->last_name}}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="{{route('profileA')}}" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{route('myKitchen')}}" class="dropdown-item">
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
    <div class="container-fluid mt--6">
      
      <!-- Dark table -->
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Recipes details</h3>
               <div class="col-lg-12  text-right" style="margin-top: -25px;">
                 <!--a href="#" class="btn btn-sm btn-outline-neutral">Sort by date</a-->
                 <img src="assetsAdmin/icons/trier.png" alt="..." data-toggle="tooltip" title="Sort by date" id="getData" data-placement="top" style="cursor: pointer;" />  
               </div>
             </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">The Recipe</th>
                    <th scope="col" class="sort" data-sort="budget">Created at</th>
                    <th scope="col" class="sort" data-sort="completion">level</th>
                    <th scope="col">The cooker</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach($recettes as $rec)
                  <?php if ($rec->accepte == 1): ?>
                  <tr id="sid{{$rec->id}}">
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="assetsAdmin/img/theme/bootstrap.jpg">
                        </a>
                          <div class="media-body">
                            <span class="name mb-0 text-sm" id="titre">{{$rec->titre}}</span>
                          </div>    
                      </div>
                    </th>
                    <td id="created_at">
                      {{$rec->created_at}}
                    </td>
                    <td id="niveau">
                      {{$rec->niveau}}
                    </td>
                    
                    @foreach($cuisinier as $cui)
                      <?php if ($rec->cuisinier_id == $cui->id): ?>
                         <td id="first_name">
                          {{$cui->last_name}} {{$cui->first_name}}
                        </td>
                      <?php endif ?>  
                    @endforeach
                    <td class="text-right">
                      <!--div class="dropdown" style="margin-left: 20px;">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu dropdown-menu-arrow" >
                          <a class="dropdown-item" href="#" >See more</a>
                        </div>
                      </div-->
                      <img src="assetsAdmin/icons/voir_plus.png" alt="..." data-toggle="tooltip" title="See more" data-bs-toggle="modal" data-bs-target="#showDetailsRecipe_{{$rec->id}}" data-placement="top" style="cursor: pointer;" />
                    </td>
                    <td>
                      <!--button type="button" class="btn btn-outline-danger  btn-sm " >
                        <b>Delete</b>
                      </button-->
                      <img src="assetsAdmin/icons/delete.png" alt="..." data-toggle="tooltip" title="Delete recipe" onclick="deleteRecipe({{$rec->id}})" data-placement="top" style="cursor: pointer;">
                    </td>
                  </tr>
                  <?php endif ?>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- details recette modal -->
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
                  <center><h2>{{$r->titre}}</h2></center>
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
   
    
@endsection

@push('scripts')
 
 <script type="text/javascript">
      function deleteRecipe(id){
        
        if(confirm("do you really want to delete this recipe ?"))
        {
            $.ajax({
              url:'/delete-recipeA/'+id,
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

    <script type="text/javascript">
      
      $(document).ready(function() {
        $("#getData").click(function() { 
         $.ajax({  //create an ajax request to display.php
          type: "GET",
          url: "get-recipeDate/",       
          success: function (data) {
            $("#titre").html(data.titre);
            $("#created_at").html(data.created_at);
            $("#niveau").html(data.niveau);
            $("#last_name").html(data.last_name);
          }
        });
      });
      });
      
      </script>

@endpush