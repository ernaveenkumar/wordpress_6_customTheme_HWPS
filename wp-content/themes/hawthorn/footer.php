<footer class="container-fluid bg-primary">

  <div class="row">
    <div class="col-4">
      <div class="footer-logo">
        <?php $upload_dir = wp_upload_dir(); ?>
        <img          
          src="<?php echo $upload_dir['url'].'/';?>THEHAWTHORNSCHOOLlogo.png"
          alt="logo"
          class="logo img-fluid rounded-circle img-thumbnail border border-warning mt-2"
          width="15%" />
      </div>       
    </div>
    <div class="col">
      <h2 class="pt-4 fs-2 text-white">The Hawthorn School - Dehradun, India</h2>
    </div>
  </div>
  <div class="row">
    <div class="col">
        <hr class="divider w-75 mx-auto " />
        <hr class="divider w-50 mx-auto " />
        <hr class="divider w-25 mx-auto " />
    </div>
  </div>
  <div class="row">
    <div class="col-4 fw-normalfont-monospace text-white ">
      <h5 class="fw-normal font-monospace">Contact</h5>
      <h5>The Hawthorn School</h5>
      <p>
      Chandmari Road Doiwala Dehradun,
      Uttrakhand, India
      </p>
      <p>
        email: hawps.edu@gmail.com
      </p>
      <p>
        Mob: 9412957264
      </p>
    </div>
    <div class="col-4">
      <h5 class="text-white fw-normal font-monospace">Our School</h5>
      <ul class="text-body-secondary">
        <li>Student Achievements</li>
        <li>Student Wellbeing</li>
        <li>Extra-Curricular</li>
      </ul>
    </div>

    <div class="col-4">
      <h5 class="text-white fw-normal font-monospace ">Quick Links</h5>
      <ul class="text-body-secondary">
        <li>Calendar</li>
        <li>Addmission Form</li>
        <li>Lates News</li>
        <li>Noticeboard</li>
        <li>Sports Noticeboard</li>
        <li>Parent Portal</li>
      </ul>
    </div>
  </div>
</footer>

<div class="container-fluid">
  <div class="row">
    <div class="col">
      <p class="text-center p-2">
        &copy;The Hawthorn School 2024 | Privacy Policy | School Website Design by Naveen Kumar
      </p>
    </div>
  </div>
</div>


<?php wp_footer(); ?>
</body>
</html>