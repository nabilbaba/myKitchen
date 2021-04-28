@extends('layouts.template_admin')

@section('content')

<head><title>Statistics</title></head>
  
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
                  <li class="breadcrumb-item"><a href="#">Statistics</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl col-md-8">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body bg-default shadow">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total recipes</h5>
                      <span class="h2 font-weight-bold mb-0" style="color: white;">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-single-copy-04"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl col-md-8">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body bg-default shadow">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total cookers</h5>
                      <span class="h2 font-weight-bold mb-0" style="color: white;">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-circle-08"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl col-md-8">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body bg-default shadow">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total categories</h5>
                      <span class="h2 font-weight-bold mb-0" style="color: white;">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-app"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        
        <div class="col-xl-12">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col ">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                  <h5 class="h3 mb-0 " style="color: white;">Total of recipes</h5>
                </div>
              </div>
            </div>
            <div class="card-body" >
              <!-- Chart -->
              <div class="chart" >
                <canvas id="chart-bars" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="card bg-default shadow">
            <div class="card-header border-0 bg-default shadow">
              <div class="row align-items-center ">
                <div class="col ">
                  <h3 class="mb-0" style="color: white;">Page visits</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Page name</th>
                    <th scope="col">Visitors</th>
                    <th scope="col">Unique users</th>
                    <th scope="col">Bounce rate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      /recettes.html/
                    </th>
                    <td>
                      0
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 0%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /statistiques.html/
                    </th>
                    <td>
                      0
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-warning mr-3"></i> 0%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /utilisateurs.html/
                    </th>
                    <td>
                      0
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-warning mr-3"></i> 0%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /publications.html/
                    </th>
                    <td>
                      0
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 0%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /profile.html/
                    </th>
                    <td>
                      0
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-danger mr-3"></i> 0%
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
       </div>
      
      
@endsection