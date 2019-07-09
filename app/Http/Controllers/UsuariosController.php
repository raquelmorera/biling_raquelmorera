<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = usuarios::all();

        return view('Usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'email_verified_at'=>'required',
            'password' =>'required'
        ]);

        $usuario = new usuarios([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'email_verified_at' => $request->get('email_verified_at'),
            'password' => $request->get('password')
           
        ]);
        $usuario->save();
        return redirect('/usuarios')->with('success', 'User saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = usuarios::find($id);
        return view('Usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'email_verified_at'=>'required',
            'password' =>'required'
        ]);
    
        $usuario = usuarios::find($id);
            $usuario->name =  $request->get('name');
            $usuario->email = $request->get('email');
            $usuario->email_verified_at = $request->get('email_verified_at');
            $usuario->password = $request->get('password');
            $usuario->save();
    
            return redirect('/usuarios')->with('success', 'Usuario Actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = usuarios::find($id);
        $usuario->delete();

        return redirect('/usuarios')->with('success', 'Usuario Eliminado!');
    }
}
