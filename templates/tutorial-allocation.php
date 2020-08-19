<?php include 'inc/header.php'; ?>

<div class="card shadow">
    <div class="card-header">
        <h3 class="text-center"> הוספה/הסרה למחלקות עבור ההדרכה - <?php echo $tutorial->getTutorialName(); ?></h3>
    </div>
    <!-- הטופס -->
    <div class="card-body">

        <form method="post" action="deptAllocation.php?id=<?php echo $tutorial->getTutorialId(); ?>" class="p-5 text-right">
            <div class="form-group">
                <label for="Depts">בחר מחלקה/ות:</label>
                <select multiple data="pull-right" data-style="btn-primary text-right" class="selectpicker w-100 pull-right" data-live-search="true" name="Depts[]" required>
                    <?PHP foreach ($departments as $dept) :  ?>
                        <option class="text-right" value="<?php echo $dept->getDeptId(); ?>"><?php echo $dept->getDeptId() . " - " . $dept->getDeptName()  ?></option>
                    <?PHP endforeach; ?>
                </select>
            </div>

            <div class="form=group m-2">
                <label>פעולה</label>
                <label class="radio-inline">
                    <input type="radio" name="Assign_or_Deassign" id="Assign" value="True" checked>
                    הקצאה
                </label>
                <label class="radio-inline">
                    <input type="radio" name="Assign_or_Deassign" id="Deassign" value="False">
                    הסרה
                </label>
            </div>
    </div>

    <div class="card-footer">
        <!-- כפתור יצירת הדרכה -->
        <div class="form-group text-center">
            <input type="submit" class="btn btn-info center-block" value="שמירת שינויים" role="button" name="submit">
        </div>

    </div>
    </form>

</div>

<?php include 'inc/footer.php'; ?>