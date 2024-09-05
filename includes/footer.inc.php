<!--? ======== FOOTER ======== -->
<footer class="footer">
  <div class="footer-left">
    <a href="./index.php"><img src="./assets/images/logo_light.png" /></a>
    <p>
    Radio Republik Indonesia (RRI) adalah stasiun radio nasional milik negara Indonesia, 
    yang memiliki jaringan luas di seluruh negeri. 
    RRI Ambon adalah salah satu stasiun cabang RRI yang berlokasi di kota Ambon, Maluku. 
    Dalam menyiarkan buletin berita, RRI Ambon memiliki peran penting dalam menyediakan informasi lokal, 
    nasional, dan internasional kepada masyarakat di wilayah Maluku.
    </p>
    <div class="socials">
      <a href="https://www.facebook.com/prosatu.rriambon?locale=id_ID"><i class="fab fa-facebook"></i></a>
      <a href="http://www.youtube.com/@rri_ambon"><i class="fab fa-youtube"></i></a>
      <a href="https://x.com/pro1ambon"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/rri_ambon?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
    </div>
  </div>
  <ul class="footer-right">
    <li>
      <h2>Quick Links</h2>
      <ul class="box">
        <li><a href="./index.php">Home</a></li>
        <li><a href="./categories.php">Categories</a></li>
        <li><a href="./bookmarks.php">Bookmarks</a></li>
        <li><a href="./search.php?trending=1">Trending</a></li>
      </ul>
    </li>
    <li>
      <h2>Categories</h2>
      <ul class="box">
        <?php

          // Category Query to fetch random 3 categories
  	      $categoryQuery= " SELECT  category_id, category_name
                            FROM category 
                            ORDER BY RAND() LIMIT 3";

          // Running Category Query
          $result = mysqli_query($con,$categoryQuery);

          // Returns the number of rows from the result retrieved.
          $row = mysqli_num_rows($result);


          // If query has any result (records) => If there are categories
          if($row > 0) {

          // Fetching the data of particular record as an Associative Array
          while($data = mysqli_fetch_assoc($result)) {

            // Storing the category data in variables
            $category_id = $data['category_id'];
            $category_name = $data['category_name'];
            
        ?>
        <li><a href="articles.php?id=<?php echo $category_id ?>"><?php echo $category_name ?></a></li>
        <?php  
              }
            }
          ?>
        <li><a href="./categories.php">More +</a></li>
      </ul>
    </li>
    <li>
      <h2>Join Us</h2>
      <ul class="box">
        <li>
          Share the story in your own words with the world. To Inspire with your writing make RRIPortalNews your platform to
          help bring the stories of the globe to all people.
        </li>
        <a href="./author-login.php" class="my-1 btn btn-secondary">Sign Up</a>
      </ul>
    </li>
  </ul>
  <div class="footer-bottom">
    <p>All Rights Reserved by &copy; RRI Portal News <?php echo date("Y")?></p>
  </div>
</footer>

<!-- JQUERY SCRIPT -->
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<!-- SCRIPT FOR BACK TO TOP BUTTON -->
<script src="../assets/js/back-to-top.js"></script>

<!-- SCRIPT FOR NAVBAR COLLAPSE -->
<script src="../assets/js/navbar-collapse.js"></script>
</body>

</html>