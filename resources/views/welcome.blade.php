@extends("layouts.app")

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Көрпелер әлемі</h4>
                    <h3>Қазақстандағы үздік көрпелер тек бізде!</h3>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Сапа</h4>
                    <h3>Біз тек ғана сапаға жұмыс жасаймыз!</h3>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Жылдам</h4>
                    <h3>Клиненттерді күттірмеу біздің мақсат!</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Соңғы тауарлар</h2>
                        <a href="{{ route('store') }}">барлығын көру <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"><img src={{ $product->image }} alt="" /></a>
                            <div class="down-content">
                                <a href="#">
                                    <h4>{{ $product->name }}</h4>
                                </a>
                                <h6>{{ $product->price }} &#8366</h6>
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
                @endforeach
            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Біздің орталық</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Сапалы көрпелер іздеп жүрсіңбе?</h4>
                        <p>
                            Біздің көрпе тігу орталығы 2015 жылдан бері жұмыс жасап келеді.
                            Осы жылдар аралығында барлығы 3 филиал жұмыс жасап, қазақстан
                            тұрғындарына жоғары деңгейде қызмет көрсетуде.
                        </p>
                        <ul class="featured-list">
                            <li>Қазақстан қалаларына жеткізу қызметі</li>
                            <li>1000+ риза клиенттер</li>
                            <li>Жылдам қызмет</li>
                            <li>Қолжетімді баға, сапалы өнім</li>
                            <li>Экологиялық таза өнім</li>
                        </ul>
                        <a href="about.html" class="filled-button">Толығырақ</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/images/feature-image.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
