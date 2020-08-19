<?php include 'inc/header.php'; ?>

<h2 class="page-header text-center">עדכן הדרכה</h2>
<form method="post" class="text-right " action="edit.php?id=<?php echo $tutorial->getTutorialId(); ?>">

    <div class="form=group m-2">
        <label>שם</label>
        <input type="text" class="form-control" name="name" value="<?php echo $tutorial->getTutorialName(); ?>">
    </div>

    <div class="form=group m-2">
        <label>קטגוריה</label>
        <select class="form-control" name="category">
            <option value="0">בחר קטגוריה</option>
            <?php foreach ($categories as $category) :  ?>
                <?php if ($tutorial->getTutorialCategoryId() == $category->getCategoryId()) : ?>
                    <option value="<?php echo $category->getCategoryId(); ?>" selected> <?php echo $category->getCategoryName(); ?> </option>
                <?php else : ?>
                    <option value="<?php echo $category->getCategoryId(); ?>"> <?php echo $category->getCategoryName(); ?></option>
                <?php endif; ?>
            <?php endforeach;  ?>
        </select>
    </div>

    <div class="form=group m-2">
        <label>סטטוס</label>
        <input type="text" class="form-control" name="status" value="<?php echo $tutorial->getTutorialStatus(); ?>" required>
    </div>

    <div class="form=group m-2">
        <label for="link">לינק</label>
        <input type="text" class="form-control" name="link" value="<?php echo $tutorial->getTutorialLink(); ?>" required>
    </div>

    <div class="form=group m-2">
        <label>מספר החזרות שצריך לבצע את אותה הדרכה</label>
        <br>
        <label class="radio-inline">
            <input type="radio" name="repetitions" id="Radios1" value="0" <?php echo ($tutorial->getTutorialRepetitions() == '0') ?  "checked" : "" ?>>
            חד שנתית
        </label>
        <label class="radio-inline">
            <input type="radio" name="repetitions" id="Radios2" value="1" <?php echo ($tutorial->getTutorialRepetitions() == '1') ?  "checked" : "" ?>>
            כל שנה
        </label>
        <label class="radio-inline">
            <input type="radio" name="repetitions" id="Radios3" value="2" <?php echo ($tutorial->getTutorialRepetitions() == '2') ?  "checked" : "" ?>>
            כל שנתיים
        </label>
    </div>

    <div class="form=group m-2">
        <label>תיאור</label>
        <textarea class="form-control" name="description"><?php echo $tutorial->getTutorialDescription(); ?></textarea>
    </div>


    <div class="text-center m-2" style="padding: 2em;">
        <input type="submit" class="btn btn-info btn-xs" value="עדכן" name="submit">
    </div>

</form>

<?php include 'inc/footer.php'; ?>