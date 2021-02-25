<?php 
    require_once('./includes/header.php'); 
    require_once('./classes/VideoFormProvider.php'); 
    
    
    
    ?>


<div class="col offset-md-2">
    <?php
        $formProvider = new VideoFormProvider;
        printf($formProvider->createUploadForm());
    ?>
</div>


<?php require_once('./includes/footer.php'); ?>