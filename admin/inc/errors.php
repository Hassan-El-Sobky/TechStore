<div class="container text-center">

<?php if($session->has("errors")) {?>
    <div class="alert alert-danger">
        <?php foreach($session->get("errors") as $err) { ?>
            <p class="p-1 h4"><?= $err; ?></p>
        <?php }; $session->remove("errors"); ?>
    </div>
<?php };?>
</div>
