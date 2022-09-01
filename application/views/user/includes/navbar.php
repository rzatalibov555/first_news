<style>
  .lang_style{
    border: none;
    font-weight: 500;
    font-size: 17px;
    margin-top: 8px;
  }
</style>

<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url('index'); ?>">
        <h2>First News<em>.</em></h2>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('home'); ?>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('about'); ?>"><?php echo $this->lang->line('about'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('news'); ?>"><?php echo $this->lang->line('news'); ?></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('contact'); ?>"><?php echo $this->lang->line('contact'); ?></a>
          </li>


          <li class="nav-item">
            <select class="lang_style" onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
              <option value="azerbaijan" <?php if ($this->session->userdata('site_lang') == 'azerbaijan') echo 'selected="selected"'; ?>>AZE</option>
              <option value="english" <?php if ($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>ENG</option>
              <option value="russian" <?php if ($this->session->userdata('site_lang') == 'russian') echo 'selected="selected"'; ?>>RUS</option>
            </select>
          </li>

        </ul>





      </div>
    </div>
  </nav>
</header>