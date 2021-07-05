@extends('layouts.page')
@section('title')
    E-Sport Tournament | FAST UPB 2021
@endsection
@section('content')
<section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="/">Home</a></li>
        <li>Kegiatan</li>
      </ul>
      <h3 class="breadcrumbs-custom-title">E-Sport Tournament</h3>
    </div>
  </section>
      <!-- Section Who We are-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-md-10 col-lg-6">
              <h6>E-Sport Tournament : PUBG</h6>
              <h4>Festival Ajang Sinergisitas Teknologi Universitas Pelita Bangsas</h4>
              <p class="paragraph-inset-right-25">PUBG merupakan salah satu permainan battle royale yang bisa dimainkan melalui
                handphone atau PC. PUBG adalah singkatan dari PlayerUnknown's Battlegrounds.
                Sistem bermain PUBG ini last men standing, artinya pemain terakhir yang menang.
                Pemain itu harus lebih dulu bertahan hidup dari serangan pemain lain. PUBG dibuat
                oleh Brendan Greene.</p>
                <h4>INFORMASI</h4>
                <br>
                <div>
                    <ul class="list list-md">
                        <li>
                            <div class="unit">
                              <div class="unit-left">
                                <div class="icon-rect icon-rect-secodanry" data-triangle=".icon-rect-overlay">
                                  <div class="icon-rect-overlay"></div>
                                  <svg class="svg-icon-sm-1" role="img">
                                    <use xlink:href="images/svg/sprite.svg#tick"></use>
                                  </svg>
                                </div>
                              </div>
                              <div class="unit-body">
                                <h5>Informasi lebih lanjut terkait perlombaan PUBG:
                                    <br>
                                    Bagus :
                                </h5>
                              </div>
                            </div>
                          </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-10 col-lg-6">
              <div class="img-separated"><img src="images/lomba/bg/pubg.jpeg" alt="" width="562" height="588"/>
              </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">1. TAHAPAN LOMBA </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                                <div class="table-custom-responsive">
                                  <table
                                    class="table-custom table-custom-striped table-custom-primary"
                                  >
                                    <thead>
                                      <tr>
                                        <th>Kegiatan</th>
                                        <th>Tanggal</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Pendaftaran</td>
                                        <td>Senin, 1 Agustus 2021 – Selasa, 30 Agustus
                                            2021</td>
                                      </tr>
                                      <tr>
                                        <td>Technical Meeting </td>
                                        <td>Sabtu, 3 September 2021</td>
                                      </tr>
                                      <tr>
                                        <td>Perlombaan Offline</td>
                                        <td>Minggu, 5 September 2021</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">2. SYARAT DAN KETENTUAN </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <li>
                                    Peserta kategori umum UPB
                                </li>
                                <li>
                                    Peserta Pubg Mobile adalah peserta yang telah mendaftar dan disahkan oleh panitia
                                </li>
                                <li>
                                    Satu tim terdiri dari 4 orang pemain inti
                                </li>
                                <li>
                                    Peserta dengan nickname atau ID yang sama hanya bisa mendaftar untuk 1 team
                                </li>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">3. TEKNIS LOMBA</button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <li>
                                    Mendaftar lewat website pendaftaran
                                </li>
                                <li>
                                    Pendaftaran diperuntukan 4 orang anggota tim. Setiap tim diwajibkan memasukan
                                    nama tim serta informasi anggota tim secara lengkap di website pendaftaran
                                </li>
                                <li>
                                    Jika salah satu anggota atau tim tidak lengkap karena alasan pribadi, panitia
                                    sepenuhnya tidak bertanggung jawab untuk mendiskualifikasi atau meneruskan
                                    pertandingan dengan jumlah anggota seadanya.
                                </li>
                                <li>
                                    Setiap tim harus menggunakan id/nickname yang terdaftar
                                </li>
                                <li>
                                    Setiap tim yang bertanding bertanggung jawab atas akun, device dan internet yang
                                    digunakan. Panitia tidak bertanggung jawab jika terjadi suatu hal yang
                                    menghambat tim atau pertandingan.
                                </li>
                                <li>
                                    Sistem pertandingan menggunakan sistem point.
                                </li>
                                <li>
                                    Batas keterlambatan adalah 10 menit.
                                </li>
                                <li>
                                    Hasil pertandingan dapat di screenshot dan di post ke grup leader yang telah
                                    dibuat panitia.
                                </li>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour">4. ALUR PERLOMBAAN </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <p><b>Dalam setiap pertandingan terdapat 3x match</b></p>
                            <li>
                                Match 1 : Erangel ( TTP)
                            </li>
                            <li>
                                Match 2 : Miramar ( TTP )
                            </li>
                            <li>
                                Match 3 : Sanhook ( TTP )
                            </li>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive">5. PERATURAN PERLOMBAAN  </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <li>
                                    Sistem grup
                                </li>
                                <li>
                                    No cheat, no emulator, no L1+R1
                                </li>
                                <li>
                                    No mic all
                                </li>
                                <li>
                                    Lag/gangguan sinyal ditanggung peserta
                                </li>
                                <li>
                                    Keterlambatan maksimal 10 menit
                                </li>
                                <li>
                                    Screenshoot bukti/hasil pertandingan dan segala bentuk kecurangan
                                </li>
                                <li>
                                    Segala keputusan panitia tidak dapat diganggu gugat
                                </li>
                                <li>
                                    Dalam babak grup, setiap pertandingan selalu dalam custom mode
                                </li>
                                <li>
                                    Babak grup akan menggunakan sistem eliminasi
                                </li>
                                <li>
                                    Semua member squad harus menggunakan id/nickname yang terdafta
                                </li>
                                <li>
                                    Tidak ada larangan untuk level akun
                                </li>
                                <li>
                                    Keputusan dari dewan juri bersifat mutlak dan tidak dapat diganggu gugat.
                                </li>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix">6. PELANGGARAN DAN DISKUALIFIKASI   </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <li>
                                    Dilarang keras menggunakan program ilegal dan cheat selama pertandingan.
                                </li>
                                <li>
                                    Dilarang menggunakan Emulator atau menggunakan aplikasi tambahan yang
                                    dapat membuat tidak terdeteksi secara kasat mata
                                </li>
                                <li>
                                    Dilarang bekerjasama dengan tim lain dalam pertandingan.
                                </li>
                                <li>
                                    Dilarang membuka mic all.
                                </li>
                                <li>
                                    Dilarang menggunakan aplikasi yang dapat memodifikasi konten dalam game.
                                    Seperti BAGT dan sebagainya.
                                </li>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven">7. PMEKASNISME PENDAFTARAN   </button>
                        </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <li>
                                    Biaya Pendaftaran PUBG Tournament sebesar <mark>Rp.120.000/tim</mark>
                                </li>
                                <li>
                                    Pendaftaran calon peserta atau lomba dapat dilakukan dengan mengisi formulir
                                    pendaftaran yang telah disediakan atau mengunduh formulir pendaftaran di
                                    website himatif dan mengirimkan ke email himatif
                                </li>
                                <li>
                                    Pendaftaran dibuka dari tanggal 1 Agustus – 31 Agustus 2021 melalui link
                                    pendaftaran
                                </li>
                                <li>
                                    Registrasi pendaftaran harus selesai sebelum pendaftaran ditutup secara langsung
                                </li>
                                <li>
                                    Peserta yang mengirimkan biaya pendaftaran melalui rekening harus melampirkan
                                    bukti prmbayaran pada link pendaftaran yang tersedia
                                </li>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight">8. PEMENANG DAN HADIAH   </button>
                        </h2>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <li>
                                    Juara 1 : Rp 1.000.000 + Piagam Penghargaan
                                </li>
                                <li>
                                    Juara 2 : Rp 750.000 + Piagam Penghargaan
                                </li>
                                <li>
                                    Juara 3 : Rp 500.000 + Piagam Penghargaan
                                </li>
                                <li>
                                    Best Player : Rp 3.00.000
                                </li>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-md-10 col-lg-6">
              <h6>E-Sport Tournament : Mobile Legend</h6>
              <h4>Festival Ajang Sinergisitas Teknologi Universitas Pelita Bangsas</h4>
              <p class="paragraph-inset-right-25">Mobile Legends adalah sebuah permainan MOBA yang dirancang untuk ponsel. Kedua
                tim lawan berjuang untuk mencapai dan menghancurkan basis musuh sambil
                mempertahankan basis mereka sendiri untuk mengendalikan jalan setapak, tiga "jalur"
                yang dikenal sebagai "top", "middle" dan "bottom", yang menghubungkan basis-basis.
                Mobile Legends merupakan sebuah game yang bisa dimainkan di smartphone Android
                dan juga iOS. Game yang memiliki lama permainan antara 15 menit untuk satu
                rondenya ini adalah sebuah game yang sudah banyak mencuri perhatian untuk para
                pemainnya terhitung sejak tahun 2016. Mobile Legends sendiri dibuat oleh Moonton,
                developer asal China.</p>
                <h4>INFORMASI</h4>
                <br>
                <div>
                    <ul class="list list-md">
                        <li>
                            <div class="unit">
                              <div class="unit-left">
                                <div class="icon-rect icon-rect-secodanry" data-triangle=".icon-rect-overlay">
                                  <div class="icon-rect-overlay"></div>
                                  <svg class="svg-icon-sm-1" role="img">
                                    <use xlink:href="images/svg/sprite.svg#tick"></use>
                                  </svg>
                                </div>
                              </div>
                              <div class="unit-body">
                                <h5>Informasi lebih lanjut terkait perlombaan Mobile Legend:
                                    <br>
                                    Bagus :
                                </h5>
                              </div>
                            </div>
                          </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-10 col-lg-6">
              <div class="img-separated"><img src="images/lomba/bg/ml.jpeg" alt="" width="562" height="588"/>
              </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">1. TAHAPAN LOMBA </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                                <div class="table-custom-responsive">
                                  <table
                                    class="table-custom table-custom-striped table-custom-primary"
                                  >
                                    <thead>
                                      <tr>
                                        <th>Kegiatan</th>
                                        <th>Tanggal</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Pendaftaran</td>
                                        <td>Senin, 1 Agustus 2021 – Selasa, 30 Agustus
                                            2021</td>
                                      </tr>
                                      <tr>
                                        <td>Technical Meeting </td>
                                        <td>Sabtu, 3 September 2021</td>
                                      </tr>
                                      <tr>
                                        <td>Perlombaan Offline</td>
                                        <td>Minggu, 5 September 2021</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">2. SYARAT DAN KETENTUAN </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <li>
                                    Peserta kategori umum UPB
                                </li>
                                <li>
                                    Peserta Mobile Legends adalah peserta yang telah mendaftar dan disahkan oleh
                                    panitia
                                </li>
                                <li>
                                    Setiap team terdiri dari 5 orang dan 1 orang cadangan selama acara berlangsung.
                                </li>
                                <li>
                                    Peserta dengan nickname atau ID yang sama hanya bisa mendaftar untuk 1 team
                                </li>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">3. TEKNIS LOMBA</button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <li>
                                    Mendaftar lewat website pendaftaran
                                </li>
                                <li>
                                    Pendaftaran diperuntukan 6 orang anggota tim. Setiap tim diwajibkan memasukan
                                    nama tim serta informasi anggota tim secara lengkap di link pendaftaran
                                </li>
                                <li>
                                    Jika salah satu anggota atau tim tidak lengkap karena alasan pribadi, panitia
                                    sepenuhnya tidak bertanggung jawab untuk mendiskualifikasi atau meneruskan
                                    pertandingan dengan jumlah anggota seadanya.
                                </li>
                                <li>
                                    Setiap tim harus menggunakan id/nickname yang terdaftar
                                </li>
                                <li>
                                    Setiap tim yang bertanding bertanggung jawab atas akun, device dan internet yang
                                    digunakan. Panitia tidak bertanggung jawab jika terjadi suatu hal yang
                                    menghambat tim atau pertandingan.
                                </li>
                                <li>
                                    Sistem pertandingan menggunakan sistem gugur.
                                </li>
                                <li>
                                    Batas keterlambatan adalah 10 menit.
                                </li>
                                <li>
                                    Hasil pertandingan dapat di screenshot dan di post ke grup leader yang telah
                                    dibuat panitia
                                </li>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix">4. PELANGGARAN DAN DISKUALIFIKASI   </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <li>
                                    Dilarang keras menggunakan program ilegal dan cheat selama pertandingan.
                                </li>
                                <li>
                                    Dilarang menggunakan Emulator atau menggunakan aplikasi tambahan yang
                                    dapat membuat tidak terdeteksi secara kasat mata.
                                </li>
                                <li>
                                    Dilarang bekerjasama dengan tim lain dalam pertandingan.
                                </li>
                                <li>
                                    Dilarang membuka chat all.
                                </li>
                                <li>
                                    Dilarang menggunakan aplikasi yang dapat memodifikasi konten dalam game.
                                    Seperti BAGT dan sebagainya.
                                </li>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven">7. PMEKASNISME PENDAFTARAN   </button>
                        </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <li>
                                    Biaya Pendaftaran Mobile Legends Tournament sebesar <mark>Rp.120.000/tim</mark>
                                </li>
                                <li>
                                    Pendaftaran calon peserta atau lomba dapat dilakukan dengan mengisi formulir
                                    pendaftaran yang telah disediakan atau mengunduh formulir pendaftaran di
                                    website himatif dan mengirimkan ke email himatif
                                </li>
                                <li>
                                    Pendaftaran dibuka dari tanggal 1 Agustus – 31 Agustus 2021 melalui link
                                    pendaftaran
                                </li>
                                <li>
                                    Registrasi pendaftaran harus selesai sebelum pendaftaran ditutup secara langsung
                                </li>
                                <li>
                                    Peserta yang mengirimkan biaya pendaftaran melalui rekening harus melampirkan
                                    bukti prmbayaran pada link pendaftaran yang tersedia
                                </li>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight">8. PEMENANG DAN HADIAH   </button>
                        </h2>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <li>
                                    Juara 1 : Rp 1.000.000 + Piagam Penghargaan
                                </li>
                                <li>
                                    Juara 2 : Rp 750.000 + Piagam Penghargaan
                                </li>
                                <li>
                                    Juara 3 : Rp 500.000 + Piagam Penghargaan
                                </li>
                                <li>
                                    Best Player : Rp 3.00.000
                                </li>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>
@endsection
