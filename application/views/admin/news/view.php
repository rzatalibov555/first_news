<?php $this->load->view('admin/includes/header_style'); ?>
<?php $this->load->view('admin/includes/preloader'); ?>
<?php $this->load->view('admin/includes/header'); ?>
<?php $this->load->view('admin/includes/left_menu'); ?>
<?php $this->load->view('admin/includes/page_name'); ?>
<?php // $this->load->view('admin/includes/statistika'); 
?>

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box" style="min-height: 600px;">
            <div class="d-md-flex mb-3">
                <h3 class="box-title mb-0">News View</h3>
                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                    <a href="<?php echo base_url('admin_news_list'); ?>">
                        <button style="float:right; color:white;" class="btn btn-primary">Back</button>
                    </a>
                </div>
            </div>





            <div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="title">Title</label>
                    <p><?php echo $get_single_news['n_title']; ?></p>
                    <br>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="desc">Description</label>
                    <p><?php echo $get_single_news['n_descr']; ?></p>
                    <br>
                </div>

                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display:inline-block;float:left;margin-right:5px;">
                    <label for="date">Date</label>
                    <p><?php echo $get_single_news['n_date']; ?></p>
                    <br>
                </div>

                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display:inline-block;float:left;margin-right:5px;">
                    <label for="category">Category</label>
                    <p><?php echo $get_single_news['n_category']; ?></p>
                    <br>
                </div>

                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display:inline-block;float:left;margin-right:5px;">
                    <label for="status">Status</label>
                    <p><?php echo $get_single_news['n_status']; ?></p>
                    <br>
                </div>

                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display:inline-block; float:left;margin-right:5px;">
                  


                    <?php if ($get_single_news['n_img']) { ?>
                        <img width="70" src="<?php echo base_url('uploads/news/' . $get_single_news['n_img']) ?>" alt="">
                    <?php } else { ?>
                        <img width="70" src="https://media.istockphoto.com/vectors/no-image-available-sign-vector-id922962354?k=20&m=922962354&s=612x612&w=0&h=f-9tPXlFXtz9vg_-WonCXKCdBuPUevOBkp3DQ-i0xqo=" alt="">
                    <?php } ?>

                </div>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="display:inline-block; float:left;margin-right:5px;">
                    <a href="<?php echo base_url('admin_news_list'); ?>">
                        <button type="button" class="btn btn-success btn-block" style="width: 100%; color:white;">Back</button>
                    </a>
                </div>


            </div>




        </div>
    </div>
</div>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footer_script'); ?>