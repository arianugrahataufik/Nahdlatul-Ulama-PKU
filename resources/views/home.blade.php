@extends('layouts.app')
@section('content')
    <style>
        .ast-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 1rem;
        }

        .ast-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        article.ast-article-post {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            flex: 0 0 calc(50% - 20px);
            /* Tetapkan 2 per baris */
            max-width: 560px;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease;
        }

        article.ast-article-post:hover {
            transform: translateY(-5px);
        }

        .post-thumb-img-content {
            width: 100%;
            height: 220px;
            /* Atur tinggi yang konsisten */
            overflow: hidden;
        }

        .post-thumb-img-content img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Crop gambar agar proporsional */
            display: block;
        }


        .entry-title {
            margin: 1rem 0 0.5rem 0;
            padding: 0 1rem;
        }

        .entry-title a {
            text-decoration: none;
            color: #1a1a1a;
            font-size: 1.2rem;
            font-weight: 600;
            line-height: 1.4;
        }

        .entry-meta {
            padding: 0 1rem;
            font-size: 0.85rem;
            color: #6b6b6b;
        }

        .ast-excerpt-container {
            padding: 0 1rem 1rem 1rem;
            font-size: 0.95rem;
            color: #333;
        }

        .ast-read-more-container {
            margin-top: auto;
            padding: 0 1rem 1rem 1rem;
        }

        .ast-read-more-container a {
            font-weight: bold;
            color: #006d5b;
            text-decoration: none;
        }

        .ast-read-more-container a:hover {
            text-decoration: underline;
        }

        @media (max-width: 468px) {
            article.ast-article-post {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>

    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 20px;">
        <div class="container text-center my-2 py-2">
            <h1 class="text-white text-uppercase mt-2 mb-4">indonesia</h1>
            <h1 class="text-white display-1 mb-2">Nahdlatul Ulama</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-white">Organisasi Islam terbesar di Indonesia yang
                    didirikan pada tahun 1926. NU berfokus pada pendidikan, penyebaran ajaran Islam, dan membantu
                    masyarakat dalam berbagai bidang. NU memiliki jaringan luas di seluruh Indonesia dan memiliki peran
                    penting dalam kehidupan sosial, keagamaan, dan politik di Indonesia.</p>
            </div>
        </div>
    </div>

    {{-- <div class="container py-2">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="section-title position-relative mb-4">
                    <h1 class="display-4">Aswaja</h1>
                </div>
                <p class="m-0">Nahdlatul Ulama memiliki fokus pada Ahlussunnah wal Jamaah (Aswaja) sebagai mazhab dalam
                    beragama,
                    dengan mengikuti salah satu dari empat imam besar (Hanafi, Maliki, Syafii, Hambali) dalam bidang
                    ubudiyah dan salah satu dari dua imam besar (Al-Asy'ari dan Al-Maturidi) dalam bidang akidah. </p>
            </div>
        </div>
    </div> --}}
{{--
    <div class="container-fluid py-5">

    </div> --}}

    <div class="container-fluid py-5 ">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/kampus.jpg') }}"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h1 class="display-4">Perguruan Tinggi Nahdlatul Ulama di Indonesia</h1>
                    </div>
                    <p>PTNU (perguruan tinggi nahdatul ulama) meliputi 56 universitas, 45 institut (34 institut agama, 10
                        institut sains/teknologi, 1 institut kesehatan), 72 sekolah tinggi (57 sekolah tinggi agama, 9
                        sekolah tinggi ekonomi, 6 sekolah tinggi keguruan), 4 politeknik, dan 6 akademi; sehingga seluruhnya
                        berjumlah 183 lembaga.
                    </p>
                    <div class="row pt-2 mx-0">
                        <div class="col-3 px-1">
                            <div class="bg-primary text-center p-3">
                                <h1 class="text-white" data-toggle="counter-up">56</h1>
                                <h6 class="text-uppercase text-white">universitas</h6>
                            </div>
                        </div>
                        <div class="col-3 px-1">
                            <div class="bg-primary text-center p-3">
                                <h1 class="text-white" data-toggle="counter-up">45</h1>
                                <h6 class="text-uppercase text-white">institut</h6>
                            </div>
                        </div>
                        <div class="col-3 px-1">
                            <div class="bg-primary text-center p-3">
                                <h1 class="text-white" data-toggle="counter-up">72</h1>
                                <h6 class="text-uppercase text-white" style="font-size: 14px;">Sekolah Tinggi</h6>
                            </div>
                        </div>
                        <div class="col-3 px-1">
                            <div class="bg-primary text-center p-3">
                                <h1 class="text-white" data-toggle="counter-up">4</h1>
                                <h6 class="text-uppercase text-white">Politeknik</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-9">
                <div class="mb-5">
                    <div class="section-title position-relative mb-5">
                        <h2 class="display-4">Kegiatan Nahdlatul Ulama di Pekanbaru</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="ast-container">
            <div class="ast-row">
                <article class="ast-article-post">
                    <div class="post-thumb-img-content">
                        <img src="{{ asset('images/sosial.jpg') }}" alt="Gambar Sampel" />
                    </div>
                    <h2 class="entry-title">
                        <a href="#">Kegiatan Sosial</a>
                    </h2>
                    <div class="ast-excerpt-container">
                        <p>NU memiliki kegiatan sosial, seperti bantuan kepada masyarakat miskin, bantuan bencana, dan
                            kegiatan kemasyarakatan lainnya.</p>
                    </div>
                </article>

                <article class="ast-article-post">
                    <div class="post-thumb-img-content">
                        <img src="{{ asset('images/keagamaan.jpg') }}" alt="Gambar Sampel" />
                    </div>
                    <h2 class="entry-title">
                        <a href="#">Kegiatan Keagamaan</a>
                    </h2>
                    <div class="ast-excerpt-container">
                        <p>NU memiliki kegiatan keagamaan, seperti pengajian, tabligh akbar, dan kegiatan keagamaan
                            lainnya.</p>
                    </div>
                </article>

                <article class="ast-article-post">
                    <div class="post-thumb-img-content">
                        <img src="{{ asset('images/pengembangan-masyarakat.webp') }}" alt="Gambar Sampel" />
                    </div>
                    <h2 class="entry-title">
                        <a href="#">Pengembangan Masyarakat</a>
                    </h2>
                    <div class="ast-excerpt-container">
                        <p>NU memiliki kegiatan pengembangan masyarakat, seperti pelatihan keterampilan, pendidikan
                            kesehatan, dan kegiatan lainnya.</p>
                    </div>
                </article>

                <article class="ast-article-post">
                    <div class="post-thumb-img-content">
                        <img src="{{ asset('images/dakwah-syiar.jpg') }}" alt="Gambar Sampel" />
                    </div>
                    <h2 class="entry-title">
                        <a href="#">Dakwah dan Syiar</a>
                    </h2>
                    <div class="ast-excerpt-container">
                        <p>NU memiliki kegiatan dakwah dan syiar, seperti penyebaran informasi keagamaan, pengajian, dan
                            kegiatan lainnya.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>

@endsection
