<?php

Route::get('/', ['middleware' => 'auth', function()
{
    return view('welcome') ;
}]);

Route::get('logout', function()
{
    auth()->logout();
    return redirect('/');
});

Route::get('login', function()
{
    return View::make('login');
});

Route::post('login', function()
{
    $credentials = Input::only('email', 'password');

    if ( ! Auth::attempt($credentials))
    {
        return Redirect::back()->withMessage('Invalid credentials');
    }

    if (Auth::user()->level == 1)
    {
        return Redirect::to('/dashboard');
    }

    return Redirect::to('/');
});

Route::get('dashboard', ['middleware' => ['auth', 'auth.admin'], function()
{
    return 'This Dashboard only for Admin';
}]);
