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
				<h1>Edit Book Information</h1>
				<p></p>
			</div>
			
			<div class="row">
		

			

			

			

				
		

				
				
			

				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4>Books List</h4>
						</div>
						<div class="card-body"> 
						<form action="{{url('/update-book')}}" method="post" class="form-group" enctype="multipart/form-data">
		@csrf
          <div class="col-md-4">
			<label for="bookid" class="form-label">Book ID</label>
			<input type="text" class="form-control" id="bookid" name="bookid" value="{{$book->bookid}}" >
		  </div>

		    <div class="col-md-4">
			<label for="title" class="form-label">Book Title</label>
			<input type="text" class="form-control" id="title" value="{{$book->title}}" name="title">
		  </div>

		   <div class="col-md-4">
			<label for="author" class="form-label">Book Author</label>
			<input type="text" class="form-control" id="author" value="{{$book->author}}" name="author">
		  </div>
		  
		   <div class="col-md-4">
			<label for="description" class="form-label">Book Description</label>
			<input type="text" class="form-control" id="description" value="{{$book->description}}" name="description">
			@error('description')
				<p>{{$message}}</p>
			@enderror
		  </div>

		   <div class="col-md-4">
			<label for="price" class="form-label">Book Price</label>
			<input type="text" class="form-control" id="price" value="{{$book->price}}" name="price">
		  </div>

		   <div class="col-md-4">
			<label for="publisher" class="form-label">Book Publisher</label>
			<input type="text" class="form-control" id="publisher" value="{{$book->publisher}}" name="publisher">
		  </div>

		   <div class="col-md-4">
			<label for="image" class="form-label">Book Image</label>
			<input type="file" class="form-control" id="image" name="image">
		  </div>

		<button class="btn btn-primary" type="submit">Update</button>

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
