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
                  <div class="badge-promo wow fadeScale" data-wow-delay=".6s"><span class="badge-promo-text">Sedang Berlangsung</span>
                    <svg class="badge-promo-icon" width="319" height="49" viewBox="0 0 319 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H319L299 25L319 49H0L20 25L0 0Z" fill="url( #svg-gradient-primary )"></path>
                      <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M0 0H319L299 25L319 49L0 0Z" fill="white"></path>
                    </svg>
                  </div>
                  <h4 class="wow fadeInUp text-spacing-200" data-wow-delay=".50s" data-caption-animate="fadeInUp" data-caption-delay="300" data-caption-duration="900">Festival Ajang Sinergisitas Teknologi</h4>
                  <h1 class="wow fadeScale" data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="900">FAST UPB 2021</h1>
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
                              <time datetime="2019-01-05">11 September - 17 Oktober 2021</time></span></h5>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <br>
            <!-- Thumbnail Video Link-->
            <div>
                <div class="group">
                    <a class="button button-secondary button-round-1 wow fadeScale" href="https://twibbon.fastupb.com/" target="_blank" data-triangle=".button-overlay"><span>Buat Twibbon</span><span class="button-overlay"></span></a>
                    <a class="button button-primary button-round-1 wow fadeScale" href="{{route('form')}}" target="_blank" data-triangle=".button-overlay"><span>Daftar lomba</span><span class="button-overlay"></span></a></div>
            </div>
            <!-- Thumbnail Video Link-->
          <div class="video-link-wrapper">
            <div class="unit align-items-center">
              <div class="unit-body text-right">
                <h5><span class="big">Watch Trailer</span></h5>
              </div>
              <div class="unit-right"><a class="video-link" href="https://youtu.be/ADVbFfihJ84" data-lightgallery="item">
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
    {{-- <section class="parallax-container section" data-parallax-img="images/bg-parallax-01-1894x1200.jpg" >
        <div class="parallax-content section-lg context-dark text-center text-lg-left parallax-overlay-gradient-primary">
          <div class="container">
            <div class="row row-30 align-items-center">
              <div class="col-lg-5">
                <h6>FAST Universitas Pelita Bangsa</h6>
                <h4>Akan Segera di adakan dalam :</h4>
              </div>
              <div class="col-lg-7 text-lg-right">
                <!-- Countdown rectangle-->
                <div class="countdown countdown-classic" data-countdown="data-countdown" data-to="2021-9-11">
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
    </section> --}}
        <!-- Section Biggest 2019 Digital Conference-->
    <section class="section section-lg bg-default wow fadeIn" id="about">
          <div class="container">
            <div class="row row-30 justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5">
                <h6>Tentang acara</h6>
                <h3 class="heading-lg-postfix-15">FAST UPB 2021</h3>
                <p>Festival Sinergisitas Teknologi Universitas Pelita Bangsa (FAST UPB). Acara ini  merupakan sebuah festival kegiatan untuk meningkatkan dan menampilkan minat bakat di bidang IT dengan mengangkat aspek-aspek budaya khususnya kebudayaan di Jawa Barat. Kegiatan ini juga memberikan kesempatan kepada seluruh mahasiswa yang ada di Universitas Pelita Bangsa, mahasiswa umum maupun pelajar untuk dapat membuktikan karya dalam bentuk prestasi.Kegiatan ini akan dimulai dengan beberapa serangkaian kegiatan berupa edukasi yang di dalamnya ada Seminar dan Workshop, dan beberapa kegiatan kompetisi seperti Cerdas Cermat, Turnamen E-Sport, Desain Poster, dan yang lainnya terkait di bidang IT. Demikian di harapkan acara ini dapat menambah wawasan, meningkatkan pengetahuan tentang IT dan budaya Nusantara serta mempererat rasa kekeluaargaan khususnya terhadap mahasiswa Teknik Informatika dan para Pelajar. </p>
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
                        <p>Universitas Pelita Bangsa</p>
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
                          <time datetime="2019-01-05">11 September - 17 Oktober 2021</time>
                        </p>
                      </div>
                    </div>
                  </li>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 text-md-right">
                <!-- Image Box-->
                <div class="images-box">
                  <div class="images-box-item images-box-item-right">
                    <div class="wow fadeScale"><img src="images/logo/fast.png" alt="" width="470" height="590"/>
                    </div>
                  </div>
                  <div class="images-box-item images-box-item-left">
                    {{-- <div class="wow fadeScale"><img src="images/logo/fast.png" alt="" width="270" height="257"/> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="divider divider-gray-500 text-center"></div>

        <!-- Divider-->
@endsection
