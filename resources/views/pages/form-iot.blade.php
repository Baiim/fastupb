<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FORM PENDAFTARAN LOMBA IoT</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    <style>
    body{
    background-color: #dee9ff;
}

.registration-form{
	padding: 50px 0;
}

.registration-form form{
    background-color: #fff;
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .form-icon{
	text-align: center;
    background-color: #5891ff;
    border-radius: 50%;
    font-size: 40px;
    color: white;
    width: 100px;
    height: 100px;
    margin: auto;
    margin-bottom: 50px;
    line-height: 100px;
}

.registration-form .item{
	border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.registration-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
    margin-top: 20px;
}

.registration-form .social-media{
    max-width: 600px;
    background-color: #fff;
    margin: auto;
    padding: 35px 0;
    text-align: center;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    color: #9fadca;
    border-top: 1px solid #dee9ff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .social-icons{
    margin-top: 30px;
    margin-bottom: 16px;
}

.registration-form .social-icons a{
    font-size: 23px;
    margin: 0 3px;
    color: #5691ff;
    border: 1px solid;
    border-radius: 50%;
    width: 45px;
    display: inline-block;
    height: 45px;
    text-align: center;
    background-color: #fff;
    line-height: 45px;
}

.registration-form .social-icons a:hover{
    text-decoration: none;
    opacity: 0.6;
}

@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }

    .registration-form .form-icon{
        width: 70px;
        height: 70px;
        font-size: 30px;
        line-height: 70px;
    }
}
</style>
<body>
    <div class="registration-form">
        <form action="{{ route('form-iot.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <label for="">Nama Tim</label>
                <input type="text" name="tim" class="form-control item" placeholder="Nama Tim Kamu" autofocus autocomplete="false" required>
            </div>
            <div class="form-group">
                <label for="">Nama Lengkap Ketua Tim</label>
                <input type="text" name="name" class="form-control item"  placeholder="Nama Lengkap Kamu" autocomplete="false" required>
            </div>
            <div class="form-group">
                <label for="">No. Whatsapp</label>
                <input type="number" name="wa" class="form-control item" placeholder="Nomor Whatsapp Aktif" autocomplete="false" required>
            </div>
            <div class="form-group">
                <label for="">Alamat Email</label>
                <input type="email" name="email" class="form-control item" placeholder="Alamat Email Aktif" autocomplete="false" required>
            </div>
            <div class="form-group">
                <label for="">Kelas</label>
                <input type="text" class="form-control item" name="class" placeholder="Contoh : TI.20.D1" autocomplete="false">
            </div>
            <div class="form-group">
                <label for="">Upload KTM/KRS (Jika Belum Punya KTM)</label>
                <input type="file" class="form-control item" name="ktm" placeholder="Contoh : TI.20.D1" autocomplete="false" required>
                <small class="mt-4" style="color: #5691ff">* Untuk yang belum punya KTM bisa diganti dengan KRS.</small>
            </div>
            <div class="form-group">
                <label for="">Upload bukti transfer</label>
                <input type="file" class="form-control item" name="photo" placeholder="Contoh : TI.20.D1" autocomplete="false" required>
                <small class="mt-4" style="color: #5691ff">* Harap memasukan bukti transfer yang jelas.</small>
            </div>
            {{-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Baca dahulu <a data-toggle="modal" data-target="#terms-txt" href="#">Syarat dan Ketentuan lomba</a></label>
            </div> --}}
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Daftar Sekarang</button>
            </div>
        </form>
        	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Syarat dan Ketentuan lomba</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
                    <embed src="pdf/meja.pdf" frameborder="0" width="100%" height="400px">
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
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
<script>
    $("#terms-txt").modal()
</script>
