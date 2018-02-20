<div class="container">
    <h1>Create client</h1>
    <?php  $attributes = array('id' => 'login_form'); ?>
<?php  echo form_open('species/create_species', $attributes); ?>

<!--input voor username-->
<div class="form-group">
    <?php echo form_label('Species'); ?>
    <?php
    $data = array(
        'class' => 'form-control',
        'name' => 'species_description',
        'placeholder' => 'Enter description'
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
<a class="btn btn-primary" href="<?php echo base_url('species/index');?>" role="button">Species overview</a>
</div>