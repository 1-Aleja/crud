<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDocumento;
use App\Models\Proceso;
use App\Models\Documento;

class DocumentsController extends Controller
{
    public function index(){
        $getDocuments= Documento::getDocumentsList();
        return view('document.view_document_list')->with(compact('getDocuments'));
    }
    public function create(){
        $getProceso=Proceso::getProceso();
        $getTipoDocumento=TipoDocumento::getTipoDocumento();
        return view('document.create_document',['getProceso'=>$getProceso,
                                                'getTipoDocumento'=>$getTipoDocumento]);
    }
    public function edit($id){
        $getProceso=Proceso::getProceso();
        $getTipoDocumento=TipoDocumento::getTipoDocumento();
        $searchDocument=Documento::find($id);
        return view('document.edit_document',['searchDocument'=>$searchDocument,
                                                'getProceso'=>$getProceso,
                                                'getTipoDocumento'=>$getTipoDocumento]);
    }

    public function destroy($id){
        Documento::deleteDocument($id);
        return back();
    }
    public function save(Request $request){
        Documento::saveDocument($request);
        return back();
            
    }
    public function update(Request $request,$id){
        Documento::updateDocuments($request,$id);
        return back();
    }
}
