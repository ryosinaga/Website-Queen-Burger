<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('Auth.login');
    }

    public function loginPost(Request $request){
        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email', $email)->first();
        if($data){
            if(Hash::check($password, $data->password)){
                Session::put('name', $data->name);
                Session::put('email', $data->email);
                Session::put('login', TRUE);
                return redirect()->route('home-dashboard');
            }else{
                return redirect('login')->with('alert', 'Password atau Email Salah!');
            }
        }else{
            return redirect('login')->with('alert', 'Password atau Email Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert', 'Telah Logout');
    }

    public function register(Request $request){
        return view('Auth.register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Berhasil Register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModelUser  $modelUser
     * @return \Illuminate\Http\Response
     */
    public function show(ModelUser $modelUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelUser  $modelUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelUser $modelUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelUser  $modelUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelUser $modelUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelUser  $modelUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelUser $modelUser)
    {
        //
    }
}
