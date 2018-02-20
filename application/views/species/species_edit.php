<?php //var_dump($species_id);

foreach ($species_id as $value){

?>
<div class="container">
    <h1>Edit species</h1>
    <?php  $attributes = array('id' => 'login_form'); ?>
    <?php  echo form_open('species/update_species', $attributes); ?>
    <!--input voor id is hidden-->
    <div class="form-group">
        <?php
        $data = array(
            'type' => 'hidden',
            'class' => 'form-control',
            'name' => 'species_id',
            'placeholder' => 'Enter ID',
            'value' => $value->species_id
        );
        ?>
        <?php echo form_input($data); ?>
    </div>

    <!--input voor Species-->
    <div class="form-group">
        <?php echo form_label('Edit'); ?>
        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'species_description',
            'placeholder' => 'Enter description',
            'value' => $value->species_description
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
            'value' => 'Update'
        );
        ?>
        <?php echo form_submit($data); ?>
    </div>


    <?php echo form_close();
    }
    ?>

    <a class="btn btn-primary" href="<?php echo base_url('home/index');?>" role="button">Client overview</a>
    <a class="btn btn-primary" href="<?php echo base_url('species/index');?>" role="button">Species overview</a>
</div>