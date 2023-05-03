
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Admin CGPSSM</title>

	<!-- Bootstrap CSS-->
	
	<link rel="stylesheet" href="{{asset('admindash/assets/modules/bootstrap-5.1.3/css/bootstrap.css')}}">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{asset('admindash/assets/css/style.css')}}">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="{{asset('admindash/assets/modules/fontawesome6.1.1/css/all.css')}}">
	<!-- Boxicons CSS-->
	<link rel="stylesheet" href="{{asset('admindash/assets/modules/boxicons/css/boxicons.min.css')}}">
	<!-- Apexcharts  CSS -->
	<link rel="stylesheet" href="{{asset('admindash/assets/modules/apexcharts/apexcharts.css')}}">
</head>
<body>
  
  <!--Topbar -->
  <div class="topbar transition">
	<div class="bars">
		<button type="button" class="btn transition" id="sidebar-toggle">
			<i class="fa fa-bars"></i>
		</button>
	</div>
		<div class="menu">
			<ul>
				
			 
				  <li class="nav-item dropdown">
					<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					  <img src="{{asset('admindash/assets/images/avatar/avatar-1.png')}}" alt="img">
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="my-profile.html"><i class="fa fa-user size-icon-1"></i> <span>My Profile</span></a>
						<a class="dropdown-item" href="settings.html"><i class="fa fa-cog size-icon-1"></i> <span>Settings</span></a>
						<hr class="dropdown-divider">
						<a class="dropdown-item" href="#"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span>My Profile</span></a>
					</ul>
				  </li>
			</ul>
		</div>
	</div>

	<!--Sidebar-->
	<div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
        <div class="sidebar-content"> 
        	<div id="sidebar">
			
			<!-- Logo -->
			<div class="logo">
					<h2 class="mb-0"><img src="{{asset('admindash/assets/images/logo.png')}}"> Admin</h2>
			</div>

            <ul class="side-menu">
                <li>
					<a href="{{url('admin_dash')}}" class="active">
						<i class='bx bxs-dashboard icon' ></i> Dashboard
					</a>
				</li>

				<!-- Divider-->
                <li class="divider" data-text="STARTER">Menu</li>

                <li>
                    <a href="{{url('booklist')}}">
						<i class='bx bx-columns icon' ></i> 
						Books
						
					</a>
                   
                </li>

                <li>
					<a href="{{url('userlist')}}">
						<i class='bx bxs-meh-blank icon'></i> 
						Users
					</a>
				</li>
                  <li>
					<a href="{{url('add-book')}}">
						<i class='bx bxs-meh-blank icon'></i> 
						Add Book
					</a>
				</li>


            </ul>

            
        </div>

       </div> 
	 </div>
	</div><!-- End Sidebar-->
