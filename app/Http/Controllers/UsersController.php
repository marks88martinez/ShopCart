<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users =  User::where('id','<>',1)
        ->where('tipoUser','=','admin')
        ->get();
        return view('users.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'email' => [
                'required',
                'email',
                'unique:users,email',
             ]
            ]);


        User::create([
            // 'name' => $request['name'],
            // 'email' => $request['email'],
            // 'password' => bcrypt($request['password']),

            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            // Asignar los valores de los campos adicionales
            'last_name' => $request['last_name'],
            'company' => $request['company'],
            'country' => $request['country'],
            'address' => $request['address'],
            'state' => $request['state'],
            'postal_code' => $request['postal_code'],
            'phone' => $request['phone'],
            'note' => $request['note'],
            'tipoUser' => $request['tipoUser'],
        ]);
        return Redirect('/admin/users')->with('success','User creado con sucesso');

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
        $user = User::find($id);
        return view('users.edit', compact('user'));
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
        $user = User::findOrFail($id);
        $user->fill([
              'name' => $request->name,
              'email' => $request->email,
              // Asignar los valores de los campos adicionales
              'last_name' => $request->last_name,
              'company' => $request->company,
              'country' => $request->country,
              'address' => $request->address,
              'state' => $request->state,
              'postal_code' => $request->postal_code,
              'phone' => $request->phone,
              'note' => $request->note,
           
        ]);
        // Actualizar la contraseña si se proporcionó
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }

        $user->save();
        // return response()->json(['success' => true]);
        // return Redirect('/admin/users')->with('success','User Actualizado con sucesso');
        return Redirect::back()->with('success', 'User Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return Redirect('/admin/users')->with('success','User delete con sucesso');

    }

    
    
}
