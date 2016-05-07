<h1 class="page-header">
  Add User
  <small>Page</small>
</h1>

<div  class="col-md-6 user_image_box">
  <span id="user_admin" class='fa fa-user fa-4x'></span>
</div>

<form action="" method="post" encrtype="multipart/form-data">

  <!-- <div class="col-md-6">
    <div class="form-grooup">
      <input type="file-group">
    </div> -->

    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" class="form-control">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
      <a id="user-id" class="btn btn-danger" href="">Delete</a>
      <input type="submit" name="add_user" class="btn btn-primary pull-right">
    </div>
</form>
</div>
