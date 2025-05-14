<?php
include('includes/header.php');
$currentPage = 'quality_systems';
include('includes/navbar.php');
$pageTitle = "Quality Systems";
include('includes/breadcrumbs.php');
?>

      <!-- About Section -->
      <section id="about" class="about section">
        <div class="container">
          <div class="row gy-4">
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
              <img
                src="assets/img/quality-assurance.png"
                class="img-fluid rounded-4 mb-4"
                alt=""
              />
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <h3 class="mt-5">Quality Assurance and Certifications</h3>
              <p>
                Dev Moulders is an ISO 9001:2015 certified company accredited to
                ANAB (ANSI National Accreditation Board) which is a wholly owned
                subsidiary of ANSI (American National Standards Institute) and
                certified by British Standards Institute (BSI), India.
              </p>
              <p>
                The Power Cords manufactured are ISI (Indian Standards
                Institute) marked as per Indian Standard IS 1293:2019. Our
                stringent Quality Control Process ensures that each batch meets
                the Regulatory Standards and Customer Requirements.
              </p>
            </div>
          
          </div>
        </div>
      </section>
      <!-- /About Section -->

      <!-- Features Section -->
    
<section id="features" class="features section">
  <div class="container">
    <ul class="nav nav-tabs row d-flex" data-aos="fade-up" data-aos-delay="100">
      <li class="nav-item col-4">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-4">
          <i class="bi bi-tools"></i>
          <h4 class="d-none d-lg-block">INSTRUMENTS</h4>
        </a>
      </li>
      <li class="nav-item col-4">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
          <i class="bi bi-clipboard-data"></i>
          <h4 class="d-none d-lg-block">SYSTEMS & PROCEDURES</h4>
        </a>
      </li>
      <li class="nav-item col-4">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6">
          <i class="bi bi-journal-bookmark"></i>
          <h4 class="d-none d-lg-block">KNOWLEDGE & AWARENESS</h4>
        </a>
      </li>
    </ul>

    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
      
      <!-- INSTRUMENTS -->
      <div class="tab-pane fade active show" id="features-tab-4">
        <div class="row">
          <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
            <h3>Comprehensive Range of Instruments for Precision</h3>
            <ul>
              <li><i class="bi bi-check2-all"></i> Availability of Basic Measuring Instruments like Vernier, Micrometer, Special Gauges, etc.</li>
              <li><i class="bi bi-check2-all"></i> Push/Pull Gauge for checking pull off force in terminal crimping.</li>
              <li><i class="bi bi-check2-all"></i> Testing Fixtures for wiring harness continuity testing.</li>
              <li><i class="bi bi-check2-all"></i> Full-fledged Lab for testing Power Cords as per Indian Standards IS 1293:2019, BIS-specified testing scheme.</li>
              <li><i class="bi bi-check2-all"></i> Muffle Furnace for checking Ash content in Plastic Raw Material.</li>
              <li><i class="bi bi-check2-all"></i> Conductivity Resistance (CR) checking in power cables.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- SYSTEMS & PROCEDURES -->
      <div class="tab-pane fade" id="features-tab-5">
        <div class="row">
          <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
            <h3>Robust Systems Ensuring Consistent Quality</h3>
            <ul>
              <li><i class="bi bi-check2-all"></i> Definition of Standards for Incoming Inspection, Process Inspection, and Final Inspection.</li>
              <li><i class="bi bi-check2-all"></i> Periodic Calibration of all Measuring Instruments.</li>
              <li><i class="bi bi-check2-all"></i> 100% testing of Power Cords for Continuity and High Voltage.</li>
              <li><i class="bi bi-check2-all"></i> Qualified and continuously trained personnel for Inspection and Reporting.</li>
              <li><i class="bi bi-check2-all"></i> Continuous Monitoring of trends in rejections.</li>
              <li><i class="bi bi-check2-all"></i> Usage of Rejection Analysis tools like 8D, Pareto analysis, etc.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- KNOWLEDGE & AWARENESS -->
      <div class="tab-pane fade" id="features-tab-6">
        <div class="row">
          <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
            <h3>Strong Foundation of Knowledge and Awareness</h3>
            <ul>
              <li><i class="bi bi-check2-all"></i> Understanding of all types of drawings with tolerances, connection diagrams, and highlighting critical dimensions.</li>
              <li><i class="bi bi-check2-all"></i> Understanding the Data Sheets of Plastic Raw Material, Electrical Connectors, and Crimping Terminals.</li>
              <li><i class="bi bi-check2-all"></i> Knowledge of International Quality Standards like UL, CE, RoHS, REACH, etc.</li>
              <li><i class="bi bi-check2-all"></i>Awareness and usage of UL94V0 Plastic Raw Material for Flame retardant and third party testing of the parts (produced using this Raw Material) as per Customer requirement</li>
              <li><i class="bi bi-check2-all"></i> Design and manufacture of Jigs and Fixtures for routing of wiring harness and testing for Continuity, wrong connections, etc.</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



    </main>

  <?php include('includes/footer.php'); ?>