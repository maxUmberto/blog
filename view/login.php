<?php
  include_once "assets/header.html"
 ?>
<div class="container">
  <div class="row">
    <form class="col-md-4 offset-md-4 login-form">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu email">
      </div>
      <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" placeholder="Senha">
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-info">Login <i class="fas fa-sign-in-alt"></i></span></button>        
      </div>
    </form>
  </div>
</div>
<?php
  include_once "assets/footer.html"
 ?>
