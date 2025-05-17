<?php

$page_title = "Dev Moulders - Contact";

$meta_description = "Get in touch with Dev Moulders for custom plastic moulded parts, power cords, wiring harness, and tool & die solutions. Reach out to us for inquiries, support, or business partnerships.";

$meta_keywords = "Contact Dev Moulders, Plastic Components Manufacturer, Wiring Harness Inquiries, Power Cord Manufacturer, Plastic Moulding Solutions, Business Enquiries, Dev Moulders Contact";

include('includes/header.php');



include('includes/navbar.php');

$pageTitle = "Contact Us";

include('includes/breadcrumbs.php');

?>



<!-- Contact Section -->

<section id="contact" class="contact section">

  <!-- Section Title -->

  <div class="container section-title" data-aos="fade-up">

    <h2>Contact</h2>

    <h3>Have a project in mind? Dev Moulders is just a message away.</h3>

  </div>

  <!-- End Section Title -->



  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">

          <div class="col-lg-12">

            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="200">

              <i class="bi bi-geo-alt"></i>

              <h3>Address</h3>

              <p>

                R.S 3/8 Mailam Road, Sedarapet, Puducherry - 605 111,

                India

              </p>

            </div>

          </div>

          <!-- End Info Item -->



          <div class="col-md-6">

            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="300">

              <i class="bi bi-telephone"></i>

              <h3>Call Us</h3>

              <p>+91-98946 20985</p>

              <p>+91-98941 20985</p>

            </div>

          </div>

          <!-- End Info Item -->



          <div class="col-md-6">

            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="400">

              <i class="bi bi-envelope"></i>

              <h3>Email Us</h3>



              <p>

                <a href="mailto:sales@devmoulders.in">sales@devmoulders.in</a>

              </p>

              <p>

                <a href="mailto:s.sivaram@devmoulders.in">s.sivaram@devmoulders.in</a>

              </p>

              <p>

                <a href="mailto:s.singh@devmoulders.in">s.singh@devmoulders.in</a>

              </p>

            </div>

          </div>

          <!-- End Info Item -->

        </div>

      </div>



      <div class="col-lg-6">

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">

          <div class="row gy-4">

            <div class="col-md-6">

              <input type="text" name="name" class="form-control" placeholder="Your Name" required="" />

            </div>



            <div class="col-md-6">

              <input type="email" class="form-control" name="email" placeholder="Your Email" required="" />

            </div>



            <div class="col-md-12">

              <input type="text" class="form-control" name="subject" placeholder="Subject" required="" />

            </div>



            <div class="col-md-12">

              <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>

            </div>



            <div class="col-md-12 text-center">

              <div class="loading">Loading</div>

              <div class="error-message"></div>

              <div class="sent-message">

                Your message has been sent. Thank you!

              </div>



              <button type="submit">Send Message</button>

            </div>

          </div>

        </form>

      </div>

      <!-- End Contact Form -->

    </div>

  </div>

</section>

<!-- /Contact Section -->



<!-- Map Section -->

<section id="map" class="map section">

  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="col-12">

        <div class="map-container" style="

                  width: 100%;

                  height: 400px;

                  overflow: hidden;

                  border-radius: 8px;

                ">

          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.537526930068!2d79.74865439999999!3d12.0064695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a53677380f6aa07%3A0xf2b0e1d2e90b85ae!2sDEV%20MOULDERS!5e0!3m2!1sen!2sin!4v1746303215098!5m2!1sen!2sin"
            width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- /Map Section -->

</main>

 <script>
        $(document).ready(function() {
            $('.php-email-form').submit(function(e) {
                e.preventDefault();
                
                var form = $(this);
                var url = form.attr('action');
                var formData = form.serialize();
                
                $('.loading').show();
                $('.error-message').hide();
                $('.sent-message').hide();
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        $('.loading').hide();
                        
                        if(response.success) {
                            $('.sent-message').show();
                            form[0].reset(); // Reset the form fields
                        } else {
                            $('.error-message').html(response.message).show();
                        }
                    },
                    error: function(xhr, status, error) {
                        $('.loading').hide();
                        $('.error-message').html("There was an error sending your message. Please try again later.").show();
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>

<?php include('includes/footer.php'); ?>