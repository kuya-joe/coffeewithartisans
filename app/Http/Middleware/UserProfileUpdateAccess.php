<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserProfileUpdateAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {

        }

        $userLoggedIn = Auth::user()->id;
        $userForm =  $request->input('id') ?? 0;

     //hacking attempt
     if($userLoggedIn !== $userForm) {
         $this->_logoutAndRedirectUser('login');
     }
     return $next($request);
    }

    private function _logoutAndRedirectUser($loginPage) {
        Auth::logout();
        return redirect()->route($loginPage);
    }
}
