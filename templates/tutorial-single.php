<?php include 'inc/header.php'; ?>

<div class="jumbotron">
    <h2 class="page-header text-right">ההדרכה: <?php echo $tutorial->getTutorialName(); ?></h2>
    <hr>
    <div class="text-center">
        <a href="<?php echo $tutorial->getTutorialLink(); ?>"><button class="btn btn-info ">להדרכה</button></a>
    </div>

</div>

<?php include 'inc/footer.php'; ?>