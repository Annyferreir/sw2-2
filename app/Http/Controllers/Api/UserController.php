<?php 

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return $user;
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json("Usuário não encontrado");
        };

            $user->update($request->all());

            return response()->json($user);

    }

    public function delete($id)
    {
        $user = User::find($id);

        $user->delete();

        return $user;
    }
}
 