@extends('layouts.page')
@section('title')
Turnamen Bulutangkis | FAST UPB 2021
@endsection
@section('content')
<section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="/">Home</a></li>
        <li>Kegiatan</li>
      </ul>
      <h3 class="breadcrumbs-custom-title">Turnamen Bulutangkis</h3>
    </div>
  </section>
      <!-- Section Who We are-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-md-10 col-lg text-center">
              <h6>TURNAMEN BULUTANGKIS</h6>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">1. PELAKSANAAN TURNAMEN </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                                <div>
                                    <p>
                                        a. Pertandingan dilaksanakan pada hari Sabtu, 18 September s/d Minggu, 19
                                        September 2021.
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">2. PERSYARATAN PESERTA </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p> a. Peserta Turnamen adalah Mahasiswa UPB Teknik Informatika angkatan
                                2019 & 2020. <br>
                                b. Terdapat 3 kategori, yaitu: <br>
                                • Ganda Putra <br>
                                • Ganda Putri <br>
                                • Ganda Campuran <br>
                                c. Setiap kelas angkatan 2019 & 2020 wajib mengikuti turnamen ini. <br>
                                d. Mahasiswa aktif angkatan lain diperbolehkan mengikuti turnamen bulu
                                tangkis. <br>
                                e. Peserta yang tidak hadir saat Technical Meeting, berarti menyetujui segala
                                keputusan saat Technical Meeting.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">3. KETENTUAN KHUSUS</button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">

                        <div class="card-body">
                            <p>
                                a. Setiap kelas wajib memberikan berkas yang dibutuhkan untuk melakukan pendaftaran, yaitu: <br>
                                    • Softcopy Foto setiap pemain maks foto 2 MB. <br>
                                    • Bukti pembayaran registrasi. <br>
                                    • Softcopy Kartu Tanda Mahasiswa (KTM) atau Transkip KRS
                                    (menyatakan bahwa peserta tersebut berasal dari jurusan Teknik
                                    Informatika Universitas Pelita Bangsa. <br>
                                b. Upload persyaratan dan berkas paling lambat 3 hari sebelum pertandingan
                                dimulai.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour">4. PROSEDUR PENDAFTARAN</button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                a. Pendaftaran dibuka dari tanggal 6 September - 8 September <br>
                                b. Pendaftaran dapat dilakukan secara online melalui button dibawah <br>
                                c. Setelah melakukan pendaftaran upload berkas dan bukti pembayaran registrasi
                                melalui button dibawah <br>
                                d. Besar biaya registrasi untuk setiap kelas adalah Rp. 200.000,-
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive">5. KETENTUAN TURNAMEN</button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                a. Pertandingan dimulai pada hari Sabtu, 18 September - Minggu 19 September
                                2021 dan dilaksanakan dari pukul 08.00 - selesai. <br>
                                b. Sistem pertandingan menggunakan sistem gugur. <br>
                                c. Penentuan lawan tanding melalui pengundian. <br>
                                d. Sistem pertandingan menggunakan sistem Rally Point, jika skor 20 – 20 maka
                                terjadi Deuce. <br>
                                e. Tim peserta hadir paling lambar 30 menit sebelum pertandingan. <br>
                                f. Tim dinyatakan gugur WO apabila tidak datang dengan toleransi 30 menit dari
                                jadwal yang telah ditentukan. <br>
                                g. Jika tim yang akan bertanding tidak hadir, maka tim lawan tandingnya yang
                                akan dinyatakan pemenang. <br>
                                h. Apabila terjadi kerusuhan, intimidasi, dan keonaran lainnya yang merugikan
                                pertandingan dan peserta lain maka tim tersebut akan di diskualifikasi. <br>
                                i. Setiap tim/kelas diharapkan menggunakan baju seragam (tidak wajib). <br>
                                j. Pengundian peserta pertandingan akan dilaksanakan pada saat Technical
                                Meeting pada ____. <br>
                                k. Dalam pertandingan bulu tangkis dipimpin oleh 3 wasit yaitu wasit utama dan
                                2 wasit garis dimana keduanya memiliki wewenang penuh dalam menegakkan
                                peraturan pertandingan. <br>
                                l. Peraturan / tata tertib pertandingan disusun oleh panitia dan tidak dapat di
                                ganggu gugat. <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix">6. REWARD  </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <span>A. Ganda Putra
                                </span>
                                <p>
                                    I. Juara 1 : Uang Tunai Rp.____ + E – Sertifikat + Medali <br>
                                    II. Juara 2 : Uang Tunai Rp.____ + E - Sertifikat + Medali <br>
                                    III. Juara 3 : Uang Tunai Rp.____ + E - Sertifikat + Medali
                                </p>
                                <span>B. Ganda Putri</span>
                                <p>
                                    I. Juara 1 : Uang Tunai Rp.____ + E – Sertifikat + Medali <br>
                                    II. Juara 2 : Uang Tunai Rp.____ + E - Sertifikat + Medali <br>
                                    III. Juara 3 : Uang Tunai Rp.____ + E - Sertifikat + Medali
                                </p>
                                <span>C. Ganda Campuran</span>
                                <p>
                                    I. Juara 1 : Uang Tunai Rp.____ + E – Sertifikat + Medali <br>
                                    II. Juara 2 : Uang Tunai Rp.____ + E - Sertifikat + Medali <br>
                                    III. Juara 3 : Uang Tunai Rp.____ + E - Sertifikat + Medali
                                </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            </div>
          </div>
        </div>
      </section>
@endsection
