@extends('layouts.app_details')

@section('content')

<section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper-container">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="assetsVisiteur/assets/img/RECIPES/RECIPES-1.jpg" class="img-fluid" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination">

                            </div>
                        </div>
<br><br> <br> <br>
                        <div id="stars" class="comment1 p-3 mt-2 rating d-flex align-items-center justify-content-center w-auto">
                        <h4>EVALUATE THIS WORK</h4> <br>
	                       <div class="stars">
		                      <i class="fa fa-star gold" onClick="star(1)"></i>
		                      <i class="fa fa-star"onClick="star(2)"></i>
		                      <i class="fa fa-star"onClick="star(3)"></i>
		                      <i class="fa fa-star"onClick="star(4)"></i>
		                      <i class="fa fa-star" onClick="star(5)"></i>
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
                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h2>REPICE INFORMATION</h2>
                            <ul>
                                <li><strong>Category</strong>: Breakfast</li>
                                <li><strong>name</strong>: Almond Poppyseed Pancakes </li>
                                <li><strong>calories</strong>: 550</li>
                                <li><strong>cock time</strong>: 20 min</li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>INGREDIENTS</h2>
                            <ul>
                                <li><strong>All-purpose flour</strong>: 2 cups</li>
                                <li><strong>Baking powder</strong>: 2 tsp </li>
                                <li><strong>Sugar</strong>: 1/3 cup</li>
                                <li><strong>Salt</strong>: 1/2 tsp</li>
                                <li><strong>Poppy seeds</strong>: 1/4 cup</li>
                                <li><strong>Whole milk</strong>: 1/2 cups</li>
                                <li><strong>Large eggs, yolks and whites separated</strong>: 3</li>
                                <li><strong>Butter, divided</strong>: 8 tbsp</li>
                                <li><strong>Almond extract</strong>: 1 tsp</li>
                            </ul>
                            <h2>METHOD</h2>
                            <p>
                                Sift flour, baking powder, sugar and salt into a large bowl. Add poppy seeds to dry ingredients. Toss to distribute evenly. Separate the eggs into 2 separate bowls. Yolks in one bowl, whites in the other. Using an stand mixer fitted with a whisk attachment,
                                whisk the milk, egg yolks, melted butter and almond extract to the mixer, whip until combined. Add the dry ingredients to the bowl and mix until just combined; batter will be slightly lumpy. Do not over mix. Place egg whites
                                in a separate mixing bowl. Using an electric hand mixer, whisk until medium peaks form. Gently fold half of the egg whites into the batter with a rubber spatula. Gently fold in remaining whites. Heat a griddle until hot,
                                at 350° F. Add a little of the remaining unmelted butter to hot griddle. Add a scant ½ cup pancake batter and let set. When bubbles begin to form, lift pancake once golden brown, flip over. Cook until golden brown on both
                                sides. Serve immediately.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="bg bg-dark">
<!-- Main Body -->
<form onsubmit="return false">

<section >
    <div class="container">
        <div class="row">
            <div id="palestine" class="col-sm-5 col-md-6 col-12 pb-4" >
                <h1>Comments</h1>
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
            <div  id="gaza" class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form" class="formmsg">
                    <div class="form-group1">
                        <h4>Leave a comment</h4> <label for="message">Message</label> <textarea name="msg" id="msg" msg cols="30" rows="5" class="form-control" onchange="changemsg()" style="background-color: black;"></textarea>
                    </div>
                    <div class="form-group1"> <label for="name">Name</label> <input type="text" name="name" id="fullname"  class="form-control" onchange="changename()"> </div>
                    <div class="form-group1"> <label for="email">Email</label> <input type="text" name="email" id="email" class="form-control"> </div>
                    <div class="form-group1">
                        <p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
                    </div>
                    <div class="form-inline"> <input type="checkbox" name="check" id="checkbx" class="mr-1"> <label for="subscribe">Subscribe me to the newlettter</label> </div>
                    <div class="form-group1"> <button type="button" id="post" class="btn" onclick="comment22()">Post Comment</button> </div>
                </form>
            </div>
        </div>
    </div>
</section>
</form>
</div>
            </div>
        </section>

@endsection
