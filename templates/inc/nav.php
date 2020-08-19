           <!--Navbar-->
           <nav class="navbar  navbar-light bg-lignt">
               <a class="nav-link active" href="frontPage.php">
                   <h3 class="text-muted"><?php echo SITE_TITE; ?></h3>
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon "></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto">

                       <?php if ($_SESSION['emp']->GetEmpIsManager()) : ?>

                           <li class="nav-item">
                               <a class="nav-link" href="Dashboard.php">ניהול הדרכות</a>
                           </li>

                       <?php endif ?>
                       <li class="nav-item">
                           <a class="nav-link" href="logout.php">התנתקות</a>
                       </li>

                   </ul>
               </div>
           </nav>
           <!--/.Navbar-->