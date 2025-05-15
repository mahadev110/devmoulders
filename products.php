<?php
$page_title = "Dev Moulders - Products";
$meta_description = "Explore Dev Moulders' range of products including precision plastic moulded parts, custom wiring harnesses, certified power cords, and high-quality tools and dies. Trusted solutions for industrial and commercial needs.";
$meta_keywords = "Plastic Moulded Parts, Wiring Harness, Power Cords, Tools and Dies, Plastic Components, Custom Moulding, Electrical Wiring Solutions, Power Cable Manufacturer, Moulding Tools, Die Manufacturing";
include('includes/header.php');

$currentPage = 'products';
include('includes/navbar.php');
$pageTitle = "Products";
include('includes/breadcrumbs.php');
?>
    

      <!-- Services Section -->
      <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Featured Products<br /></p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-5">
            <div
              class="col-xl-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="service-item">
                <div class="img">
                  <img
                    src="assets/img/products/plastic-parts2.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-box-seam"></i>
                  </div>
                  <a href="plastic_moulded" class="stretched-link">
                    <h3>Plastic Moulded Parts</h3>
                  </a>
                  <p>
                    Plastic injection moulding provides tight tolerances and
                    repeatability and is ideal for high ...
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->
            <div
              class="col-xl-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="200"
            >
              <div class="service-item">
                <div class="img">
                  <img
                    src="assets/img/products/wiring-harness2.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-diagram-3"></i>
                  </div>
                  <a href="wiring_harness" class="stretched-link">
                    <h3>Wiring Harness</h3>
                  </a>
                  <p>
                    A wiring harness is an organized set of wires, terminals and
                    connectors that run throughout the ...
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

            <div
              class="col-xl-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="400"
            >
              <div class="service-item">
                <div class="img">
                  <img
                    src="assets/img/products/power-cords.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-plug"></i>
                  </div>
                  <a href="power_cord" class="stretched-link">
                    <h3>Power Cords</h3>
                  </a>
                  <p>
                    Undoubtedly one of the most used product worldwide, power
                    cord is essential when ...
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

            <div
              class="col-xl-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="500"
            >
              <div class="service-item">
                <div class="img">
                  <img
                    src="assets/img/products/tools-and-dies.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-tools"></i>
                    <!-- You can choose any suitable icon -->
                  </div>
                  <a href="tools_dies" class="stretched-link">
                    <h3>Tools and Dies</h3>
                  </a>
                  <p>
                    From Tool design to PPAP (Production Part Approval Process)
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->
          </div>
        </div>
      </section>
      <!-- /Services Section -->

      <!-- Clients Section -->
      <section id="clients" class="clients section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Our Clients</h2>
          <p>TRUSTED PARTNERS AND ACHIEVEMENTS</p>
        </div>
        <!-- End Section Title -->
        <div class="container" data-aos="fade-up">
          <div class="row gy-4 justify-content-center">
            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/1.png" class="img-fluid" alt="" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/2.png" class="img-fluid" alt="" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/3.png" class="img-fluid" alt="" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/4.png" class="img-fluid" alt="" />
            </div>
          </div>
          <!-- End first row -->

          <div class="row gy-4 justify-content-center mt-3">
            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/5.png" class="img-fluid" alt="" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/6.png" class="img-fluid" alt="" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/7.png" class="img-fluid" alt="" />
            </div>
          </div>
          <!-- End second row -->
        </div>
      </section>
      <!-- /Clients Section -->
    </main>

<?php include('includes/footer.php'); ?>