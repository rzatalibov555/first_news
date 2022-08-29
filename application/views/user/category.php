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
                <h4>Category</h4>
                <h2>Our Recent Blog Entries</h2>
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
                    <a href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
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
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">

              <style>
                .n_img{
                  height: 200px;
                  object-fit: cover;
                }
              </style>

              <?php foreach($get_all_news as $item){ ?>
              
                <div class="col-lg-4">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <?php if($item['n_img']){ ?>
                        <img class="n_img" src="<?php echo base_url('uploads/news/'.$item['n_img']); ?>" alt="">
                      <?php }else{ ?>
                        <img class="n_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXXId7iOlJzQM1GZNT4qi0MbbMRTnQ2Rx-vncFr8JdzKmfDVg6wE2nqm5YIm-xvFEE5pw&usqp=CAU" alt="">
                     <?php  } ?>
                      
                    </div>
                    <div class="down-content">
                      <span><?php echo $item['n_category']; ?></span>
                      <a href="<?php echo base_url('news_single/'.$item['n_id']); ?>">
                        <h4><?php echo $item['n_title']; ?></h4>
                      </a>
                      <ul class="post-info">
                        <li><a href="<?php echo base_url('news_single/'.$item['n_id']); ?>"><?php echo date("d-M-Y", strtotime($item['n_date'])); ?></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              <?php } ?>

                








              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <?php $this->load->view('user/includes/footer'); ?>
    <?php $this->load->view('user/includes/footer_script'); ?>