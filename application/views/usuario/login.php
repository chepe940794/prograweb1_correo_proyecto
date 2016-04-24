<div class="page-header"><center><h1>Bienvenidos a JMail</center></h1></div>
<center><img src="http://jmail.cc/assets/homepage/images/logo.png" class="imagen"></center>
<center>
<div class="container">
<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>user/autenticar">
  <div class="form-group">
    <label for="username" class="col-xs-4 control-label"></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="nusername" placeholder="Usuario">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-xs-4 control-label"></label>
    <div class="col-xs-4">
      <input type="password" class="form-control" name="npassword" placeholder="Contraseña">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-xs-4">
      <button type="submit" class="btn btn-danger btn-lg btn-block" name="login">Iniciar sesión</button>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-xs-4" >


      </form>
    </div>
  </div>
</form>
</div></center>
