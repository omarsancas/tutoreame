<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 23/11/14
 * Time: 11:21 AM
 */

class SesionesController extends BaseController{

    public function create()
    {
        return View::make('login');
    }

    public function store()
    {
        $input = Input::all();
        $attempt= Auth::attempt([
            'USER_ID' => $input['usuario'],
            'password' => $input['password']
        ]);

        if($attempt){

            return Redirect::to('alumno');
        }else{

                Session::flash('message', '¡El Usuario o la contraseña no son correctas!');
                return Redirect::route('login');
        }

    }

} 