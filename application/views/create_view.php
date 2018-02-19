
<div class="container">
    <h1>Create client</h1>
    <?php  $attributes = array('id' => 'login_form'); ?>
    <?php  echo form_open('home/create_client', $attributes); ?>

        <!--input voor username-->
        <div class="form-group">
            <?php echo form_label('Firstname'); ?>
            <?php
            $data = array(
                'class' => 'form-control',
                'name' => 'client_firstname',
                'placeholder' => 'Enter username'
            );
            ?>
            <?php echo form_input($data); ?>
        </div>

        <!--input voor password-->
        <div class="form-group">
            <?php echo form_label('Lastname'); ?>
            <?php
            $data = array(
                'class' => 'form-control',
                'name' => 'client_lastname',
                'placeholder' => 'Enter lastname'
            );
            ?>
            <?php echo form_input($data); ?>
        </div>

    <!--input voor submit button-->
    <div class="form-group">
        <?php
        $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Create'
        );
        ?>
        <?php echo form_submit($data); ?>
    </div>


    <?php echo form_close();  ?>

    <a class="btn btn-primary" href="<?php echo base_url('home/index');?>" role="button">Client overview</a>
</div>