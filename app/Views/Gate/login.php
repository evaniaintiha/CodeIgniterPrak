<?php echo $this->extend('layout/index'); ?>
<?php echo $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <form action="logingate/fungsi_login" method="post">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Email anda aman bersama kami.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Log In</button>
  <br><a href="logingate/register">Register</a>
</form>
        </div>
    </div>
</div> 
<?php echo $this->endSection(); ?>