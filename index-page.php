
<?php

    include 'components/header.php';

    include 'components/topline.php';
    
    include 'components/navbar.php';

    include 'components/breadcrumb.php';

?>
    

    <!-- Контент -->
    <section class="content">

        <?php 
            include 'components/index-slider.php';
        ?>

        <?php
            include 'components/index-services.php';
        ?>

        <?php
            include 'components/index-appoint.php';
        ?>

        <?php
            include 'components/index-doctors.php';
        ?>

        <?php
            include 'components/index-faq.php';
        ?>


    </section>
    <!-- /Контент -->

<?php

    // include 'components/contactform.php';

    include 'components/footer.php';

?>
    