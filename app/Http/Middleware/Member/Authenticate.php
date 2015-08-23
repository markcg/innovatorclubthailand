<?php

namespace App\Http\Middleware\Member;

use Closure;
use Illuminate\Support\Facades\Session;

class Authenticate {

    public function handle($request, Closure $next) {
        if (Session::has("Auth")) {
            if (Session::get("Auth") == "Member" || Session::get("Auth") == "Admin") {
                return $next($request);
            }
        }
        return redirect("/member/login");
    }

}
