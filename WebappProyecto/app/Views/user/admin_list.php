<link rel="stylesheet" href="<?= base_url("css/user_ok.css") ?>">
<h2 class="alert alert-warning">Acceso en admin_list -> Tu rol es 2</h2>
<section class="lista_admin spad">

    <h1>User list</h1>
    <?php if (sizeof($users) > 0):?>
    <?php foreach ($users as $row):?>
        <div class="col-md-4 mb-3 normal">
            <?php
            echo $row->id . " - ";
            echo $row->nombre . " - ";
            echo $row->email . " - ";
            echo $row->password . " ";
            echo "<br/>";
            ?>
    </div>
    <?php endforeach; ?>
    <?php else: ?>
        <p>No users</p>
    <?php endif; ?>

</section>

<script src="<?= base_url("js/user_ok.js")?>"></script>