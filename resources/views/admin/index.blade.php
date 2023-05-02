@include('admin.header')

	<div class="sidebar-overlay"></div>

	<!--Content Start-->
	<div class="content-start transition">
		<div class="container-fluid dashboard">
			<div class="content-header">
				<h1>Dashboard</h1>
				<p></p>
			</div>
			
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-inbox icon-home bg-primary text-light"></i>
								</div>
								<div class="col-8">
									<p>Revenue</p>
									<h5>{{$revenue}}</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-clipboard-list icon-home bg-success text-light"></i>
								</div>
								<div class="col-8">
									<p>Orders</p>
									<h5>{{$ocount}}</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-chart-bar  icon-home bg-info text-light"></i>
								</div>
								<div class="col-8">
									<p>Books</p>
									<h5>{{$bcount}}</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-id-card  icon-home bg-warning text-light"></i>
								</div>
								<div class="col-8">
									<p>Users</p>
									<h5>{{$ucount}}</h5>
								</div>
							</div>
						</div>
					</div>

				</div>
		
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
						</div>
						<div class="card-body">
							<div id="columnchart"></div>
						</div>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<h4>Recent Messages</h4>
						</div>
						<div class="card-body pb-4">
							<div class="recent-message d-flex px-4 py-3">
								<div class="avatar avatar-lg">
									<img src="admindash/assets/images/message/4.jpg">
								</div>
								<div class="name ms-4">
									<h5 class="mb-1">Hank Schrader</h5>
									<h6 class="text-muted mb-0">@johnducky</h6>
								</div>
							</div>
							<div class="recent-message d-flex px-4 py-3">
								<div class="avatar avatar-lg">
									<img src="admindash/assets/images/message/5.jpg">
								</div>
								<div class="name ms-4">
									<h5 class="mb-1">Dean Winchester</h5>
									<h6 class="text-muted mb-0">@imdean</h6>
								</div>
							</div>
							<div class="recent-message d-flex px-4 py-3">
								<div class="avatar avatar-lg">
									<img src="admindash/assets/images/message/1.jpg">
								</div>
								<div class="name ms-4">
									<h5 class="mb-1">John Doe</h5>
									<h6 class="text-muted mb-0">@Doejohn</h6>
								</div>
							</div>
							<div class="px-4">
								<button class='btn btn-block btn-xl btn-primary font-bold mt-3'>Start
									Conversation</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4>Latest Transaction</h4>
						</div>
						<div class="card-body"> 
						<div class="table-responsive"> 
						<table class="table table-striped">
							<thead>
							  <tr>
								<th>N</th>
								<th scope="col">Order Id</th>
								<th scope="col">Billing Name</th>
								<th scope="col">Date</th>
								<th scope="col">Total</th>
								<th scope="col">Payment Status</th>
								<th scope="col">Payment Method</th>
								<th scope="col">View Details</th>
							  </tr>
							</thead>
							<tbody>
								@php
									$i = 1
								@endphp
								@foreach ($order as $item)
								<tr>
									<th>{{$i++}}</th>
									<th scope="row">{{$item->orderid}}	</th>
									<td>{{$item->billingname}}</td>
									<td>{{$item->orderdate}}</td>
									<td>{{$item->amount}}</td>
									<td><span class="text-success">{{$item->payment_status}}</span></td>
									<td>{{$item->payment_method}}</td>
									<td><button class="btn btn-primary">{{"View Details"}}</button></td>
								</tr>
								@endforeach						
							 
							</tbody>
						  </table>
						  </div>
						</div>
					</div>
				</div>

		   </div>
		</div>
	</div>


	<!-- Footer -->				
	


	<!-- Preloader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	
	<!-- Loader -->
	<div class="loader-overlay"></div>

	<!-- General JS Scripts -->
	<script src="{{asset('admindash/assets/js/atrana.js')}}"></script>

	<!-- JS Libraies -->
	<script src="{{asset('admindash/assets/modules/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admindash/assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('admindash/assets/modules/popper/popper.min.js')}}"></script>

	<!-- Chart Js -->
	<script src="{{asset('admindash/assets/modules/apexcharts/apexcharts.js')}}"></script>
	<script src="{{asset('admindash/assets/js/ui-apexcharts.js')}}"></script>

    <!-- Template JS File -->
	<script src="{{asset('admindash/assets/js/script.js')}}"></script>
	<script src="{{asset('admindash/assets/js/custom.js')}}"></script>
 </body>
</html>
