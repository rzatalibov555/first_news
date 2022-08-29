    <?php $this->load->view('user/includes/headerStyle'); ?>
    <?php $this->load->view('user/includes/preloader'); ?>
    <?php $this->load->view('user/includes/navbar'); ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">

          <style>
            .n_size {
              height: 300px;
            }
          </style>

          <?php foreach ($get_news_for_slider as $item) { ?>
            <div class="item">
              <a href="<?php echo base_url('news_single/' . $item['n_id']); ?>">
                <?php if ($item['n_img']) { ?>
                  <img class="n_size" src="<?php echo base_url('uploads/news/' . $item['n_img']); ?>" alt="">
                <?php } else { ?>
                  <img class="n_size" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXXId7iOlJzQM1GZNT4qi0MbbMRTnQ2Rx-vncFr8JdzKmfDVg6wE2nqm5YIm-xvFEE5pw&usqp=CAU" alt="">
                <?php } ?>
              </a>


              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span><?php echo $item['n_category']; ?></span>
                  </div>
                  <a href="<?php echo base_url('news_single/' . $item['n_id']); ?>">
                    <h4 style="color: purple; background:white; padding:10px;"><?php echo $item['n_title']; ?></h4>
                  </a>
                  <ul class="post-info">

                    <li><a style="color: blue;" href="<?php echo base_url('news_single/' . $item['n_id']); ?>"><?php echo date("d-m-Y", strtotime($item['n_date'])); ?></a></li>

                  </ul>
                </div>
              </div>
            </div>
          <?php } ?>






        </div>
      </div>
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


    <section class="blog-posts">
      <div class="container">
        <div class="row">

          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">


                <?php foreach ($get_news as $item) { ?>
                  <div class="col-lg-12">
                    <div class="blog-post">
                      <div class="blog-thumb">
                        <?php if ($item['n_img']) { ?>
                          <img src="<?php echo base_url('uploads/news/' . $item['n_img']); ?>" alt="">
                        <?php } else { ?>
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXXId7iOlJzQM1GZNT4qi0MbbMRTnQ2Rx-vncFr8JdzKmfDVg6wE2nqm5YIm-xvFEE5pw&usqp=CAU" alt="">
                        <?php } ?>

                      </div>
                      <div class="down-content">
                        <span><?php echo $item['n_category']; ?></span>
                        <a href="<?php echo base_url('news_single/' . $item['n_id']); ?>">
                          <h4><?php echo $item['n_title']; ?></h4>
                        </a>
                        <ul class="post-info">
                          <li><a href="<?php echo base_url('news_single/' . $item['n_id']); ?>"><?php echo date("d-m-Y", strtotime($item['n_date'])); ?></a></li>
                        </ul>
                        <!-- <p><?php echo $item['n_descr']; ?></p> -->

                      </div>
                    </div>
                  </div>
                <?php } ?>







                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="<?php echo base_url('news'); ?>">BÜTÜN XƏBƏRLƏR</a>
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
                      <h2>Diger Xeberler</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <?php foreach ($get_news_limit as $item) { ?>
                          <li><a href="<?php echo base_url('news_single/' . $item['n_id']); ?>">
                              <h5><?php echo $item['n_title']; ?></h5>
                              <span><?php echo date("d-m-Y", strtotime($item['n_date'])); ?></span>
                            </a>
                          </li>
                        <?php } ?>


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