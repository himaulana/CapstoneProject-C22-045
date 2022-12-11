@extends('layouts.index')

@section('title', 'Explore')

@section('content')
    @if (request()->get('search'))
        <div class="container-xl text-base">
            <div class="row flex-lg-row-reverse align-items-center py-5">
                <div class="col-12 col-lg-5 text-lg-start text-center">
                    <h2 class="fw-bold fs-1 lh-sm text-break">Find and
                    </h2>
                    <h3 class="fw-semibold">Learning <span class="ideas">the plants</span></h3>
                    <h3 class="fw-semibold"><span class="ideas">in your home</span></h3>
                </div>
                <form class="d-flex flex-row" method="get" action="{{ route('explore__search') }}">
                    <input type="text" class="form-control flex-grow-2 form-input py-3" name="search" id="search"
                        placeholder="Insert your key to find plant">
                    <button type="submit" class="btn button-input button-search fw-semibold">Search</button>
                </form>
            </div>
        </div>

        <div class="container-xl py-5 text-base text-center">
            <h2 class="fs-1 fw-semibold">Let's find plants that are currently popular</h2>
        </div>

        <section class="py-5">
            <div class="container-xl">
                <div class="row">
                    <div class="col-6">
                        <h2 class="fw-semibold mb-5 px-auto">Your Find</h2>
                    </div>
                    <div class="col-6 text-end">
                        <a href="#carouselExampleIndicators3" role="button" data-slide="prev">
                            <button class="rounded-2 less-than bg-transparent mx-auto"><svg width="17" height="25"
                                    viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 2L3 12.5L15 23" stroke="#0F222B" stroke-width="3" stroke-linecap="round" />
                                </svg>
                            </button>
                        </a>
                        <a href="#carouselExampleIndicators3" role="button" data-slide="next">
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
                                    @if (count($search) < 1)
                                        <h3 class="fw-semibold">Upsss <span class="ideas">keyword not found</span></h3>
                                    @else
                                        <div class="row">
                                            @foreach ($search as $item)
                                                <div class="col-sm-12 col-md-6 col-lg-4">
                                                    <a href="/plant/{{ $item->id }}"
                                                        class="text-decoration-none text-base link-dark">
                                                        <div class="card rounded-5 card-plant mb-3 text-center">
                                                            <img src="{{ $item->link_image }}.{{ $item->id }}"
                                                                class="m-3" alt="">
                                                            <div class="card-body">
                                                                <h2 class="fw-semibold">{{ $item->name }}</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-5">
            <div class="container-xl">
                <div class="row">
                    <div class="col-6">
                        <h2 class="fw-semibold mb-5 px-auto">All Plant</h2>
                    </div>
                    <div class="col-6 text-end">
                        <a href="#carouselExampleIndicators3" role="button" data-slide="prev">
                            <button class="rounded-2 less-than bg-transparent mx-auto"><svg width="17" height="25"
                                    viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 2L3 12.5L15 23" stroke="#0F222B" stroke-width="3" stroke-linecap="round" />
                                </svg>
                            </button>
                        </a>
                        <a href="#carouselExampleIndicators3" role="button" data-slide="next">
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
                                                        <img src="{{ $item->link_image }}.{{ $item->id }}"
                                                            class="m-3" alt="">
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
                    <img src="https://source.unsplash.com/random/200x200/?healthy,{{ $item->id }}"
                        alt="Growing Plants" class="dblock mx-lg-auto img-fluid" width="700px">
                </div>
                <div class="col-12 col-lg-5 text-lg-start text-center">
                    <h2 class="fw-semibold fs-1 lh-sm mb-4 text-break">{{ $article[0]->title }}
                    </h2>
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
                        <button class="btn btn-danger shadow-none rounded-4 w-75 input-email text-white ">Send now</button>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container-xl text-base">
            <div class="row flex-lg-row-reverse align-items-center py-5">
                <div class="col-lg-7">
                    <img src="{{ url('images/explore-image.png') }}" alt="Growing Plants"
                        class="dblock mx-lg-auto img-fluid filter-image" width="1200px">
                </div>
                <div class="col-12 col-lg-5 text-lg-start text-center">
                    <h2 class="fw-bold fs-1 lh-sm text-break">Explore
                    </h2>
                    <h3 class="fw-semibold">tips and <span class="ideas">ideas</span></h3>
                </div>
            </div>
        </div>

        <section class="py-5">
            <div class="container-xl">
                <div class="row">
                    <div class="col-6">
                        <h2 class="fw-semibold mb-5 px-auto">Find You Plant</h2>
                    </div>
                    <div class="col-6 text-end">
                        <a href="#carouselExampleIndicators3" role="button" data-slide="prev">
                            <button class="rounded-2 less-than bg-transparent mx-auto"><svg width="17" height="25"
                                    viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 2L3 12.5L15 23" stroke="#0F222B" stroke-width="3"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                        </a>
                        <a href="#carouselExampleIndicators3" role="button" data-slide="next">
                            <button class="rounded-2 more-than ms-4 mx-auto"><svg width="17" height="25"
                                    viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 2L14 12.5L2 23" stroke="white" stroke-width="3"
                                        stroke-linecap="round" />
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
                                                <div class="text-decoration-none text-base link-dark">
                                                    <div class="card rounded-5 card-plant mb-3 text-center">
                                                        <img src="https://source.unsplash.com/random/300x300/?decorative-plant,{{ $item->id }}"
                                                            class="m-3" alt="">
                                                        <div class="card-body">
                                                            <h3 class="fw-semibold"><a href="/plant/{{ $item->id }}"
                                                                    style="text-decoration: none; color:black">{{ $item->name }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
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

        <div class="container-xl py-5 text-base text-center">
            <h2 class="fs-1 fw-semibold">Explore useful tips and more ideas for your plants</h2>
            <p class="fw-semibold fs-6">Lorem ipsum is simply dummy text of printing and typesetting
                industry
            </p>
        </div>

        <section class="py-5">
            <div class="container-xl">
                <div class="row">
                    <div class="col-6">
                        <h2 class="fw-semibold mb-5 px-auto">Plant Care Basic</h2>
                    </div>
                    <div class="col-6 text-end">
                        <a href="#carouselExampleIndicators3" role="button" data-slide="prev">
                            <button class="rounded-2 less-than bg-transparent mx-auto"><svg width="17" height="25"
                                    viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 2L3 12.5L15 23" stroke="#0F222B" stroke-width="3"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                        </a>
                        <a href="#carouselExampleIndicators3" role="button" data-slide="next">
                            <button class="rounded-2 more-than ms-4 mx-auto"><svg width="17" height="25"
                                    viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 2L14 12.5L2 23" stroke="white" stroke-width="3"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        @foreach ($article as $item)
                                            <div class="col-sm-12 col-md-6 col-lg-4">
                                                <div class="text-decoration-none text-base link-dark">
                                                    <div class="card rounded-5 card-plant mb-3 text-center">
                                                        <img src="https://source.unsplash.com/random/300x300/?decorative-plant,{{ $item->id }}"
                                                            class="m-3" alt="">
                                                        <div class="card-body">
                                                            <h2 class="fw-semibold">{{ $item->title }}</h3>
                                                                <button type="button"
                                                                    class="btn button-input mt-2 px-5 py-3 fw-semibold explore-button mb-4">
                                                                    <a href="/article/{{ $item->id }}">Explore
                                                                        Now</a>
                                                                </button>
                                                        </div>
                                                    </div>
                                                </div>
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
        <div class="container-xl contact-us2 p-5 text-base position-relative mt-5">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class=" form-email py-3 px-2 border border-white">
                    <div class="mb-2">
                        <input type="email" class="form-control input-email2" id="exampleFormControlInput1"
                            placeholder="Email">
                    </div>
                    <div class="mb-2">
                        <textarea class="form-control input-email2" id="exampleFormControlTextarea1" placeholder="Type your message.."></textarea>
                    </div>
                    <div class="mb-2 text-center">
                        <button class="btn warn btn-warning shadow-none rounded-4 w-75 input-email2 text-white ">Send
                            now</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
