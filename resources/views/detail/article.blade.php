@extends('layouts.index')

@section('title', 'Article')

@section('content')
    <div class="container-xl">
        <div class="container-xl mt-5">
            <div class="card detail">
                <div class="card-body position-relative card-tanaman mx-4 my-3 text-center">
                    <img src="" alt="">
                    <h2 class="card-title fw-semibold text-center">{{ $article_detail->title }}</h2>
                    <img src="https://source.unsplash.com/random/300x300/?tips,healthy" alt="Growing Plants"
                        class="mx-auto img-fluid" width="462px">
                    <p class="card-text mt-4 text-start pb-5">{{ $article_detail->content }}
                    </p>
                </div>
            </div>
        </div>
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
                                    @foreach ($articles as $item)
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <a href="/article/{{ $item->id }}"
                                                class="text-decoration-none text-base link-dark">
                                                <div class="card rounded-5 card-plant mb-3 text-center">
                                                    <img src="https://source.unsplash.com/random/300x300/?healthy.{{ $item->id }}"
                                                        class="m-3" alt="">
                                                    <div class="card-body">
                                                        <h2 class="fw-semibold">{{ $item->title }}</h3>
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

    <div class="container-xl text-base mt-5">
        <div class="row flex-lg-row-reverse align-items-center py-5 gy-5 g-lg-5">
            <div class="col-lg-6 text-center">
                <img src="{{ $plant[0]->link_image }}.{{ $plant[0]->id }}" alt="Growing Plants"
                    class="dblock mx-lg-auto img-fluid" width="538px">
            </div>
            <div class="col-12 col-lg-6 text-lg-start text-center">
                <h2 class="fw-semibold fs-1 lh-sm mb-4 text-break">{{ $plant[0]->name }}
                </h2>
                <p class="fw-semibold text-wrap text-break">{{ $plant[0]->description }}</p>
                <button type="button" class="btn button-input mt-2 px-5 py-3 fw-semibold explore-button mb-4">
                    <a href="/plant/{{ $plant[0]->id }}">Explore
                        Now</a>
                </button>
            </div>
        </div>
    </div>

    <div class="container-xl contact-us3 p-5 text-base position-relative mt-5">
        <div class="position-absolute top-0 end-0 form-move border-random">
            <div class=" form-email2 pt-5 pb-3 px-2 border border-white">
                <div class="mb-2">
                    <input type="email" class="form-control input-email2" id="exampleFormControlInput1"
                        placeholder="Email">
                </div>
                <div class="mb-2">
                    <textarea class="form-control input-email2 add-vh30" id="exampleFormControlTextarea1" placeholder="Type your message.."></textarea>
                </div>
                <div class="mb-2 text-center">
                    <button class="btn btn-warning shadow-none rounded-4 w-75 input-email2 text-white ">Send now</button>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container-xl">
        <div class="container-xl mt-5">
            <div class="card detail">
                <div class="card-body position-relative card-tanaman mx-4 my-3 text-center">
                    <img src="" alt="">
                    <h2 class="card-title fw-semibold text-center">{{ $article->title }}</h2>
                    <img src="https://source.unsplash.com/random/300x300/?healthy,{{ $article->id }}"
                        alt="{{ $article->title }}" class="mx-auto img-fluid" width="462px">
                    <p class="card-text mt-4 text-start pb-5">{{ $article->content }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xl d-flex justify-content-between mb-3  pt-5 my-5">
        <h2 class="fw-semibold">Plant Care Basic</h2>
        <div class="">
            <button class="rounded-2 less-than bg-transparent mx-auto"><svg width="17" height="25"
                    viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 2L3 12.5L15 23" stroke="#0F222B" stroke-width="3" stroke-linecap="round" />
                </svg>
            </button>
            <button class="rounded-2 more-than ms-4 mx-auto"><svg width="17" height="25" viewBox="0 0 17 25"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2L14 12.5L2 23" stroke="white" stroke-width="3" stroke-linecap="round" />
                </svg>
            </button>
        </div>
    </div>

    <div class="container-xl">
        <div class="row gy-4 gx-lg-5">
            @foreach ($article_more as $item)
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card rounded-5 card-plant mb-3 filter-card">
                        <div class="card-body text-center">
                            <h4 class="card-title fw-semibold text-center">{{ $item->title }}</h4>
                            <img src="https://source.unsplash.com/random/300x300/?healthy,{{ $item->id }}"
                                alt="" class="card-image">
                            <button type="button" class="btn button-input mt-2 px-5 py-3 fw-semibold explore-button mb-4">
                                <a href="/article/{{ $item->id }}">Explore
                                    Now</a>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container-xl text-base mt-5">
        <div class="row flex-lg-row-reverse align-items-center py-5 gy-5 g-lg-5">
            <div class="col-lg-6 text-center">
                <img src="{{ url('images/tips-image-2.jpg') }}" alt="Growing Plants" class="dblock mx-lg-auto img-fluid"
                    width="538px">
            </div>
            <div class="col-12 col-lg-6 text-lg-start text-center">
                <h2 class="fw-semibold fs-1 lh-sm mb-4 text-break">Houseplant care tips for beginner
                </h2>
                <p class="fw-semibold text-wrap text-break">Lorem Ipsum is simply dummy text of the printing and
                    typesetting
                    industry.<br>
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a
                    gallery of type and scrambled it to make a type specimen book.</p>
                <button type="button" class="btn button-input mt-2 px-5 py-3 fw-semibold explore-button">Explore
                    Now</button>
            </div>
        </div>
    </div>

    <div class="container-xl contact-us3 p-5 text-base position-relative mt-5">
        <div class="position-absolute top-0 end-0 form-move border-random">
            <div class=" form-email2 pt-5 pb-3 px-2 border border-white">
                <div class="mb-2">
                    <input type="email" class="form-control input-email2" id="exampleFormControlInput1"
                        placeholder="Email">
                </div>
                <div class="mb-2">
                    <textarea class="form-control input-email2 add-vh30" id="exampleFormControlTextarea1" placeholder="Type your message.."></textarea>
                </div>
                <div class="mb-2 text-center">
                    <button class="btn btn-primary shadow-none rounded-4 w-75 input-email2 text-white ">Send
                        now</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
