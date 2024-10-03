<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Login | Dental Diary | Yenepoya </title>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
		<link rel="icon" type="image/jpg" sizes="32x32" href="{{asset ('vendors/images/dental_logo.jpg') }}"/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset ('vendors/styles/core.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset ('vendors/styles/icon-font.min.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset ('vendors/styles/style.css?v=1')}}" />

	
	</head>
	<body class="login-page">


	<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="#">
						<img src="{{asset ('vendors/images/original.webp') }}" alt="" />
						
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="#">Login</a></li>
					</ul>
				</div>
			</div>
		</div>


		
		<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="vendors/images/login_page.png" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Login</h2>
							</div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
							<form method="POST" action="{{ route('login') }}">
								@csrf
								<div class="input-group custom">
									<input type="text" class="form-control form-control-lg"  id="username" name="username" value="{{ old('username') }}" required/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="icon-copy dw dw-user1"></i></span>
									</div>
								</div>
                                <div class="input-group custom">
									<input type="password" id="password" name="password" required class="form-control form-control-lg" placeholder="**********"/>
									<div class="input-group-append custom">
										<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
									</div>
								</div>
							
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											<button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- js -->
		<script src="{{asset ('vendors/scripts/core.js') }}"></script>
		<script src="{{asset ('vendors/scripts/script.min.js') }}"></script>
		<script src="{{asset ('vendors/scripts/process.js') }}"></script>
		<script src="{{asset ('vendors/scripts/layout-settings.js') }}"></script>
	</body>
</html>
