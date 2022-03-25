@extends("layouts.app")

@section('content')
    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Сапалы көрпелер</h4>
                        <h2>Тек ғана бізде!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">Барлығы</li>
                            <li data-filter=".dev">Жеңілдіктер</li>
                            <li data-filter=".gra">Соңғылар</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/product_01.jpg" alt="" /></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>&#8366 25,000</h6>

                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/product_02.jpg" alt="" /></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$16.75</h6>

                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/product_03.jpg" alt="" /></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$32.50</h6>

                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/product_04.jpg" alt="" /></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>

                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (48)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/product_05.jpg" alt="" /></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$18.75</h6>

                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/product_06.jpg" alt="" /></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$12.50</h6>

                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="pages">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
