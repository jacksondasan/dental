<!DOCTYPE html>
	<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Dental Diary | Yenepoya </title>

		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="icon" type="image/jpg" sizes="32x32" href="{{asset ('vendors/images/dental_logo.jpg') }}"/>
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset ('vendors/styles/core.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{asset ('vendors/styles/icon-font.min.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{asset ('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{asset ('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{asset ('vendors/styles/style.css') }}" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.min.css"> 
		<link rel="stylesheet" type="text/css" href="{{asset ('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}"/>

	</head>
	<body>
		<div class="header header-white">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
						
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					
			</div>
		</div>
		<div class="user-notification">
			<div class="dropdown">
			    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown" >
				    <i class="icon-copy dw dw-notification"></i>
				    <span class="badge notification-active"></span>
			    </a>
			<div class="dropdown-menu dropdown-menu-right">
				<div class="notification-list mx-h-350 customscroll">
					<ul>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="user-info-dropdown">
		<div class="dropdown">
			<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
			<span class="user-icon">
				
			</span>
			
		</a>
		<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" >
		<a class="dropdown-item" href="#" ><i class="dw dw-user1"></i> Profile</a >
		<a class="dropdown-item" href="{{ route('logout') }}" ><i class="dw dw-logout"></i> Log Out</a >
	</div>
</div>
</div>
</div>
</div>

<div class="left-side-bar">
<div class="brand-logo" style="background-color: #fff;">
		<a href="#">
			<img src="{{asset ('vendors/images/original.webp') }}" alt="" class="light-logo" style="width: 140px;margin-left: 17px;">
		</a>
		<div class="close-sidebar" data-toggle="left-sidebar-close">
			<i class="ion-close-round"></i>
		</div>
	</div>
	<div class="menu-block customscroll">
		<div class="sidebar-menu">
			<ul id="accordion-menu">
				
					@auth
                        @php
                            $userType = session('user_type');
                        @endphp

                        @if($userType === 'Receptionist')
                        <li>
                            <a href="" class="dropdown-toggle no-arrow">
                                <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                            </a>
                        </li>
						
						@elseif($userType === 'frontdesk')
                        <li>
                            <a href="" class="dropdown-toggle no-arrow">
                                <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                            </a>
                        </li>
                    @endif
					<li>
						<a href="{{ route('logout') }}"  class="dropdown-toggle no-arrow">
						<span class="micon bi bi-box-arrow-right"></span
							><span class="mtext">logout</span>
						</a>
					</li>	
				    @else
					<li>
                            <a href="{{ route('login.form') }}" class="dropdown-toggle no-arrow">
                                <span class="micon bi bi-box-arrow-in-right"></span><span class="mtext">Login</span>
                            </a>
                        </li>
				@endauth

		</ul>
	</div>
</div>
</div>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">