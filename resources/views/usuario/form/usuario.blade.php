<form action="usuario" method="POST">
  @csrf
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Registrar Usuarios</h3>
    </div>
  	<div class="row">
        <div class="col-lg-6">
          <label for='nombre'>Nombre:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
          <input type="text" name="nombre" class="form-control" placeholder="Ingresa el Nombre">
        </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
          <label for="apellido">Apellido:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
          <input type="text" name="apellido" class="form-control" placeholder="Ingresa el Apellido">
        </div>
        </div><!-- /.col-lg-6 -->
   	</div><!-- /.row -->
    <br>
  	<div class="row">
        <div class="col-lg-6">
          <label for="email">Email:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
          <input type="email" name="email"  class="form-control" placeholder="Ingresa el correo electronico">
        </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
          <label for="password">Contraseña:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Ingresa la Contraseña">
        </div>
        </div><!-- /.col-lg-6 -->
   	</div><!-- /.row -->
    <br>
  	<div class="row">
        <div class="col-lg-6">
          <label for="password2">Repite la Contraseña:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" name="password2" placeholder="Repite la Contraseña" class="form-control">
        </div>
        </div><!-- /.col-lg-6 -->
      <input type="hidden" id="status" name="status" value="1">
   	</div><!-- /.row -->
    <br>
</div><!-- /.box -->
            <input type="submit" value="Registrar" class="btn btn-primary">
</form>