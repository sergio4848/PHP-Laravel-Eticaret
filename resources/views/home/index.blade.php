@extends('layouts.home')



@section('title', 'Ana Sayfa | ')
@section('description')

@endsection


@include('home._header')

@include('home._slider')
@section ('content')
    <!-- IMAGE BOX -->
    <section class="flat-row row-image-box">
        <div class="container">
            <div class="row gutter-10">
                <div class="col-sm-6 col-md-4">
                    <div class="flat-image-box style-1 data-effect div-h22 clearfix">
                        <div class="item data-effect-item">
                            <div class="inner">
                                <div class="thumb">
                                    <img src="{{asset('assets')}}/images/image-box/imgbox-1-375x500.jpg" alt="Image">
                                    <div class="elm-btn">
                                        <a href="#" class="themesflat-button bg-white width-150">For Men’s</a>
                                    </div>
                                    <div class="overlay-effect bg-color-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-sm-6 col-md-4">
                    <div class="flat-image-box style-1 row2 data-effect clearfix">
                        <div class="item data-effect-item">
                            <div class="inner">
                                <div class="thumb">
                                    <img src="{{asset('assets')}}/images/image-box/imgbox-1-375x240.jpg" alt="Image">
                                    <div class="elm-btn">
                                        <a href="#" class="themesflat-button bg-white width-150">For Kid’s</a>
                                    </div>
                                    <div class="overlay-effect bg-color-1"></div>
                                </div>
                            </div>
                        </div>

                        <div class="item data-effect-item">
                            <div class="inner">
                                <div class="thumb">
                                    <img src="{{asset('assets')}}/images/image-box/imgbox-2-375x240.jpg" alt="Image">
                                    <div class="elm-btn">
                                        <a href="#" class="themesflat-button bg-white width-150">accessories</a>
                                    </div>
                                    <div class="overlay-effect bg-color-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-sm-6 col-md-4">
                    <div class="flat-image-box style-1 data-effect div-h20 clearfix">
                        <div class="item data-effect-item">
                            <div class="inner">
                                <div class="thumb">
                                    <img src="{{asset('assets')}}/images/image-box/imgbox-2-375x500.jpg" alt="Image">
                                    <div class="elm-btn">
                                        <a href="#" class="themesflat-button bg-white width-150">For woMen’s</a>
                                    </div>
                                    <div class="overlay-effect bg-color-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- END IMAGE BOX -->

    <!-- PRODUCT NEW -->
    <section class="flat-row row-product-new">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section margin-bottom-52">
                        <h2 class="title">
                            New Product
                        </h2>
                    </div>
                    <div class="product-content product-fourcolumn clearfix">
                        <ul class="product style2 clearfix">
                            <li class="product-item">
                                <div class="product-thumb clearfix">
                                    <a href="#" class="product-thumb">
                                        <img src="{{asset('assets')}}/images/shop/sh-4/13.jpg" alt="image">
                                    </a>
                                    <span class="new">New</span>
                                </div>
                                <div class="product-info text-center clearfix">
                                    <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                    <div class="price">
                                        <ins>
                                            <span class="amount">$100.00</span>
                                        </ins>
                                    </div>
                                    <ul class="flat-color-list width-14">
                                        <li>
                                            <a href="#" class="red"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="blue"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="black"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="add-to-cart text-center">
                                    <a href="#">ADD TO CART</a>
                                </div>
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>

                            <li class="product-item">
                                <div class="product-thumb clearfix">
                                    <a href="#" class="product-thumb">
                                        <img src="{{asset('assets')}}/images/shop/sh-4/14.jpg" alt="image">
                                    </a>
                                    <span class="new">New</span>
                                </div>
                                <div class="product-info clearfix">
                                    <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                    <div class="price">
                                        <ins>
                                            <span class="amount">$100.00</span>
                                        </ins>
                                    </div>
                                    <ul class="flat-color-list width-14">
                                        <li>
                                            <a href="#" class="red"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="blue"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="black"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="add-to-cart text-center">
                                    <a href="#">ADD TO CART</a>
                                </div>
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li class="product-item">
                                <div class="product-thumb clearfix">
                                    <a href="#" class="product-thumb">
                                        <img src="{{asset('assets')}}/images/shop/sh-4/15.jpg" alt="image">
                                    </a>
                                    <span class="new sale">Sale</span>
                                </div>
                                <div class="product-info clearfix">
                                    <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                    <div class="price">
                                        <del>
                                            <span class="regular">$150.00</span>
                                        </del>
                                        <ins>
                                            <span class="amount">$100.00</span>
                                        </ins>
                                    </div>
                                </div>
                                <div class="add-to-cart text-center">
                                    <a href="#">ADD TO CART</a>
                                </div>
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li class="product-item">
                                <div class="product-thumb clearfix">
                                    <a href="#" class="product-thumb">
                                        <img src="{{asset('assets')}}/images/shop/sh-4/16.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="product-info clearfix">
                                    <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                    <div class="price">
                                        <ins>
                                            <span class="amount">$100.00</span>
                                        </ins>
                                    </div>
                                    <ul class="flat-color-list width-14">
                                        <li>
                                            <a href="#" class="red"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="blue"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="black"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="add-to-cart text-center">
                                    <a href="#">ADD TO CART</a>
                                </div>
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- END PRODUCT NEW -->

    <!-- ANIMATION BOX -->
    <section class="flat-row row-animation-box bg-section row-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-animation-block" >
                        <div class="title-section width-before-17 bg-before-white margin-bottom-14">
                            <div class="sup-title"><span>NEW TREND 2018</span></div>
                            <h2 class="title font-size-52 line-height-76">Women‘s Collection</h2>
                            <div class="sub-title"><span>Big Sale of this Week</span></div>
                        </div>
                        <div class="elm-btn text-center">
                            <a href="#" class="themesflat-button bg-accent has-padding-36">Shop Now</a>
                        </div>
                    </div><!-- /.flat-animation-block -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- END ANIMATION BOX -->

    <!-- PRODUCT -->
    <section class="flat-row row-product-project style-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section margin-bottom-41">
                        <h2 class="title">Best Sale</h2>
                    </div>
                    <ul class="flat-filter style-1 text-center max-width-682 clearfix">
                        <li class="active"><a href="#" data-filter="*">All Product</a></li>
                        <li><a href="#" data-filter=".kid">For Kid’s</a></li>
                        <li><a href="#" data-filter=".man">For Man’s</a></li>
                        <li><a href="#" data-filter=".woman">For Woman’s</a></li>
                        <li><a href="#" data-filter=".accessories">Accessories</a></li>
                    </ul>
                    <div class="divider h54"></div>
                    <div class="product-content product-fourcolumn clearfix">
                        <ul class="product style2 isotope-product clearfix">
                            <li class="product-item kid woman">
                                <div class="product-thumb clearfix">
                                    <a href="#">
                                        <img src="{{asset('assets')}}/images/shop/sh-4/1.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="product-info clearfix">
                                    <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                    <div class="price">
                                        <ins>
                                            <span class="amount">$100.00</span>
                                        </ins>
                                    </div>
                                    <ul class="flat-color-list width-14">
                                        <li>
                                            <a href="#" class="red"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="blue"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="black"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="add-to-cart text-center">
                                    <a href="#">ADD TO CART</a>
                                </div>
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li class="product-item man accessories">
                                <div class="product-thumb clearfix">
                                    <a href="#">
                                        <img src="{{asset('assets')}}/images/shop/sh-4/2.jpg" alt="image">
                                    </a>
                                    <span class="new">New</span>
                                </div>
                                <div class="product-info clearfix">
                                    <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                    <div class="price">
                                        <ins>
                                            <span class="amount">$100.00</span>
                                        </ins>
                                    </div>
                                </div>
                                <div class="add-to-cart text-center">
                                    <a href="#">ADD TO CART</a>
                                </div>
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li class="product-item kid woman">
                                <div class="product-thumb clearfix">
                                    <a href="#" class="product-thumb">
                                        <img src="{{asset('assets')}}/images/shop/sh-4/3.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="product-info clearfix">
                                    <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                    <div class="price">
                                        <ins>
                                            <span class="amount">$100.00</span>
                                        </ins>
                                    </div>
                                </div>
                                <div class="add-to-cart text-center">
                                    <a href="#">ADD TO CART</a>
                                </div>
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li class="product-item man accessories">
                                <div class="product-thumb clearfix">
                                    <a href="#" class="product-thumb">
                                        <img src="{{asset('assets')}}/images/shop/sh-4/4.jpg" alt="image">
                                    </a>
                                    <span class="new sale">Sale</span>
                                </div>
                                <div class="product-info clearfix">
                                    <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                    <div class="price">
                                        <del>
                                            <span class="regular">$120.00</span>
                                        </del>
                                        <ins>
                                            <span class="amount">$100.00</span>
                                        </ins>
                                    </div>
                                    <ul class="flat-color-list width-14">
                                        <li>
                                            <a href="#" class="red"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="blue"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="black"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="add-to-cart text-center">
                                    <a href="#">ADD TO CART</a>
                                </div>
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li class="product-item kid woman">
                                <div class="product-thumb clearfix">
                                    <a href="#" class="product-thumb">
                                        <img src="{{asset('assets')}}/images/shop/sh-4/5.jpg" alt="image">
                                    </a>
                                    <span class="new">New</span>
                                </div>
                                <div class="product-info clearfix">
                                    <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                    <div class="price">
                                        <ins>
                                            <span class="amount">$100.00</span>
                                        </ins>
                                    </div>
                                </div>
                                <div class="add-to-cart text-center">
                                    <a href="#">ADD TO CART</a>
                                </div>
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li class="product-item man accessories">
                                <div class="product-thumb clearfix">
                                    <a href="#" class="product-thumb">
                                        <img src="{{asset('assets')}}/images/shop/sh-4/6.jpg" alt="image">
                                    </a>
                                    <span class="new sale">Sale</span>
                                </div>
                                <div class="product-info clearfix">
                                    <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                    <div class="price">
                                        <del>
                                            <span class="regular">$150.00</span>
                                        </del>
                                        <ins>
                                            <span class="amount">$100.00</span>
                                        </ins>
                                    </div>
                                    <ul class="flat-color-list width-14">
                                        <li>
                                            <a href="#" class="red"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="blue"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="black"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="add-to-cart text-center">
                                    <a href="#">ADD TO CART</a>
                                </div>
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li class="product-item kid woman">
                                <div class="product-thumb clearfix">
                                    <a href="#" class="product-thumb">
                                        <img src="{{asset('assets')}}/images/shop/sh-4/7.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="product-info clearfix">
                                    <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                    <div class="price">
                                        <ins>
                                            <span class="amount">$100.00</span>
                                        </ins>
                                    </div>
                                </div>
                                <div class="add-to-cart text-center">
                                    <a href="#">ADD TO CART</a>
                                </div>
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li class="product-item man accessories">
                                <div class="product-thumb clearfix">
                                    <a href="#" class="product-thumb">
                                        <img src="{{asset('assets')}}/images/shop/sh-4/8.jpg" alt="image">
                                    </a>
                                    <span class="new">New</span>
                                </div>
                                <div class="product-info clearfix">
                                    <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                    <div class="price">
                                        <ins>
                                            <span class="amount">$100.00</span>
                                        </ins>
                                    </div>
                                </div>
                                <div class="add-to-cart text-center">
                                    <a href="#">ADD TO CART</a>
                                </div>
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PRODUCT -->

    <!-- ICON BOX -->
    <section class="flat-row row-icon-box bg-section bg-color-f5f">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="flat-icon-box icon-top style-1 clearfix text-center">
                        <div class="inner no-margin">
                            <div class="icon-wrap">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="text-wrap">
                                <h5 class="heading"><a href="#">Free Shipping</a></h5>
                                <p class="desc">Free Shipping on order over $99</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3">
                    <div class="flat-icon-box icon-top style-1 clearfix text-center">
                        <div class="inner">
                            <div class="icon-wrap">
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="text-wrap">
                                <h5 class="heading"><a href="#">Cash On Delivery</a></h5>
                                <p class="desc">The Internet Trend To Repeat</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3">
                    <div class="flat-icon-box icon-top style-1 clearfix text-center">
                        <div class="inner">
                            <div class="icon-wrap">
                                <i class="fa fa-gift"></i>
                            </div>
                            <div class="text-wrap">
                                <h5 class="heading"><a href="#">Gift For All</a></h5>
                                <p class="desc">Receive Gift When Subscribe</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3">
                    <div class="flat-icon-box icon-top style-1 clearfix text-center">
                        <div class="inner">
                            <div class="icon-wrap">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="text-wrap">
                                <h5 class="heading"><a href="#">Opening All Week</a></h5>
                                <p class="desc">6.00 am - 17.00pm</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
            </div>
        </div>
    </section>
    <!-- END ICON BOX -->

    <!-- NEW LATEST -->
    <section class="flat-row row-new-latest">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section margin-bottom-40">
                        <h2 class="title">New Latest</h2>
                    </div>
                    <div class="new-latest-wrap">
                        <div class="flat-new-latest flat-carousel-box post-wrap style3 data-effect clearfix" data-auto="false" data-column="3" data-column2="2" data-column3="1" data-gap="30" >
                            <div class="owl-carousel owl-theme">
                                <article class="post clearfix">
                                    <div class="featured-post data-effect-item">
                                        <img src="{{asset('assets')}}/images/blog/new-lastest-1-370x280.jpg" alt="image">
                                        <div class="content-post text-center">
                                            <div class="title-post">
                                                <h2><a href="blog-detail.html">Trend Of 2018</a></h2>
                                            </div><!-- /.title-post -->
                                            <ul class="meta-post">
                                                <li class="date">
                                                    OCT 08, 2018
                                                </li>
                                                <li class="author">
                                                    <a href="#">BY ADMIN</a>
                                                </li>
                                            </ul><!-- /.meta-post -->
                                            <div class="entry-post">
                                                <p>This is Heading the bank manager long ago won the battle for the heart of...</p>
                                                <div class="more-link">
                                                    <a href="blog-detail.html">READ MORE</a>
                                                </div>
                                            </div>
                                        </div><!-- /.content-post -->
                                        <div class="overlay-effect bg-overlay-black"></div>
                                    </div>
                                </article><!-- /.post -->
                                <article class="post clearfix">
                                    <div class="featured-post data-effect-item">
                                        <img src="{{asset('assets')}}/images/blog/new-lastest-2-370x280.jpg" alt="image">
                                        <div class="content-post text-center">
                                            <div class="title-post">
                                                <h2><a href="blog-detail.html">Trend Of 2018</a></h2>
                                            </div><!-- /.title-post -->
                                            <ul class="meta-post">
                                                <li class="date">
                                                    OCT 08, 2018
                                                </li>
                                                <li class="author">
                                                    <a href="#">BY ADMIN</a>
                                                </li>
                                            </ul><!-- /.meta-post -->
                                            <div class="entry-post">
                                                <p>This is Heading the bank manager long ago won the battle for the heart of...</p>
                                                <div class="more-link">
                                                    <a href="blog-detail.html">READ MORE</a>
                                                </div>
                                            </div>
                                        </div><!-- /.content-post -->
                                        <div class="overlay-effect bg-overlay-black"></div>
                                    </div>
                                </article><!-- /.post -->
                                <article class="post clearfix">
                                    <div class="featured-post data-effect-item">
                                        <img src="{{asset('assets')}}/images/blog/new-lastest-3-370x280.jpg" alt="image">
                                        <div class="content-post text-center">
                                            <div class="title-post">
                                                <h2><a href="blog-detail.html">Trend Of 2018</a></h2>
                                            </div><!-- /.title-post -->
                                            <ul class="meta-post">
                                                <li class="date">
                                                    OCT 08, 2018
                                                </li>
                                                <li class="author">
                                                    <a href="#">BY ADMIN</a>
                                                </li>
                                            </ul><!-- /.meta-post -->
                                            <div class="entry-post">
                                                <p>This is Heading the bank manager long ago won the battle for the heart of...</p>
                                                <div class="more-link">
                                                    <a href="blog-detail.html">READ MORE</a>
                                                </div>
                                            </div>
                                        </div><!-- /.content-post -->
                                        <div class="overlay-effect bg-overlay-black"></div>
                                    </div>
                                </article><!-- /.post -->
                                <article class="post clearfix">
                                    <div class="featured-post data-effect-item">
                                        <img src="{{asset('assets')}}/images/blog/new-lastest-1-370x280.jpg" alt="image">
                                        <div class="content-post text-center">
                                            <div class="title-post">
                                                <h2><a href="blog-detail.html">Trend Of 2018</a></h2>
                                            </div><!-- /.title-post -->
                                            <ul class="meta-post">
                                                <li class="date">
                                                    OCT 08, 2018
                                                </li>
                                                <li class="author">
                                                    <a href="#">BY ADMIN</a>
                                                </li>
                                            </ul><!-- /.meta-post -->
                                            <div class="entry-post">
                                                <p>This is Heading the bank manager long ago won the battle for the heart of...</p>
                                                <div class="more-link">
                                                    <a href="blog-detail.html">READ MORE</a>
                                                </div>
                                            </div>
                                        </div><!-- /.content-post -->
                                        <div class="overlay-effect bg-overlay-black"></div>
                                    </div>
                                </article><!-- /.post -->
                                <article class="post clearfix">
                                    <div class="featured-post data-effect-item">
                                        <img src="{{asset('assets')}}/images/blog/new-lastest-2-370x280.jpg" alt="image">
                                        <div class="content-post text-center">
                                            <div class="title-post">
                                                <h2><a href="blog-detail.html">Trend Of 2018</a></h2>
                                            </div><!-- /.title-post -->
                                            <ul class="meta-post">
                                                <li class="date">
                                                    OCT 08, 2018
                                                </li>
                                                <li class="author">
                                                    <a href="#">BY ADMIN</a>
                                                </li>
                                            </ul><!-- /.meta-post -->
                                            <div class="entry-post">
                                                <p>This is Heading the bank manager long ago won the battle for the heart of...</p>
                                                <div class="more-link">
                                                    <a href="blog-detail.html">READ MORE</a>
                                                </div>
                                            </div>
                                        </div><!-- /.content-post -->
                                        <div class="overlay-effect bg-overlay-black"></div>
                                    </div>
                                </article><!-- /.post -->
                                <article class="post clearfix">
                                    <div class="featured-post data-effect-item">
                                        <img src="{{asset('assets')}}/images/blog/new-lastest-3-370x280.jpg" alt="image">
                                        <div class="content-post text-center">
                                            <div class="title-post">
                                                <h2><a href="blog-detail.html">Trend Of 2018</a></h2>
                                            </div><!-- /.title-post -->
                                            <ul class="meta-post">
                                                <li class="date">
                                                    OCT 08, 2018
                                                </li>
                                                <li class="author">
                                                    <a href="#">BY ADMIN</a>
                                                </li>
                                            </ul><!-- /.meta-post -->
                                            <div class="entry-post">
                                                <p>This is Heading the bank manager long ago won the battle for the heart of...</p>
                                                <div class="more-link">
                                                    <a href="blog-detail.html">READ MORE</a>
                                                </div>
                                            </div>
                                        </div><!-- /.content-post -->
                                        <div class="overlay-effect bg-overlay-black"></div>
                                    </div>
                                </article><!-- /.post -->
                            </div><!-- /.owl-carousel -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END NEW LATEST -->

    <section class="flat-row mail-chimp">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text">
                        <h3>Sign up for Send Newsletter</h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="subscribe clearfix">
                        <form action="#" method="post" accept-charset="utf-8" id="subscribe-form">
                            <div class="subscribe-content">
                                <div class="input">
                                    <input type="email" name="subscribe-email" placeholder="Your Email">
                                </div>
                                <div class="button">
                                    <button type="button">SUBCRIBE</button>
                                </div>
                            </div>
                        </form>
                        <ul class="flat-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul><!-- /.flat-social -->
                    </div><!-- /.subscribe -->
                </div>
            </div>
        </div>
    </section><!-- /.mail-chimp -->


@endsection

