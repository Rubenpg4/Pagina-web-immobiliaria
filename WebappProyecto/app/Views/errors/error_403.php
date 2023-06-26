<head>
    <link rel="stylesheet" href="<?= base_url("css/403.css") ?>">
</head>
<div class="container">
    <h1>ERROR 403</h1>
    <span class="error"><?= \Config\Services::validation()->listErrors(); ?></span>
        <span class="error">
        <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>
        <?php if(session()->getFlashdata('msg-bad')):?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg-bad') ?></div>
        <?php endif;?>
    </span>
</div>