@extends('layouts.app')

@section('content')
      
        

        <section id="RECIPES" class="RECIPES">
            <div class="container">

                <div class="section-title">
                    <span>RECIPES</span>
                    <h2>RECIPES</h2>
                    <p>Find and share everyday cooking inspiration on AllRECIPES. Discover RECIPES, cooks, videos, and how-tos based on the food you love and the friends you follow.</p>
                </div>

                

                <br>
                <div class="row RECIPES-container">
                    <ul>
                        
                        @foreach($recettes_search as $rec)
                        <div id="div1" class="col-lg-4 col-md-6 RECIPES-item">
                            <div class="RECIPES-wrap">
                                 <img class="img-fluid" src="{{asset('storage/'.$rec->image)}}" alt="...">
                                <div class="RECIPES-info">
                                    <h4>{{$rec->titre}}</h4>
                                    @foreach($categories as $cat)
                                    <?php if ($cat->id == $rec->categorie_id): ?>
                                        <li>
                                            <p id="idsearch">{{$cat->libelle}}</p>
                                        </li>
                                            
                                    <?php endif ?>
                                    @endforeach
                                    <div class="RECIPES-links">
                                        <!--a href="assetsVisiteur/assets/img/RECIPES/RECIPES-1.jpg" data-gallery="RECIPESGallery" class="RECIPES-lightbox" title="Almond Poppyseed Pancakes"><i class="ri-add-fill"></i></a-->
                                        <a href="{{route('recettesDetails',['id' => $rec->id])}}" title="More Details"><i class="ri-links-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach 
                        <!-- 
                        <div id="div2" class="col-lg-4 col-md-6 RECIPES-item filter-Dinner">
                            <div class="RECIPES-wrap">
                                <img src="assets/img/RECIPES/RECIPES-2.jpg" class="img-fluid" alt="">
                                <div class="RECIPES-info">
                                    <h4>Dinner</h4>
                                    <li id="2">
                                        <p id="idsearch">Dinner</p>
                                    </li>
                                    <div class="RECIPES-links">
                                        <a href="assets/img/RECIPES/RECIPES-2.jpg" data-gallery="RECIPESGallery" class="RECIPES-lightbox" title="Web 3"><i class="ri-add-fill"></i></a>
                                        <a href="RECIPES-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- 
                        <div id="div3" class="col-lg-4 col-md-6 RECIPES-item filter-Dessert">
                            <div class="RECIPES-wrap">
                                <img src="assets/img/RECIPES/RECIPES-3.jpg" class="img-fluid" alt="">
                                <div class="RECIPES-info">
                                    <h4>Dessert</h4>
                                    <li id="3">
                                        <p id="idsearch">Dessert</p>
                                    </li>
                                    <div class="RECIPES-links">
                                        <a href="assets/img/RECIPES/RECIPES-3.jpg" data-gallery="RECIPESGallery" class="RECIPES-lightbox" title="App 2"><i class="ri-add-fill"></i></a>
                                        <a href="RECIPES-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- 
                        <div id="div4" class="col-lg-4 col-md-6 RECIPES-item filter-Drinks">
                            <div class="RECIPES-wrap">
                                <img src="assets/img/RECIPES/RECIPES-4.jpg" class="img-fluid" alt="">
                                <div class="RECIPES-info">
                                    <h4>Drinks</h4>
                                    <li id="4">
                                        <p id="idsearch">Drinks</p>
                                    </li>
                                    <div class="RECIPES-links">
                                        <a href="assets/img/RECIPES/RECIPES-4.jpg" data-gallery="RECIPESGallery" class="RECIPES-lightbox" title="Card 2"><i class="ri-add-fill"></i></a>
                                        <a href="RECIPES-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- 
                        <div id="div5" class="col-lg-4 col-md-6 RECIPES-item filter-Lunch">
                            <div class="RECIPES-wrap">
                                <img src="assets/img/RECIPES/RECIPES-5.jpg" class="img-fluid" alt="">
                                <div class="RECIPES-info">
                                    <h4>Lunch</h4>
                                    <li id="5">
                                        <p id="idsearch">Lunch</p>
                                    </li>
                                    <div class="RECIPES-links">
                                        <a href="assets/img/RECIPES/RECIPES-5.jpg" data-gallery="RECIPESGallery" class="RECIPES-lightbox" title="Web 2"><i class="ri-add-fill"></i></a>
                                        <a href="RECIPES-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- 
                        <div id="div6" class="col-lg-4 col-md-6 RECIPES-item filter-Pizza">
                            <div class="RECIPES-wrap">
                                <img src="assets/img/RECIPES/RECIPES-6.jpg" class="img-fluid" alt="">
                                <div class="RECIPES-info">
                                    <h4>Pizza</h4>
                                    <li id="6">
                                        <p id="idsearch">Pizza</p>
                                    </li>
                                    <div class="RECIPES-links">
                                        <a href="assets/img/RECIPES/RECIPES-6.jpg" data-gallery="RECIPESGallery" class="RECIPES-lightbox" title="App 3"><i class="ri-add-fill"></i></a>
                                        <a href="RECIPES-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div id="div7" class="col-lg-4 col-md-6 RECIPES-item filter-Salads">
                            <div class="RECIPES-wrap">
                                <img src="assets/img/RECIPES/RECIPES-7.jpg" class="img-fluid" alt="">
                                <div class="RECIPES-info">
                                    <h4>SaladsSalads</h4>
                                    <li id="7">
                                        <p id="idsearch">Salads</p>
                                    </li>
                                    <div class="RECIPES-links">
                                        <a href="assets/img/RECIPES/RECIPES-7.jpg" data-gallery="RECIPESGallery" class="RECIPES-lightbox" title="Card 1"><i class="ri-add-fill"></i></a>
                                        <a href="RECIPES-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->


                    </ul>
                </div>

            </div>
        </section>

@endsection