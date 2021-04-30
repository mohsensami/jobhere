<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit()
    {
        return view('panel.profile.edit');
    }
    public function update(Request $request)
    {
        $data = $request->all();

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']);
        }

        if ($request->hasFile('avatar')) {
            
            $file = $request->file('avatar');
            $ext = $file->getClientOriginalExtension();

            $file_name = auth()->user()->id . '_' . time() . '.' . $ext;
            $file->storeAs('images/users', $file_name);

            $data['avatar'] = $file_name;
        }


        Auth::user()->update(
            $data
        );

        session()->flash('status', 'اطلاعات کاربری شما ویرایش شد!');

        return back();
    }
}
