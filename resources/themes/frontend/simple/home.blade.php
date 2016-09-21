@extends('layout')

@section('content')

    <div class="banner-section">
        <div class="container">
            <div class="banner-grids">
                <div class="col-md-6 banner-grid">
                    <h2>the latest collections</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="products.html" class="button"> shop now </a>
                </div>
                <div class="col-md-6 banner-grid1">
                    <img src="{{$img_path}}/p2.png" class="img-responsive" alt=""/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="banner-bottom">
        <div class="gallery-cursual">
            <!--requried-jsfiles-for owl-->
            <script src="{{$js_path}}/owl.carousel.js"></script>
            <script>
                $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                        items : 3,
                        lazyLoad : true,
                        autoPlay : true,
                        pagination : false,
                    });
                });
            </script>
            <!--requried-jsfiles-for owl -->
            <!--start content-slider-->
            <div id="owl-demo" class="owl-carousel text-center">
                <div class="item">
                    <img class="lazyOwl" data-src="{{$img_path}}/b1.jpg" alt="name">
                    <div class="item-info">
                        <h5>Lorem ipsum</h5>
                    </div>
                </div>
                <div class="item">
                    <img class="lazyOwl" data-src="{{$img_path}}/b2.jpg" alt="name">
                    <div class="item-info">
                        <h5>Lorem ipsum</h5>
                    </div>
                </div>
                <div class="item">
                    <img class="lazyOwl" data-src="{{$img_path}}/b3.jpg" alt="name">
                    <div class="item-info">
                        <h5>Lorem ipsum</h5>
                    </div>
                </div>
                <div class="item">
                    <img class="lazyOwl" data-src="{{$img_path}}/b4.jpg" alt="name">
                    <div class="item-info">
                        <h5>Lorem ipsum</h5>
                    </div>
                </div>
                <div class="item">
                    <img class="lazyOwl" data-src="{{$img_path}}/b1.jpg" alt="name">
                    <div class="item-info">
                        <h5>Lorem ipsum</h5>
                    </div>
                </div>
                <div class="item">
                    <img class="lazyOwl" data-src="{{$img_path}}/b6.jpg" alt="name">
                    <div class="item-info">
                        <h5>Lorem ipsum</h5>
                    </div>
                </div>
                <div class="item">
                    <img class="lazyOwl" data-src="{{$img_path}}/b7.jpg" alt="name">
                    <div class="item-info">
                        <h5>Lorem ipsum</h5>
                    </div>
                </div>
                <div class="item">
                    <img class="lazyOwl" data-src="{{$img_path}}/b1.jpg" alt="name">
                    <div class="item-info">
                        <h5>Lorem ipsum</h5>
                    </div>
                </div>
                <div class="item">
                    <img class="lazyOwl" data-src="{{$img_path}}/b2.jpg" alt="name">
                    <div class="item-info">
                        <h5>Lorem ipsum</h5>
                    </div>
                </div>
                <div class="item">
                    <img class="lazyOwl" data-src="{{$img_path}}/b3.jpg" alt="name">
                    <div class="item-info">
                        <h5>Lorem ipsum</h5>
                    </div>
                </div>
            </div>
            <!--sreen-gallery-cursual-->
        </div>
    </div>
    <div class="gallery">
        <div class="container">
            <h3>Featured products</h3>
            <div class="gallery-grids">
                <div class="col-md-3 gallery-grid ">
                    <a href="products.html"><img src="{{$img_path}}/g1.png" class="img-responsive" alt=""/>
                        <div class="gallery-info">
                            <div class="quick">
                                <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</p>
                            </div>
                        </div></a>
                    <div class="galy-info">
                        <p>Amour Women’s Amour...</p>
                        <div class="galry">
                            <div class="prices">
                                <h5 class="item_price">$95.00</h5>
                            </div>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 gallery-grid">
                    <a href="products.html"><img src="{{$img_path}}/g2.png" class="img-responsive" alt=""/>
                        <div class="gallery-info">
                            <div class="quick">
                                <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</p>
                            </div>
                        </div></a>
                    <div class="galy-info">
                        <p>Amour Women’s Amour...</p>
                        <div class="galry">
                            <div class="prices">
                                <h5 class="item_price">$95.00</h5>
                            </div>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 gallery-grid">
                    <a href="products.html"><img src="{{$img_path}}/g3.png" class="img-responsive" alt=""/>
                        <div class="gallery-info">
                            <div class="quick">
                                <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</p>
                            </div>
                        </div></a>
                    <div class="galy-info">
                        <p>Amour Women’s Amour...</p>
                        <div class="galry">
                            <div class="prices">
                                <h5 class="item_price">$95.00</h5>
                            </div>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 gallery-grid">
                    <a href="products.html"><img src="{{$img_path}}/g4.png" class="img-responsive" alt=""/>
                        <div class="gallery-info">
                            <div class="quick">
                                <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</p>
                            </div>
                        </div></a>
                    <div class="galy-info">
                        <p>Amour Women’s Amour...</p>
                        <div class="galry">
                            <div class="prices">
                                <h5 class="item_price">$95.00</h5>
                            </div>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 gallery-grid ">
                    <a href="products.html"><img src="{{$img_path}}/g5.jpg" class="img-responsive" alt=""/>
                        <div class="gallery-info">
                            <div class="quick">
                                <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</p>
                            </div>
                        </div></a>
                    <div class="galy-info">
                        <p>Amour Women’s Amour...</p>
                        <div class="galry">
                            <div class="prices">
                                <h5 class="item_price">$95.00</h5>
                            </div>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 gallery-grid">
                    <a href="products.html"><img src="{{$img_path}}/g6.jpg" class="img-responsive" alt=""/>
                        <div class="gallery-info">
                            <div class="quick">
                                <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</p>
                            </div>
                        </div></a>
                    <div class="galy-info simpleCart_shelfItem">
                        <p>Amour Women’s Amour...</p>
                        <div class="galry">
                            <div class="prices">
                                <h5 class="item_price">$95.00</h5>
                            </div>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 gallery-grid">
                    <a href="products.html"><img src="{{$img_path}}/g7.jpg" class="img-responsive" alt=""/><div class="gallery-info">
                            <div class="quick">
                                <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</p>
                            </div>
                        </div></a>
                    <div class="galy-info simpleCart_shelfItem">
                        <p>Amour Women’s Amour...</p>
                        <div class="galry">
                            <div class="prices">
                                <h5 class="item_price">$95.00</h5>
                            </div>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 gallery-grid">
                    <a href="products.html"><img src="{{$img_path}}/g8.jpg" class="img-responsive" alt=""/>
                        <div class="gallery-info">
                            <div class="quick">
                                <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</p>
                            </div>
                        </div></a>
                    <div class="galy-info simpleCart_shelfItem">
                        <p>Amour Women’s Amour...</p>
                        <div class="galry">
                            <div class="prices">
                                <h5 class="item_price">$95.00</h5>
                            </div>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="subscribe">
        <div class="container">
            <div class="subscribe1">
                <h4>the latest from swim wear</h4>
            </div>
            <div class="subscribe2">
                <form>
                    <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                    <input type="submit" value="JOIN">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

@endsection