<?php include 'inc/header.php'; ?>



<div class="card text-center shadow m-3">

    <div class="card-header">
        <h3>מעקב עבור: <?php echo $empName; ?> </h3>
    </div>

    <div class="card-body">



        <?php if (isset($empTutorials)) : ?>

            <table id="empTutorialTable" class="table table-responsive-md table-bordered">

                <thead class="thead-light">
                    <tr>

                        <th>שם</th>
                        <th>ניקוד</th>
                        <th>סטטוס</th>
                        <th>זמן תחילת ההדרכה</th>
                    </tr>
                </thead>


                <tbody>
                    <?php foreach ($empTutorials as $tutorial) : ?>
                        <tr bgcolor=<?php echo $tutorial->getTutorialStatus() == TUTIRIAL_ENDS ? "#90EE90" : "#F08080" ?>>

                            <td><?php echo $tutorial->getTutorialName(); ?></td>
                            <td><?php echo $tutorial->getTutorialScore() == null ? "אין" : $value->getTutorialScore(); ?></td>
                            <td><?php echo $tutorial->getTutorialStatus() == TUTORIAL_NOT_START ? "לא התחיל" : "סיים";  ?></td>
                            <td><?php echo $tutorial->getTutorialStartDate() == null ? "אין" : $value->getTutorialStartDate(); ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>


            </table>

        <?php else : ?>



        <?php endif; ?>






    </div>

    <div class="card-footer">

    </div>

</div>



<?php include 'inc/footer.php'; ?>