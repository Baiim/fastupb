@extends('layouts.page')
@section('title')
   Workshop | FAST UPB 2021
@endsection
@section('content')
<section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="/">Home</a></li>
        <li>Kegiatan</li>
      </ul>
      <h3 class="breadcrumbs-custom-title">Workshop</h3>
    </div>
  </section>
      <!-- Section Who We are-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-md-10 col-lg-6">
              <h6>WORKSHOP </h6>
              <h4>“TECHNOLOGICAL LEARNING AS AN EFFORT TO INCREASE CREATIVITY AND INNOVATION” <br> Festival Ajang Sinergisitas Teknologi Universitas Pelita Bangsas</h4>
              <p class="paragraph-inset-right-25">Workshop adalah suatu pertemuan dimana sekelompok orang yang memiliki minat,
                keahlian, dan profesi di bidang tertentu terlibat dalam diskusi dan kegiatan intensif
                pada subjek atau proyek tertentu. Pada praktiknya, kegiatan workshop biasanya lebih
                fokus mengupas secara tuntas masalah tertentu dan disertai dengan pelatihan kepada
                peserta. Para peserta workshop akan mendapatkan pengetahuan baru yang bermanfaat
                dan dapat diterapkan sesuai dengan bidang profesinya. Pada kesempatan kali ini materi
                workshop yang akan di praktikan yaitu Networking dan Programming.</p>
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
                                <h5>Untuk informasi lebih lanjut, silahkan hubungi contact <br>
                                    Dezia : 0896-3114-9187 <br>
                                    Uci : 0851-5511-3276
                                </h5>
                              </div>
                            </div>
                          </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-10 col-lg-6">
              <div class="img-separated"><img src="images/lomba/bg/workshop.jpeg" alt="" width="562" height="588"/>
              </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">1. TUJUAN KEGIATAN </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                1. Memberikan informasi dan pembelajaran baru pada bidang Networking dan
                                Programming. <br>
                                2. Untuk menambah kualifikasi profesi serta minat dan bakat Mahasiswa Universitas
                                Pelita Bangsa di bidang Networking dan Programming. <br>
                                3. Sebagai media sosialisai kegiatan Himpunan. <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">2. SASARAN </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                1. Mahasiswa Universitas Pelita Bangsa Prodi Teknik Informatika.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">3. SASARAN</button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                1. Mahasiswa Universitas Pelita Bangsa. <br>
                                2. Umum. <br>
                                3. Pelajar Tingkat SMA/K Sederajat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour">4. SYARAT DAN KETENTUAN </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <span>1. Melakukan pendaftaran seminar dan mengisi link google form di button bawah</span>
                            <span>2. Melakukan pembayaran pada No. Rek …….</span>
                            <p>- Pelajar Rp. 25.000,- <br>
                                - Mahasiswa Rp. 35.000,- <br>
                                - Umum Rp.50.000,-
                            </p>
                        </div>
                    </div>
                </div> --}}
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive">3. WAKTU PELAKSANAAN </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="table-custom-responsive">
                                <table
                                  class="table-custom table-custom-striped table-custom-primary"
                                >
                                  <thead>
                                    <tr>
                                      <th>No. </th>
                                      <th>Tanggal</th>
                                      <th>Pukul</th>
                                      <th>Kegiatan</th>
                                      <th>Lokasi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1. </td>
                                      <td>  Oktober
                                        2021
                                      </td>
                                      <td>
                                        09.00 -
                                        12.00 WIB
                                      </td>
                                      <td>
                                        WORKSHOP JARINGAN DAN PROGRAMMING
                                      </td>
                                      <td>
                                        Ruang Kelas Universitas Pelita
                                        Bangsa
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                        </div>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="table-custom-responsive">
                                <table
                                  class="table-custom table-custom-striped table-custom-primary"
                                >
                                  <thead>
                                    <tr>
                                      <th>No. </th>
                                      <th>Tanggal</th>
                                      <th>Pukul</th>
                                      <th>Kegiatan</th>
                                      <th>Lokasi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1. </td>
                                      <td>  Oktober
                                        2021
                                      </td>
                                      <td>
                                        09.00 -
                                        12.00 WIB
                                      </td>
                                      <td>
                                        WORKSHOP JARINGAN DAN PROGRAMMING
                                      </td>
                                      <td>
                                        Ruang Kelas Universitas Pelita
                                        Bangsa
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">4. SYARAT DAN KETENTUAN </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                1. Cetak Form Pendaftaran yang sudah di isi untuk validasi saat mengikuti workshop , silahkan download di : <a href="">Download form</a> <br>
                                2. Peserta hanya bisa memilih salah satu materi , tidak bisa mengikuti keduanya. <br>
                                3. Mahasiswa teknik Informatika (Slot 40 Peserta umtuk 1 materi) <br>
                                4. Dresscode memakai Almaater Universita Pelita Bangsa <br>
                                5. Membawa Laptop Pribadi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">5. BENEFIT </button>
                        </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                1. Ilmu yang bermanfaat <br>
                                2. E- Sertifikat <br>
                                3. Souvenir
                            </p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>
@endsection
