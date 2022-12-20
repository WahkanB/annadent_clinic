<section class="reviews" id="reviews">
   <h1 class="heading">Доволни клиенти</h1>
   <div class="box-container container">
      

         <?php
         $query = "select * from reviews";
         $data = mysqli_query($conn, $query);

         while ($row = mysqli_fetch_assoc($data)) {
            $review_img = $row['review_img'];
            $review_text = $row['review_text'];
            $review_autor = $row['review_autor'];

         ?>
            <div class="box">
               <img src="images/<?= $review_img ?>" alt="">
               <p> <?= $review_text ?> </p>

               <h3><?= $review_autor ?></h3>'."
               <hr>"
            </div>
         <?php } ?>
      

   </div>


</section>