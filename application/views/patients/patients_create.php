<?php //var_dump($species); ?>
<?php //var_dump($clients); ?>
<div class="container">
    <h1>Create client</h1>
    <?php  $attributes = array('id' => 'login_form'); ?>
    <?php  echo form_open('patients/create_patients', $attributes); ?>

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
<h5>Species</h5>
    <div class="form-group">
        <label for="species">Select a species:</label>
        <select class="form-control" name="species_id" >
            <?php foreach ($species as $dieren){  ?>
                <option  value="<?php echo $dieren['id']; ?>"><?php echo $dieren['description']; ?></option>
            <?php } ?>
        </select>

        <h5>Clients</h5>
        <div class="form-group">
            <label for="species">Select a client:</label>
            <select class="form-control" name="client_id" >
                <?php foreach ($clients as $client){  ?>
                    <option  value="<?php echo $client['id']; ?>"><?php echo $client['firstname']; ?></option>
                <?php } ?>
            </select>


<!--    <h5>Client</h5>-->
<!--    --><?php //foreach ($clients as $client){
//
//
//        ?>
<!---->
<!--        <div class="form-check">-->
<!--            --><?php //echo form_label($client['firstname'], $client['firstname']); ?>
<!--            --><?php
//            $data = array(
//                'type' => 'radio',
//                'name' => 'client_id',
//                'value' => $client['id']
//            );
//            ?>
<!--            --><?php //echo form_radio($data); ?>
<!--        </div>-->
<!--    --><?php //} ?>

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

<!---->
<!--            <h5>Gender</h5>-->
<!--                <div class="form-check">-->
<!--                    --><?php //echo form_label(); ?>
<!--                    --><?php
//                    $data = array(
//                        //            'class' => 'form-check-input',
//                        'type' => 'radio',
//                        'name' => 'gender',
//                        'value' =>
//                    );
//                    ?>
<!--                    --><?php //echo form_radio($data); ?>
<!--                </div>-->

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


