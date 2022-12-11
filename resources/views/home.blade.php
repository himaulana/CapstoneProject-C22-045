@extends('layouts.index')

@section('title', 'Home')

@section('content')
    <div class="container-xl hero p-5 text-base">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <h1 class="display-4 fw-bold">Find the perfect plants for your garden</h1>
                <form class="d-flex flex-row" method="get" action="{{ route('explore__search') }}">
                    <input type="text" class="form-control flex-grow-2 form-input py-3" name="search" id="search"
                        placeholder="Insert your key to find plant">
                    <button type="submit" class="btn button-input button-search fw-semibold">Search</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-xl text-base t-5 pt-5">
        <div class="row flex-lg-row align-items-center py-5">
            <div class="col-lg-7">
                <img src="{{ url('/images/about-image2.png') }}" alt="Growing Plants" class="dblock mx-lg-auto img-fluid"
                    width="1200px">
            </div>
            <div class="col-12 col-lg-5 text-lg-start text-center">
                <h2 class="fw-semibold fs-1 lh-sm mb-4 text-break">Improve local ecosystems and air quality by growing
                    plants
                </h2>
                <p class="fw-semibold text-wrap text-break">Flowers have always made people better, happier and more
                    helpful they are sunshine, food, and medicine for the soul. <br> With gardening, the soul becomes calm,
                    the mood can also improve, the mind can become fresher. By gardening, you are also taught to explore
                    life. You learn many things about life.</p>
                <button type="button" class="btn button-input mt-2 px-5 py-3 fw-semibold explore-button mb-4">
                    <a href="/explore">Explore
                        Now</a>
                </button>
            </div>
        </div>
    </div>

    <div class="container-xl py-5 text-base text-center">
        <h2 class="fs-1 fw-semibold">Let's find plants that are currently popular</h2>
        <p class="fw-semibold fs-6">Find a popular plant in here</p>
    </div>

    <section class="py-5">
        <div class="container-xl">
            <div class="row">
                <div class="col-6">
                    <h2 class="fw-semibold mb-5 px-auto">Popular Plant</h2>
                </div>
                <div class="col-6 text-end">
                    <a href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <button class="rounded-2 less-than bg-transparent mx-auto"><svg width="17" height="25"
                                viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 2L3 12.5L15 23" stroke="#0F222B" stroke-width="3" stroke-linecap="round" />
                            </svg>
                        </button>
                    </a>
                    <a href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <button class="rounded-2 more-than ms-4 mx-auto"><svg width="17" height="25"
                                viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 2L14 12.5L2 23" stroke="white" stroke-width="3" stroke-linecap="round" />
                            </svg>
                        </button>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    @foreach ($plants as $item)
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <a href="/plant/{{ $item->id }}"
                                                class="text-decoration-none text-base link-dark">
                                                <div class="card rounded-5 card-plant mb-3 text-center">
                                                    <img src="{{ $item->link_image }}.{{ $item->id }}" class="m-3"
                                                        alt="">
                                                    <div class="card-body">
                                                        <h2 class="fw-semibold">{{ $item->name }}</h3>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-xl text-base">
        <div class="row flex-lg-row-reverse align-items-center pb-5 pt-lg-">
            <div class="col-lg-7">
                <img src="{{ url('images/tips-image.png') }}" alt="Growing Plants" class="dblock mx-lg-auto img-fluid"
                    width="700px">
            </div>
            <div class="col-12 col-lg-5 text-lg-start text-center">
                <h2 class="fw-semibold fs-1 lh-sm mb-4 text-break">{{ $article[0]->title }}</h2>
                <p class="fw-semibold text-wrap text-break">{{ Str::limit($article[0]->content, 300) }}</p>
                <button type="button" class="btn button-input mt-2 px-5 py-3 fw-semibold explore-button mb-4">
                    <a href="/article/{{ $article[0]->id }}">Explore
                        Now</a>
                </button>
            </div>
        </div>
    </div>

    <div class="container-xl contact-us p-5 text-base position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class=" form-email py-3 px-2 border border-white">
                <div class="mb-2">
                    <input type="email" class="form-control input-email" id="exampleFormControlInput1"
                        placeholder="Email">
                </div>
                <div class="mb-2">
                    <textarea class="form-control input-email" id="exampleFormControlTextarea1" placeholder="Type your message.."></textarea>
                </div>
                <div class="mb-2 text-center">
                    <button class="btn btn-danger shadow-none rounded-4 w-75 input-email text-base ">Send now</button>
                </div>
            </div>
        </div>
    </div>
@endsection
