<section class="contact" id="contact">
   <h1 class="heading">Направи запитване</h1>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php
      if (isset($message)) {
         foreach ($message as $message) {
            echo '<p class="message">' . $message . '</p>';
         }
      }

      ?>

      <span>вашето име</span>
      <input type="text" name="name" placeholder="въведете име" class="box" required>
      <span>вашия имейл</span>
      <input type="email" name="email" placeholder="въведете имейл" class="box" required>
      <span>вашия номер</span>
      <input type="number" name="number" placeholder="въведете номер" class="box" required>
      <span>желана дата</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="Направи запитване" name="submit" class="link-btn">
   </form>

</section>