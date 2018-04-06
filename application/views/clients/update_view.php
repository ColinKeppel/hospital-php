<?php

//var_dump($client_id);
//print_r($client_id);

foreach ($client_id as $value){
//    echo $value->client_id;
//    echo $value->client_firstname;
//    echo $value->client_lastname;

?>


<div class="container">
    <h1>Update client</h1>
    <?php  $attributes = array('id' => 'login_form'); ?>
    <?php  echo form_open('home/update_client', $attributes); ?>

    <div class="form-group">
        <?php
        $data = array(
            'type' => 'hidden',
            'class' => 'form-control',
            'name' => 'client_id',
            'placeholder' => 'id',
            'value' => $value->client_id
        );
        ?>
        <?php echo form_input($data); ?>
    </div>

    <!--input voor Firstname-->
    <div class="form-group">
        <?php echo form_label('Firstname'); ?>
        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'client_firstname',
            'placeholder' => 'Enter username',
            'value' => $value->client_firstname
        );
        ?>
        <?php echo form_input($data); ?>
    </div>

    <!--input voor Lastname-->
    <div class="form-group">
        <?php echo form_label('Lastname'); ?>
        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'client_lastname',
            'placeholder' => 'Enter lastname',
            'value' => $value->client_lastname
        );
        ?>
        <?php echo form_input($data); ?>
    </div>

    <!--input voor submit button-->
    <div class="form-group">
        <?php
        $data = array(
            'class' => 'btn btn-primary',
            'name' => 'update',
            'value' => 'Update'
        );
        ?>
        <?php echo form_submit($data); ?>
    </div>


    <?php echo form_close();
    }
    ?>

    <a class="btn btn-primary" href="<?php echo base_url('home/index');?>" role="button">Client overview</a>
</div>
