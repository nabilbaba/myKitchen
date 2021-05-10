@extends('layouts.template_admin')

@section('content')

<head><title>Publications</title></head>
  
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
                    <span class="mb-0 text-sm  font-weight-bold">Babaahmed Nabil</span>
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
                  <li class="breadcrumb-item"><a href="#">Publications</a></li>
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
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <!-- Card header -->
            <div class="card-header border-0 bg-default shadow ">
              <h3 class="mb-0" style="color: white;">Recipes notifications</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush ">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" >The Recipe</th>
                    <th scope="col" class="sort" >The cooker</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="list" >
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">recipe 1*****************************</span>
                        </div>
                      </div>
                    </th>
                    <td>
                      nabil
                    </td>
                    <td class="text-right">
                      <!--div class="dropdown" style="margin-left: 100px;">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v" ></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" >
                          <a class="dropdown-item" href="#" >See more</a> 
                        </div>
                      </div-->
                      <img src="assetsAdmin/icons/voir_plus.png" alt="..." class="ml-8" data-toggle="tooltip" data-placement="top" title="See more" style="cursor: pointer;"/>
                    </td>
                    <td>
                      <!--button type="button" class="btn btn-outline-success  btn-sm " style="margin-left: 100px;">
                       <b>validate</b>
                      </button-->
                      <img src="assetsAdmin/icons/accepter.png" alt="..." class="ml-9" style=" cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Validate" />
                      <!--button type="button" class="btn btn-outline-danger  btn-sm " style="margin-right: 20px;">
                       <b>delete</b>
                      </button-->
                      <img src="assetsAdmin/icons/delete.png" alt="..." class="ml-4" style=" cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Refuse" />
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>


@endsection