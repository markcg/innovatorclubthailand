<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Member\Member;
use App\Http\Controllers\Member\MemberFunction;

class MemberController extends Controller {

    protected $system;

    function __construct() {
        $this->system = new MemberFunction();
        $this->middleware("auth", ['only' => ['getSetUp', 'getManage']]);
    }

    function getLogin() {
        return view('member.login');
    }

    function getLogout() {
        Session::flush();
        return redirect("/member/login");
    }

    function getSignup() {
        return view('member.register');
    }

    function getProfile($id) {
        try {
            $member = Member::findOrFail($id);
        } catch (Exception $e) {
            return redirect()->back();
        }
        return view("member.profile")->with([
                    "member" => $member
        ]);
    }

    function getSetUp() {
        try {
            $member = Session::get("Member");
        } catch (Exception $e) {
            return redirect()->back();
        }
        if ($member->Status == IsMember) {
            return redirect("/member/manage");
        } else {
            return view("member.setup");
        }
    }

    function getManage() {
        try {
            $member = Session::get("Member");
        } catch (Exception $e) {
            return redirect()->back();
        }
        if ($member->Status != IsMember) {
            return redirect("/member/set-up");
        } else {
            return view("member.profile")->with(["member" => $member]);
        }
    }

}
