@include('admin.header')
@if (session()->has('success'))
<h2>{{"book delete success"}}</h2>
	
@endif
@if (session()->has('fail'))
	<h2>{{"book delete failed."}}</h2>
@endif
	<div class="sidebar-overlay"></div>

	<!--Content Start-->
	<div class="content-start transition">
		<div class="container-fluid dashboard">
			<div class="content-header">
				<h1>Add Book</h1>
				<p></p>
			</div>
			
			<div class="row">
		

			

			

			

				
		

				
				
			

				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4>Books List</h4>
						</div>
						<div class="card-body"> 
						<form action="/add-book2" method="post" enctype="multipart/form-data">
                            	@csrf
															<div class="form-group">
																<input 
																name="bookid"
																style="background:white; margin:0.9rem; width:70%;" type="text" placeholder="Enter Book ID"
																	class="form-control">
															</div>
														
															<div class="form-group">
																<input 
																name="title"
																style="background:white; margin:0.9rem; width:70%;" type="text" placeholder="Enter Title"
																	class="form-control">
															</div>
															
															<div class="form-group">
																<input 
																name="author"
																style="background:white; margin:0.9rem; width:70%;" type="text" placeholder="Enter Author"
																	class="form-control">
															</div>


																
															<div class="form-group">
																<input 
																name="description"
																style="background:white; margin:0.9rem; width:70%;" type="text" placeholder="Enter Description"
																	class="form-control">
															</div>

																
															<div class="form-group">
																<input 
																name="price"
																style="background:white; margin:0.9rem; width:70%;" type="text" placeholder="Enter Price"
																	class="form-control">
															</div>

																
															<div class="form-group">
																<input 
																name="publisher"
																style="background:white; margin:0.9rem; width:70%;" type="text" placeholder="Enter Publisher"
																	class="form-control">
															</div>
															
															<div class="form-group">
																<input 
																name="image"
																style="background:white; margin:0.9rem; width:70%;" type="file" 
																placeholder="Choose Image"
																	class="form-control">
															</div>

                                                            
                                                            
									<button class="btn btn-primary">
                                        Add Book</button>					
													
                        </form>
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
