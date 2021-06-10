@extends('layouts.template_admin')

@section('content')

<head><title>Users</title></head>
   
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
                <input class="form-control" placeholder="Search" type="text" name="sear" id="sear">
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
      <div class="row" >
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Cook's details</h3>
              <!--a href="{{route('cuisinier.recup')}}">
                <button type="button" class="btn btn-outline-neutral  btn-sm float-right" style="margin-top: -25px;" >
                <b>activate accounts</b>
                </button>
              </a-->
              <a href="{{route('cuisinier.recup')}}">
               <img src="assetsAdmin/icons/activer_compte.png" alt="..." class="float-right" style="margin-top: -25px; cursor: pointer;" data-toggle="tooltip" title="Activate accounts" data-placement="top"/>
              </a>
            </div>
            <div class="table-responsive" >
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" >The cooker</th>
                    <th scope="col" class="sort" >Email</th>
                    <th scope="col" class="sort" >Phone number</th>
                    <th scope="col">Created at</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach($cuisinier as $c)
                  <tr id="sid{{$c->id}}">                   
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="assetsAdmin/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">
                            {{$c->last_name}} {{$c->first_name}}
                          </span>
                        </div>
                      </div>
                    </th>
                    <td >
                      {{$c->email}}
                    </td>
                    <td>
                      {{$c->num}}
                    </td>
                    <td>
                      {{$c->created_at}}   
                    </td>  
                    <td class="text-right">
                      <!--div class="dropdown" style="margin-left: 20px; margin-top: 8px;">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" >
                          <a  class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#userModal" v-on:click="AfficherInfo(user.id)">See more
                          </a> 
                        </div>
                      </div-->
                      <img src="assetsAdmin/icons/voir_plus.png" alt="..." data-bs-toggle="modal" data-bs-target="#userModal_{{$c->id}}"  data-toggle="tooltip" title="See more" data-placement="top" style="cursor: pointer; margin-left: 20px; margin-top: 8px;" />
                    </td>
                    <td>
                      <!--button type="button" class="btn btn-outline-danger  btn-sm " v-on:click="desactiverCuisinier(user)">
                        <b>Deactivate</b>
                      </button-->
                      <img src="assetsAdmin/icons/desactiver.png" alt="..." data-toggle="tooltip" onclick="desactivateCooker({{$c->id}})" title="Deactivate this compte" data-placement="top" style="cursor: pointer;" />
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
  <!-- details user modal -->
    @foreach($cuisinier as $c)
      <div class="modal fade" id="userModal_{{$c->id}}" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" >
          <div class="modal-content" >
            <div class="modal-header">
              <h4 class="modal-title"  >Cook's details</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body"> 
              <div class="card card-profile bg-default shadow center card w-50">
                <div class="row justify-content-center">
                  <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                      <a href="#">
                        <img src="assetsAdmin/img/theme/bootstrap.jpg" class="rounded-circle">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 text-white" >
                  <div class="text-center " style="margin-top: 100px;">
                    <table class="table table-dark table-flush bg-default ">
                      <tr>
                        <td>
                          <i class="ni ni-circle-08 text-white " ></i>
                        </td>
                        <td >
                          <span class="h3 mt-4 text-white">
                              {{$c->last_name}} {{$c->first_name}}
                              @php
                                $birthday = $c->date_of_birth;
                                $age = Carbon\Carbon::parse($birthday)->diff(Carbon\Carbon::now())->format(',%y years');
                             @endphp

                             {{$age}}
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td class="h5 mt-4 text-white ">
                          <i class="ni ni-pin-3 text-white ni location_pin "></i>
                        </td>
                        <td class="h5 mt-4 text-white ">
                          {{$c->adresse}}
                        </td>
                      </tr>
                      <tr>
                        <td class="h5 mt-4 text-white ">
                          <i class="ni ni-email-83 text-white ni email "></i>
                        </td>
                        <td class="h5 mt-4 text-white ">
                          {{$c->email}}
                        </td>
                      </tr>
                      <tr>
                        <td class="h5 mt-4 text-white ">
                          <i class="ni ni-mobile-button text-white ni numero "></i>
                        </td>
                        <td class="h5 mt-4 text-white ">
                          {{$c->num}}
                        </td>
                      </tr>
                      <tr>
                        <td class="h5 mt-4 text-white ">
                          <i class="ni ni-send text-white ni code-postal"></i>
                        </td>
                        <td class="h5 mt-4 text-white ">
                          {{$c->code_postal}}
                        </td>
                      </tr>
                      <tr> 
                        <td class="h5 mt-4 text-white ">
                          <i class="ni ni-badge text-white ni buisness "></i>
                        </td>
                        <td class="h5 mt-4 text-white ">
                          {{$c->created_at}}
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table align-items-center  table-flush">
                  <thead class="">
                    <tr>
                       <th scope="col" class="sort" style="text-align: center;">All recipes of {{$c->last_name}} {{$c->first_name}}</th>
                    </tr>
                  </thead>
                </table>  
                <table class="table align-items-center  table-flush">
                  <tbody class="list">
                    @foreach($recettes as $rec)
                    <?php if (($rec->cuisinier_id == $c->id) && ($rec->accepte == 1)): ?>
                      <tr>
                        <th scope="row">
                          {{$no++}}
                        </th>
                        <th scope="row">
                          <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                              <img alt="Image placeholder" src="assetsAdmin/img/theme/bootstrap.jpg">
                            </a>
                              <div class="media-body">
                                <span class="name mb-0 text-sm"> {{$rec->titre}} </span>
                              </div>  
                          </div>
                        </th>
                        <td>
                          {{$rec->created_at}}   
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
    @endforeach 
   
      
