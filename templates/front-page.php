<?php include 'inc/header.php'; ?>

<div class="jumbotron ">
    <h4 class=text-center>שלום: <?php echo $empInfo->GetEmpName(); ?></h4>

    <!-- <div class="progress m-3">
        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
    </div> -->
</div>

<div class="card text-right m-3 shadow">


    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs " id="bologna-list" role="tablist">
            <li class="nav-item">
                <a href="#potsTutorials" role="tab" class="nav-link" aria-selected="false">הדרכות שבוצו</a>
            </li>
            <li class="nav-item">
                <a href="#preTutorials" role="tab" class="nav-link active" aria-selected="true">הדרכות לביצע</a>
            </li>
        </ul>
    </div>


    <div class="tab-content m-1 ">

        <div id="preTutorials" class="tab-pane active" role="tabpanel">
            <?php if (isset($empTutorial)) : ?>

                <div class="card-deck m-3">
                    <?php foreach ($empTutorial as $tutorial) : ?>

                        <?php if ($tutorial->getTutorialStatus() == TUTORIAL_NOT_START) : ?>

                            <div class="card border-success mb-3">
                                <div class="card-body text-center">
                                    <p class="card-title"><?php echo $tutorial->getTutorialName(); ?></p>
                                </div>
                                <div class="card-footer text-center">
                                    <a class="btn btn-default" href="tutorial.php?id=<?php echo $tutorial->getTutorialId(); ?>">הצג</a>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>

            <?php else : ?>
                <p class="card-title text-center">מצויין, אין הדרכות לביצוע</p>
            <?php endif; ?>
        </div><!-- preTutorials ends -->

        <div id="potsTutorials" class="tab-pane " role="tabpanel" aria-labelledby="potsTutorials-tab">

            <?php if (isset($empTutorial)) : ?>

                <div class="card-deck m-3">

                    <?php foreach ($empTutorial as $tutorial) : ?>

                        <?php if ($tutorial->getTutorialStatus() == TUTIRIAL_ENDS) : ?>

                            <div class="card border-success mb-3">
                                <div class="card-body text-center">
                                    <p class="card-title"><?php echo $tutorial->getTutorialName(); ?></p>



                                </div>
                                <div class="card-footer text-center">
                                    <a class="btn btn-default" href="tutorial.php?id=<?php echo $tutorial->getTutorialId(); ?>">הצג</a>
                                </div>



                            </div>



                        <?php endif; ?>


                    <?php endforeach; ?>

                </div>
            <?php else : ?>
                <p class="card-title text-center">לא בוצעו הדרכות</p>
            <?php endif; ?>

        </div>

    </div><!-- tab-content ends -->


</div>



<?php include 'inc/footer.php'; ?>