<?php
$page_title = "Dev Moulders - Products";
$meta_description = "Explore Dev Moulders' range of products including precision plastic moulded parts, custom wiring harnesses, certified power cords, and high-quality tools and dies. Trusted solutions for industrial and commercial needs.";
$meta_keywords = "Plastic Moulded Parts, Wiring Harness, Power Cords, Tools and Dies, Plastic Components, Custom Moulding, Electrical Wiring Solutions, Power Cable Manufacturer, Moulding Tools, Die Manufacturing";
include('includes/header.php');

$currentPage = 'tools_dies';
include('includes/navbar.php');
$pageTitle = "Tools and Dies";
include('includes/breadcrumbs.php');
?>

      <!-- Service Details Section -->
      <section id="service-details" class="service-details section">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="services-list">
                <a href="plastic_moulded">Plastic Moulded Parts</a>
                <a href="wiring_harness">Wiring Harness</a>
                <a href="power_cord">Power Cords</a>
                <a href="tools_dies" class="active">Tools and Dies</a>
              </div>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
              <div class="service-img-wrapper">
                <img
                  src="assets/img/products/tools-and-dies.jpg"
                  alt="Tools and Dies"
                  class="img-fluid"
                />
              </div>
              <p class="mt-4">
                We take complete responsibility for the tool manufacture
                including Design, Mould Flow Analysis, Mould Manufacture &
                Assembly. We follow the Production Part Approval Process (PAPP)
                diligently to ensure the time targets are met.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- /Service Details Section -->
    </main>

    <?php include('includes/footer.php'); ?>