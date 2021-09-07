<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
    <meta name="author" content="Ansonika">
    <title>@yield('title')</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="form/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="form/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="form/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="form/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="form/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="form/css/bootstrap.min.css" rel="stylesheet">
	<link href="form/css/menu.css" rel="stylesheet">
    <link href="form/css/style.css" rel="stylesheet">
	<link href="form/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="form/css/custom.css" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="form/js/modernizr.js"></script>

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<!-- /menu -->

	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-xl-4 col-lg-4 content-left">
	            <div class="content-left-wrapper">
	                <a href="index.html" id="logo"><img src="form/img/logo.png" alt="" width="45" height="45"></a>
	                <div id="social">
	                    <ul>
	                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
	                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
	                        <li><a href="#0"><i class="icon-google"></i></a></li>
	                        <li><a href="#0"><i class="icon-linkedin"></i></a></li>
	                    </ul>
	                </div>
	                <!-- /social -->
	                <div>
	                    <figure><img src="form/img/info_graphic_1.svg" alt="" class="img-fluid" width="270" height="270"></figure>
	                    <h2></h2>
	                </div>
	                <div class="copy">2021</div>
	            </div>
	            <!-- /content-left-wrapper -->
	        </div>
	        <!-- /content-left -->
	        <div class="col-xl-8 col-lg-8 content-right" id="start">
	            <div id="wizard_container">
	                <div id="top-wizard">
	                    <span id="location"></span>
	                    <div id="progressbar"></div>
	                </div>
	                <!-- /top-wizard -->
	                <form id="wrapped" method="post" enctype="multipart/form-data">
	                    <input id="website" name="website" type="text" value="">
	                    <!-- Leave for security protection, read docs for details -->
	                    <div id="middle-wizard">
	                        <div class="step">
	                            <h2 class="section_title">Identitas</h2>
	                            <h3 class="main_question">Data diri peserta</h3>
	                            <div class="form-group add_top_30">
	                                <label for="name">Nama tim produksi</label>
	                                <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');">
	                            </div>
	                            <div class="form-group">
	                                <label for="email">Nomor Whatsapp</label>
	                                <input type="number" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');">
	                            </div>
	                            <div class="form-group">
	                                <label for="phone">Alamat</label>
	                                <input type="text" name="phone" id="phone" class="form-control required">
	                            </div>
								<label>Kategori</label>
								<div class="form-group radio_input">
								    <label class="container_radio mr-3">Umum
								        <input type="radio" name="gender" value="Male" class="required">
								        <span class="checkmark"></span>
								    </label>
								    <label class="container_radio">Mahasiswa
								        <input type="radio" name="gender" value="Female" class="required">
								        <span class="checkmark"></span>
								    </label>
								</div>
	                            {{-- <div class="form-group add_bottom_30 add_top_20">
	                                <label>Upload File<br><small>(Files accepted: jpeg, png, jpg)</small></label>
	                                <div class="fileupload">
	                                    <input type="file" name="fileupload" accept="image/*" class="required">
	                                </div>
	                            </div> --}}
                                <div class="text-center">
                                    <div class="form-group terms">
                                        <label class="container_check">baca dahulu<a href="#" data-toggle="modal" data-target="#terms-txt"> Syarat dan ketentuan</a> sebelum melanjutkan
                                            <input type="checkbox" name="terms" value="Yes" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
	                        </div>
	                        <!-- /step-->

	                        <!-- /Start Branch ============================== -->
	                        <div class="step" data-state="branchtype">
	                            <h2 class="section_title">Informasi Karya</h2>
	                            <h3 class="main_question">Informasi lengkap karya film</h3>
	                            <div class="form-group add_top_30">
	                                <label for="kfilm">Kategori film</label>
	                                <input type="text" name="kfilm" id="kfilm" class="form-control required">
	                            </div>
	                            <div class="form-group">
	                                <label for="judul">Judul film</label>
	                                <input type="text" name="judul" id="judul" class="form-control required">
	                            </div>
	                            <div class="form-group">
	                                <label for="phone">Durasi film</label>
	                                <input type="text" name="phone" id="phone" class="form-control required">
									<span style="font-size: 10px">*Contoh : 5 Menit 30 Detik</span>
	                            </div>
								<label>Kategori</label>
								<div class="form-group radio_input">
								    <label class="container_radio mr-3">Umum
								        <input type="radio" name="gender" value="Male" class="required">
								        <span class="checkmark"></span>
								    </label>
								    <label class="container_radio">Mahasiswa
								        <input type="radio" name="gender" value="Female" class="required">
								        <span class="checkmark"></span>
								    </label>
								</div>
	                        </div>

	                        <!-- /Work Availability > Part-time ============================== -->
	                        <div class="branch" id="Part-time">
	                            <div class="step" data-state="end">
	                                <h2 class="section_title">Work Availability</h2>
	                                <h3 class="main_question">Additional info about "Part Time" availability</h3>
	                                <div class="form-group add_bottom_30">
	                                    <label>Minimum salary? (in USD)</label>
	                                    <label for="minimum_salary_part_time">Choose a range</label>
	                                    <div class="styled-select clearfix">
	                                        <select class="form-control required" id="minimum_salary_part_time" name="minimum_salary_part_time">
	                                            <option value="">Choose a range</option>
	                                            <option value="&lt;2k">&lt;2k</option>
	                                            <option value="3-5k">3-5k</option>
	                                            <option value="5-7k">5-7k</option>
	                                            <option value="7-10k">7-10k</option>
	                                            <option value="&gt;10k">&gt;10k</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class="form-group add_bottom_30">
	                                    <label>How soon would you be looking to start?</label>
	                                     <label for="start_availability_part_time">Choose your availability</label>
	                                    <div class="styled-select clearfix">
	                                        <select class="form-control required" id="start_availability_part_time" name="start_availability_part_time">
	                                            <option value="">Choose your availability</option>
	                                            <option value="I can start immediately">I can start immediately</option>
	                                            <option value="I need to give 2–4 weeks notice<">I need to give 2–4 weeks notice</option>
	                                            <option value="I am passively browsing">I am passively browsing</option>
	                                            <option value="I will be available in a couple months">I will be available in a couple months</option>
	                                            <option value="I am not sure">I am not sure</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <label class="custom">When you prefer to work?</label>
	                                <div class="form-group radio_input">
	                                    <label class="container_radio mr-3">Morning
	                                        <input type="radio" name="day_preference_part_time" value="Morning" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio mr-3">Afternoon
	                                        <input type="radio" name="day_preference_part_time" value="Afternoon" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio">No Preferences
	                                        <input type="radio" name="day_preference_part_time" value="No Preferences" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step-->

	                        <!-- /Work Availability > Freelance-Contract ============================== -->
	                        <div class="branch" id="Freelance-Contract">
	                            <div class="step" data-state="end">
	                                <h2 class="section_title">Work Availability</h2>
	                                <h3 class="main_question">Additional info about "Freelance/Contract" availability</h3>
	                                <div class="form-group">
	                                    <label for="fixed_rate_contract">Minimum fixed rate? (in USD)</label>
	                                    <input type="text" name="fixed_rate_contract" id="fixed_rate_contract" class="form-control required">
	                                </div>
	                                <div class="form-group">
	                                    <label for="hourly_rate_contract">Minimum hourly rate? (in USD)</label>
	                                    <input type="text" name="hourly_rate_contract" id="hourly_rate_contract" class="form-control required">
	                                </div>
	                                <div class="form-group">
	                                    <label for="minimum_hours_conctract">Minimum hours for a contract?</label>
	                                    <input type="text" name="minimum_hours_conctract" id="minimum_hours_conctract" class="form-control required">
	                                </div>
	                                <label class="custom">Are you willing to work remotely?</label>
	                                <div class="form-group radio_input">
	                                    <label class="container_radio mr-3">Yes
	                                        <input type="radio" name="remotely_contract" value="Yes" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio">No
	                                        <input type="radio" name="remotely_contract" value="No" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step-->

	                        <div class="submit step">
	                            <div class="summary">
	                                <div class="wrapper">
	                                    <h3>Thank your for your time<br><span id="name_field"></span>!</h3>
	                                    <p>We will contat you shorly at the following email address <strong id="email_field"></strong></p>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step last-->

	                    </div>
	                    <!-- /middle-wizard -->
	                    <div id="bottom-wizard">
	                        <button type="button" name="backward" class="backward">Prev</button>
	                        <button type="button" name="forward" class="forward">Next</button>
	                        <button type="submit" name="process" class="submit">Submit</button>
	                    </div>
	                    <!-- /bottom-wizard -->
	                </form>
	            </div>
	            <!-- /Wizard container -->
	        </div>
	        <!-- /content-right-->
	    </div>
	    <!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->
	<!-- /menu button -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center" id="termsLabel">Syarat dan Ketentuan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
                    <embed src="form/pdf/test.pdf" frameborder="0" width="100%" height="500px">
                </div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- COMMON SCRIPTS -->
	<script src="form/js/jquery-3.2.1.min.js"></script>
    <script src="form/js/common_scripts.min.js"></script>
	<script src="form/js/velocity.min.js"></script>
	<script src="form/js/common_functions.js"></script>
	<script src="form/js/file-validator.js"></script>

	<!-- Wizard script-->
	<script src="form/js/func_1.js"></script>

</body>
</html>
