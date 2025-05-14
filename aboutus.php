<?php
include('includes/header.php');
$currentPage = 'aboutus';
include('includes/navbar.php');
$pageTitle = "About Us";
include('includes/breadcrumbs.php');
?>

<!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3>Welcome to Dev Moulders</h3>
        <p>
          Dev Moulders was established in the 1995 for the manufacture of
          Plastic Injection Moulded parts. The Company specializes in
          Engineering Plastics and has the technical capability for
          processing GF Nylon, PC, ABS, Polyacetal, PPS, PBT etc.
        </p>
        <p class="fst-italic">
          In 2007 we diversified into manufacture of Insert Moulded Parts
          using Automatic Vertical Injection Moulding Machines. Using this
          process we manufacture Power Cords, USB and other Data Cables.
          We also have expertise in manufacture of Wiring Harness.
        </p>
        <p>
          We manufacture all types of Power Cords (both 6A and 16A) with
          IEC - C13 socket and also various types of Grommet as per customer
          needs. We are an ISI certified power cord manufacturer (for 6A
          and 16A) and our CM/L Number is 6932382
        </p>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        <img src="assets/img/01about.jpg" class="img-fluid rounded-4 mb-4" alt="" />
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
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
          <i class="bi bi-people"></i>
          <h4 class="d-none d-lg-block">Management</h4>
        </a>
      </li>
      <li class="nav-item col-4">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
          <i class="bi bi-building"></i>
          <h4 class="d-none d-lg-block">Infrastructure</h4>
        </a>
      </li>
      <li class="nav-item col-4">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
          <i class="bi bi-gear-wide-connected"></i>
          <h4 class="d-none d-lg-block">Plant & Machinery</h4>
        </a>
      </li>
      <!-- <li class="nav-item col-3">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#features-tab-4"
              >
                <i class="bi bi-clipboard-check"></i>
                <h4 class="d-none d-lg-block">Quality & Testing Equipment</h4>
              </a>
            </li> -->
    </ul>

    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
      <!-- Management -->
      <div class="tab-pane fade active show" id="features-tab-1">
        <div class="row">
          <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
            <h3>Strong Leadership and Dedicated Teams</h3>
            <p class="fst-italic">
              The company is managed by R Sivaram who has completed his
              Mechanical Engineering from B.I.T.S, Pilani and has 40 years
              of work experience in Engineering Industry. Prior to
              establishing this company in 1995 he has worked in TVS
              groups (TVS motor Company and TVS Whirlpool). He has
              experience in Production, Engineering, Quality and R & D. He
              was associated with Whirlpool Corporation USA for the
              washing machine technology transfer to India.
            </p>
            <ul>
              <li>
                <i class="bi bi-check2-all"></i> Experienced leadership
                driving continuous growth and innovation.
              </li>
              <li>
                <i class="bi bi-check2-all"></i> Skilled workforce
                committed to delivering superior quality and service.
              </li>
              <li>
                <i class="bi bi-check2-all"></i> Client-centric approach
                ensuring complete customer satisfaction.
              </li>
            </ul>
            <p>
              Our collaborative culture empowers every team member to
              contribute to our success story.
            </p>
          </div>
        </div>
      </div>

      <!-- Infrastructure -->
      <div class="tab-pane fade" id="features-tab-2">
        <div class="row">
          <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
            <h3>Modern Facilities Supporting High-Quality Production</h3>
            <p class="fst-italic">
              Our Company is located at Sedarapet, Puducherry in our own
              land and a built up area of 12000 sq ft.
            </p>
            <ul>
              <li>
                <i class="bi bi-check2-all"></i> Spacious production areas
                with organized workflows.
              </li>
              <li>
                <i class="bi bi-check2-all"></i> Dedicated sections for
                moulding, wiring, and assembly operations.
              </li>
              <li>
                <i class="bi bi-check2-all"></i> Environmentally conscious
                processes and waste management systems.
              </li>
            </ul>
            <p>
              We invest continuously in our facilities to adapt to growing
              industry demands and client needs.
            </p>
          </div>
        </div>
      </div>

      <!-- Plant & Machinery -->
      <div class="tab-pane fade" id="features-tab-3">
        <div class="row">
          <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
            <h3>Advanced Machines Powering Precision</h3>
            <p class="fst-italic">
              We have 3 Horizontal Injection Moulding Machines (110T and
              130T), 9 Vertical Injection Moulding Machines (TKC, Taiwan
              and e-Tech, Hong Kong) and all the accessories required for
              the moulding machine (like Oven, Cooling systems, Mould
              Lifting cranes etc)
            </p>
            <p>We have all the equipment necessary for</p>
            <ul>
              <li>
                <i class="bi bi-check2-all"></i> Processing cables and
                wires like Jack Stripping.
              </li>
              <li>
                <i class="bi bi-check2-all"></i> Automatic Terminal
                crimping.
              </li>
              <li>
                <i class="bi bi-check2-all"></i> Temperature controlled
                Tinning & soldering etc.
              </li>
            </ul>
            <p>
              We constantly upgrade our equipment to ensure high
              efficiency, precision, and scalability in manufacturing.
            </p>
          </div>
        </div>
      </div>

      <!-- Quality & Testing Equipment -->
      <!-- <div class="tab-pane fade" id="features-tab-4">
              <div class="row">
                <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
                  <h3>Ensuring Superior Quality through Rigorous Testing</h3>
                  <p class="fst-italic">
                    We have all the basic measuring Instruments like Vernier,
                    Micrometer, Push & Pull gauge etc. We have a muffle furnace
                    for checking the ash content in Plastic Raw Material. We
                    have the necessary testing equipment for cable and wire
                    checking like Conductivity Resistance value (CR Value)
                    tester, High Voltage (HV) tester, continuity tester etc. We
                    have an ISI approved Lab for testing of Power Cords as per
                    the scheme of testing specified by the Bureau of Indian
                    Standards (BIS).
                  </p>
                </div>
              </div>
            </div> -->
    </div>
  </div>
