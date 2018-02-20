<?php var_dump($species); ?>
<?php var_dump($clients); ?>
<div class="container">
    <h1>Create client</h1>
    <?php  $attributes = array('id' => 'login_form'); ?>
    <?php  echo form_open('patients/create_patients', $attributes); ?>

    <!--input voor username-->
    <div class="form-group">
        <?php echo form_label('Name'); ?>
        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'patient_name',
            'placeholder' => 'Enter patient name'
        );
        ?>
        <?php echo form_input($data); ?>
    </div>

    <h5>species</h5>
<?php foreach ($species as $value){

    $name = array(
//        'class' => 'form-check-label'
    );
?>
    <div class="form-check">
        <?php echo form_label($value['description'], $value['description'], $name); ?>
        <?php
        $data = array(
//            'class' => 'form-check-input',
            'type' => 'radio',
            'name' => 'species_id',
            'value' => $value['id']
        );
        ?>
        <?php echo form_radio($data); ?>
    </div>
<?php } ?>

    <h5>Client</h5>
    <?php foreach ($clients as $client){

        $name = array(
//            'class' => 'form-check-label'
        );
        ?>

        <div class="form-check">
            <?php echo form_label($client['firstname'], $client['firstname'], $name); ?>
            <?php
            $data = array(
//                'class' => 'form-check-input',
                'type' => 'radio',
                'name' => 'client_id',
                'value' => $client['id']
            );
            ?>
            <?php echo form_radio($data); ?>
        </div>
    <?php } ?>

    <div class="form-group">
        <?php echo form_label('Status', 'comment'); ?>
        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'patient_status',
            'placeholder' => 'Enter patient status here'
        );
        ?>
        <?php echo form_textarea($data); ?>
    </div>

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

    <a class="btn btn-primary" href="<?php echo base_url('patients/index');?>" role="button">Patient overview</a>
</div>