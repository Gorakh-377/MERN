<?php
include('./header.php')
?>
<div class="container-fluid-sm video-1">
  <div class="images">
    <img src="images/note.jpg" alt="image loading">

  </div>
  

</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="./images/c++.png" alt="" class="card-img-top">
        </div>
        <div class="col-md-4">
            <div class="card-body">
                <h5 class="card-title">
                    Course Name:Learn C++
                </h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus porro eos vero sapiente laudantium eaque similique, illo eum, consectetur enim, nesciunt autem ratione odit consequatur inventore! Magni impedit officiis numquam?</p>
                <p class="card-text">Duration:10days</p>
                <form action=""method="post">
                    <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small>
    <span class="font-weight-border">&#8377 200</span></p>
    <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name:buy>Buy Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Lesson No:</th>
                    <th scope="col">Lesson Name:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Introduction</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php
include('./end.php')
?>