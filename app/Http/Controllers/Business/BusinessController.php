<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Member\MemberFunction;
use App\Models\Business\Business;
use Illuminate\Support\Facades\Session;

class BusinessController extends Controller {

    protected $system;

    function __construct() {
        $this->system = new MemberFunction();
        //$this->middleware("auth", ['except' => ['postLogin', 'postNew']]);
        //$this->middleware("member", ['except' => ['postLogin', 'postNew']]);
    }

    function getManage($id) {
        try {
            $business = Business::findOrFail($id);
            if ($business->MemberId != Session::get('MemberId')) {
                return redirect()->back();
            }
        } catch (Exception $e) {
            return redirect()->back();
        } if ($business->MemberId != Session::get('MemberId')) {
            return redirect()->back();
        }
        return view("business.manage")->with([
                    "business" => $business
        ]);
    }

}
