<?php 

require_once APPROOT . '/views/includes/header.php'; ?>

<!-- Voor het centreren van de container gebruiken we het bootstrap grid -->
<div class="container">
    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-10">

            <h3><?php echo $data['title']; ?></h3>

            <a href="<?= URLROOT; ?>/SmartphoneController/index">
                Overzicht smartphones
            </a><br>

            <a href="<?= URLROOT; ?>/sneakers/index">
                Mooiste Sneakers
            </a><br>

            <a href="<?= URLROOT; ?>/horloges/index">
                Duurste Horloges
            </a><br>

            <a href="<?= URLROOT; ?>/zangeressen/index">
                Rijkste zangeressen
            </a>

        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>