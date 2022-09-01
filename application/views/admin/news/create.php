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
                <h3 class="box-title mb-0">News create</h3>
                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                    <a href="<?php echo base_url('admin_news_list'); ?>">
                        <button style="float:right; color:white;" class="btn btn-primary">Back</button>
                    </a>
                </div>
            </div>

            
            <?php if($this->session->flashdata('err')){ ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('err'); ?>
                </div>
            <?php } ?>
            


            <form action="<?php echo base_url('admin_news_create_act'); ?>" method="post" enctype="multipart/form-data">

                <div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" placeholder="Title" class="form-control">
                        <br>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="desc">Description</label>
                        <textarea name="description" id="desc" cols="30" rows="10" placeholder="Description" class="form-control"></textarea>
                        <br>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display:inline-block;float:left;margin-right:5px;">
                        <label for="date">Date</label>
                        <input type="datetime-local" name="date" id="date" class="form-control">
                        <br>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display:inline-block;float:left;margin-right:5px;">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="">-SELECT-</option>
                            <option value="Education">Education</option>
                            <option value="Sport">Sport</option>
                            <option value="Finance">Finance</option>
                            <option value="Technology">Technology</option>
                        </select>
                        <br>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display:inline-block;float:left;margin-right:5px;">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">-SELECT-</option>
                            <option value="Active">Active</option>
                            <option value="Deactive">Deactive</option>
                        </select>
                        <br>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display:inline-block; float:left;margin-right:5px;">
                        <label for="img">Image
                            <br>
                            <img style="cursor:pointer;" width="30px" src="https://play-lh.googleusercontent.com/58sr3IvX1wiE8ei_BICqPgywKgZ5DPpmRL_2YuZINnFlz_9D2os9PmueeZPPtZno0zk" alt="">
                        </label>


                        <input type="file" name="foto" id="img" style="display: none;">

                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="display:inline-block; float:left;margin-right:5px;">

                        <br>
                        <button type="submit" class="btn btn-success btn-block" style="width: 100%; color:white;">Send</button>
                    </div>


                </div>

            </form>


        </div>
    </div>
</div>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footer_script'); ?>