
   
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
                  <li class="breadcrumb-item"><a href="#">Categories</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6" >
      
      <!-- Dark table -->
      <div class="row" >
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">The catégories</h3>
             <!--button type="button" class="btn btn-outline-success  btn-sm float-right" data-bs-toggle="modal" data-bs-target="#categorieModal" style="margin-top: -25px;">
                <b>Add a category</b>
              </button-->
              <img src="assetsAdmin/icons/ajouter.png " alt="..."  class="float-right" data-bs-toggle="modal" data-bs-target="#categorieModal" style="margin-top: -25px; cursor: pointer;" data-toggle="tooltip" title="Add category" data-placement="top"  / >
            </div>
            <div class="table-responsive" id="divid">
              <table class="table align-items-center table-dark table-flush" id="categorieTable">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" style="text-align: center;">All Categories</th>
                  </tr>
                </thead>
              </table>
              <table  class="table align-items-center table-dark table-flush">
                <tbody>
                  @foreach($categories as $categorie)
                    <tr id="sid{{$categorie->id}}">
                      <td>
                        <b>{{ $categorie->libelle }}</b>
                      </td>
                      <td>
                        <!--button type="button" onclick="deleteCategorie({{$categorie->id}})" class="btn btn-outline-danger  btn-sm float-right" >
                         <b>delete</b>
                        </button-->
                        <img src="assetsAdmin/icons/delete.png " alt="..." class="mr-7 float-right" onclick="deleteCategorie({{$categorie->id}})"  style="cursor: pointer;" data-toggle="tooltip" title="Delete category" data-placement="top" />
                        <!--button type="button" onclick="editCategorie({{$categorie->id}})"  class="btn btn-outline-warning  btn-sm float-right" style="margin-right: 20px;">
                         <b>update</b>
                        </button-->
                        <img src="assetsAdmin/icons/modifier.png " alt="..." class="mr-4 float-right" onclick="editCategorie({{$categorie->id}})"  style="cursor: pointer;" data-toggle="tooltip" title="Edit category" data-placement="top" />
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          {!! $categories->links() !!}
        </div>
      </div>
    </div>
      
      <!--Add Modal -->
      <div class="modal fade" id="categorieModal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add new categorie</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="categorieForm">
                @csrf
                <div class="form-group">
                  <label for="libelle">Libelle</label>
                  <input type="text" name="libelle" id="libelle" class="form-control"  />
                </div>
                <button  class="btn btn-success btn-sm" >Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!--Edit modal-->
      <div class="modal fade" id="categorieEditModal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit categorie</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="categorieEditForm">
                @csrf
                <input type="hidden" name="id" id="id"/>
                <div class="form-group">
                  <label for="libelle">Libelle</label>
                  <input type="text" name="libelle" id="libelleEdit" class="form-control"/>
                </div>
                <button  class="btn btn-warning btn-sm" >Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
