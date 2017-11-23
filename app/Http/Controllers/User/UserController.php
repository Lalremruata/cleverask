<?php

namespace App\Http\Controllers\User;

use App\Model\user\post;
use App\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function getDashBoard()
    {
        $posts = DB::table('posts')->where('posted_by', 'john')->get();
        return view('dashboard', compact('posts'));
    }
    public function postSignUp(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|unique:users|max:120',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4'
        ]);

        $name = $request['name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);

        $user = new user();

        $user->name = $name;
        $user->email = $email;
        $user->password = $password;

        $user->save();
        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['name' => $request['name'], 'password' => $request['password']]))
        {
           return redirect(route('dashboard'));
        }
        return redirect()->back();
    }

    public function getLogOut()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function getSettings()
    {
        return view('user/settings', ['user' => Auth::user()]);
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|max:60|unique:users'
        ]);

        $user = Auth::user();
        $old_name = $user->name;
        $user->name = $request['name'];
        $user->update();
        $file = $request->file('image');
        $filename = $request['name'] . '-' . $user->id . '.jpg';
        $old_filename = $old_name . '-' . $user->id . '.jpg';
        $update = false;
        if (Storage::disk('local')->has($old_filename)) {
            $old_file = Storage::disk('local')->get($old_filename);
            Storage::disk('local')->put($filename, $old_file);
            $update = true;
        }
        if ($file) {
            Storage::disk('local')->put($filename, File::get($file));
        }
        if ($update && $old_filename !== $filename) {
            Storage::delete($old_filename);
        }
        return redirect()->route('settings');
    }

    public function getUserImage($filename)
    {
        $file = Storage::disk('local')->get('$filename');
        return new Response($file, 200);
    }
}
