@extends('layouts.template_admin')

@section('content')

<head><title>Deactivated accounts</title></head>

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
                    <span class="mb-0 text-sm  font-weight-bold">{{ $admin->first_name }} {{ $admin->last_name }}</span>
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
                  <li class="breadcrumb-item"><a href="#">Users</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Users</li>
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
      <div class="row" id="app">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Deactivated accounts</h3>
              <a href="{{route('cuisiniers')}}">
                <!--button type="button" class="btn btn-outline-neutral  btn-sm float-right" style="margin-top: -25px;" >
                  <b>Back to users menu</b>
                </button-->
                <img src="assetsAdmin/icons/retour.png" alt="..." class="float-right" style="margin-top: -25px; cursor: pointer" data-toggle="tooltip" title="Back to user menu" data-placement="top" />
              </a>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" >The cooker</th>
                    <th scope="col" class="sort" >Email</th>
                    <th scope="col" class="sort" >Phone number</th>
                    <th scope="col">created_at</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr v-for="cuisrecup in cuisiniersrecup">
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="assetsAdmin/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">@{{cuisrecup.first_name}} @{{cuisrecup.last_name}}</span>
                        </div>
                      </div>
                    </th>
                    <td >
                      @{{cuisrecup.email}}
                    </td>
                    <td>
                      @{{cuisrecup.num}}
                    </td>
                    <td>
                      @{{cuisrecup.created_at}}
                    </td>
                    <td>
                      <!--button type="button" class="btn btn-outline-success  btn-sm " v-on:click="recupConfirmer(cuisrecup)">
                        <b>Activate</b>
                      </button-->
                      <img src="assetsAdmin/icons/activer.png" alt="..." v-on:click="recupConfirmer(cuisrecup)" data-toggle="tooltip" title="Activate" data-placement="top" style="cursor: pointer;">
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

@push('scripts')



<script>
 
        window.Laravel = {!! json_encode([
               'csrfToken' => csrf_token(),
                'cuisinier_recup' => $cuisinier_recup,
                'url'      => url('/')  
          ]) !!};
</script>
<script>
    var app = new Vue({

    el: '#app',
    data:{
        
        cuisiniersrecup:[],           
      },
    methods: {
        recupCuisinier: function(){
        axios.get(window.Laravel.url+'/recup-cuisinier')

            .then(response => {
                 this.cuisiniersrecup = window.Laravel.cuisinier_recup;
            })
            .catch(error =>{
                 console.log('errors :' , error);
            })
      },
      recupConfirmer:function(rec){
            if(confirm("do you really want to activate this user ?"))
            {
              axios.get(window.Laravel.url+'/recup-confirmer/'+rec.id) 
              .then(response =>{
                if(response.data.etat){   
                    var position = this.cuisiniersrecup.indexOf(rec);
                    this.cuisiniersrecup.splice(position,1);   
                }
                         
              })
              .catch(error => {
                  console.log('errors : ',error)
              })
            }
        },
    },
    created:function(){
      this.recupCuisinier();
    }
  });
</script>

@endpush