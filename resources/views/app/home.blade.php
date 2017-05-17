@extends('app.layout')

@section('title')
    Home
@endsection

@section('script')
    <script src="/js/angular/HomeController.js"></script>
@endsection

@section('include_banner')
    @include('app.header_banner')
@endsection
@section('content')
    <div ng-controller="HomeController as controller">
        @include('app.three_module_header')

        @include('app.three_banner_advertisement')

        <div>
            <section class="product-hot" id="product-hot">
                <div class="container">
                    <div class="home__title product-hot__title">
                        <h2>Sản phẩm nổi bật</h2>

                        <ul class="cate-list hidden-xs">

                            <li class="cate-list__item">
                                <a href="/dien-thoai" class="cate-list__link">Điện thoại</a>
                            </li>

                            <li class="cate-list__item">
                                <a href="/may-tinh-bang" class="cate-list__link">Máy tính bảng</a>
                            </li>

                            <li class="cate-list__item">
                                <a href="/laptop" class="cate-list__link">Laptop</a>
                            </li>

                            <li class="cate-list__item">
                                <a href="/may-cu" class="cate-list__link">Máy cũ</a>
                            </li>

                            <li class="cate-list__item">
                                <a href="/phu-kien" class="cate-list__link">Phụ kiện</a>
                            </li>

                        </ul>

                    </div>
                    <div class="product-home__slide">
                        <div class="slider-product-list owl-carousel owl-theme" style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 100%; left: 0px; display: inline-block;">
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-iphone-7-32gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                             alt="Điện thoại iPhone 7 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-iphone-7-32gb"
                                                                class="button quick-view"
                                                                data-toggle="modal" data-target="#myModal">
                                                            Xem nhanh
                                                        </button>

                                                        <form class="variants"
                                                              id="product-actions-4738132"
                                                              enctype="multipart/form-data">


                                                            <button class="button btn-cart" title="Chọn sản phẩm"
                                                                    aria-label="Chọn sản phẩm" type="button"
                                                                    data-toggle="modal" data-target="#CartDesktop">
                                                                <span>Chọn</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                            thoại iPhone 7 32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>20.000.000₫</span><span
                                                                    class="sale-flag">-11%</span></p>
                                                        <p class="product-item__price__special">17.790.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-iphone-7-32gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                             alt="Điện thoại iPhone 7 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-iphone-7-32gb"
                                                                class="button quick-view"
                                                                data-toggle="modal" data-target="#myModal">
                                                            Xem nhanh
                                                        </button>

                                                        <form class="variants"
                                                              id="product-actions-4738132"
                                                              enctype="multipart/form-data">


                                                            <button class="button btn-cart" title="Chọn sản phẩm"
                                                                    aria-label="Chọn sản phẩm" type="button"
                                                                    data-toggle="modal" data-target="#CartDesktop">
                                                                <span>Chọn</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                            thoại iPhone 7 32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>20.000.000₫</span><span
                                                                    class="sale-flag">-11%</span></p>
                                                        <p class="product-item__price__special">17.790.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-iphone-7-32gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                             alt="Điện thoại iPhone 7 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-iphone-7-32gb"
                                                                class="button quick-view"
                                                                data-toggle="modal" data-target="#myModal">
                                                            Xem nhanh
                                                        </button>

                                                        <form class="variants"
                                                              id="product-actions-4738132"
                                                              enctype="multipart/form-data">


                                                            <button class="button btn-cart" title="Chọn sản phẩm"
                                                                    aria-label="Chọn sản phẩm" type="button"
                                                                    data-toggle="modal" data-target="#CartDesktop">
                                                                <span>Chọn</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                            thoại iPhone 7 32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>20.000.000₫</span><span
                                                                    class="sale-flag">-11%</span></p>
                                                        <p class="product-item__price__special">17.790.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-iphone-7-32gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                             alt="Điện thoại iPhone 7 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-iphone-7-32gb"
                                                                class="button quick-view"
                                                                data-toggle="modal" data-target="#myModal">
                                                            Xem nhanh
                                                        </button>

                                                        <form class="variants"
                                                              id="product-actions-4738132"
                                                              enctype="multipart/form-data">


                                                            <button class="button btn-cart" title="Chọn sản phẩm"
                                                                    aria-label="Chọn sản phẩm" type="button"
                                                                    data-toggle="modal" data-target="#CartDesktop">
                                                                <span>Chọn</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                            thoại iPhone 7 32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>20.000.000₫</span><span
                                                                    class="sale-flag">-11%</span></p>
                                                        <p class="product-item__price__special">17.790.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-iphone-7-32gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                             alt="Điện thoại iPhone 7 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-iphone-7-32gb"
                                                                class="button quick-view"
                                                                data-toggle="modal" data-target="#myModal">
                                                            Xem nhanh
                                                        </button>

                                                        <form class="variants"
                                                              id="product-actions-4738132"
                                                              enctype="multipart/form-data">


                                                            <button class="button btn-cart" title="Chọn sản phẩm"
                                                                    aria-label="Chọn sản phẩm" type="button"
                                                                    data-toggle="modal" data-target="#CartDesktop">
                                                                <span>Chọn</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                            thoại iPhone 7 32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>20.000.000₫</span><span
                                                                    class="sale-flag">-11%</span></p>
                                                        <p class="product-item__price__special">17.790.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-iphone-7-32gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                             alt="Điện thoại iPhone 7 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-iphone-7-32gb"
                                                                class="button quick-view"
                                                                data-toggle="modal" data-target="#myModal">
                                                            Xem nhanh
                                                        </button>

                                                        <form class="variants"
                                                              id="product-actions-4738132"
                                                              enctype="multipart/form-data">


                                                            <button class="button btn-cart" title="Chọn sản phẩm"
                                                                    aria-label="Chọn sản phẩm" type="button"
                                                                    data-toggle="modal" data-target="#CartDesktop">
                                                                <span>Chọn</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                            thoại iPhone 7 32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>20.000.000₫</span><span
                                                                    class="sale-flag">-11%</span></p>
                                                        <p class="product-item__price__special">17.790.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-iphone-7-32gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                             alt="Điện thoại iPhone 7 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-iphone-7-32gb"
                                                                class="button quick-view"
                                                                data-toggle="modal" data-target="#myModal">
                                                            Xem nhanh
                                                        </button>

                                                        <form class="variants"
                                                              id="product-actions-4738132"
                                                              enctype="multipart/form-data">


                                                            <button class="button btn-cart" title="Chọn sản phẩm"
                                                                    aria-label="Chọn sản phẩm" type="button"
                                                                    data-toggle="modal" data-target="#CartDesktop">
                                                                <span>Chọn</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                            thoại iPhone 7 32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>20.000.000₫</span><span
                                                                    class="sale-flag">-11%</span></p>
                                                        <p class="product-item__price__special">17.790.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-iphone-7-32gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                             alt="Điện thoại iPhone 7 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-iphone-7-32gb"
                                                                class="button quick-view"
                                                                data-toggle="modal" data-target="#myModal">
                                                            Xem nhanh
                                                        </button>

                                                        <form class="variants"
                                                              id="product-actions-4738132"
                                                              enctype="multipart/form-data">


                                                            <button class="button btn-cart" title="Chọn sản phẩm"
                                                                    aria-label="Chọn sản phẩm" type="button"
                                                                    data-toggle="modal" data-target="#CartDesktop">
                                                                <span>Chọn</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                            thoại iPhone 7 32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>20.000.000₫</span><span
                                                                    class="sale-flag">-11%</span></p>
                                                        <p class="product-item__price__special">17.790.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-iphone-7-32gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                             alt="Điện thoại iPhone 7 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-iphone-7-32gb"
                                                                class="button quick-view"
                                                                data-toggle="modal" data-target="#myModal">
                                                            Xem nhanh
                                                        </button>

                                                        <form class="variants"
                                                              id="product-actions-4738132"
                                                              enctype="multipart/form-data">


                                                            <button class="button btn-cart" title="Chọn sản phẩm"
                                                                    aria-label="Chọn sản phẩm" type="button"
                                                                    data-toggle="modal" data-target="#CartDesktop">
                                                                <span>Chọn</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                            thoại iPhone 7 32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>20.000.000₫</span><span
                                                                    class="sale-flag">-11%</span></p>
                                                        <p class="product-item__price__special">17.790.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-iphone-7-32gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                             alt="Điện thoại iPhone 7 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-iphone-7-32gb"
                                                                class="button quick-view"
                                                                data-toggle="modal" data-target="#myModal">
                                                            Xem nhanh
                                                        </button>

                                                        <form class="variants"
                                                              id="product-actions-4738132"
                                                              enctype="multipart/form-data">


                                                            <button class="button btn-cart" title="Chọn sản phẩm"
                                                                    aria-label="Chọn sản phẩm" type="button"
                                                                    data-toggle="modal" data-target="#CartDesktop">
                                                                <span>Chọn</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                            thoại iPhone 7 32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>20.000.000₫</span><span
                                                                    class="sale-flag">-11%</span></p>
                                                        <p class="product-item__price__special">17.790.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-iphone-7-32gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                             alt="Điện thoại iPhone 7 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-iphone-7-32gb"
                                                                class="button quick-view"
                                                                data-toggle="modal" data-target="#myModal">
                                                            Xem nhanh
                                                        </button>

                                                        <form class="variants"
                                                              id="product-actions-4738132"
                                                              enctype="multipart/form-data">


                                                            <button class="button btn-cart" title="Chọn sản phẩm"
                                                                    aria-label="Chọn sản phẩm" type="button"
                                                                    data-toggle="modal" data-target="#CartDesktop">
                                                                <span>Chọn</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                            thoại iPhone 7 32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>20.000.000₫</span><span
                                                                    class="sale-flag">-11%</span></p>
                                                        <p class="product-item__price__special">17.790.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-iphone-7-32gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                             alt="Điện thoại iPhone 7 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-iphone-7-32gb"
                                                                class="button quick-view"
                                                                data-toggle="modal" data-target="#myModal">
                                                            Xem nhanh
                                                        </button>

                                                        <form class="variants"
                                                              id="product-actions-4738132"
                                                              enctype="multipart/form-data">


                                                            <button class="button btn-cart" title="Chọn sản phẩm"
                                                                    aria-label="Chọn sản phẩm" type="button"
                                                                    data-toggle="modal" data-target="#CartDesktop">
                                                                <span>Chọn</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                            thoại iPhone 7 32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>20.000.000₫</span><span
                                                                    class="sale-flag">-11%</span></p>
                                                        <p class="product-item__price__special">17.790.000₫</p>

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
            </section>
        </div>

        <div>
            <section class="banner-large hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="/">
                                <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/home-banner-center.jpg?1493953410461"
                                     alt="Samsung Galaxy j7 Prime">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{--@include('app.news')--}}
        @include('app.preview')
        @include('app.cart_model')
    </div>
@endsection


