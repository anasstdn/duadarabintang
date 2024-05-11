<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('<?php echo base_url('assets/'); ?>assets/img/image/image8.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2><?= $this->lang->line('menu_tentang_kami'); ?></h2>
              <!-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> -->
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="<?= base_url()?>home"><?php echo $this->lang->line('menu_beranda'); ?></a></li>
            <li><?php echo $this->lang->line('menu_tentang_kami'); ?></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-12 content order-last  order-lg-first">
            <style>
                body {
                    text-align: justify;
                }
            </style>
            <h3><?= $this->lang->line('title_intro'); ?></h3>
            <?= $this->lang->line('content_intro'); ?>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

     <!-- ======= History Section ======= -->
     <section id="history" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-12 content order-last  order-lg-first">
          <style>
                body {
                    text-align: justify;
                }
            </style>  
            <h3><?= $this->lang->line('title_history'); ?></h3>
            <?= $this->lang->line('content_history'); ?>
          </div>
        </div>

      </div>
    </section><!-- End History Section -->

     <!-- ======= Visi & Misi Section ======= -->
     <section id="visi" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-12 content order-last  order-lg-first">
            <h3><?= $this->lang->line('title_visi'); ?></h3>
            <?= $this->lang->line('content_visi'); ?>
          </div>
        </div>

      </div>
    </section>

    <section id="misi" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-12 content order-last  order-lg-first">
            <h3><?= $this->lang->line('title_misi'); ?></h3>
            <?= $this->lang->line('content_misi'); ?>
          </div>
        </div>

      </div>
    </section>
    
    <!-- End Visi & Misi Section -->

    <!-- ======= Stats Counter Section ======= -->
    <!-- <section id="stats-counter" class="stats-counter pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div>End Stats Item

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>End Stats Item

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>End Stats Item

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div>End Stats Item

        </div>

      </div>
    </section>End Stats Counter Section -->

  </main>