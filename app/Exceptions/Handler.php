<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
// use Throwable;
use Exception;
use Illuminate\Auth\AuthenticationException;
use Auth;

class Handler extends ExceptionHandler
{
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        if ($request->is('admin') || $request->is('admin/*')) {
            return redirect()->guest('/login/admin');
        }
        if ($request->is('watchman') || $request->is('watchman/*')) {
            return redirect()->guest('/login/watchman');
        }
        if ($request->is('superadmin') || $request->is('superadmin/*')) {
            return redirect()->guest('/login/superadmin');
        }
        if ($request->is('secretary') || $request->is('secretary/*')) {
            return redirect()->guest('/login/secretary');
        }
        if ($request->is('treasurer') || $request->is('treasurer/*')) {
            return redirect()->guest('/login/treasurer');
        }
        return redirect()->guest(route('login'));
    }
    
    
    
    
    
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
