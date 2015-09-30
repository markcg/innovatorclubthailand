<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Member\MemberFunction;
use App\Models\Business\Business;
use App\Models\Member\Member;
use Exception;
use Illuminate\Support\Facades\Session;
use function redirect;
use function view;

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
            $member = Member::findOrFail(Session::get('MemberId'));
            $startup = Business::where("MemberId", "=", Session::get('MemberId'))->where("Category", "=", 1)->first();
            $investor = Business::where("MemberId", "=", Session::get('MemberId'))->where("Category", "=", 2)->first();
        } catch (Exception $e) {
            return redirect()->back();
        }
        if ($member->Status != IsMember) {
            return redirect("/member/set-up");
        } else {
            return view("member.manage")->with(["member" => $member, "startup" => $startup, "investor" => $investor]);
        }
    }

    function getMatching() {
        return view("member.matching");
    }

}
