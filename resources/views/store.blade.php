@include('header')
<!-- End Header -->
  <main id="main">
 
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
@php
 $cartList = session()->get('cart');
@endphp
@foreach ($cartList as $key => $item)
<h2>
  {{$key}}
  {{$item["id"]}}
  {{$item["name"]}}
  {{$item["price"]}}
  {{$item["quantity"]}}
  {{$item['price']*$item['quantity']}}

</h2>
@endforeach
       
        <div class="d-flex justify-content-between align-items-center">
          <h2>PSSA</h2>
           <ol>
            <li><a href="index.html">Home</a></li>

            <li>PSSA</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
       <!----------------------------------------------------------->
       <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>PSSA</h2>
        <p><strong>PSSA proudly announces that the books published on "Basic Spiritual Science" in the form of Text-books integrated with CBSE/State Board curriculum as a part of their academic courses has given remarkable results to almost 250+ school's students all over India. The difference in their behaviour, up gradation in   academic performances, physical strengthen are few benefits commonly observed among those students who have been practicing these learning's regularly.</strong></p>
        </div>

        <div class="row">

          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Book</li>
              <li data-filter=".filter-card">Book2</li>
              <li data-filter=".filter-web">Book3</li>
            </ul>
          </div>
        </div>



<div class="row justify-evenly">


@foreach ($books as $book)
<div class="col-md-4">


<div class=" product-card  ">
  <img src="{{'/storage/books/'. $book->image}}" alt="Book Cover">
  <h3 class="product-title">{{$book->title}}</h3>
  <p class="product-author"><b>Author</b> - {{$book->author}}</p>
  <p class="product-price">₹{{$book->price}}</p>
  {{-- <a class="add-to-cart btn btn-primary" href="">Add To Cart</a> --}}
   <form method="POST" action="{{route('add_to_cart')}}">
      @csrf
      <input type="hidden" name="book_id" value="{{$book->id}}">
      <div class="input-group">
        <input type="number" name="quantity" value="1" min="1" max="10" class="form-control">
        <div class="input-group-append">
          <button type="submit" class="btn btn-primary">Add to Cart</button>
        </div>
      </div>
    </form>
  <p class="product-description">{{$book->description}}</p>
 
  <div class="product-rating">
    <span class="rating-stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
    <span class="rating-value">(4.0)</span>
  </div>
</div>
</div>
@endforeach
</div>
  
</div>

      </div>
    </section><!-- End Our Portfolio Section -->

    
       <!------------------------------------------------------------>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
     @include('footer')