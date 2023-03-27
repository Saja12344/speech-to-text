<?php
require_once('header.php');
?>

<style>
  .login
  {
    min-height: 100vh;
    background-image: linear-gradient(#4B7488,#81B3A0, #ADB29E);
  }
  .c1
  {
    display:flex;
    justify-content: center;
    vertical-align: middle;
    padding-top:7%;
  }
  .card
  {
    width:500px;
    height: auto;
    padding: 30px;

  }
  .card .photo
  {
    display:flex;
    justify-content: center;
  }
  .card .photo img
  {
    width: 80px;
  }
  .title
  {
    margin: 20px 0;
    text-align:center;
  }
  .form
  {
    text-align: right;
  }

  .form input,
  .form button
  {
    border-radius: 50px;
  }
</style>

<div class="login">
    <div class="container c1">
      <div class="card">
        <div class="photo">
          <img width="100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEImhEK0f2-f6tKE8FTi1GH1T967xman6tqWNeY8cxxRN-tr6f0n7LYirb4izKL4ouHQI&usqp=CAU" alt="">
        </div>

        <div class="title">
          <h3>Professor Form</h3>
        </div>

        <div class="form">
          <form method="post" action="../backend/access.php">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="text-center">
              <button type="submit" name="prof" class="btn btn-primary btn-block">Add New</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

<?php
require_once('footer.php');
?>