<div class="container">
    <h1 class="mx-auto">Here are all the clients</h1>
    <?php foreach ($metadata as $value): ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th colspan="2" scope="col">Action</th>
        </tr>
        </thead>
        </tbody>
        <tr>
            <th scope="row"><?php echo $value['id'] ?></th>
            <td><?php echo $value['firstname'] ?></td>
            <td><?php echo $value['lastname']?></td>
            <td class="center"><a href="<?php echo base_url("home/edit_client/".$value['id'])?>">edit</a></td>
            <td class="center"><a href="<?php echo base_url("home/delete_client/".$value['id'])?>">delete</a></td>
        </tr>

        </tbody>
    </table>

    <?php endforeach; ?>

    <a class="btn btn-primary" href="<?php echo base_url('home/create_client');?>" role="button">Create new client</a>
</div>

