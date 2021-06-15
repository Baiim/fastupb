@extends('layouts.app')
@section('title')
    IT FAST UPB | Universitas Pelita Bangsa
@endsection
@section('content')
        <!-- Swiper Content-->
        <div class="section-swiper-content">
            <div class="container">
              <div class="row justify-content-lg-center">
                <div class="col-lg-10">
                  <div class="badge-promo wow fadeScale" data-wow-delay=".6s"><span class="badge-promo-text">Segera Diadakan !</span>
                    <svg class="badge-promo-icon" width="319" height="49" viewBox="0 0 319 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H319L299 25L319 49H0L20 25L0 0Z" fill="url( #svg-gradient-primary )"></path>
                      <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M0 0H319L299 25L319 49L0 0Z" fill="white"></path>
                    </svg>
                  </div>
                  <h4 class="wow fadeInUp text-spacing-200" data-wow-delay=".8s" data-caption-animate="fadeInUp" data-caption-delay="300" data-caption-duration="900">Festival Ajang Sinergitas Teknologi</h4>
                  <h1 class="wow fadeScale" data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="900">IT FAST UPB 2021</h1>
                  <!-- List Inline-->
                  <ul class="list-inline list-inline-md wow" data-splitting data-wow-delay="1.5s">
                    <li>
                      <div class="unit unit-spacing-xs align-items-center">
                        <div class="unit-left line-height-reset">
                          <svg class="svg-icon-sm svg-icon-primary" role="img">
                            <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                          </svg>
                        </div>
                        <div class="unit-body">
                          <h5 class="text-spacing-100"><span class="big">Cikarang , Bekasi</span></h5>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs align-items-center">
                        <div class="unit-left line-height-reset">
                          <svg class="svg-icon-sm svg-icon-primary" role="img">
                            <use xlink:href="images/svg/sprite.svg#small-calendar"></use>
                          </svg>
                        </div>
                        <div class="unit-body">
                          <h5 class="text-spacing-100"><span class="big">
                              <time datetime="2019-01-05">January 5 to 9, 2019</time></span></h5>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Thumbnail Video Link-->
            <div class="video-link-wrapper">
              <div class="unit align-items-center">
                <div class="unit-body text-right">
                  <h5><span class="big">Watch Trailer</h5>
                </div>
                <div class="unit-right"><a class="video-link" href="https://youtu.be/nbfFDnKkMvw" data-lightgallery="item">
                    <div class="video-link-bg" data-triangle=".video-link-overlay"><span class="video-link-overlay"></span></div><span class="icon fa-play"></span></a></div>
              </div>
            </div>
          </div>
          <!-- Swiper Slider Absolute-->
          <div class="swiper-container swiper-slider swiper-slider-1" data-loop="true" data-simulate-touch="false" data-autoplay="8500" data-direction="horizontal" data-effect="fade">
            <div class="swiper-wrapper">
              <!-- Swiper Slide 01-->
              <div class="swiper-slide" data-slide-bg="images/slide-01-1894x1042.jpg"></div>
              <!-- Swiper Slide 02-->
              <div class="swiper-slide" data-slide-bg="images/slide-02-1894x1042.jpg"></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </section>
      <!-- Section Book Your Ticket-->
      <section class="parallax-container section" data-parallax-img="images/bg-parallax-01-1894x1200.jpg" >
        <div class="parallax-content section-lg context-dark text-center text-lg-left parallax-overlay-gradient-primary">
          <div class="container">
            <div class="row row-30 align-items-center">
              <div class="col-lg-5">
                <h6>IT FAST Universitas Pelita Bangsa</h6>
                <h4>Akan Segera di adakan dalam :</h4>
              </div>
              <div class="col-lg-7 text-lg-right">
                <!-- Countdown rectangle-->
                <div class="countdown countdown-classic" data-countdown="data-countdown" data-to="2021-10-04">
                  <div class="countdown-block wow fadeScale countdown-block-days" data-wow-delay="0s">
                    <div class="countdown-wrap">
                      <div class="countdown-title">Hari</div>
                      <div class="countdown-counter" data-counter-days="">00</div>
                    </div>
                  </div>
                  <div class="countdown-block wow fadeScale countdown-block-hours" data-wow-delay="0.125s">
                    <div class="countdown-wrap">
                      <div class="countdown-title">Jam</div>
                      <div class="countdown-counter" data-counter-hours="">00</div>
                    </div>
                  </div>
                  <div class="countdown-block wow fadeScale countdown-block-minutes" data-wow-delay="0.25s">
                    <div class="countdown-wrap">
                      <div class="countdown-title">Menit</div>
                      <div class="countdown-counter" data-counter-minutes="">00</div>
                    </div>
                  </div>
                  <div class="countdown-block wow fadeScale countdown-block-seconds" data-wow-delay="0.375s">
                    <div class="countdown-wrap">
                      <div class="countdown-title">Detik</div>
                      <div class="countdown-counter" data-counter-seconds="">00</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <!-- Section Biggest 2019 Digital Conference-->
        <section class="section section-lg bg-default wow fadeIn" id="about">
          <div class="container">
            <div class="row row-30 justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5">
                <h6>Tentang acara</h6>
                <h3 class="heading-lg-postfix-15">IT FAST UPB 2021</h3>
                <p>Sinergisitas Teknologi Universitas Pelita Bangsa (FAST UPB). Acara ini  merupakan sebuah festival kegiatan untuk meningkatkan dan menampilkan minat bakat di bidang IT dengan mengangkat aspek-aspek budaya khususnya kebudayaan di Jawa Barat. Kegiatan ini juga memberikan kesempatan kepada seluruh mahasiswa yang ada di Universitas Pelita Bangsa, mahasiswa umum maupun pelajar untuk dapat membuktikan karya dalam bentuk prestasi.Kegiatan ini akan dimulai dengan beberapa serangkaian kegiatan berupa edukasi yang di dalamnya ada Seminar dan Workshop, dan beberapa kegiatan kompetisi seperti Cerdas Cermat, Turnamen E-Sport, Desain Poster, dan yang lainnya terkait di bidang IT. Demikian di harapkan acara ini dapat menambah wawasan, meningkatkan pengetahuan tentang IT dan budaya Nusantara serta mempererat rasa kekeluaargaan khususnya terhadap mahasiswa Teknik Informatika dan para Pelajar. </p>
                <!-- List Inline-->
                <ul class="list-inline list-inline-xl">
                  <li>
                    <div class="unit">
                      <div class="unit-left">
                        <svg class="svg-icon-sm svg-icon-primary" role="img">
                          <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                        </svg>
                      </div>
                      <div class="unit-body">
                        <h5>Lokasi</h5>
                        <p>Kampus Universitas Pelita Bangsa</p>
                        <p>Gedung Dinas Pariwisata Kabupaten Bekasi</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit">
                      <div class="unit-left">
                        <svg class="svg-icon-sm svg-icon-primary" role="img">
                          <use xlink:href="images/svg/sprite.svg#small-calendar"></use>
                        </svg>
                      </div>
                      <div class="unit-body">
                        <h5>Tanggal/waktu</h5>
                        <p>
                          <time datetime="2019-01-05">September 4 to 12, 2021</time>
                        </p>
                      </div>
                    </div>
                  </li>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 text-md-right">
                <!-- Image Box-->
                <div class="images-box">
                  <div class="images-box-item images-box-item-right">
                    <div class="wow fadeScale"><img src="images/home-1-01-470x590.jpg" alt="" width="470" height="590"/>
                    </div>
                  </div>
                  <div class="images-box-item images-box-item-left">
                    <div class="wow fadeScale"><img src="images/home-1-02-270x257.jpg" alt="" width="270" height="257"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="divider divider-gray-500 text-center"></div>
        {{-- Lomba --}}
        <section class="section section-lg bg-default text-center" id="kegiatan">
            <div class="container">
              <h4>Kegiatan Lomba</h4>
              <div class="row row-30 justify">
                <div class="col-md-6 col-lg-4">
                  <!-- Sponsor Modern-->
                  <div class="sponsor-ritmo"><a class="sponsor-ritmo-header" href="#" data-triangle=".sponsor-ritmo-overlay">
                      <div class="sponsor-ritmo-overlay"></div>
                      <div class="sponsor-ritmo-img">
                        <div class="sponsor-ritmo-img-default"><img src="images/gold-sponsor-1-117x70.png" alt="" width="117" height="70"/>
                        </div>
                        <div class="sponsor-ritmo-img-active"><img src="images/gold-sponsor-active-1-117x70.png" alt="" width="117" height="70"/>
                        </div>
                      </div></a>
                    <div class="sponsor-ritmo-body">
                      <h5 class="sponsor-ritmo-title"><span class="big">Cerdas Cermat SMA/SMK</span></h5>
                      <p class="sponsor-ritmo-text" >
                        <div style="text-align: left">
                            <ul >A. Pelaksanaan</ul>
                            <li>Hari, Tanggal	: Sabtu, 4 September 2021</li>
                            <li>Waktu		: 13:00 WIB s.d selesai</li>
                            <li>Tempat	: Kampus Universitas Pelita Bangsa</li> <br>
                            <ul>B. Jenis Kegiatan</ul>
                            <li>Merupakan pertandingan adu ketajaman berpikir dan ketangkasan dalam menjawab pertanyaan secara cepat dan tepat.</li> <br>
                            <ul>C. Peserta</ul>
                            <li>Pelajar tingkat SMA/SMK se-Kabupaten Bekasi</li>
                        </div>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <!-- Sponsor Modern-->
                  <div class="sponsor-ritmo"><a class="sponsor-ritmo-header" href="#" data-triangle=".sponsor-ritmo-overlay">
                      <div class="sponsor-ritmo-overlay"></div>
                      <div class="sponsor-ritmo-img">
                        <div class="sponsor-ritmo-img-default"><img src="images/gold-sponsor-2-100x58.png" alt="" width="100" height="58"/>
                        </div>
                        <div class="sponsor-ritmo-img-active"><img src="images/gold-sponsor-active-2-100x58.png" alt="" width="100" height="58"/>
                        </div>
                      </div></a>
                    <div class="sponsor-ritmo-body">
                      <h5 class="sponsor-ritmo-title"><span class="big">Turnamen E-Sport</span></h5>
                      <p class="sponsor-ritmo-text" >
                        <div style="text-align: left">
                            <ul >A. Pelaksanaan</ul>
                            <li>Hari, Tanggal	: Sabtu, 11 September 2021</li>
                            <li>Waktu		: 08:00 WIB s.d 17:00 WIB</li>
                            <li>Tempat	: Gedung Dinas Pariwisata Kabupaten Bekasi</li> <br>
                            <ul>B. Jenis Kegiatan</ul>
                            <li>Merupakan pertandingan adu ketajaman berpikir dan ketangkasan dalam menjawab pertanyaan secara cepat dan tepat.</li> <br>
                            <ul>C. Peserta</ul>
                            <li>mahasiswa</li>
                            <br>
                        </div>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <!-- Sponsor Modern-->
                  <div class="sponsor-ritmo"><a class="sponsor-ritmo-header" href="#" data-triangle=".sponsor-ritmo-overlay">
                      <div class="sponsor-ritmo-overlay"></div>
                      <div class="sponsor-ritmo-img">
                        <div class="sponsor-ritmo-img-default"><img src="images/gold-sponsor-3-99x38.png" alt="" width="99" height="38"/>
                        </div>
                        <div class="sponsor-ritmo-img-active"><img src="images/gold-sponsor-active-3-99x38.png" alt="" width="99" height="38"/>
                        </div>
                      </div></a>
                    <div class="sponsor-ritmo-body">
                      <h5 class="sponsor-ritmo-title"><span class="big">Short Film</span></h5>
                      <p class="sponsor-ritmo-text" >
                        <div style="text-align: left">
                            <ul >A. Pelaksanaan</ul>
                            <li>Hari, Tanggal	: Sabtu, 4 September 2021</li>
                            <li>Waktu		: 13:00 WIB s.d selesai</li>
                            <li>Tempat	: Kampus Universitas Pelita Bangsa</li> <br>
                            <ul>B. Jenis Kegiatan</ul>
                            <li>Merupakan pertandingan adu ketajaman berpikir dan ketangkasan dalam menjawab pertanyaan secara cepat dan tepat.</li> <br>
                            <ul>C. Peserta</ul>
                            <li>Pelajar tingkat SMA/SMK se-Kabupaten Bekasi</li>
                        </div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row row-30 justify-content-center">
                <div class="col-md-6 col-lg-4">
                  <!-- Sponsor Modern-->
                  <div class="sponsor-ritmo"><a class="sponsor-ritmo-header" href="#" data-triangle=".sponsor-ritmo-overlay">
                      <div class="sponsor-ritmo-overlay"></div>
                      <div class="sponsor-ritmo-img">
                        <div class="sponsor-ritmo-img-default"><img src="images/gold-sponsor-1-117x70.png" alt="" width="117" height="70"/>
                        </div>
                        <div class="sponsor-ritmo-img-active"><img src="images/gold-sponsor-active-1-117x70.png" alt="" width="117" height="70"/>
                        </div>
                      </div></a>
                    <div class="sponsor-ritmo-body">
                        <h5 class="sponsor-ritmo-title"><span class="big">Design Poster</span></h5>
                        <p class="sponsor-ritmo-text" >
                          <div style="text-align: left">
                              <ul >A. Pelaksanaan</ul>
                              <li>Hari, Tanggal	: Sabtu, 11 September 2021</li>
                              <li>Waktu		: 08:00 WIB s.d selesai</li>
                              <li>Tempat	: Gedung Dinas Pariwisata Kabupaten Bekasi</li> <br>
                              <ul>B. Jenis Kegiatan</ul>
                              <li>Merupakan Desain Grafis yang di dalam nya memuat gambar dan huruf, poster yang di maksud bisa dalam bentuk cetak maupun digital.</li> <br>
                              <ul>C. Peserta</ul>
                              <li>Mahasiswa Universitas Pelita Bangsa</li> <br>
                          </div>
                        </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <!-- Sponsor Modern-->
                  <div class="sponsor-ritmo"><a class="sponsor-ritmo-header" href="#" data-triangle=".sponsor-ritmo-overlay">
                      <div class="sponsor-ritmo-overlay"></div>
                      <div class="sponsor-ritmo-img">
                        <div class="sponsor-ritmo-img-default"><img src="images/gold-sponsor-2-100x58.png" alt="" width="100" height="58"/>
                        </div>
                        <div class="sponsor-ritmo-img-active"><img src="images/gold-sponsor-active-2-100x58.png" alt="" width="100" height="58"/>
                        </div>
                      </div></a>
                    <div class="sponsor-ritmo-body">
                        <h5 class="sponsor-ritmo-title"><span class="big">Web Design Competition</span></h5>
                        <p class="sponsor-ritmo-text" >
                          <div style="text-align: left">
                              <ul >A. Pelaksanaan</ul>
                              <li>Hari, Tanggal	: Sabtu, 4 September 2021</li>
                              <li>Waktu		: 08:00 WIB s.d selesai</li>
                              <li>Tempat	: Kampus Universitas Pelita Bangsa</li> <br>
                              <ul>B. Jenis Kegiatan</ul>
                              <li>Perlombaan dalam bidang Design Interface.</li> <br>
                              <ul>C. Juri</ul>
                              <li>Dosen Universitas Pelita Bangsa</li> <br>
                              <ul>D. Peserta</ul>
                              <li>Mahasiswa UPB & Mahasiswa Umum</li>
                          </div>
                        </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <!-- Sponsor Modern-->
                  <div class="sponsor-ritmo"><a class="sponsor-ritmo-header" href="#" data-triangle=".sponsor-ritmo-overlay">
                      <div class="sponsor-ritmo-overlay"></div>
                      <div class="sponsor-ritmo-img">
                        <div class="sponsor-ritmo-img-default"><img src="images/gold-sponsor-3-99x38.png" alt="" width="99" height="38"/>
                        </div>
                        <div class="sponsor-ritmo-img-active"><img src="images/gold-sponsor-active-3-99x38.png" alt="" width="99" height="38"/>
                        </div>
                      </div></a>
                    <div class="sponsor-ritmo-body">
                        <h5 class="sponsor-ritmo-title"><span class="big">IoT Competition</span></h5>
                        <p class="sponsor-ritmo-text" >
                          <div style="text-align: left">
                              <ul >A. Pelaksanaan</ul>
                              <li>Hari, Tanggal	: Sabtu, 4 September 2021</li>
                              <li>Waktu		: 08:00 WIB s.d selesai</li>
                              <li>Tempat	: Kampus Universitas Pelita Bangsa</li> <br>
                              <ul>B. Jenis Kegiatan</ul>
                              <li>Perlombaan I.O.T kategori Internet Of Thing.</li> <br>
                              <ul>C. Juri</ul>
                              <li>Dosen Universitas Pelita Bangsa</li> <br>
                              <ul>D. Peserta</ul>
                              <li>Mahasiswa UPB & Mahasiswa Umum</li>
                          </div>
                        </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
                <div class="block-lg block-center">
                  <h6>Become a sponsor.</h6>
                  <h2>Let’s become a part of our conference</h2><a class="button button-lg button-primary button-offset-xl" href="become-a-sponsor.html" data-triangle=".button-overlay"><span>Daftar Lomba</span><span class="button-overlay"></span></a>
                </div>
              </div>
          </section>
                <!-- Divider-->

        <!-- Section Who Is Speaking-->
        <section class="parallax-container section" data-parallax-img="images/bg-parallax-02-1894x1950.jpg">
          <div class="parallax-content section-lg context-dark text-center">
            <div class="container">
              <h6 class="text-secondary">Our Speakers</h6>
              <h3>who is speaking.</h3>
              <div class="row row-30">
                <div class="col-md-6 col-lg-4">
                  <div>
                    <!-- Speaker-->
                    <div class="speaker">
                      <div class="speaker-img" data-triangle=".speaker-overlay">
                        <div class="speaker-overlay"></div><a href="#"><img src="images/speaker-01-330x354.jpg" alt="" width="330" height="354"/></a>
                        <ul class="speaker-social-list">
                          <li><a class="icon icon-xs fa-facebook-f" href="#"></a></li>
                          <li><a class="icon icon-xs fa-twitter" href="#"></a></li>
                          <li><a class="icon icon-xs fa-youtube-play" href="#"></a></li>
                        </ul>
                      </div>
                      <h5 class="speaker-title"><a href="#">Jesscia brown</a></h5>
                      <p class="speaker-position">Co Founder</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div>
                    <!-- Speaker-->
                    <div class="speaker">
                      <div class="speaker-img" data-triangle=".speaker-overlay">
                        <div class="speaker-overlay"></div><a href="#"><img src="images/speaker-02-330x354.jpg" alt="" width="330" height="354"/></a>
                        <ul class="speaker-social-list">
                          <li><a class="icon icon-xs fa-facebook-f" href="#"></a></li>
                          <li><a class="icon icon-xs fa-twitter" href="#"></a></li>
                          <li><a class="icon icon-xs fa-youtube-play" href="#"></a></li>
                        </ul>
                      </div>
                      <h5 class="speaker-title"><a href="#">Mike hardons</a></h5>
                      <p class="speaker-position">Lead Developer</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div>
                    <!-- Speaker-->
                    <div class="speaker">
                      <div class="speaker-img" data-triangle=".speaker-overlay">
                        <div class="speaker-overlay"></div><a href="#"><img src="images/speaker-03-330x354.jpg" alt="" width="330" height="354"/></a>
                        <ul class="speaker-social-list">
                          <li><a class="icon icon-xs fa-facebook-f" href="#"></a></li>
                          <li><a class="icon icon-xs fa-twitter" href="#"></a></li>
                          <li><a class="icon icon-xs fa-youtube-play" href="#"></a></li>
                        </ul>
                      </div>
                      <h5 class="speaker-title"><a href="#">Chritine Eve</a></h5>
                      <p class="speaker-position">Manager</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div>
                    <!-- Speaker-->
                    <div class="speaker">
                      <div class="speaker-img" data-triangle=".speaker-overlay">
                        <div class="speaker-overlay"></div><a href="#"><img src="images/speaker-04-330x354.jpg" alt="" width="330" height="354"/></a>
                        <ul class="speaker-social-list">
                          <li><a class="icon icon-xs fa-facebook-f" href="#"></a></li>
                          <li><a class="icon icon-xs fa-twitter" href="#"></a></li>
                          <li><a class="icon icon-xs fa-youtube-play" href="#"></a></li>
                        </ul>
                      </div>
                      <h5 class="speaker-title"><a href="#">Kevin Martin</a></h5>
                      <p class="speaker-position">Supporter</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div>
                    <!-- Speaker-->
                    <div class="speaker">
                      <div class="speaker-img" data-triangle=".speaker-overlay">
                        <div class="speaker-overlay"></div><a href="#"><img src="images/speaker-05-330x354.jpg" alt="" width="330" height="354"/></a>
                        <ul class="speaker-social-list">
                          <li><a class="icon icon-xs fa-facebook-f" href="#"></a></li>
                          <li><a class="icon icon-xs fa-twitter" href="#"></a></li>
                          <li><a class="icon icon-xs fa-youtube-play" href="#"></a></li>
                        </ul>
                      </div>
                      <h5 class="speaker-title"><a href="#">Sarah Rose</a></h5>
                      <p class="speaker-position">Designer</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div>
                    <!-- Speaker-->
                    <div class="speaker">
                      <div class="speaker-img" data-triangle=".speaker-overlay">
                        <div class="speaker-overlay"></div><a href="#"><img src="images/speaker-06-330x354.jpg" alt="" width="330" height="354"/></a>
                        <ul class="speaker-social-list">
                          <li><a class="icon icon-xs fa-facebook-f" href="#"></a></li>
                          <li><a class="icon icon-xs fa-twitter" href="#"></a></li>
                          <li><a class="icon icon-xs fa-youtube-play" href="#"></a></li>
                        </ul>
                      </div>
                      <h5 class="speaker-title"><a href="#">John Smith</a></h5>
                      <p class="speaker-position">Assistant</p>
                    </div>
                  </div>
                </div>
              </div><a class="button button-secondary box-with-triangle-right wow fadeScale" href="speakers.html" data-triangle=".button-overlay"><span>View all speakers</span><span class="button-overlay"></span></a>
            </div>
          </div>
        </section>
        <!-- Section Conference Schedule-->
        <section class="section section-lg bg-default text-center">
          <div class="container">
            <h6>Event Schedule plan</h6>
            <h3>Conference Schedule.</h3>
            <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
              <!--Nav tabs-->
              <ul class="nav nav-tabs">
                <li class="nav-item" role="presentation"><a class="nav-link nav-link nav-link-secondary-darker" href="#tabs-1-1" data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span><span class="nav-link-cite">First Day</span><span class="nav-link-title">January 5, 2019</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link nav-link-purple-heart" href="#tabs-1-2" data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span><span class="nav-link-cite">Second Day</span><span class="nav-link-title">January 6, 2019</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link nav-link-primary" href="#tabs-1-3" data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span><span class="nav-link-cite">Third Day</span><span class="nav-link-title">January 8, 2019</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link nav-link-secodanry" href="#tabs-1-4" data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span><span class="nav-link-cite">Fourth Day</span><span class="nav-link-title">January 9, 2019</span></a></li>
              </ul>
              <!--Tab panes-->
              <div class="tab-content wow fadeIn">
                <div class="tab-pane fade" id="tabs-1-1">
                  <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">9:00 am to 10:00 am</span><span class="schedule-classic-title heading-4">Digital Conference 2019 Introduction</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Jessica Brown</span> -  Co Founder</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion1-card-body-onwkttkd" aria-labelledby="accordion1-card-head-hxapwahb" data-parent="#accordion1" role="tabpanel">
                        <div class="card-body">
                          <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes fraticinidaes.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion1-card-head-hijijucp" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-lffuwxio" aria-controls="accordion1-card-body-lffuwxio" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-02-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">10:00 am to 11:00 am</span><span class="schedule-classic-title heading-4">Wordpress developement stages</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Mike Hardson</span> -  Lead Developer</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion1-card-body-lffuwxio" aria-labelledby="accordion1-card-head-hijijucp" data-parent="#accordion1" role="tabpanel">
                        <div class="card-body">
                          <p>Est emeritis epos, cesaris. Competition de brevis zelus, imperium solem! Byssus prareres, tanquam dexter glos. Eheu, habena! Lotus monss ducunt ad idoleum. Castus fluctuss ducunt ad mineralis. A falsis, magister castus ignigena. Demolitiones cadunt in fortis avenio! Audax, raptus exsuls superbe.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion1-card-head-hpaxeker" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-qdqkcamp" aria-controls="accordion1-card-body-qdqkcamp" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-03-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Evolution of user interface in 2019</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Manager</span> -  Co Founder</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion1-card-body-qdqkcamp" aria-labelledby="accordion1-card-head-hpaxeker" data-parent="#accordion1" role="tabpanel">
                        <div class="card-body">
                          <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour or randomised words which don't look even slightly believable. If you are going to use a passage randomised words which don't look even slightly believable.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!-- Schedule Simple-->
                                      <div class="schedule-classic schedule-classic-simple">
                                        <div class="schedule-classic-content">
                                          <div class="schedule-classic-img">
                                            <svg class="svg-icon-md svg-icon-primary" role="img">
                                              <use xlink:href="images/svg/sprite.svg#clock"></use>
                                            </svg>
                                          </div><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Enjoy the coffee break</span>
                                        </div>
                                      </div>
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion1-card-head-fjfogjti" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-ivevyplo" aria-controls="accordion1-card-body-ivevyplo" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-04-58x58.jpg" alt="" width="58" height="58"/></span><span class="schedule-classic-img"><img src="images/schedule-05-58x58.jpg" alt="" width="58" height="58"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Digital Conference 2019 Introduction</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Kevin Martin</span>
                                      - Supporter&nbsp;&nbsp;
                                      .&nbsp;&nbsp; <span class="schedule-classic-author-name">Sarah Rose</span> -  Designer</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion1-card-body-ivevyplo" aria-labelledby="accordion1-card-head-fjfogjti" data-parent="#accordion1" role="tabpanel">
                        <div class="card-body">
                          <p>Fiscina domesticus lixa est. Cur vita mori? Triticum, heuretes, et nixus. Clabulare superbus abaculus est. Est lotus gemna, cesaris. Equisos mori! Uria moris, tanquam dexter cedrium. Hydras ridetis, tanquam bi-color saga. Pol, a bene tumultumque, castus nuptia! Noster, neuter stellas diligenter.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-1-2">
                  <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist" aria-multiselectable="false">
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion2-card-head-qqqtjoau" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-card-body-hmvqrcja" aria-controls="accordion2-card-body-hmvqrcja" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-03-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Evolution of user interface in 2019</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Manager</span> -  Co Founder</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion2-card-body-hmvqrcja" aria-labelledby="accordion2-card-head-qqqtjoau" data-parent="#accordion2" role="tabpanel">
                        <div class="card-body">
                          <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour or randomised words which don't look even slightly believable. If you are going to use a passage randomised words which don't look even slightly believable.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion2-card-head-spnrcijv" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-card-body-shdhqwhj" aria-controls="accordion2-card-body-shdhqwhj" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-02-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">10:00 am to 11:00 am</span><span class="schedule-classic-title heading-4">Wordpress developement stages</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Mike Hardson</span> -  Lead Developer</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion2-card-body-shdhqwhj" aria-labelledby="accordion2-card-head-spnrcijv" data-parent="#accordion2" role="tabpanel">
                        <div class="card-body">
                          <p>Est emeritis epos, cesaris. Competition de brevis zelus, imperium solem! Byssus prareres, tanquam dexter glos. Eheu, habena! Lotus monss ducunt ad idoleum. Castus fluctuss ducunt ad mineralis. A falsis, magister castus ignigena. Demolitiones cadunt in fortis avenio! Audax, raptus exsuls superbe.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion2-card-head-vrmbocua" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-card-body-eqwqapab" aria-controls="accordion2-card-body-eqwqapab" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">9:00 am to 10:00 am</span><span class="schedule-classic-title heading-4">Digital Conference 2019 Introduction</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Jessica Brown</span> -  Co Founder</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion2-card-body-eqwqapab" aria-labelledby="accordion2-card-head-vrmbocua" data-parent="#accordion2" role="tabpanel">
                        <div class="card-body">
                          <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes fraticinidaes.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!-- Schedule Simple-->
                                      <div class="schedule-classic schedule-classic-simple">
                                        <div class="schedule-classic-content">
                                          <div class="schedule-classic-img">
                                            <svg class="svg-icon-md svg-icon-primary" role="img">
                                              <use xlink:href="images/svg/sprite.svg#clock"></use>
                                            </svg>
                                          </div><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Enjoy the coffee break</span>
                                        </div>
                                      </div>
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion2-card-head-oaoaxgky" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-card-body-kmmeejga" aria-controls="accordion2-card-body-kmmeejga" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-04-58x58.jpg" alt="" width="58" height="58"/></span><span class="schedule-classic-img"><img src="images/schedule-05-58x58.jpg" alt="" width="58" height="58"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Digital Conference 2019 Introduction</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Kevin Martin</span>
                                      - Supporter&nbsp;&nbsp;
                                      .&nbsp;&nbsp; <span class="schedule-classic-author-name">Sarah Rose</span> -  Designer</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion2-card-body-kmmeejga" aria-labelledby="accordion2-card-head-oaoaxgky" data-parent="#accordion2" role="tabpanel">
                        <div class="card-body">
                          <p>Fiscina domesticus lixa est. Cur vita mori? Triticum, heuretes, et nixus. Clabulare superbus abaculus est. Est lotus gemna, cesaris. Equisos mori! Uria moris, tanquam dexter cedrium. Hydras ridetis, tanquam bi-color saga. Pol, a bene tumultumque, castus nuptia! Noster, neuter stellas diligenter.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-1-3">
                  <div class="card-group-custom card-group-corporate" id="accordion3" role="tablist" aria-multiselectable="false">
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion3-card-head-twpndpre" data-toggle="collapse" data-parent="#accordion3" href="#accordion3-card-body-isrhhksp" aria-controls="accordion3-card-body-isrhhksp" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-02-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">10:00 am to 11:00 am</span><span class="schedule-classic-title heading-4">Wordpress developement stages</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Mike Hardson</span> -  Lead Developer</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion3-card-body-isrhhksp" aria-labelledby="accordion3-card-head-twpndpre" data-parent="#accordion3" role="tabpanel">
                        <div class="card-body">
                          <p>Est emeritis epos, cesaris. Competition de brevis zelus, imperium solem! Byssus prareres, tanquam dexter glos. Eheu, habena! Lotus monss ducunt ad idoleum. Castus fluctuss ducunt ad mineralis. A falsis, magister castus ignigena. Demolitiones cadunt in fortis avenio! Audax, raptus exsuls superbe.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion3-card-head-spqeafxt" data-toggle="collapse" data-parent="#accordion3" href="#accordion3-card-body-nxplbtnu" aria-controls="accordion3-card-body-nxplbtnu" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-03-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Evolution of user interface in 2019</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Manager</span> -  Co Founder</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion3-card-body-nxplbtnu" aria-labelledby="accordion3-card-head-spqeafxt" data-parent="#accordion3" role="tabpanel">
                        <div class="card-body">
                          <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour or randomised words which don't look even slightly believable. If you are going to use a passage randomised words which don't look even slightly believable.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion3-card-head-rxyiuqjb" data-toggle="collapse" data-parent="#accordion3" href="#accordion3-card-body-qpeygaxh" aria-controls="accordion3-card-body-qpeygaxh" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">9:00 am to 10:00 am</span><span class="schedule-classic-title heading-4">Digital Conference 2019 Introduction</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Jessica Brown</span> -  Co Founder</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion3-card-body-qpeygaxh" aria-labelledby="accordion3-card-head-rxyiuqjb" data-parent="#accordion3" role="tabpanel">
                        <div class="card-body">
                          <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes fraticinidaes.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!-- Schedule Simple-->
                                      <div class="schedule-classic schedule-classic-simple">
                                        <div class="schedule-classic-content">
                                          <div class="schedule-classic-img">
                                            <svg class="svg-icon-md svg-icon-primary" role="img">
                                              <use xlink:href="images/svg/sprite.svg#clock"></use>
                                            </svg>
                                          </div><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Enjoy the coffee break</span>
                                        </div>
                                      </div>
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion3-card-head-clrhkrpn" data-toggle="collapse" data-parent="#accordion3" href="#accordion3-card-body-jomsxgka" aria-controls="accordion3-card-body-jomsxgka" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-04-58x58.jpg" alt="" width="58" height="58"/></span><span class="schedule-classic-img"><img src="images/schedule-05-58x58.jpg" alt="" width="58" height="58"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Digital Conference 2019 Introduction</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Kevin Martin</span>
                                      - Supporter&nbsp;&nbsp;
                                      .&nbsp;&nbsp; <span class="schedule-classic-author-name">Sarah Rose</span> -  Designer</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion3-card-body-jomsxgka" aria-labelledby="accordion3-card-head-clrhkrpn" data-parent="#accordion3" role="tabpanel">
                        <div class="card-body">
                          <p>Fiscina domesticus lixa est. Cur vita mori? Triticum, heuretes, et nixus. Clabulare superbus abaculus est. Est lotus gemna, cesaris. Equisos mori! Uria moris, tanquam dexter cedrium. Hydras ridetis, tanquam bi-color saga. Pol, a bene tumultumque, castus nuptia! Noster, neuter stellas diligenter.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-1-4">
                  <div class="card-group-custom card-group-corporate" id="accordion4" role="tablist" aria-multiselectable="false">
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion4-card-head-ybgfluus" data-toggle="collapse" data-parent="#accordion4" href="#accordion4-card-body-vujqeaao" aria-controls="accordion4-card-body-vujqeaao" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">9:00 am to 10:00 am</span><span class="schedule-classic-title heading-4">Digital Conference 2019 Introduction</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Jessica Brown</span> -  Co Founder</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion4-card-body-vujqeaao" aria-labelledby="accordion4-card-head-ybgfluus" data-parent="#accordion4" role="tabpanel">
                        <div class="card-body">
                          <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes fraticinidaes.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion4-card-head-kkanjswy" data-toggle="collapse" data-parent="#accordion4" href="#accordion4-card-body-luhibwcd" aria-controls="accordion4-card-body-luhibwcd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-03-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Evolution of user interface in 2019</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Manager</span> -  Co Founder</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion4-card-body-luhibwcd" aria-labelledby="accordion4-card-head-kkanjswy" data-parent="#accordion4" role="tabpanel">
                        <div class="card-body">
                          <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour or randomised words which don't look even slightly believable. If you are going to use a passage randomised words which don't look even slightly believable.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion4-card-head-icjoexwh" data-toggle="collapse" data-parent="#accordion4" href="#accordion4-card-body-bjyiygqy" aria-controls="accordion4-card-body-bjyiygqy" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-02-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">10:00 am to 11:00 am</span><span class="schedule-classic-title heading-4">Wordpress developement stages</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Mike Hardson</span> -  Lead Developer</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion4-card-body-bjyiygqy" aria-labelledby="accordion4-card-head-icjoexwh" data-parent="#accordion4" role="tabpanel">
                        <div class="card-body">
                          <p>Est emeritis epos, cesaris. Competition de brevis zelus, imperium solem! Byssus prareres, tanquam dexter glos. Eheu, habena! Lotus monss ducunt ad idoleum. Castus fluctuss ducunt ad mineralis. A falsis, magister castus ignigena. Demolitiones cadunt in fortis avenio! Audax, raptus exsuls superbe.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!-- Schedule Simple-->
                                      <div class="schedule-classic schedule-classic-simple">
                                        <div class="schedule-classic-content">
                                          <div class="schedule-classic-img">
                                            <svg class="svg-icon-md svg-icon-primary" role="img">
                                              <use xlink:href="images/svg/sprite.svg#clock"></use>
                                            </svg>
                                          </div><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Enjoy the coffee break</span>
                                        </div>
                                      </div>
                    <!--Bootstrap card-->
                    <article class="card card-custom card-corporate">
                      <div class="card-header" role="tab">
                        <div class="card-title"><a class="collapsed" id="accordion4-card-head-fccgfuhi" data-toggle="collapse" data-parent="#accordion4" href="#accordion4-card-body-utqsdqvx" aria-controls="accordion4-card-body-utqsdqvx" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-04-58x58.jpg" alt="" width="58" height="58"/></span><span class="schedule-classic-img"><img src="images/schedule-05-58x58.jpg" alt="" width="58" height="58"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Digital Conference 2019 Introduction</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Kevin Martin</span>
                                      - Supporter&nbsp;&nbsp;
                                      .&nbsp;&nbsp; <span class="schedule-classic-author-name">Sarah Rose</span> -  Designer</span></span></span></span></span></a></div>
                      </div>
                      <div class="collapse" id="accordion4-card-body-utqsdqvx" aria-labelledby="accordion4-card-head-fccgfuhi" data-parent="#accordion4" role="tabpanel">
                        <div class="card-body">
                          <p>Fiscina domesticus lixa est. Cur vita mori? Triticum, heuretes, et nixus. Clabulare superbus abaculus est. Est lotus gemna, cesaris. Equisos mori! Uria moris, tanquam dexter cedrium. Hydras ridetis, tanquam bi-color saga. Pol, a bene tumultumque, castus nuptia! Noster, neuter stellas diligenter.</p>
                          <div class="unit unit-spacing-xxs">
                            <div class="unit-left">
                              <svg class="svg-icon-sm svg-icon-primary" role="img">
                                <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                              </svg>
                            </div>
                            <div class="unit-body">
                              <h5>Where</h5>
                              <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Section Official Sponsors-->
        <section class="parallax-container section" data-parallax-img="images/bg-parallax-04-1894x1170.jpg">
          <div class="parallax-content section-lg context-dark text-center">
            <div class="container">
              <h6>Our sponsorships</h6>
              <h3>Official Sponsors.</h3>
              <div class="row row-30 row-lg-50 justify-content-center">
                <div class="col-sm-5 col-lg-3">
                  <div class="wow">
                    <div>
                      <!-- Sponsor--><a class="sponsor" href="#" data-triangle=".sponsor-overlay">
                        <div class="sponsor-overlay"></div>
                        <div class="sponsor-img"><img src="images/sponsor-01-117x70.png" alt="" width="117" height="70"/>
                        </div></a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5 col-lg-3">
                  <div class="wow">
                    <div>
                      <!-- Sponsor--><a class="sponsor" href="#" data-triangle=".sponsor-overlay">
                        <div class="sponsor-overlay"></div>
                        <div class="sponsor-img"><img src="images/sponsor-02-66x83.png" alt="" width="66" height="83"/>
                        </div></a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5 col-lg-3">
                  <div class="wow">
                    <div>
                      <!-- Sponsor--><a class="sponsor" href="#" data-triangle=".sponsor-overlay">
                        <div class="sponsor-overlay"></div>
                        <div class="sponsor-img"><img src="images/sponsor-03-119x33.png" alt="" width="119" height="33"/>
                        </div></a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5 col-lg-3">
                  <div class="wow">
                    <div>
                      <!-- Sponsor--><a class="sponsor" href="#" data-triangle=".sponsor-overlay">
                        <div class="sponsor-overlay"></div>
                        <div class="sponsor-img"><img src="images/sponsor-04-116x68.png" alt="" width="116" height="68"/>
                        </div></a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <p class="font-weight-sbold font-secondary"><span class="wow" data-splitting>Don’t hesitate, contact us for better help and services.</span> <a class="link-inline wow fadeScale" href="#">View All Sponsors</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

@endsection
