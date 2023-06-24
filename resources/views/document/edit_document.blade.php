<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<div>
    <form method="get" action="{{url('/data-grid')}}" >
        <button type="submit" class="btn btn-primary">Tabla</button>
    </form>
</div>
<form action="/documents/{{$searchDocument->id}}/edit" method="POST">
    {{ csrf_field() }}
    <div class="title"><h1>Editar Documento</h1></div>
    <div class="inputEdit">
        <a>Nombre </a>
        <div class="input-create">
            <input value="{{ $searchDocument->nombre }}" name='nombre'type="text" class="form-control" placeholder="Nombre" aria-label="Recipient's username"  >
        </div>
        <a>Codigo</a>
        <div class="input-create">
            <input value="{{ $searchDocument->codigo }}" name='codigo'type="number" class="form-control" placeholder="Referencia" aria-label="Recipient's username">
        </div>
        <a>Contenido</a>
        <div class="input-create">
            <input value="{{ $searchDocument->contenido }}" name='contenido' type="number" class="form-control" placeholder="Contenido" aria-label="Recipient's username" >
        </div>
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
            <button type="submit" class="btn btn-primary">Editar Documento</button>
        </div>
    </div>
</form>