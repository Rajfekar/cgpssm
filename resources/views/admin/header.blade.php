
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Admin CGPSSM</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="admindash/assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="admindash/assets/css/style.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="admindash/assets/modules/fontawesome6.1.1/css/all.css">
	<!-- Boxicons CSS-->
	<link rel="stylesheet" href="admindash/assets/modules/boxicons/css/boxicons.min.css">
	<!-- Apexcharts  CSS -->
	<link rel="stylesheet" href="admindash/assets/modules/apexcharts/apexcharts.css">
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
				<li class="nav-item dropdown dropdown-list-toggle">
					<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					   <i class="fa fa-bell size-icon-1"></i><span class="badge bg-danger notif">4</span>
					</a> 				 
					<div class="dropdown-menu dropdown-list">
						<div class="dropdown-header">Notifications</div>
						<div class="dropdown-list-content dropdown-list-icons">
							<div class="custome-list-notif"> 
							<a href="#" class="dropdown-item dropdown-item-unread">
								<div class="dropdown-item-icon bg-primary text-white">
								  <i class="fas fa-code"></i>
								</div>
								<div class="dropdown-item-desc">
									The Atrana template has the latest update!
								  <div class="time text-primary">3 Min Ago</div>
								</div>
							  </a>

							  <a href="#" class="dropdown-item">
								<div class="dropdown-item-icon bg-info text-white">
								  <i class="far fa-user"></i>
								</div>
								<div class="dropdown-item-desc">
								   Sri asks you for friendship!
								  <div class="time">12 Hours Ago</div>
								</div>
							  </a>

							  <a href="#" class="dropdown-item">
								<div class="dropdown-item-icon bg-danger text-white">
								  <i class="fas fa-check"></i>
								</div>
								<div class="dropdown-item-desc">
									Storage has been cleared, now you can get back to work!
								  <div class="time">20 Hours Ago</div>
								</div>
							  </a>

						  
							  <a href="#" class="dropdown-item">
								<div class="dropdown-item-icon bg-info text-white">
								  <i class="fas fa-bell"></i>
								</div>
								<div class="dropdown-item-desc">
								    Welcome to Atrana Template, I hope you enjoy using this template!
								  <div class="time">Yesterday</div>
								</div>
							  </a>
 
							</div>
						</div>

						<div class="dropdown-footer text-center">
						  <a href="#">View All</a>
						</div>

					  
				  </li>
			 
				  <li class="nav-item dropdown">
					<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					  <img src="admindash/assets/images/avatar/avatar-1.png" alt="">
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
					<h2 class="mb-0"><img src="admindash/assets/images/logo.png"> Admin</h2>
			</div>

            <ul class="side-menu">
                <li>
					<a href="{{url('admin_dash')}}" class="active">
						<i class='bx bxs-dashboard icon' ></i> Dashboard
					</a>
				</li>

				<!-- Divider-->
                <li class="divider" data-text="STARTER">STARTER</li>

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
