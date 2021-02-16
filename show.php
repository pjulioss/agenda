<?php include_once "templates/header.php";?>

<div class="container" id="contact-container">
    <h2 id="main-title"><?=$contact['name']?></h2>
    <div class="bg-contact">
        <p class="bold">Telefone:</p>
        <p><?=$contact['phone']?></p>
        <p class="bold">Observações:</p>
        <p><?=$contact['observations']?></p>
    </div>
    <?php include_once "templates/back-btn.html"?>
</div>



<?php include_once "templates/footer.php";?>