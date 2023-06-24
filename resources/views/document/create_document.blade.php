<link rel="stylesheet" href="{{ asset('css/app.css')}}">

<div>
    <div>
        <form method="get" action="{{url('/data-grid')}}" >
            <button type="submit" class="btn btn-primary">Tabla</button>
        </form>
    </div>
    <div class="title">
        <h1>Creación de registro de documentos.</h1>
    </div>
    <div class="inputEdit">
        <form method="post" action="{{url('/documents/create')}}" >
            {{ csrf_field() }}
            <a>Nombre</a>
            <div class="input-create">
                <input name='nombre'type="text" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            </div>
            <a>Codigo</a>
            <div class="input-create">
                <input name='codigo'type="number" class="form-control" placeholder="Codigo" aria-label="Recipient's username" aria-describedby="basic-addon2"required>
            </div>
            <a>Contenido</a>
            <div class="input-create">
                <input name='contenido' type="text" class="form-control" placeholder="Contenido" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            </div>
            <a>Proceso</a>
            <select name='id_proceso' class="input-create" aria-label=".form-select-lg example">
                <option selected>Selecciona un proceso</option>
                @foreach($getProceso as $process)
                    <option  value="{{ $process->id }}">{{$process->nombre}}</option>
                @endforeach
            </select>
            <a>Tipo de documento</a>
            <select name='id_tipo' class="input-create" aria-label=".form-select-lg example">
                <option selected>Selecciona un tipo</option>
                @foreach($getTipoDocumento as $typeDocument)
                    <option  value="{{ $typeDocument->id }}">{{$typeDocument->nombre}}</option>
                @endforeach
            </select>
            <div class="inputSend">
                <button type="submit" class="btn btn-primary">Registrar documento</button>
            </div>
        </form>
    </div>
</div>