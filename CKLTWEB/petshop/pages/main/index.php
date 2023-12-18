<?php 
  $sql_pro = "SELECT * FROM tbl_pet, tbl_petlist WHERE tbl_pet.id_petlist=tbl_petlist.id ORDER BY tbl_pet.stt DESC LIMIT 25";
  $query_pro = mysqli_query($mysqli,$sql_pro);



?>
<h3>NEW PET</h3>
          <ul class="product_list">
            <?php
              while($row = mysqli_fetch_array($query_pro)){
            ?>
            <li>
              <a href="index.php?tocontrol=pet&id=<?php echo $row['stt']?>" class="no-default">
                <img src="admincp/modules/managepet/uploads/<?php echo $row['img']?>">
                <p class="pet_name">PetName: <?php echo $row['petname']?></p>
                <p class="price">Price: <?php echo number_format($row['price']).'$'?></p>
                <p style="text-align: center; color:#FAE8E0">Petlist: <?php echo $row['namepetlist']?></p>
              </a>      
            </li>
            <?php
              }
            ?>
          </ul>