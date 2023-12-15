<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = array(
            'user' => User::all(),
        );

        return view('admin.users.index', $data);
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/user');
    }

    public function update(Request $request, $id)
    {
        User::where('id', $id)
            ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password,
                ]);
        
        return redirect('/user');
    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->delete();

        return redirect('/user');
    }
}
