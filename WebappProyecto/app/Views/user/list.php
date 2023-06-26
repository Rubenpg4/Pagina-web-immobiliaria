
<h1>User list</h1>
<?php if (sizeof($users) > 0):?>
<?php foreach ($users as $row):?>
    <div class="col-md-4 mb-3">
        <?php
        echo $row->id . " - ";
        echo $row->nombre . " - ";
        echo $row->email . " - ";
        echo $row->contraseña . " ";
        echo "<br/>";
        ?>
</div>
<?php endforeach; ?>
<?php else: ?>
    <p>No users</p>
<?php endif; ?>
