<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Log;

use App\Http\Requests;

use Cache;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index() {
        $users = User::all(); //('first_name, last_name, email');
        $value = Cache::get('key');
        trace_log();
//        $users = User::all([first_name, last_name, email]);
        return view('users.index', compact('users'));
    }

    public function show($id) {
        Log::info('Showing user profile for user: ', ['id' => $id]);
        $error = 'this is log messages';

        // $monolog = Log::getMonolog();
        // $monolog->all());

        Log::alert($error);
        Log::critical($error);
        Log::error($error);
        Log::warning($error);
        Log::notice($error);
        try {
            Log::info(Db::table('users')->count());
//            throw new Exception();
        } catch(exception $e) {
            trace_log($e);
        }
        Log::debug($error);

        $user = User::find($id);
        return view ('users.show', compact('user'));
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required',
        ]);

        $user = User::create($request->all());
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->save();
//        return $user;
        return redirect()
            -> route('users.index');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update($id, Request $request) {
        $this->validate($request, [
//            'email' => 'required|unique:users|email|max:255',
//            'password' => 'required',
        ]);

        $user = User::find($id);
        $user->update($request->all());
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->save();
        return redirect()
            ->route('users.show', compact('user'));
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()
            ->route('users.index');
    }
}