</section>


<!-- Team Section -->
<section id="team" class="team section light-background">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Engage & Involve Local Communities</h2>
    <!-- <p>CHECK OUR TEAM</p> -->
  </div>
  <!-- End Section Title -->

  <div class="container">
    <div class="row gy-5">
      <p>
        We have adopted the Government Aided Primary School. Akasampattu
        and are giving School bags, water bottles, Uniforms and Notebooks
        on an annual basis. From 2019 August we have also started
        providing morning breakfast to the school children. We provide
        Financial Assistance to the children of our Company Staff for
        School and College Education.
      </p>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <div class="pic">
            <img src="assets/img/functions/cssce-03.jpg" class="img-fluid" alt="" />
          </div>
          <div class="member-info">
            <h4>Place : Sundankottai - Govt. High School</h4>
            <span>Date : 20.01.2025</span>
          </div>
        </div>
      </div>
      <!-- End Team Member -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <div class="pic">
            <img src="assets/img/functions/cssce-04.jpg" class="img-fluid" alt="" />
          </div>
          <div class="member-info">
            <h4>Place : Sundankottai - Govt. High School</h4>
            <span>Date : 20.01.2025</span>
          </div>
        </div>
      </div>
      <!-- End Team Member -->


      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <div class="pic">
            <img src="assets/img/functions/cssce-01.jpg" class="img-fluid" alt="" />
          </div>
          <div class="member-info">
            <h4>Place : Sundankottai - Govt. Primary school</h4>
            <span>Date : 15.07.2024</span>
          </div>
        </div>
      </div>
      <!-- End Team Member -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <div class="pic">
            <img src="assets/img/functions/cssce-02.jpg" class="img-fluid" alt="" />
          </div>
          <div class="member-info">
            <h4>Place : Sundankottai - Govt. High School</h4>
            <span>Date : 15.07.2024</span>
          </div>
        </div>
      </div>
      <!-- End Team Member -->


      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <div class="pic">
            <img src="assets/img/functions/cssce-05.png" class="img-fluid" alt="" />
          </div>
          <div class="member-info">
            <h4>Place : Akasampattu - Govt. Primary School</h4>
            <span>Date : 11.07.2024</span>
          </div>
        </div>
      </div>
      <!-- End Team Member -->
    </div>
  </div>
</section>
<!-- /Team Section -->
</main>
<?php include('includes/footer.php'); ?>