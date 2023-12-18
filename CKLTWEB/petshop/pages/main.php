<div id="main">
      <?php
        include("sidebar/sidebar.php")
      ?>
      <div class="maincontent">
        <?php 
          
          if(isset($_GET['tocontrol'])){
            $tam = $_GET['tocontrol'];
          }else{
            $tam = '';
          }
          if($tam=='petlist'){
            include("main/petlist.php");
          }elseif($tam=='cart'){
            include("main/cart.php");
          }elseif($tam=='contact'){
            include("main/contact.php");
          }
          elseif($tam=='new'){
            include("main/new.php");
          }elseif($tam=='pet'){
            include("main/pet.php");
          }
          else{
            include("main/index.php");
          }
        ?>
      </div>
    </div>