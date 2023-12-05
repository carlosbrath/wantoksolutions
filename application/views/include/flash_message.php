<?php if ($this->session->userdata('msg') != "") { ?>
    <h6 style="text-align: center; color:red;">
        <strong><?php echo $this->session->userdata('msg'); ?></strong>
    </h6>
<?php $this->session->unset_userdata('msg');
} ?>
<?php if ($this->session->flashdata('success')) { ?>
    <h6 class="text-success" style="text-align: center;"><strong><?php echo $this->session->flashdata('success'); ?></strong></h6>
<?php } else if ($this->session->flashdata('error')) {  ?>
    <h6 class="text-danger" style="text-align: center;"><strong><?php echo $this->session->flashdata('error'); ?></strong></h6>
<?php } ?>