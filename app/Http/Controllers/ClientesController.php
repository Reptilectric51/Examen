<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //
    use Illuminate\Http\Request;
    use Clientes;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

public function create()
{
    $clientes = Clientes::all();
    return view('admin.clientes.create', compact('Nombre'));
}

public function index(){
    $clientes = Clientes::all();
    return view('admin.clientes.create', compact('Nombre'));
}

public function edit($id)
{
    $clientes = Clientes::find($id);
    return view('admin/clientes.edit',['clientes'=>$clientes]);
}

public function update(ItemUpdateRequest $request, $id ){
    $clientes = Clientes::find($id);

    $clientes->Nombre = $request->Nombre;

    $clientes->save();

    Session::flash('message', 'Editado Satisfactoriamente !');
    return Redirect::to('admin/clientes');
}

public function delete(){
$imagen = Clientes::find($id);
 
        foreach($nombre as $nombre){
            Storage::delete($nombre['nombre']);
        }
 
        Clientes::destroy($id);        
 
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/Clientes');}

public function store ($request)
{
    $clientes = new Clientes;

    $clientes->Nombre = $request->Nombre;

    $clientes->save();;

    return redirect('admin/clientes')->with('message','Guardado Satisfactoriamente !');
}
}
