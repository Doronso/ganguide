<?php include 'inc/header.php'; ?>


<div class="card text-center shadow m-3">

    <div class="card-header">
        <h3>ניהול הדרכות</h3>

        <ul class="nav nav-tabs card-header-tabs " id="bologna-list" role="tablist">
            <li class="nav-item">
                <a href="#filterByEmp" role="tab" class="nav-link" aria-selected="false">עובדים</a>
            </li>
            <li class="nav-item">
                <a href="#filterBytutorial" role="tab" class="nav-link active" aria-selected="true">הדרכות</a>
            </li>
        </ul>

    </div>

    <div class="tab-content m-1 ">

        <div id="filterBytutorial" class="tab-pane active" role="tabpanel">

            <div class="card-body">



                <?php if (isset($ManagerTutorials)) : ?>

                    <table id="tutorialTable" class="table  table-responsive-md table-bordered">

                        <thead class="thead-light">
                            <tr>
                                <th>שם</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php foreach ($ManagerTutorials as $tutorial) : ?>
                                <tr>

                                    <td><?php echo $tutorial->GetTutorialName() ?></td>
                                    <td><a href="tutorialFollowUp.php?id=<?php echo $tutorial->getTutorialId() ?>&tutorialName=<?php echo $tutorial->getTutorialName() ?>" class="btn btn-info">מעקב</a></td>
                                    <td><a href="edit.php?id=<?php echo $tutorial->getTutorialId() ?>" class=" btn btn-info">עריכה</a></td>
                                    <td> <a href="deptAllocation.php?id=<?php echo $tutorial->getTutorialId() ?>" class="btn btn-primary">הסרה/הקצאה</a></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>


                    </table>

                <?php else : ?>

                    <p>לא נוצרו הדרכות עדיין</p>

                <?php endif; ?>


            </div>


            <div class="card-footer">
                <div class="text-center" style="padding-top: 5px">
                    <a href="create.php" class="btn btn-success btn-xs shadow">יצירת הדרכה חדשה</a>
                </div>
            </div>

        </div>

        <div id="filterByEmp" class="tab-pane " role="tabpanel" aria-labelledby="filterByEmp-tab">

            <div class="card-body text-center">

                <?php if (isset($emps)) : ?>

                    <table id="empTable" class="table table-responsive-md table-bordered">
                        <thead>
                            <tr>
                                <th>שם</th>
                                <th>כתובת אימיל</th>
                                <th>מחלקה</th>
                                <th>מעקב</th>
                            </tr>
                        </thead>

                        <tbody id=" empTableTbody">
                            <?php foreach ($emps as $emp) : ?>
                                <tr>
                                    <td><?php echo $emp->GetEmpName() ?></td>
                                    <td><?php echo $emp->GetEmpEmail() == "" ? "לא מופיע" : $emp->GetEmpEmail()  ?></td>
                                    <td><?php echo $emp->getDepartmentNum() ?></td>
                                    <td><a href="empFollowUp.php?id=<?php echo $emp->GetEmpNumber() ?>" class="btn btn-primary">מעקב</a></td>
                                </tr>
                            <?php endforeach; ?>
                        <tbody>

                    </table>
                <?php else : ?>

                    <p>תקלה, פנה לתמיכה</p>

                <?php endif; ?>


            </div>


            <div class="card-footer"></div>

        </div>


    </div>


</div>


<?php include 'inc/footer.php'; ?>