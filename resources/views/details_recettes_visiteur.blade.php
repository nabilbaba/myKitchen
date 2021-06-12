@extends('layouts.app_details')

@section('content')
  <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper-container">
                            <div class="swiper-wrapper align-items-center">
                                
                                @foreach($recette as $rec)
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('storage/'.$rec->image)}}" alt="..." width="1000">
                                </div>
                                @endforeach

                            </div>
                            <div class="swiper-pagination">

                            </div>
                        </div>
<br><br> <br> <br>
                        <div id="stars" class="comment1 p-3 mt-2 rating d-flex align-items-center justify-content-center w-auto">
                        <h4>EVALUATE THIS WORK</h4> <br>
                           <div class="stars" >
                                <form id="eva-form">
                                 @csrf
                                  <i class="fa fa-star gold" onClick="star(1)" id="star1"></i>
                                  <i class="fa fa-star"onClick="star(2)" id="star2"></i>
                                  <i class="fa fa-star"onClick="star(3)" id="star3"></i>
                                  <i class="fa fa-star"onClick="star(4)" id="star4"></i>
                                  <i class="fa fa-star" onClick="star(5)" id="star5"></i>
                                </form>
                          </div>
<br>                     <div id="send"class="text-center"><button type="button" class="btn btn-outline-light" onclick="evaluation()">SEND</button></div>
                       <!-- <textarea id="myTextarea" class="form-control"  rows="2" placeholder="what is your view?" required></textarea> -->
                       </div>

                       <br>
                       <!-- <div class="bg bg-dark mt-3 " style="height: 155px;">
                       <br>
                       <div class="second py-2 px-2 ml-2" >
                       <span class="text2 center" >
                       oh this is greate , i like this</span>
                       </div>
                       <br>
                       <div class="second py-2 px-2 ml-2">
                       <span class="text2"></span>
                       </div>
                       </div> -->
                <!-- <div><span class="text3"></span><span class="thumbup"><i class="fa fa-thumbs-o-up"></i></span><span class="text4">3</span></div> -->
                        </div>
                    @foreach($recette as $r)
                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h2>REPICE INFORMATION</h2>
                            <ul>
                                @foreach($categories as $cat)
                                <?php if ($r->categorie_id == $cat->id): ?>
                                     <li><strong>Category</strong>: {{$cat->libelle}}</li>    
                                <?php endif ?>
                                
                                @endforeach
                                <li><strong>name</strong>: {{$r->titre}} </li>
                                <li><strong>cock time</strong>: {{$r->temps_de_cuisson}}</li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>INGREDIENTS</h2>
                            <ul>
                                @foreach($ingredients as $ing)
                                <?php if ($ing->recette_id == $r->id): ?>
                                   <li><strong>{{$ing->nom_produit}}</strong>: {{$ing->quantité}} {{$ing->unité}}</li>
                                <?php endif ?>
                                @endforeach
                                
                                
                            </ul>
                            <h2>METHOD</h2>
                            <p>
                                {{$r->etapes}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="bg bg-dark">
<!-- Main Body -->

<section class="mt-4">
    <div class="container">
        <div class="row">
            <div id="palestine" class="col-sm-5 col-md-6 col-12 pb-4" >
                <h1>Comments</h1>

                <div id="divid">
                  @foreach($commentaires as $com)
                  <?php if ($com->recette_id == $r->id): ?>
                     <div class="comment text-justify darker mt-4 float-left ml-4 col-md-12">
                        <img src="https://i.imgur.com/yTFUilP.jpg" class="rounded-circle " width="40" height="40" />
                     
                        <h4>{{$com->nom}}</h4>    ==>
                            @php
                              $dt = new DateTime();
                              echo $dt->format('Y-m-d');                       
                            @endphp
                        
                        <br>
                        <p>{{$com->message}}</p>
                         
                     </div>
                    
 
                  <?php endif ?>
                     

                  @endforeach
                </div>
                
                <!-- <div class="comment mt-4 text-justify float-left"> <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Jhon Doe</h4> <span>- 20 October, 2018</span> <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div> -->
                <!-- <div class="text-justify darker mt-4 float-right"> <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Rob Simpson</h4> <span>- 20 October, 2018</span> <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div> -->
                <!-- <div class="comment mt-4 text-justify"> <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Jhon Doe</h4> <span>- 20 October, 2018</span> <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                <div class="darker mt-4 text-justify"> <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Rob Simpson</h4> <span>- 20 October, 2018</span> <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div> -->
            </div>
            <div   class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form" >
                    @csrf
                    @foreach($recette as $rec)
                     <input type="hidden" name="recette_id" id="recette_id" value="{{$rec->id}}">
                    @endforeach
                    <div class="form-group1">
                        <h4>Leave a comment</h4> <label for="message">Message</label> <textarea name="msg" id="msg" msg cols="30" rows="5" class="form-control"  style="background-color: black;"></textarea>
                    </div>
                    <div class="form-group1"> <label for="name">Name</label> <input type="text" name="name" id="name"  class="form-control" > </div>
                    <div class="form-group1"> <label for="email">Email</label> <input type="text" name="email" id="email" class="form-control"> </div>
                    <div class="form-group1">
                        <p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
                    </div>
                    <div class="form-inline"> <input type="checkbox" name="check" id="checkbx" class="mr-1"> <label for="subscribe">Subscribe me to the newlettter</label> </div>
                     <button type="submit"  id="post" class="btn btn-success">Post Comment</button>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
            </div>
        </section>

@endsection


@push('scripts')
  <script type="text/javascript">
     
     $(document).ready(function(){
      $('#algin-form').submit(function(e){
        e.preventDefault();
        var data = $("#algin-form").serialize();
        
        $.ajax({
           url:"{{route('commentaires.add')}}",
           type:"POST",
           dataType: "json", 
           data: data,
           
           success:function(response){
              $('#algin-form')[0].reset();
              $('#divid').load(' #divid');
              
           },
           error:function(error){
            console.log(error);
           },
        });
       });
      });
     
    </script>

    

@endpush