@endsection


@push('scripts')

 <script type="text/javascript">
      function desactivateCooker(id){
        
        if(confirm("do you really want to deactivate this user ?"))
        {
            $.ajax({
              url:'/desactiver-cuisinier/'+id,
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
      <!--script>
        window.Laravel = {!! json_encode([
               "csrfToken"  => csrf_token(),
               "cuisinier"   => $cuisinier,
               "url"      => url("/")  
          ]) !!};
      </script>

      <script>
         var app2 = new Vue({

          el: '#app2',
          data:{
              detailsCuisinier: [],
              recipes:[],
              detaillsC: {
                idC: 0,
              },
            },
            methods: {
              
              details_cuisinier: function(){
                axios.post(window.Laravel.url+'/cuisiniers',this.detaillsC)

                    .then(response => {
                         console.log('success : ', response);
                         this.detailsCuisinier = response.data;
                         this.recipes = response.data;
                    })
                    .catch(error =>{
                         console.log('errors :' , error);
                    })
              },
              
          },
        });

         var app = new Vue({

            el: '#app',
            data:{
                
                users: [],           
              },
            methods: {
              get_cuisinier: function(){
                axios.get(window.Laravel.url+'/cuisiniers')

                    .then(response => {
                         this.users = window.Laravel.cuisinier.data;
                    })
                    .catch(error =>{
                         console.log('errors :' , error);
                    })
              },
              AfficherInfo: function($id){
                app2.detaillsC.idC = $id;
                app2.details_cuisinier();
              },
              desactiverCuisinier:function(cuisinier){
                 if(confirm("do you really want to deactivate this user ?"))
                   {
                    axios.get(window.Laravel.url+'/desactiver-cuisinier/'+cuisinier.id) 
                     .then(response =>{
                         if(response.data.etat){  
                             var position = this.users.indexOf(cuisinier);
                             this.users.splice(position,1);
                         }
                         
                      })
                     .catch(error => {
                        console.log(error)
                     })
                   }
               },
            },
            created:function(){
              this.get_cuisinier();
            }
          });

      </script-->

@endpush