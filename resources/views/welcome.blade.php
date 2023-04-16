@extends('layouts.general')


@section('content')
<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="mb-2">Profil Saya</h3>
            <div class="d-flex">
                <img src="{{asset('assets/image/profile.png')}}" class="rounded-circle me-3" alt="" style="width: 150px; height:150px;">
                <div>
                    <span class="fw-bold mb-2">Ahmad Fais Ainul Zakim</span>
                    <span class="d-block mb-2">Teknik Informatika</span>
                    <span class="d-block mb-2">Universitas Islam Nahdlatul Ulama</span>
                    <span class="d-block mb-2">"IMPLEMENTASI ALGORITMA MOVING AVERAGE PADA WEBSITE"</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3>INTRODUCTION</h3>
            <ol>
                <li>
                    Ini adalah website Implementasi algoritma Moving Average pada website
                </li>
                <li>
                    Dibuat guna pemenuhan tugas akhir skripsi
                </li>
                <li>
                    Data yang diambil dari data publik yang bersumber dari <a href="https://finance.yahoo.com" target="_blank">finance.yahoo.com</a>
                </li>
                <li>
                    Hasil yang diperoleh merupakan sebuah anlisis dan bukan sebagai sistem pengambil keputusan
                </li>
                <li>
                    Sistem prediksi ini pengembangan dari perhitungan data mining yang di sistem kan
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="mb-2">Latar Belakang</h3>
            <p>
                Saham sifatnya fluktuatif dan susah ditebak atau diperkirakan naik turunnya.
                Dan untuk mengolah datanya terlalu rumit dengan langkah awal mengambil data
                dengan periode waktu yang lama, setelah itu untuk memprediksi harga saham
                menggunakan metode yang telah ditentukan akan memakan waktu yang lama. <br>
                Dari permasalahan yang ada diatas akan dijawab dalam penelitian ini meliputi
                penerapan metode moving average dalam melakukan prediksi indeks harga saham,
                selain itu uji signifikansi akan dilakukan untuk menentukan keberartian perbedaan
                antara prediksi pada berbagai indeks di Bursa Efek Indonesia dengan menggunakan
                metode moving average
            </p>

        </div>
    </div>
</div>
<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="mb-2">Rumusan Masalah</h3>
            <p>
                Berdasarkan latar belakang diatas dapat dirumuskan masalah dalam
                penelitian ini yaitu:
            </p>
            <ol style="line-height:190%">
                <li>
                    Bagaimana investor dapat mengetahui prediksi harga saham dengan
                    menggunakan metode moving average pada website?
                </li>
                <li>
                    Apakah Mean Absolute Percentage Error (MAPE) berpengaruh pada
                    keakuratan hasil prediksi?
                </li>
            </ol>
        </div>
    </div>
</div>

@endsection
