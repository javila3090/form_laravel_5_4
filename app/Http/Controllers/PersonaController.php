<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class PersonaController extends Controller
{

    /**
     * @return mixed
     */
    public function index()
    {
        return \View::make('welcome');
    }

    /**
     * @param Request $request
     * @return string
     */
    public function store(Request $request)
    {

        $rules = array(
            'nombres' => 'required',
            'apellidos' => 'required',
            'edad' => 'required',
            'fecha_nac' => 'required',
            'email' => 'required',
            'telefono' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return ("<div class='alert alert-dismissable alert-danger'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                ¡Debe completar todos los campos obligatorios del formulario!
                </div>");

        }else{

            $persona = new Persona; // Creando el objecto del modelo
            $persona -> create($request->all());

            return ("<div class='alert alert-dismissable alert-success'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                ¡Registro completado con éxito!
                </div>");

        }

    }

    /**
     * @return mixed
     */
    public function show()
    {
        /** @var TYPE_NAME $personas */
        $personas = Persona::all();
        return \View::make('lista', compact('personas'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('editar', compact('persona'));
    }

    /**
     * @param $id
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function update($id, Request $request)
    {

        $rules = array(
            'nombres' => 'required',
            'apellidos' => 'required',
            'edad' => 'required',
            'fecha_nac' => 'required',
            'email' => 'required',
            'telefono' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            $messages = $validator->messages();
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Debe completar todos los campos obligatorios del formulario');
            return redirect('personas/lista');
            //return redirect('personas/lista')->with('message', 'Debe completar todos los campos obligatorios del formulario');

        }else{

            $persona = Persona::findOrFail($id);
            $data = Input::all();
            $persona->fill($data);
            $persona->save();
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', '¡Registro actualizado con &eacute;xito!');
            return redirect('personas/lista');
            //return redirect('personas/lista')->with('message', '¡Registro actualizado con &eacute;xito!');
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id, Request $request){
        $registro = Persona::find($id);
        $registro -> delete();
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', '¡Registro eliminado con &eacute;xito!');
        return redirect('personas/lista');

    }
}
