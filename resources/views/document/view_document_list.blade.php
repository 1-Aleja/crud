<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
    }

    th {
      background-color: #26218E;
    }
  </style>
<div>
    <div>
        <form method="get" action="{{url('/register')}}" >
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
    <form method="post" action="{{url('/logout')}}" >
    {{ csrf_field() }}
        <div>
            <button type="submit" class="btn btn-primary">Cerrar Sesión</button>
        </div>
    </form>
    <div class="title">
        <h1>Tabla</h1>
    </div>
    <div class="positionButton">
        <form action="/documents/create" method="GET">
            <button class="buttonCreate" type="submit">Crear</button>
        </form>
    </div>
    <div>
      <table class='table'>
        <thead >
          <tr>
            <th>Documento</th>
            <th>Proceso</th>
            <th>Tipo</th>
            <th>Código</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody >
            @foreach($getDocuments as $document)
                <tr>
                    <td class='titleTable'>{{$document->nombre_documentos}}</td>
                    <td class='titleTable' >{{$document->nombre_procesos}}</td>
                    <td class='titleTable' >{{$document->nombre_tipo_doc}}</td>
                    <td class='titleTable' >{{$document->prefijo_tipo}}-{{$document->prefijo_procesos}}-{{$document->codigo}}</td>
                    <td class='titleTable'>
                        <form action="/documents/{{$document->id}}/edit" method="GET">
                            <button class="buttonEdit">Editar</button>
                        </form>
                        
                        <form action="/documents/{{$document->id}}/destroy"method="GET">
                            <button class="buttonDelete" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</div>
