<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<div>
    <div class="title">
        <h1>Login</h1>
    </div>
    <div class="inputEdit">
        <form method="post" action="{{url('/login')}}" >
            {{ csrf_field() }}
            <div class="input-margin form-group"> 
              <label for="exampleInputPassword1">Correo Electronico</label>
              <input name='email'type="text" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            </div>
            <div class="input-margin form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
        </form>
          <div>
            <form method="get" action="{{url('/register')}}" >
              <button type="submit" class="btn btn-primary">Registrarse</button>
            </form>
          </div>
    </div>
</div>
