<?php
include('./header.php')
?>
<div class="container-fluid-sm video-1">
  <div class="images">
    <img src="images/note.jpg" alt="image loading">

  </div>
  

</div>
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="POST">
        <div class="form-group row">
        <label for="" class="offset-sm-3 col-form-label">Order ID:</label>
   <div>
       <input type="text" class="form-control mx-3">
   </div>
   <div>
       <input type="submit" class="btn btn-primary mx-4" value="View">
   </div>
    </form>
</div>
</div>
<div class="container">

    <?php
include('./contact.php')
?>
</div>
<?php
include('./end.php')
?>