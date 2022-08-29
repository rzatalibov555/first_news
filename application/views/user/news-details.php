    <?php $this->load->view('user/includes/headerStyle'); ?>
    <?php $this->load->view('user/includes/preloader'); ?>
    <?php $this->load->view('user/includes/navbar'); ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Xəbər haqqında</h4>
                <h2><?php echo $get_single_news['n_title']; ?></h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Banner Ends Here -->

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Stand Blog HTML5 Template</span>
                  <h4>Creative HTML Template For Bloggers!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <?php if ($get_single_news['n_img']) { ?>
                        <img src="<?php echo base_url('uploads/news/' . $get_single_news['n_img']); ?>" alt="">
                      <?php } else { ?>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXXId7iOlJzQM1GZNT4qi0MbbMRTnQ2Rx-vncFr8JdzKmfDVg6wE2nqm5YIm-xvFEE5pw&usqp=CAU" alt="">
                      <?php } ?>

                    </div>
                    <div class="down-content">
                      <span><?php echo $get_single_news['n_category']; ?></span>
                      <a href="post-details.html">
                        <h4><?php echo $get_single_news['n_title']; ?></h4>
                      </a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo date("d-M-Y", strtotime($get_single_news['n_date'])); ?></a></li>
                      </ul>
                      <p><?php echo $get_single_news['n_descr']; ?></p>

                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">

                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Dİger Xəbərlər</h2>
                    </div>
                    <div class="content">
                      <ul>

                      <?php foreach($get_news as $item){ ?>
                        <li>
                          <a href="<?php echo base_url('news_single/'.$item['n_id']); ?>">
                            <h5><?php echo $item['n_title']; ?></h5>
                            <span><?php echo date("d-M-Y", strtotime($item['n_date'])); ?></span>
                          </a>
                        </li>
                      <?php } ?>
                        
                        
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Kateqorİyalar</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="<?php echo base_url('category/Education'); ?>">Education</a></li>
                        <li><a href="<?php echo base_url('category/Sport'); ?>">Sport</a></li>
                        <li><a href="<?php echo base_url('category/Finance'); ?>">Finance</a></li>
                        <li><a href="<?php echo base_url('category/Technology'); ?>">Technology</a></li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php $this->load->view('user/includes/footer'); ?>
    <?php $this->load->view('user/includes/footer_script'); ?>