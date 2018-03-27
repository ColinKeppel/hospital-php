<?php
//echo '<br>';
//echo 'patients';
//echo '<br>';var_dump($patients);
//echo '<br>';
//echo '<br>';
//echo 'patients_id';
//var_dump($patients_id);


foreach ($patients_id as $test){


    $clientCheck = $test->client_id;
   $animal = $test->species_id;

?>

<div class="container">
    <h1>Edit client</h1>
    <?php  $attributes = array('id' => 'login_form'); ?>
    <?php  echo form_open('patients/update_patients', $attributes); ?>


    <div class="hidden">
        <?php
        $data = array(
            'type' => 'hidden',
            'class' => 'form-control',
            'name' => 'patient_id',
            'value' => $test->patient_id
        );
        ?>
        <?php echo form_input($data); ?>
    </div>


    <?php echo form_label('Name'); ?>
    <?php
    $data = array(
        'class' => 'form-control',
        'name' => 'patient_name',
        'placeholder' => 'Enter patient name',
        'value' => $test->patient_name
    );
    ?>
    <?php echo form_input($data); ?>


    <h5>Species</h5>
    <div class="form-group">
        <label for="species">Select a species:</label>
        <select class="form-control" name="species_id" >
            <?php foreach ($species as $dieren){  ?>
                <option <?php echo ($animal == $dieren['id'] ? "selected" : ""); ?> value="<?php echo $dieren['id']; ?>"><?php echo $dieren['description']; ?></option>
                <?php } ?>
        </select>

        <h5>Clients</h5>
        <div class="form-group">
            <label for="species">Select a client:</label>
            <select class="form-control" name="client_id" >
                <?php foreach ($clients as $client){  ?>
                    <option <?php echo ($clientCheck == $client['id'] ? "selected" : ""); ?>  value="<?php echo $client['id']; ?>"><?php echo $client['firstname']; ?></option>
                <?php } ?>
            </select>

            <div class="form-group">
                <?php echo form_label('Status', 'comment'); ?>
                <?php
                $data = array(
                    'class' => 'form-control',
                    'name' => 'patient_status',
                    'placeholder' => 'Enter patient status here',
                    'value' => $test->patient_status
                );
                ?>
                <?php echo form_textarea($data); ?>
            </div>

            <?php $gender = $test->gender; ?>
            <h5>Gender</h5>
            <div class="form-check">
                <?php echo form_label('male'); ?>
                <?php
                $data = array(
                    //            'class' => 'form-check-input',
                    'type' => 'radio',
                    'name' => 'gender',
                    'value' => 'm',
                    'checked' => ('m' == $gender) ? 'checked' : ""
                );
                ?>
                <?php echo form_radio($data); ?>
            </div>                <div class="form-check">
                <?php echo form_label('female'); ?>
                <?php
                $data = array(
                    //            'class' => 'form-check-input',
                    'type' => 'radio',
                    'name' => 'gender',
                    'value' => 'f',
                    'checked' => ('f' == $gender) ? 'checked' : ""
                );
                ?>
                <?php echo form_radio($data); ?>
            </div>

            <div class="form-group">
                <?php
                $data = array(
                    'class' => 'btn btn-primary',
                    'name' => 'update',
                    'value' => 'update'
                );
                ?>
                <?php echo form_submit($data); ?>
            </div>


            <?php echo form_close();  }?>

            <a class="btn btn-primary" href="<?php echo base_url('patients/index');?>" role="button">Patient overview</a>
        </div>


