@extends('layouts.template_profile_cuis')

@section('content')
<head><title>Profile</title></head>
 
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
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
                    <span class="mb-0 text-sm  font-weight-bold">{{$cuisinier->first_name}} {{$cuisinier->last_name}}</span>
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

    <div class="header pb-6 d-flex align-items-center " style="min-height: 500px;   background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hi cooker</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you have made in your work and manage your projects or assigned tasks</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6" id="app">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile bg-default shadow " style="margin-top: -30px;">
            <img src="assetsCuisinier/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="assetsCuisinier/img/theme/bootstrap.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body pt-0 text-white">
              <div class="text-center " style="margin-top: 100px;">
                <h5 class="h3 text-white">
                  @{{ profilcuisinier.first_name }} @{{ profilcuisinier.last_name }}<span class="font-weight-light"> @php
                       $birthday = $cuisinier->date_of_birth;
                        $age = Carbon\Carbon::parse($birthday)->diff(Carbon\Carbon::now())->format(',%y years');
                     @endphp

                      {{$age}}</span>
                </h5>
                <div class="h5 font-weight-300 text-white">
                  <i class="ni location_pin mr-2 "></i>@{{profilcuisinier.adresse}}, Algerie
                </div>
                <div class="h5 mt-4 text-white">
                  <i class="ni business_briefcase-24 mr-2 "></i>Web application development, site creation
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>University Abou bakr belkaid Tlemcen
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-default shadow"  style="margin-top: -30px;">
            <div class="card-header bg-default shadow">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0" style="color: white;">Edit profile </h3>
                </div>
              </div>
            </div>
            <div class="card-body ">
              <form>
                <div class="row">
                  <div class="col-md-8">
                    <h6 class="heading-small text-muted mb-4">User Information</h6>
                  </div>
                  <div class="col-md-4 text-right">
                    <a href="#">
                      <button class="btn btn-outline-warning btn-sm">Edit profile</button>
                    </a> 
                  </div>
                </div>
                <div class="pl-lg-4 ">
                  <div class="row ">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label " for="input-number">Phone number</label>
                        <input type="numero" id="input-number" class="form-control bg-default shadow color-input border-input" placeholder="phone number" v-model="profilcuisinier.num" value="{{old('num')}}" disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control bg-default shadow color-input border-input" placeholder="email" v-model="profilcuisinier.email" value="{{old('email')}}" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control bg-default shadow color-input border-input" placeholder="First name" v-model="profilcuisinier.first_name" value="{{old('first_name')}}" disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control bg-default shadow color-input border-input" placeholder="Last name" v-model="profilcuisinier.last_name" value="{{old('last_name')}}" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-date">Date of birth</label>
                        <input type="Date" id="input-date" class="form-control bg-default shadow color-input border-input" placeholder="Date of birth" v-model="profilcuisinier.date_of_birth" value="{{old('date_of_birth')}}" disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-code-postal">Postal code</label>
                        <input type="numero" id="input-code-postal" class="form-control bg-default shadow color-input border-input" placeholder="Postal code" v-model="profilcuisinier.code_postal" value="{{old('code_postal')}}" disabled>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-10">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control bg-default shadow color-input border-input" placeholder="Home Address"  type="text" v-model="profilcuisinier.adresse" value="{{old('adresse')}}" disabled>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">About Me</label>
                    <textarea rows="4" class="form-control bg-default shadow color-input border-input" disabled>web site developer</textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

@endsection

@push('javascripts')

<script>
        window.Laravel = {!! json_encode([
               'csrfToken' => csrf_token(),
                'cuisinier'  => $cuisinier,     
                'url'      => url('/')  
          ]) !!};
</script>
<script>
   var app = new Vue({

    el: '#app',
    data:{
        profilcuisinier: [],
        /*profile_ad: {
          id: 0,
          user_id: window.Laravel.idUser,
          first_name: '',
          last_name: '',
          email: '',
          num: '',
          date_of_birth: '',
          code_postal: '',
          adresse: '',

        },*/
      },
      methods: {
        
        profile_cuisinier: function(){
          axios.get(window.Laravel.url+'/profileC')

              .then(response => {
                   console.log('success : ', response);
                   this.profilcuisinier = window.Laravel.cuisinier;
              })
              .catch(error =>{
                   console.log('errors :' , error);
              })
        },
        /*editProfile: function(profile_ad){
          this.show = false;
          this.voir = true; 
          this.profile_ad = profile_ad;
        },
        update_profile: function(p){
          axios.put(window.Laravel.url+"/updateprofile/"+p.id,this.profile_ad)
          $('#divid').load(' #divid');
            .then(response => {
              if(response.data.etat){
               
                 this.profile_ad = {
                      id: 0,
                      user_id: window.Laravel.idUser,  
                      first_name: '',
                      last_name: '',
                      email: '',
                      num: '',
                      date_of_birth: '',
                      code_postal: '',
                      adresse: '',
                  };

              }
              
                 
            })
            .catch(error =>{
                console.log('errors :' , error);
            })

      } */
        
    },
    created:function(){
      this.profile_cuisinier();
    },
  });
</script>

@endpush