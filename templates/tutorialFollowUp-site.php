<?php include 'inc/header.php'; ?>


<div class="container">

    <div class="card text-center shadow m-3">

        <div class="card-header">
            <h3>מעקב עבור: <?php echo $tutorialName; ?> </h3>
        </div>

        <div class="tab-content m-1 ">

            <div id="filterBytutorial" class="tab-pane active" role="tabpanel">

                <div class="card-body">


                    <table id="tutorialTable" class="table table-responsive-md table-bordered">

                        <thead class="thead-light">
                            <tr>
                                <th>שם</th>
                                <th>ניקוד</th>
                                <th>סטטוס</th>
                                <th>זמן תחילת ההדרכה</th>
                            </tr>

                        </thead>
                        <?php foreach ($tutorialEmpRes as $key => $value) : ?>
                            <tbody>
                                <tr bgcolor=<?php echo $value->getTutorialStatus() == TUTIRIAL_ENDS ? "#90EE90" : "#F08080" ?>>

                                    <td><?php echo $empInfo[$key]->GetEmpName(); ?></td>
                                    <td><?php echo $value->getTutorialScore() == null ? "אין" : $value->getTutorialScore(); ?></td>
                                    <td><?php echo $value->getTutorialStatus() != TUTIRIAL_ENDS ? "לא התחיל" : "עבר";  ?></td>
                                    <td><?php echo $value->getTutorialStartDate() == null ? "אין" : $value->getTutorialStartDate(); ?></td>

                                </tr>
                            </tbody>
                        <?php endforeach; ?>

                    </table>


                </div>



            </div>




        </div>


    </div>


    <?php include 'inc/footer.php'; ?>