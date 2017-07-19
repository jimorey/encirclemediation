<?php
include "header.php";
?>

<div class="container-fluid">

  <div class="row">
    <div class="col-xs-10 col-xs-offset-1">
      <br><br>

      <blockquote class="blockquote text-center">
        <p>“What you do and decide today can improve all your tomorrows.”</p>
        <footer class="blockquote-footer">Ralph Marston, <cite title="Source Title">Author at <a href="http://greatday.com/">The Daily Motivator</a></cite></footer>
      </blockquote>

      <div class="contact-details">
        </br>
        <h4 class="text-center">Jenny can be reached here</h4>
        </br></br>
        <h4 class="text-center"><a href="tel:0439440333">0400 000 000</a></h4>
        </br></br>
        <h4 class="text-center"><a href="mailto:info@Encirclemediation.com.au">info@Encirclemediation.com.au</a></h4>
        </br></br>
        <h4 class="text-center"><a href="https://www.google.com.au/maps/place/Rockingham+WA+6168/@-32.2798207,115.7262186,14z/data=!3m1!4b1!4m5!3m4!1s0x2a329c9cdb9b1155:0x504f0b535df4ff0!8m2!3d-32.281!4d115.727">Encircle Mediation is located in Rockingham, Western Australia</a></h4>
        </br></br>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
      <form name="contactform" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" maxlength="50" size="30" class="form-control" placeholder="Name*" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" maxlength="80" size="30" class="form-control" placeholder="Email Address*" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" name="phone" maxlength="" size="30" class="form-control" placeholder="Phone Number">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" maxlength="1000" cols="25" rows="6" class="form-control" placeholder="Message*" required></textarea>
        </div>
        <button type="submit" name="submit" value="Send" class="btn btn-primary btn-block">Send</button>
      </form>
    </div>
  </div>

</div>

<?php
include "footer.php";
?>

<script>
  var activeHREF= "contact.php";

  $("a[href='" +activeHREF+ "']").parent().addClass("active")
</script>
