<h3>PET DETAILS</h3>
<?php
    $sql_details = "SELECT * FROM tbl_pet,tbl_petlist WHERE tbl_pet.id_petlist=tbl_petlist.id AND tbl_pet.stt='$_GET[id]' LIMIT 1";
    $query_details = mysqli_query($mysqli,$sql_details);
    while($row_details = mysqli_fetch_array($query_details)){
?>
<style>
  .petid-div {
    margin-top: 40px; /* Điều chỉnh giá trị margin top theo ý muốn của bạn */
  }
  .fixed-image {
    width: 600px; /* Điều chỉnh chiều rộng của hình ảnh */
    height: 450px; /* Giữ tỉ lệ khung của hình ảnh */
  }
  .add-to-cart-div {
    margin-top: 10px; /* Điều chỉnh khoảng cách giữa các div theo ý muốn của bạn */
  }
</style>
<div class="card" style="width: 62em;">
  <div class="row g-3">
    <div class="col">
      <img src="admincp/modules/managepet/uploads/<?php echo $row_details['img']?>" class="card-img-top fixed-image" alt="">
    </div>
    <div class="col-4 petid-div" >
        <div class="col-10">
            <label for="petname" class="form-label">Pet Name</label>
            <input type="text" class="form-control" id="petname" value="<?php echo $row_details['petname']?>" readonly>
        </div>
        <div class="col-10">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" value="<?php echo number_format($row_details['price']).'$'?>" readonly>
        </div>
        <div class="col-10">
            <label for="numerical" class="form-label">Numerical</label>
            <input type="text" class="form-control" id="numerical" value="<?php echo $row_details['numerical']?>" readonly>
        </div>
        <div class="col-10">
            <label for="petstatus" class="form-label">Pet Status</label>
            <input type="text" class="form-control" id="petstatus" value="<?php echo ($row_details['petstatus'] == 1) ? 'Available' : 'Non-Available';?>" readonly>
        </div>
        <div class="col-10">
            <label for="namepetlist" class="form-label">Pet List</label>
            <input type="text" class="form-control" id="namepetlist" value="<?php echo $row_details['namepetlist']?>" readonly>
        </div>
        <div class="col-10 add-to-cart-div">
            <button type="button" class="btn btn-outline-danger">Add To Cart</button>
        </div>
    </div>
</div>

<?php } ?>