    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('<?php echo base_url('assets/'); ?>assets/img/image/image8.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2><?php echo $this->lang->line('title_contact_us'); ?></h2>
              <!-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> -->
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="<?= base_url()?>home"><?php echo $this->lang->line('menu_beranda'); ?></a></li>
            <li><?php echo $this->lang->line('menu_contact'); ?></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div>
          <iframe style="border:0; width: 100%; height: 340px;" src="https://maps.google.com/maps?q=jalan+tebet+utara+no+10&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4 mt-4">

          <div class="col-lg-12">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4><?php echo $this->lang->line('content_location'); ?>:</h4>
                <p>Jl. Tebet Utara Dalam No. 10 RT. 010 RW. 001</p>
                <p>Tebet, Jakarta Selatan 12820</p>
                <p>Indonesia</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4><?php echo $this->lang->line('content_email'); ?>:</h4>
                <p>duadarabintang@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4><?php echo $this->lang->line('content_phone'); ?>:</h4>
                <p>(62-21) 8312528</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <!-- <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div> -->
          <!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->