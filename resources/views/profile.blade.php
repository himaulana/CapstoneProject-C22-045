@extends('layouts.index')

@section('title', 'My Garden')

@section('content')
    <div class="container-xl text-base text-center my-5">
        <h2 class="fw-bold fs-1 lh-sm text-break">My Profile
        </h2>
        <img src="https://source.unsplash.com/random/300x300/?user-profile" alt="Growing Plants"
            class="dblock mx-lg-auto img-fluid my-4" width="300px">
        {{-- <button type="button"
            class="btn btn-warning button-input mt-2 mx-auto px-5 py-3 fw-semibold d-block explore-button">Edit</button>
             --}}
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit"
                class="tn btn-warning button-input mt-2 mx-auto px-5 py-3 fw-semibold d-block explore-button">Logout
            </button>
        </form>

    </div>

    <section class="py-5">
        <div class="container-xl">
            <div class="row">
                <div class="col-6">
                    <h2 class="fw-semibold mb-5 px-auto">My Garden</h2>
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
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        @foreach ($user as $data)
                                            @foreach ($data->gardens as $item)
                                                <a href="/plant/" class="text-decoration-none text-base link-dark">
                                                    <div class="card rounded-5 card-plant mb-3 text-center">
                                                        <img src="{{ $item->link_image }}" class="m-3" alt="">
                                                        <div class="card-body">
                                                            <h2 class="fw-semibold">
                                                                {{ $item->name }}
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-xl text-base">
        <div class="row flex-lg-row-reverse align-items-center py-5">
            <div class="col-lg-7">
                <img src="{{ url('images/explore-image.png') }}" alt="Growing Plants"
                    class="dblock mx-lg-auto img-fluid filter-image" width="1200px">
            </div>
            <div class="col-12 col-lg-5 text-lg-start text-center">
                <h2 class="fw-bold fs-1 lh-sm text-break">Add a new plant
                </h2>
                <button type="button"
                    class="btn btn-warning button-input mt-5 mx-auto px-5 py-3 fw-semibold d-block explore-button"
                    data-bs-toggle="modal" data-bs-target="#addForm">Add</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="addFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-ijo">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addFormLabel">Add Plant</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('garden.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <select class="form-select" name="plant_id" id="plant_id" aria-label="Default select example">
                                <option value="">Select your plant</option>
                                @foreach ($plants as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xl text-base text-center">
        <div class="row flex-lg-row align-items-center pb-5 pt-lg-">
            <div class="col-lg-7">
                <img src="{{ url('images/tips-image.png') }}" alt="Growing Plants" class="dblock mx-lg-auto img-fluid"
                    width="700px">
            </div>
            <div class="col-12 col-lg-5 text-lg-start text-center">
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
                    <button class="btn btn-primary shadow-none rounded-4 w-75 input-email text-white ">Send
                        now</button>
                </div>
            </div>
        </div>
    </div>
@endsection
