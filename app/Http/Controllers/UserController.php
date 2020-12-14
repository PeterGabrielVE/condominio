<?php

namespace App\Http\Controllers;

use App\User;
use App\Users_Profiles as Profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $status = [
            'active'    => 'Active',
            'inactive'  => 'Inactive',
            'suspended' => 'Suspended'
        ];
    
        $users = User::all();
        $profiles = Profiles::get()->pluck('name','id');

        return view('pages.user.index', compact('users','status','profiles'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create', [
            'roles' => Role::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataUser = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol_id' => $request->rol_id,
            'locale' => 'es',
        ];

        $validateUser = User::where('email', $request->email);
        if($validateUser->count() > 0) {
            toastr()->error('El correo ya se encuentra registrado');
            return redirect()->route('nuevo.usuario')->withInput($request->all());
        } else {
            $user = new User($dataUser);

            if($user->save()) {
                toastr()->success('Registro creado con éxito!');
            } else {
                toastr()->error('Ha ocurrido un error al crear el registro');
            }
        }

        return redirect()->back();
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
        //dd($id);
        $user = User::find($id);
        //dd($user);
        return view('users/profile', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updatePassword(Request $request) 
    {
        $user = User::find($request->user_id);
        if(Hash::check($request->password, $user->password)) {
            if($request->new_password == $request->confirm_password) {
                $user->password = Hash::make($request->new_password);
                $user->save();

                toastr()->success('La contraseña se actualizo con éxito!');

            } else {
                toastr()->error('Las contraseñas no coinciden');
            }
        } else {
            toastr()->error('La contraseña actual es incorrecta');
        }
        return redirect()->back();
    }

    /**
     * Se usa para obtener los proveedores asociados a un usuario
     */
    public function getProviders(Request $request) 
    {
        $providers = Auth::user()->providers;

        $response = array();
        foreach ($providers as $provider){ 
            $response[] = [
                'provider_id' => $provider->id,
                'provider_name' => $provider->name,
                'provider_cif' => $provider->cif,
                'provider_notes' => $provider->notes,
                'provider_scoring' => $provider->scoring,
                "status" => 200
            ];
        }

        return  response()->json($response, 200);
    }


}
