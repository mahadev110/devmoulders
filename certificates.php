<?php
include('includes/header.php');
$currentPage = 'certificates';
include('includes/navbar.php');
$pageTitle = "Certificates & Policies";
include('includes/breadcrumbs.php');
?>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Certificates & Policies</h2>
    <p>CHECK OUR CERTIFICATES</p>
  </div>
  <!-- End Section Title -->

  <div class="container">
    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <!-- <ul
                  class="portfolio-filters isotope-filters"
                  data-aos="fade-up"
                  data-aos-delay="100"
                >
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-app">App</li>
                  <li data-filter=".filter-product">Product</li>
                  <li data-filter=".filter-branding">Branding</li>
                  <li data-filter=".filter-books">Books</li>
                </ul> -->
      <!-- End Portfolio Filters -->

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <div class="portfolio-content h-100">
            <img src="assets/img/certificates/iso-certificate02.jpg" class="img-fluid" alt="" />
            <div class="portfolio-info">
              <h4>ISO 9001:2015 Certificate</h4>
              <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
              <a href="assets/img/certificates/iso-certificate02.jpg" title="App 1" data-gallery="portfolio-gallery-app"
                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div>
        <!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <div class="portfolio-content h-100">
            <img src="assets/img/certificates/IS1293_01.jpg" class="img-fluid" alt="" />
            <div class="portfolio-info">
              <h4>ISI Certificate</h4>

              <a href="assets/img/certificates/IS1293_01.jpg" title="Product 1" data-gallery="portfolio-gallery-product"
                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div>
        <!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <div class="portfolio-content h-100">
            <img src="assets/img/certificates/HR-Policy.jpg" class="img-fluid" alt="" />
            <div class="portfolio-info">
              <h4>HR Policy</h4>

              <a href="assets/img/certificates/HR-Policy.jpg" title="Branding 1"
                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                  class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div>
        <!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
          <div class="portfolio-content h-100">
            <img src="assets/img/certificates/go-green-policy.jpg" class="img-fluid" alt="" />
            <div class="portfolio-info">
              <h4>Go Green Policy</h4>

              <a href="assets/img/certificates/go-green-policy.jpg" title="Branding 1"
                data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div>
        <!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <div class="portfolio-content h-100">
            <img src="assets/img/certificates/quality-policy.png" class="img-fluid" alt="" />
            <div class="portfolio-info">
              <h4>Quality Policy</h4>

              <a href="assets/img/certificates/quality-policy.png" title="App 2" data-gallery="portfolio-gallery-app"
                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div>
        <!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <div class="portfolio-content h-100">
            <img src="assets/img/certificates/QualityPolicyTamil.jpg" class="img-fluid" alt="" />
            <div class="portfolio-info">
              <h4>Quality Policy (Tamil)</h4>

              <a href="assets/img/certificates/QualityPolicyTamil.jpg" title="Product 2"
                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                  class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div>
        <!-- End Portfolio Item -->
      </div>
      <!-- End Portfolio Container -->
    </div>
  </div>
</section>
<!-- /Portfolio Section -->
</main>

<?php include('includes/footer.php'); ?>