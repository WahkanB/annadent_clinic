<section class="services" id="services">
   <h1 class="heading">Нашите услуги</h1>

   <div class="box-container container ">
      <?php
      $query = "select * from services";
      $data = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($data)) {
         $title = $row['title'];
         $image = $row['image'];

      ?>


         <div class="box">
            <img src="images/<?= $image ?>" alt="">
            <h3><?= $title ?></h3>"
         </div>


      <?php } ?>
   </div>
</section>