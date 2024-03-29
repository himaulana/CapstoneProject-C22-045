@extends('layouts.index')

@section('title', 'Service')

@section('content')
    <div class="container-xl">
        <div class="container-xl mt-5">
            <h1 id="ask">Ask Botanist</h1>
            <p id="text1">Untuk konsultasi kepada ahli botani kami, silahkan isi form dibawah ini. From ini akan
                membantu para
                ahli dalam membuat diagnosis yang akurat dan membuat rencana perawatan yang sempurna untuk tanaman Anda.
            </p>
            <div class="card detail">
                <div class="card-body position-relative card-tanaman mx-4 my-3 text">
                    <form id="contact-form" action="https://formspree.io/f/xpznvrbl" method="POST"
                        enctype="multipart/form-data">
                        <div>
                            <label for="plantName" id="plant">Nama tanaman kamu</label><br>
                            <input type="text" class="form-control" id="full-name" name="nama" placeholder="Kaktus">
                        </div><br>
                        <div>
                            <label for="plantName" id="plant">Jelskan kondisi tanaman atau masalah kamu
                                disini</label><br>
                            <textarea type="tex" class="form-control" id="full-name" name="kondisi"
                                placeholder="2 hari yang lalu daun tanamanku mulai berwarna kuning...."></textarea>
                        </div><br>
                        <div>
                            <label for="plantName" id="plant">Seberapa sering kamu menyiram tanamanmu?</label><br>
                            <input type="text" class="form-control" id="full-name" name="menyiram"
                                placeholder="1-2 kali setiap hari">
                        </div><br>
                        <div>
                            <label for="plantName" id="plant">Kapan terakhir kali kamu mengganti pot
                                tanamanmu?</label><br>
                            <input type="text" class="form-control" id="full-name" name="mengganti pot"
                                placeholder="1 tahun yang lalu">
                        </div><br>
                        <div>
                            <label for="plantName" id="plant">Dalam 1 hari berapa lama tanamanmu mendapat sinar
                                matahari?</label><br>
                            <input type="text" class="form-control" id="full-name" name="sinar matahari"
                                placeholder="6-7 jam">
                        </div><br>
                        <div>
                            <label for="plantName" id="plant">Apakah ada serangga atau hama yang menganggu tanaman
                                atau
                                tanahnya?</label><br>
                            <input type="text" class="form-control" id="full-name" name="hama"
                                placeholder="Ada yaitu ulat">
                        </div><br>
                        <div>
                            <label for="plantName" id="plant">Silahkan tulis email kamu disini</label><br>
                            <input type="text" class="form-control" id="full-name" name="email"
                                placeholder="tanduran@gmail.com">
                        </div><br>
                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-warning button-input mt-2 px-5 py-3 fw-semibold explore-button mb-4">Send
                                Form</button>
                        </div>
                        <div
                            class="loader ease-linear mt-5 rounded-full border-4 border-t-4 border-gray-200 h-6 w-6 mx-auto">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
