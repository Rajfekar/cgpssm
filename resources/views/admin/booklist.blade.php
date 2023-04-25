@include('admin.header')

	<div class="sidebar-overlay"></div>

	<!--Content Start-->
	<div class="content-start transition">
		<div class="container-fluid dashboard">
			<div class="content-header">
				<h1>Dashboard</h1>
				@if (session()->has('success'))
                       <h2>{{session()->get('success')}}</h2>
	
.                 @endif
.                 @if (session()->has('fail'))
.                 	 <h2>{{session()->get('fail')}}</h2>
.                 @endif
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
									<h5>$65</h5>
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
									<h5>3000</h5>
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
									<p>Sales</p>
									<h5>5500</h5>
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
									<p>Employes</p>
									<h5>256</h5>
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
							<h4>Books List</h4>
						</div>
						<div class="card-body"> 
						<div class="table-responsive"> 
						<table class="table table-striped">
							<thead>
							  <tr>
								  <th scope="col">N</th>
								  <th scope="col">BookId</th>
								<th scope="col">Image</th>
								<th scope="col">Title</th>
								<th scope="col">Author</th>
								<th scope="col">Discription</th>
								<th scope="col">Price</th>
								<th scope="col">Publisher</th>
								<th scope="col">Action</th>
							  </tr>
							</thead>
							<tbody>
								@php
									$i = 1
								@endphp
								@foreach ($books as $book)
							  <tr>
								
								<td>{{$i++}}</td>
								  <th scope="row">{{$book->bookid}}	</th>
								  <td>
                      <img src="{{'/storage/books/'. $book->image}}" alt="image"  height="50px" width="50px" style="border-radius: 50%;" >
								  </td>
								<td>{{$book->title}}</td>
								<td>{{$book->author}}</td>
								<td>{{$book->description}}</td>
								<td><span class="text-success">{{$book->price}}</span></td>
								<td>{{$book->publisher}}</td>
								
								<td>
									<!-- Button trigger for login form modal -->
									<a type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#inlineForm">
											Edit
										</a>
									<a href="{{url('/delete-book')}}/{{$book->id}}" class="btn btn-danger">Delete</a></td>
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


		<!--login form Modal -->
                                   <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
											aria-labelledby="myModalLabel33" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
												role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myModalLabel33">Book Details</h4>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<form action="/update-book" method="POST">
														@csrf
														<div class="modal-body">
															
															
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

														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-light-secondary"
																data-bs-dismiss="modal">
																<i class="bx bx-x d-block d-sm-none"></i>
																<span class="d-none d-sm-block">Close</span>
															</button>
															<button type="submit" class="btn btn-primary ml-1"
																data-bs-dismiss="modal">
																<i class="bx bx-check d-block d-sm-none"></i>
																<span class="d-none d-sm-block">Update</span>
															</button>
														</div>
													</form>
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
	<script src="admindash/assets/js/atrana.js"></script>

	<!-- JS Libraies -->
	<script src="admindash/assets/modules/jquery/jquery.min.js"></script>
	<script src="admindash/assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="admindash/assets/modules/popper/popper.min.js"></script>

	<!-- Chart Js -->
	<script src="admindash/assets/modules/apexcharts/apexcharts.js"></script>
	<script src="admindash/assets/js/ui-apexcharts.js"></script>

    <!-- Template JS File -->
	<script src="admindash/assets/js/script.js"></script>
	<script src="admindash/assets/js/custom.js"></script>
 </body>
</html>
