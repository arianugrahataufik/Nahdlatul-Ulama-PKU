@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Tentang</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Beranda</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Tentang</p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container py-6">
            <div class="row">
                <div class="col-lg-9">
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                            <h1 class="display-4">Sejarah Nahdlatul Ulama di Pekanbaru</h1>
                        </div>
                        <p>Sejarah Nahdlatul Ulama (NU) di Pekanbaru, Provinsi Riau, merupakan bagian integral dari
                            perkembangan organisasi Islam terbesar di Indonesia. NU didirikan pada 31 Januari 1926 di
                            Surabaya oleh para ulama tradisionalis yang ingin mempertahankan ajaran Islam Ahlussunnah wal
                            Jamaah dan empat mazhab fiqh.</p>
                        <p>Di Pekanbaru, NU mulai berkembang seiring dengan masuknya pengaruh organisasi ini ke wilayah
                            Sumatera. Pada awalnya, kegiatan NU di Pekanbaru lebih terfokus pada bidang pendidikan dan
                            dakwah. Seiring waktu, NU Pekanbaru memperluas jangkauannya dengan mendirikan berbagai lembaga
                            pendidikan, seperti madrasah, pesantren, dan sekolah Islam. Lembaga-lembaga ini tidak hanya
                            berfungsi sebagai pusat pendidikan agama, tetapi juga sebagai wadah untuk mempererat tali
                            persaudaraan umat Islam di wilayah tersebut.</p>
                        <p>Selain itu, NU Pekanbaru juga aktif dalam kegiatan sosial kemasyarakatan, seperti membantu korban
                            bencana, memberikan bantuan kepada masyarakat kurang mampu, dan menyelenggarakan berbagai
                            kegiatan keagamaan. Keterlibatan aktif NU dalam berbagai aspek kehidupan masyarakat menunjukkan
                            komitmennya terhadap prinsip-prinsip ajaran Islam yang rahmatan lil 'alamin.</p>
                        <p>Hingga saat ini, NU Pekanbaru terus berkembang dan berkontribusi dalam membentuk karakter umat
                            Islam yang moderat, toleran, dan berakhlak mulia. Peranannya dalam pendidikan, dakwah, dan
                            kegiatan sosial menjadikannya sebagai salah satu pilar penting dalam kehidupan beragama di Kota
                            Pekanbaru.</p>
                    </div>
                </div>
            </div>

            <div class="section-title position-relative mb-5">
                <h1 class="display-4">Visi dan Misi</h1>
            </div>
            <div class="row">
                <div class="col-lg-5 mt-3 mt-lg-0">
                    <h5>Visi Nahdlatul Ulama</h5>
                    <p>Menjadi jamiyah diniyah ijtima’iyah yang memperjuangkan tegaknya ajaran Islam Ahlussunnah wal Jamaah
                        An-Nahdliyah untuk mewujudkan kemaslahatan umat dalam wadah Negara Kesatuan Republik Indonesia.</p>
                </div>
                <div class="col-lg-6 mt-3 ml-4 mt-lg-0 mb-5">
                    <h5>Misi Nahdlatul Ulama</h5>
                    <ol>
                        <li>Mengembangkan gerakan penyebaran Islam Ahlussunnah wal Jamaah An-Nahdliyah.</li>
                        <li>Meningkatkan kualitas pendidikan dan pengembangan kebudayaan yang sesuai dengan ajaran Islam.
                        </li>
                        <li>Meningkatkan kualitas dakwah dan bimbingan keagamaan di tengah masyarakat.</li>
                        <li>Meningkatkan kesejahteraan ekonomi umat melalui program-program pemberdayaan.</li>
                        <li>Memperkuat peran NU dalam kehidupan bermasyarakat, berbangsa, dan bernegara.</li>
                        <li>Meningkatkan upaya penegakan keadilan dan pembelaan terhadap kaum mustadh’afi.</li>
                        <li>Mengembangkan komunikasi dan kerjasama dengan berbagai pihak untuk kemaslahatan umat.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row justify-content-center bg-image mx-0 mb-5">
            <div class="col-lg-10 py-5">
                <div class="section-title position-relative mb-5 text-center">
                    <h1 class="display-4">Pengurus Nahdlatul Ulama Pekanbaru</h1>
                </div>
                <div class="p-4 my-2">
                    <p>Telah terpilih, dengan <strong>Drs. H. Syahrul Mauludi, MA</strong> sebagai Rais dan <strong>Dr.
                            Rahmat Suhadi, S.H.I., M.Pd.i</strong> sebagai Ketua.</p>
                    <p>Berikut adalah pengurus PCNU Kota Pekanbaru:</p>
                    <ul>
                        <li><strong>Rais PCNU Kota Pekanbaru:</strong> Drs. H. Syahrul Mauludi, MA</li>
                        <li><strong>Ketua PCNU Kota Pekanbaru:</strong> Dr. Rahmat Suhadi, S.H.I., M.Pd.i</li>
                    </ul>
                    <p>Selain itu, <strong>Agus Salim Tanjung MA</strong> menjabat sebagai Sekretaris PCNU Kota Pekanbaru.
                        PCNU Kota Pekanbaru juga memiliki beberapa kegiatan lain, seperti peringatan Harlah NU ke-102 yang
                        dipusatkan di Pondok Pesantren Nurul Huda Alislami, seperti yang dilaporkan.</p>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class=" p-4 rounded shadow">
                <h2 class="mb-4 text-center">Kerja Sama NU Dengan Organisasi di Pekanbaru</h2>

                <h4>1. Kerja Sama dengan Organisasi Keagamaan</h4>
                <ul>
                    <li><strong>Forum Komunikasi Umat Beragama (FKUB):</strong> NU menjadi bagian penting dari FKUB di Pekanbaru. Melalui forum ini, NU berinteraksi dan bekerja sama dengan organisasi keagamaan lain (Islam, Kristen, Katolik, Hindu, Buddha, Konghucu) untuk memelihara kerukunan umat beragama, menyelesaikan potensi konflik, dan membangun harmoni sosial di kota.</li>
                    <li><strong>Kerja Sama dengan Ormas Islam Lain:</strong> NU seringkali bekerja sama dengan ormas Islam lainnya, seperti Muhammadiyah. Contohnya, PWNU Riau pernah melakukan silaturahmi ke PWM Riau dan membahas sinergitas dalam bidang keilmuan, pendidikan, dan kemitraan ekonomi.</li>
                    <li><strong>Kegiatan Keagamaan Bersama:</strong> NU sering mengadakan atau berpartisipasi dalam kegiatan keagamaan bersama dengan organisasi lain, seperti peringatan hari besar Islam, tabligh akbar, atau kegiatan sosial keagamaan lainnya.</li>
                </ul>

                <h4>2. Kerja Sama dengan Organisasi Masyarakat</h4>
                <ul>
                    <li><strong>Organisasi Kemasyarakatan (Ormas) Lain:</strong> NU bekerja sama dengan berbagai ormas lain di Pekanbaru dalam isu-isu sosial kemasyarakatan. Contohnya, Muslimat NU Riau pernah bekerja sama dengan berbagai pihak dalam memberikan santunan kepada dhuafa dan UMKM terdampak Covid-19.</li>
                    <li><strong>Lembaga Swadaya Masyarakat (LSM):</strong> Dalam isu-isu tertentu, seperti pelestarian lingkungan atau advokasi masyarakat, NU dapat menjalin kerja sama dengan LSM yang memiliki fokus yang relevan.</li>
                    <li><strong>Organisasi Kepemudaan:</strong> GP Ansor dan Fatayat NU sebagai badan otonom NU juga aktif berinteraksi dan berkolaborasi dengan organisasi kepemudaan lainnya dalam berbagai kegiatan kepemudaan dan kebangsaan.</li>
                </ul>

                <h4>3. Kerja Sama dengan Pemerintah</h4>
                <ul>
                    <li><strong>Pemerintah Kota Pekanbaru dan Provinsi Riau:</strong> NU memiliki hubungan yang baik dengan pemerintah daerah. Kerja sama terjalin dalam berbagai program pembangunan, termasuk pendidikan, kesehatan, dan sosial. Contohnya, PWNU Riau bekerja sama dengan Pemko Pekanbaru dan Polda Riau dalam mengadakan vaksinasi massal.</li>
                    <li><strong>Instansi Vertikal:</strong> NU dapat bekerja sama dengan berbagai instansi pemerintah di tingkat provinsi atau pusat dalam program-program tertentu. Misalnya, DPP Santri Tani NU pernah menandatangani MoU kerja sama dengan Polda Riau dalam program ketahanan pangan nasional.</li>
                    <li><strong>Pendidikan:</strong> Lembaga pendidikan NU (sekolah dan madrasah) juga bekerja sama dengan Dinas Pendidikan setempat dalam hal kurikulum, akreditasi, dan program-program pendidikan lainnya.</li>
                </ul>
            </div>
        </div>

        <!-- Optional Bootstrap CSS if needed -->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    </div>
@endsection
