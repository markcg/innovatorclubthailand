<?php

namespace App\Http\Middleware\Member;

use Closure;
use Illuminate\Support\Facades\Session;

class MemberAuthenticate {

    public function handle($request, Closure $next) {

        if (Session::has("MemberId")) {
            if (Session::get("MemberId") == $request->MemberId || Session::get("Auth") == "Admin") {
                return $next($request);
            }
        }
        return redirect("/member/login");
    }

}
