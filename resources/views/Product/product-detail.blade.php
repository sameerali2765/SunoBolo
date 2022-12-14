@extends('layout')

@section('main')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Book With Pen</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Shop Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Product Details Area -->
    <section class="product-details-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-image">
                        <img src="{{ asset('assets/img/shop/3.jpg')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="product-details-desc">
                        <h3>Book With Pen</h3>

                        <div class="price">
                            <span class="new-price">$14.00</span>
                            <span class="old-price">$20.00</span>
                        </div>

                        <div class="product-review">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <a href="#" class="rating-count">3 reviews</a>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <div class="product-add-to-cart">
                            <div class="input-counter">
                                <span class="minus-btn"><i class="fas fa-minus"></i></span>
                                <input type="text" min="1" value="1">
                                <span class="plus-btn"><i class="fas fa-plus"></i></span>
                            </div>

                            <button type="submit" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>

                        <div class="buy-checkbox-btn">
                            <div class="item">
                                <input class="inp-cbx" id="cbx" type="checkbox">
                                <label class="cbx" for="cbx">
                                    <span>
                                        <svg width="12px" height="10px" viewbox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>I agree with the terms and conditions</span>
                                </label>
                            </div>

                            <div class="item">
                                <a href="#" class="btn btn-light">Buy it now!</a>
                            </div>
                        </div>

                        <div class="custom-payment-options">
                            <span>Guaranteed safe checkout:</span>

                            <div class="payment-methods">
                                <a href="#"><img src="{{ asset('assets/img/payment/1.svg')}}" alt="image"></a>
                                <a href="#"><img src="{{ asset('assets/img/payment/2.svg')}}" alt="image"></a>
                                <a href="#"><img src="{{ asset('assets/img/payment/3.svg')}}" alt="image"></a>
                                <a href="#"><img src="{{ asset('assets/img/payment/4.svg')}}" alt="image"></a>
                                <a href="#"><img src="{{ asset('assets/img/payment/5.svg')}}" alt="image"></a>
                                <a href="#"><img src="{{ asset('assets/img/payment/6.svg')}}" alt="image"></a>
                                <a href="#"><img src="{{ asset('assets/img/payment/7.svg')}}" alt="image"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="tab products-details-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li><a href="#">
                                        <div class="dot"></div> Description
                                    </a></li>
                                    
                                    <li><a href="#">
                                        <div class="dot"></div> Additional information
                                    </a></li>

                                    <li><a href="#">
                                        <div class="dot"></div> Reviews
                                    </a></li>
                                </ul>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <p>Design inspiration lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum.  Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nulla libero. Vivamus pharetra posuere sapien.</p>
                                        </div>
                                    </div>

                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <ul class="additional-information">
                                                <li><span>Brand:</span> ThemeForest</li>
                                                <li><span>Color:</span> Brown</li>
                                                <li><span>Size:</span> Large, Medium</li>
                                                <li><span>Weight:</span> 27 kg</li>
                                                <li><span>Dimensions:</span> 16 x 22 x 123 cm</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <div class="product-review-form">
                                                <h3>Customer Reviews</h3>

                                                <div class="review-title">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <p>Based on 3 reviews</p>

                                                    <a href="#" class="btn btn-primary">Write a Review</a>
                                                </div>

                                                <div class="review-comments">
                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <span><strong>Admin</strong> on <strong>Sep 21, 2021</strong></span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                                                        <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                    </div>

                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <span><strong>Admin</strong> on <strong>Sep 21, 2021</strong></span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                                                        <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                    </div>

                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <span><strong>Admin</strong> on <strong>Sep 21, 2021</strong></span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                                                        <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                    </div>
                                                </div>

                                                <div class="review-form">
                                                    <h3>Write a Review</h3>

                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <input type="text" id="review-title" name="review-title" placeholder="Enter your review a title" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <textarea name="review-body" id="review-body" cols="30" rows="7" placeholder="Write your comments here" class="form-control"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <button type="submit" class="btn btn-primary">Submit Review</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="related-products">
            <div class="container">
                <div class="section-title">
                    <span>Our Shop</span>
                    <h2>Related Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-product-box">
                            <div class="product-image">
                                <a href="#">
                                    <img src="{{ asset('assets/img/shop/1.jpg')}}" alt="image">
                                    <img src="{{ asset('assets/img/shop/1-1.jpg')}}" alt="image">
                                </a>

                                <a href="#" class="add-to-cart-btn">Add To Cart <i class="flaticon-shopping-basket"></i></a>
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

                                <a href="#" class="add-to-cart-btn">Add To Cart <i class="flaticon-shopping-basket"></i></a>

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
                                    <img src="assets/img/shop/3.jpg" alt="image">
                                    <img src="assets/img/shop/3-1.jpg" alt="image">
                                </a>

                                <a href="#" class="add-to-cart-btn">Add To Cart <i class="flaticon-shopping-basket"></i></a>
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
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Details Area -->

@endsection