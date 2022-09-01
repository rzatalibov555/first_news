    <?php $this->load->view('admin/includes/header_style'); ?>
    <?php $this->load->view('admin/includes/preloader'); ?>
    <?php $this->load->view('admin/includes/header'); ?>
    <?php $this->load->view('admin/includes/left_menu'); ?>
    <?php $this->load->view('admin/includes/page_name'); ?>
    <?php // $this->load->view('admin/includes/statistika'); 
    ?>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">News list</h3>
                    <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                        <a href="<?php echo base_url('admin_news_create'); ?>">
                            <button style="float:right; color:white;" class="btn btn-success">Create</button>
                        </a>
                    </div>
                </div>

                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php } ?>

                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Title</th>
                                <!-- <th class="border-top-0">Description</th> -->
                                <th class="border-top-0">Category</th>
                                <th class="border-top-0">Date</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">IMG</th>
                                <th class="border-top-0">Operations</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $say = 0;
                            foreach ($get_all_news as $get_all_news_key) {
                                $say++; ?>

                                <tr>
                                    <td><?php echo $say; ?></td>
                                    <td class="txt-oflo"><?php echo $get_all_news_key['n_title'];  ?></td>
                                    <!-- <td><?php // echo $get_all_news_key['n_descr'];  
                                                ?></td> -->
                                    <td class="txt-oflo"><?php echo $get_all_news_key['n_category'];  ?></td>
                                    <td class="txt-oflo"><?php echo date("d-m-Y H:i", strtotime($get_all_news_key['n_date']));  ?></td>
                                    <td class="txt-oflo"><?php echo $get_all_news_key['n_status'];  ?></td>
                                    <td class="txt-oflo">
                                        <?php if ($get_all_news_key['n_img']) { ?>
                                            <img width="70" src="<?php echo base_url('uploads/news/' . $get_all_news_key['n_img']) ?>" alt="">
                                        <?php } else { ?>
                                            <img width="70" src="https://media.istockphoto.com/vectors/no-image-available-sign-vector-id922962354?k=20&m=922962354&s=612x612&w=0&h=f-9tPXlFXtz9vg_-WonCXKCdBuPUevOBkp3DQ-i0xqo=" alt="">
                                        <?php } ?>

                                    </td>
                                    <td>

                                        <a href="<?php echo base_url('admin_view_news/' . $get_all_news_key['n_id']); ?>">
                                            <button type="button" class="btn btn-primary">View</button>
                                        </a>

                                        <a href="<?php echo base_url('admin_news_update/' . $get_all_news_key['n_id']) ?>">
                                            <button type="button" class="btn btn-warning">Edit</button>
                                        </a>

                                        <a href="<?php echo base_url('admin_delete_news/' . $get_all_news_key['n_id']); ?>">
                                            <button onclick="return confirm('Bu melumati silmek istediyinize eminsinizmi?')" style="color: white;" type="button" class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>

                            <?php } ?>





                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <?php $this->load->view('admin/includes/footer'); ?>
    <?php $this->load->view('admin/includes/footer_script'); ?>