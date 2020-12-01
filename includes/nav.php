<section id="nav-bar">
    
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="images/Logos.jpeg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#top">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about-us">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#testimonials">TESTIMONIALS</a>
      </li>
        <?php if(logged_in()):?>
         <li><a class="nav-link" href="logout.php">Logout</a></li>
            <?php endif; ?>

            <?php if(!logged_in()):?>
         <li><a  class="nav-link" href="login.php">Login</a></li>
            <?php endif; ?>
    </ul>
  </div>
</nav>
</section>  