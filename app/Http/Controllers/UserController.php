<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $user=User::where('name','like', '%'. $texto . '%')->paginate(10);
        return view('user.index', compact('user', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $categoria = new User();
        return view('user.action', ['user'=> new User()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = new User;
        $user->name=$request->input('name');
        $user->gmail=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        $user->save();
        return response()->json([
            'status'=> 'success',
            'message'=> 'Usuario creado satisfactoriamente'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return "Mostrar";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.action', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name=$request->name;
        $user->save();

        return response()->json([
            'status'=> 'success',
            'message'=> 'Actualizado satisfactoriamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'status' => 'success',
        ]);
    }
}
