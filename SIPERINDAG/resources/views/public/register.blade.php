<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FormWizard_v1</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('step_register/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('step_register/css/style.css')}}">
	</head>
	<body>
		<div class="wrapper">
            <form action="{{url('/send/registration')}}" id="wizard" method="POST">
            	{{csrf_field()}}
        		<!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="{{asset('step_register/images/form-wizard-1.jpg')}}" alt="">
						</div>
						<div class="form-content" >
							<div class="form-header">
								<h3>Registrasi Wirausahawan</h3>
							</div>
							<p>Profil</p>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="Nama Depan" class="form-control" name="nama_depan">
								</div>
								<div class="form-holder">
									<input type="text" placeholder="Nama Belakang" class="form-control" name="nama_belakang">
								</div>
							</div>
							<div class="form-row">
								
								<div class="form-holder">
									<input type="text" placeholder="Alamat" class="form-control" name="alamat">
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="Umur" class="form-control" name="umur">
								</div>
								<div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
									<div class="checkbox-tick">
										<label class="male">
											<input type="radio" name="gender" value="male" checked> Male<br>
											<span class="checkmark"></span>
										</label>
										<label class="female">
											<input type="radio" name="gender" value="female"> Female<br>
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div>
							<!-- <div class="checkbox-circle">
								<label>
									<input type="checkbox" checked> Nor again is there anyone who loves or pursues or desires to obtaini.
									<span class="checkmark"></span>
								</label>
							</div> -->
						</div>
					</div>
                </section>

				<!-- SECTION 2 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="{{asset('step_register/images/form-wizard-2.jpg')}}" alt="">
						</div>
						<div class="form-content">
							<div class="form-header">
								<h3>Registrasi Wirausahawan</h3>
							</div>
							<p>Data Diri</p>
							<div class="form-row">
								<div class="form-holder w-100">
									<input type="email" placeholder="Email" class="form-control" name="email">
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="Nomor HP" class="form-control" name="nohp">
								</div>
								
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="N I K" class="form-control" name="nik">
								</div>
								
							</div>

							<!-- <div class="form-row">
								<div class="select">
									<div class="form-holder">
										<div class="select-control">Your country</div>
										<i class="zmdi zmdi-caret-down"></i>
									</div>
									<ul class="dropdown">
										<li rel="United States">United States</li>
										<li rel="United Kingdom">United Kingdom</li>
										<li rel="Viet Nam">Viet Nam</li>
									</ul>
								</div>
								<div class="form-holder"></div>
							</div> -->
						</div>
					</div>
                </section>

                

                <!-- SECTION 3 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="{{asset('step_register/images/form-wizard-3.jpg')}}" alt="">
						</div>
						<div class="form-content">
							<div class="form-header">
								<h3>Registrasi Wirausahawan</h3>
							</div>
							<p>Privasi</p>
							<div class="form-row">
								<div class="form-holder">
									<input type="password" placeholder="Password" class="form-control" name="password">
								</div>
								
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="password" placeholder="Ulangi Password" class="form-control" name="password">
								</div>
								
							</div>
							<div class="checkbox-circle mt-24">
								<label>
									<input type="checkbox" checked>  Please accept <a href="#">terms and conditions ?</a>
									<span class="checkmark"> </span>
								</label>
							</div>
					 <!-- <a onclick="document.getElementById('myform').submit();">click here</a> -->
					 <button type="submit" style="width: 124px;
    background: #6d7f52;
    color: #fff; margin-left: 30%; height: 45px;margin-top: 5%; }">Selesai</button>
						</div>
					</div>
                </section>
            </form>
		</div>

		<!-- JQUERY -->
		<script src="{{asset('step_register/js/jquery-3.3.1.min.js')}}"></script>

		<!-- JQUERY STEP -->
		<script src="{{asset('step_register/js/jquery.steps.js')}}"></script>
		<script src="{{asset('step_register/js/main.js')}}"></script>
		<!-- Template created and distributed by Colorlib -->
</body>
</html>
