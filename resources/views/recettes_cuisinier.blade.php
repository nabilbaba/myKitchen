@extends('layouts.template_cuisinier')

@section('content')
 <head><title>CookerRecipes</title></head>
 
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-moncef border-bottom">
      <div class="container-fluid">
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
                    <img alt="Image placeholder" src="assetsCuisinier/img/theme/bootstrap.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Belaskri Moncef</span>
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
      <div class="row" >
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">The Recipes</h3>
             <!--button type="button" class="btn btn-outline-success  btn-sm float-right" style="margin-top: -25px;">
                <b>Add a recipe</b>
              </button-->
              <img src="assetsCuisinier/icons/ajouter.png " alt="..."  class="float-right" data-bs-toggle="modal" data-bs-target="#categorieModal" style="margin-top: -25px; cursor: pointer;" data-toggle="tooltip" title="Add recipe" data-placement="top"  / >
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" style="text-align: center;">All Recipes</th>
                  </tr>
                </thead>
              </table>
              <table  class="table align-items-center table-dark table-flush">
                <tbody>
                  <tr>
                    <td>
                      <b>Recipe 1</b>
                    </td>
                    <td class="text-right">
                      <!--div class="dropdown" style="margin-left: 350px;">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" >
                          <a class="dropdown-item" href="#" >See more</a>
                         </div>
                      </div-->
                      <img src="assetsCuisinier/icons/voir_plus.png" alt="..." class="ml-8" data-bs-toggle="modal" data-bs-target="#userModal"   data-toggle="tooltip" title="See more" data-placement="top" style="cursor: pointer;  margin-top: 8px;" />
                    </td>
                    <td>
                      <!--button type="button" class="btn btn-outline-warning  btn-sm " style="margin-left: 100px;">
                       <b>update</b>
                      </button>
                      <button type="button" class="btn btn-outline-danger  btn-sm " >
                       <b>delete</b>
                      </button-->
                      <img src="assetsCuisinier/icons/delete.png " alt="..." class=" float-right"   style="cursor: pointer;" data-toggle="tooltip" title="Delete recipe" data-placement="top" />
                        <img src="assetsCuisinier/icons/modifier.png " alt="..." class="mr-4 float-right"  style="cursor: pointer;" data-toggle="tooltip" title="Edit recipe" data-placement="top" />
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    

@endsection