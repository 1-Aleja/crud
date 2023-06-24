<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<div>
    <form method="get" action="{{url('/data-grid')}}" >
        <button type="submit" class="btn btn-primary">Tabla</button>
    </form>
</div>
<div>
    <form method="post" action="{{url('/logout')}}" >
    {{ csrf_field() }}
        <div>
            <button type="submit" class="btn btn-primary">Cerrar Sesión</button>
        </div>
    </form>
    <div class="title">
        <h1>Registro</h1>
    </div>
    <div class="inputEdit">
    <form method="post" action="{{url('/register')}}" >
    {{ csrf_field() }}
+        <div class="input-margin form-group">
            <label for="exampleInputPassword1">Nombre</label>
            <input name='name'type="text" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" >
        </div>
        <div class="input-margin form-group">
            <label for="exampleInputPassword1">Correo Electronico</label>
            <input name='email'type="text" class="form-control" placeholder="Correo Electronico" aria-label="Recipient's username" aria-describedby="basic-addon2" >
        </div>
        <div class="input-margin form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input name="password" type="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="input-margin form-group">
            <label for="exampleInputPassword1">Confirmar Contraseña</label>
            <input name="passwordconfirm" type="password" class="form-control" placeholder="Password" >
        </div>
        
        <div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </div>
    </form>
    <form method="get" action="{{url('/')}}" >
        <div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </div>
    </form>
            
    </div>
</div>
