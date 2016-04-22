<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Setting;

use Illuminate\Support\Facades\Session;
//use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Response;

use Illuminate\Support\Facades\Log;


class SettingController extends Controller
{

    public function add() {
        return view('settings.new');
    }
//
//    public function create(Request $request) {
//        return $request;
//    }

    public function create() {
        //check if its our form
        if ( Session::token() !== Input::get( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Unauthorized attempt to create setting'
            ) );
        }

        $key = Input::get( 'key' );
        $value = Input::get( 'value' );

        //.....
        //validate data
        //and then store it in DB
        //.....

//        $this->validate($key, ['key' => 'required']);

        $setting = Setting::create();
        $setting->key = $key;
        $setting->value = $value;
        $setting->save();

        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
            'key' => $key,
            'value' => $value,
        );

//        return  $response;
        Log::info(response()->json($response));

//        return Response::make( json_encode( $response ) )->header( 'Content-Type', 'application/json' );
        return response($response)
            ->header('Content-Type', 'nothing :|')
            ->cookie('name', 'value');
    }
}
