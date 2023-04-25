@include('header')
<!-- End Header -->
  <main id="main">
 <div>

  @foreach ($books as $book)
      <p>{{$book->bookid}}</p>
      <p>{{$book->title}}</p>
      <p>{{$book->author}}</p>
      <p>{{$book->image}}</p>
      <p>{{$book->description}}</p>
      <p>{{$book->price}}</p>
      <p>{{$book->publisher}}</p>
  @endforeach
 </div>
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

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

       
        <div class="row portfolio-container">

           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/PSSA/Tulsivanam_Cover.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tulsivanam</h4>
                <h4>Brahmarshi Pitamaha Patriji</h4>

              </div>
              <div class="portfolio-links">
                <a href="assets/img/PSSA/Tulsivanam_Cove.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                
            </div>
          </div>
          </div>
           <div class="row portfolio-container">

           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/PSSA/Geeta Cover.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Shrimad Bhagwat</h4>
                <h4> Geeta</h4>

              </div>
              <div class="portfolio-links">
                <a href="assets/img/PSSA/Tulsivanam_Cove.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                
            </div>
          </div>
          </div>
          <div class="row portfolio-container">

           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/PSSA/Art & Science.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Meditation </h4>
                <h4>Art & Science</h4>

              </div>
              <div class="portfolio-links">
                <a href="assets/img/PSSA/Art & Science_.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/PSSA/Book11.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SPIRITUAL VALUES</h4>
                <h4>Class VI</h4>

              </div>
              <div class="portfolio-links">
                <a href="assets/img/PSSA/Art & Science_.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                
            </div>
          </div>
        </div>-->

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/PSSA/Class - VI.jpg"     class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SPIRITUAL VALUES</h4>
                <h4>Class VI</h4>

              </div>
              <div class="portfolio-links">
                <a href="assets/img/PSSA/Back page-VI.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                
            </div>
          </div>
</div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/PSSA/Class - VII.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SPIRITUAL VALUES</h4>
                <p>Class VII</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/PSSA/Back page-VII.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/PSSA/Class - VIII.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SPIRITUAL VALUES</h4>
                <p>Class VIII</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/PSSA/Back page-VIII.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/PSSA/Class - 9th.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SPIRITUAL VALUES</h4>
                <p>Class IX</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/PSSA/Class - 9th_.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/PSSA/Class -X.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SPIRITUAL VALUES</h4>
                <p>Class X</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/PSSA/Back page-X.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/PSSA/Class -XI_.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SPIRITUAL VALUES</h4>
                <p>Class XI</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/PSSA/Class -12.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SPIRITUAL VALUES</h4>
                <p>Class XII</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/PSSA/Back page-12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/PSSA/Cover pagel Graduate- II_.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SPIRITUAL VALUES</h4>
                <p>Card</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/PSSA/Cover pagel Graduate- II.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/PSSA/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
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