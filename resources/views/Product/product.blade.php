@extends('layout')

@section('main')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Shop</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Shop Area -->
    <section class="shop-area ptb-100">
        <div class="container">
            <div class="woocommerce-topbar">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <div class="woocommerce-result-count">
                            <p>Showing 1-8 of 14 results</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <div class="woocommerce-topbar-ordering">
                            <select>
                                <option value="1">Default sorting</option>
                                <option value="2">Sort by popularity</option>
                                <option value="0">Sort by average rating</option>
                                <option value="3">Sort by latest</option>
                                <option value="4">Sort by price: low to high</option>
                                <option value="5">Sort by price: high to low</option>
                                <option value="6">Sort by new</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ asset('assets/img/shop/1.jpg')}}" alt="image">
                                <img src="{{ asset('assets/img/shop/1-1.jpg')}}" alt="image">
                            </a>

                            <a href="{{ url ('product-detail')}}" class="add-to-cart-btn">Add To Cart <i class="flaticon-shopping-bag"></i></a>
                        </div>

                        <div class="product-content">
                            <h3><a href="#">White Book</a></h3>
                            <div class="price">
                                <span class="new">$8.50</span>
                                <span class="old">$12.50</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ asset('assets/img/shop/2.jpg')}}" alt="image">
                                <img src="{{ asset('assets/img/shop/2-1.jpg')}}" alt="image">
                            </a>

                            <a href="#" class="add-to-cart-btn">Add To Cart <i class="flaticon-shopping-bag"></i></a>

                            <div class="sale-btn">Sale!</div>
                        </div>

                        <div class="product-content">
                            <h3><a href="#">Red Side Book</a></h3>
                            <div class="price">
                                <span class="new">$12.50</span>
                                <span class="old">$20.50</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ asset('assets/img/shop/3.jpg')}}" alt="image">
                                <img src="{{ asset('assets/img/shop/3-1.jpg')}}" alt="image">
                            </a>

                            <a href="#" class="add-to-cart-btn">Add To Cart <i class="flaticon-shopping-bag"></i></a>
                        </div>

                        <div class="product-content">
                            <h3><a href="#">Book With Pen</a></h3>
                            <div class="price">
                                <span class="new">$8.50</span>
                                <span class="old">$12.50</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ asset('assets/img/shop/4.jpg')}}" alt="image">
                                <img src="{{ asset('assets/img/shop/4-1.jpg')}}" alt="image">
                            </a>

                            <a href="#" class="add-to-cart-btn">Add To Cart <i class="flaticon-shopping-bag"></i></a>
                        </div>

                        <div class="product-content">
                            <h3><a href="#">Drop Side Book</a></h3>
                            <div class="price">
                                <span class="new">$7.50</span>
                                <span class="old">$11.50</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ asset('assets/img/shop/5.jpg')}}" alt="image">
                                <img src="{{ asset('assets/img/shop/5-1.jpg')}}" alt="image">
                            </a>

                            <a href="#" class="add-to-cart-btn">Add To Cart <i class="flaticon-shopping-bag"></i></a>
                        </div>

                        <div class="product-content">
                            <h3><a href="#">Color Book</a></h3>
                            <div class="price">
                                <span class="new">$10.50</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ asset('assets/img/shop/6.jpg')}}" alt="image">
                                <img src="{{ asset('assets/img/shop/6-1.jpg')}}" alt="image">
                            </a>

                            <a href="#" class="add-to-cart-btn">Add To Cart <i class="flaticon-shopping-bag"></i></a>
                        </div>

                        <div class="product-content">
                            <h3><a href="#">Last Book</a></h3>
                            <div class="price">
                                <span class="new">$15.00</span>
                                <span class="old">$20.50</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                        <a href="#" class="page-numbers">1</a>
                        <span class="page-numbers current" aria-current="page">2</span>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Area -->
@endsection