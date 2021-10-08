<!DOCTYPE html>
<html lang="en">
<head>
  <title>Activity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #fff;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="<?php echo site_url('Hello/index');?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Hello/about_me');?>">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Hello/education');?>">Education</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Hello/active');?>">Activity</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px" >
  <div class="row">
    <div class="col-sm-4">
      <h2 style="color:Coral">Activity</h2>
      <br><br><br>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo site_url('Hello/about_me');?>">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('Hello/education');?>">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('Hello/active');?>">Activity</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
    <h2 style="color:LightSalmon">กิจกรรมในมหาลัย</h2>
      <h5>นิทรรศการเทิดพระเกียรติ รัชกาลที่ 10 โครงการในพระราชดำริ เกษตรวิชญา(Editer)</h5>
      <div>
        <iframe width="1000" height="600" src="https://www.youtube.com/embed/CoV6SVrReXE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>     
      </div>
          <br><br>
      <h2 style="color:DodgerBlue">กิจกรรมยามว่าง</h2>
      <h5>Play Video Game With MyFriends</h5>
      <div>
      <iframe width="1000" height="600" src="https://www.youtube.com/embed/4ELWEzk9exc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      </div>
      <br>
    </div>
  </div>
</div>

<footer class="footer">
    <p align="center">&copy; My Website, 2021</p>
</foot>
</div>

</body>
</html>
