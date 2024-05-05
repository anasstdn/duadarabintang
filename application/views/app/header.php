<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="<?= base_url()?>home" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="<?= base_url()?>assets/assets/img/logo_1.png" alt="" >
            <h1>PT. Dua Dara Bintang</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?= base_url()?>home" <?php if($this->uri->segment(1)=="home"){echo 'class="active"';}?> ><?php echo $this->lang->line('menu_beranda'); ?></a></li>
                <li><a href="<?= base_url()?>about_us" <?php if($this->uri->segment(1)=="about_us"){echo 'class="active"';}?> ><?php echo $this->lang->line('menu_tentang_kami'); ?></a></li>
                <li><a href="<?= base_url()?>services" <?php if($this->uri->segment(1)=="services"){echo 'class="active"';}?>><?php echo $this->lang->line('menu_product_services'); ?></a></li>
                <li><a href="<?= base_url()?>contact_us"><?php echo $this->lang->line('menu_contact'); ?></a></li>
                <li class="dropdown"><a href="#"><span><?php echo $this->lang->line('menu_bahasa'); ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/id">Indonesia</a></li>
                        <li><a href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/en">English</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->