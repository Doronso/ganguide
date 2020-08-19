<?php include 'inc/header.php'; ?>

<h2 class="page-header text-center">הדרכה חדשה</h2>
<!-- הטופס -->
<form id="crateFrm" method="post" action="create.php" class="p-5 text-right">

    <div class="form=group">
        <label>שם ההדרכה</label>
        <input type="text" class="form-control" name="name" required>
    </div>

    <!-- בחירת קטגוריה -->
    <div class="form=group">
        <label>קטגוריה</label>
        <select class="form-control" name="category">
            <option value="0">בחר קטגוריה</option>
            <?PHP foreach ($categories as $category) :  ?>
                <option value="<?php echo $category->getCategoryId(); ?>"><?php echo $category->getCategoryName(); ?></option required>
            <?PHP endforeach;  ?>
        </select>
    </div>

    <div class="form=group">
        <label>לינק להדרכה</label>
        <input type="text" class="form-control" name="link" required>
    </div>


    <div class="form=group">
        <label>מספר החזרות שצריך לבצע את אותה הדרכה</label>
        <br>
        <label class="radio-inline">
            <input type="radio" name="repetitions" id="Radios1" value="0">
            חד שנתית
        </label>
        <label class="radio-inline">
            <input type="radio" name="repetitions" id="Radios2" value="1">
            פעם בשנה
        </label>
        <label class="radio-inline">
            <input type="radio" name="repetitions" id="Radios3" value="2">
            פעם בשנתיים
        </label>
    </div>

    <div class="form=group">
        <label>תיאור</label>
        <textarea class="form-control" name="description"></textarea>
    </div>
    <!-- כפתור יצירת הדרכה -->
    <br>
    <div class="form-group text-center">
        <input type="submit" class="btn btn-info center-block" value="צור" role="button" name="submit">
    </div>

</form>

<?php include 'inc/footer.php'; ?>