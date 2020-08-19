<?php include 'inc/header-login.php'; ?>


<div class="card form-signin text-center shadow animate__animated animate__fadeIn">

  <form class="form-signin" method="POST" action="index.php">

    <img class="mb-4" src="icon/iconOrange.png" alt="icon" width="150" height="150">

    <div class="mb-4">
      <?php displayMessage(); ?>
      <label for="EmpCode" class="sr-only">מספר עובד</label>
      <input type="number" min="0" step="1" name="EmpCode" class="form-control" placeholder="מספר עובד" required>
    </div>

    <div class="mb-4">
      <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">התחברות</button>
    </div>
  </form>

  <div class="footer">
    <p class="mt-5 mb-3 text-muted"><?php echo FOOTER ?></p>
  </div>
</div>

</html>