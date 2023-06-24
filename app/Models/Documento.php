<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    public function getDocuments()
    {
        return 'hola';
    }
    public static function deleteDocument($id)
    {
        $document=Documento::find($id);
        $document->delete();
        
    }
    public static function getDocumentsList (){
        return Documento::join('procesos','documentos.id_proceso','=','procesos.id')
                        ->join('tipo_documentos','documentos.id_tipo','=','tipo_documentos.id')
                        ->get(['documentos.nombre AS nombre_documentos',
                                'procesos.nombre AS nombre_procesos',
                                'tipo_documentos.nombre AS nombre_tipo_doc',
                                'documentos.codigo','documentos.id',
                                'procesos.prefijo AS prefijo_procesos',
                                'tipo_documentos.prefijo AS prefijo_tipo']);
    }
    public static function updateDocuments($request,$id){
        $updateDocument=Documento::find($id);
        $updateDocument->nombre=$request->input('nombre');
        $updateDocument->codigo=$request->input('codigo');
        $updateDocument->contenido=$request->input('contenido');
        $updateDocument->id_proceso=$request->input('id_proceso');
        $updateDocument->id_tipo=$request->input('id_tipo');
        $updateDocument->save();
        
    }
    public static function saveDocument($request){
        Documento::create([
            'nombre' => $request->nombre,
            'codigo' => $request->codigo,
            'contenido' => $request->contenido,
            'id_tipo' => $request->id_tipo,
            'id_proceso' => $request->id_proceso,
        ]);
    }



protected $fillable = ['nombre', 'codigo', 'contenido', 'id_tipo', 'id_proceso'];



}