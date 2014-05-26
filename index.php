<?php require('/parts/header.php') ?>

<?php
if ($currentUser) {
    require('controllers/indexController.php');
    if (in_array($currentUser->email, $ADMINEMAIL)) {
        require('./parts/PeopleTable.php');
        require('./parts/RazryadTable.php');
        require('./parts/SorevnovaniyaTable.php');
    } else 
        require('./parts/PersonalPage.php');
    }
    ?>



    <?php require('/parts/footer.php') ?>	