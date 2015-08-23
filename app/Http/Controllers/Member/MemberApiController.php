<?php

namespace App\Http\Controllers\Member;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Member\MemberFunction;
use App\Models\Member\Member;
use App\Models\Category\Industry;
use App\Models\Category\MemberGroup;
use App\Models\Category\MemberStatus;
use App\Models\Category\ProjectState;
use App\Models\Category\Role;

class MemberApiController extends Controller {

    protected $system;

    function __construct() {
        $this->system = new MemberFunction();
        $this->middleware("auth", ['except' => ['postLogin', 'postNew']]);
        $this->middleware("member", ['except' => ['postLogin', 'postNew']]);
    }

//----Get
//----Post
    function postLogin(Request $request) {
        $validator = Validator::make($request->all(), [
                    'Email' => 'required|email|max:255|exists:member,Email',
                    'Password' => 'required|min:8|alpha_num',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        try {
            $member = Member::where("Email", "=", $request->Email)->firstOrFail();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        if (Hash::check($request->Password, $member->Password)) {
            Session::put("Auth", "Member");
            Session::put("MemberId", $member->id);
            Session::put("Member", $member);
            if ($member->status != IsMember) {
                $setup = true;
            } else {
                $setup = false;
            }
            return json_encode([
                "status" => true,
                "data" => [
                    "SetUp" => $setup
                ]
            ]);
        }
        return json_encode([
            "status" => false,
            "error" => "Invalid Username or Password"
        ]);
    }

    function postNew(Request $request) {
        $validator = Validator::make($request->all(), [
                    'Email' => 'required|email|max:255|unique:member,Email',
                    'Password' => 'required|min:8|alpha_num',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        return $this->system->AddMember($request);
    }

    function postEdit(Request $request) {
        $validator = Validator::make($request->all(), [
                    'MemberId' => 'required|numeric',
                    'Email' => 'required|email|max:255|unique:member,Email',
                    'Password' => 'required|min:8|alpha_num',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        return $this->system->EditMember($request);
    }

    function postDelete(Request $request) {
        $validator = Validator::make($request->all(), [
                    'MemberId' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        return $this->system->DeleteMember($request);
    }

    function postProfile(Request $request) {
        $validator = Validator::make($request->all(), [
                    'Function' => 'required',
                    'MemberId' => 'required|numeric',
                    'ProjectState' => 'required|numeric',
                    'MemberGroup' => 'required|numeric',
                    'PartnerGroup' => 'required|numeric',
                    'Location' => 'required|numeric',
                    'Age' => 'required|numeric',
                    'IsStudent' => 'numeric',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        if ($request->Function == "Add") {
            $this->system->AddProfile($request);
        } else if ($request->Function == "Edit") {
            $this->system->EditProfile($request);
        } else {
            return json_encode([
                "status" => false,
                "error" => "Invalid Function"
            ]);
        }
    }

    function postRole(Request $request) {
        $validator = Validator::make($request->all(), [
                    'Function' => 'required',
                    'MemberId' => 'required|numeric',
                    'FirstRole' => 'required|numeric',
                    'SecondRole' => 'numeric',
                    'ThirdRole' => 'numeric',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        if ($request->Function == "Add") {
            $this->system->AddRole($request);
        } else if ($request->Function == "Edit") {
            $this->system->EditRole($request);
        } else {
            return json_encode([
                "status" => false,
                "error" => "Invalid Function"
            ]);
        }
    }

    function postJoining(Request $request) {
        $validator = Validator::make($request->all(), [
                    'Function' => 'required',
                    'MemberId' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        if ($request->Function == "Add") {
            $this->system->AddJoining($request);
        } else if ($request->Function == "Edit") {
            $this->system->EditJoining($request);
        } else {
            return json_encode([
                "status" => false,
                "error" => "Invalid Function"
            ]);
        }
    }

    function postSkill(Request $request) {
        $validator = Validator::make($request->all(), [
                    'Function' => 'required',
                    'MemberId' => 'required|numeric',
                    'Finance' => 'required|numeric|max:3',
                    'Managing' => 'required|numeric|max:3',
                    'Marketing' => 'required|numeric|max:3',
                    'ProductM' => 'required|numeric|max:3',
                    'Sales' => 'required|numeric|max:3',
                    'Technical' => 'required|numeric|max:3',
                    //
                    'FinanceNeed' => 'required|numeric|max:3',
                    'ManagingNeed' => 'required|numeric|max:3',
                    'MarketingNeed' => 'required|numeric|max:3',
                    'ProductMNeed' => 'required|numeric|max:3',
                    'SalesNeed' => 'required|numeric|max:3',
                    'TechnicalNeed' => 'required|numeric|max:3',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        if ($request->Function == "Add") {
            $this->system->AddSkill($request);
        } else if ($request->Function == "Edit") {
            $this->system->EditSkill($request);
        } else {
            return json_encode([
                "status" => false,
                "error" => "Invalid Function"
            ]);
        }
    }

    function postExperience(Request $request) {
        $validator = Validator::make($request->all(), [
                    'Function' => 'required',
                    'MemberId' => 'required|numeric',
                    'FirstIndustry' => 'required|numeric',
                    'FirstExperience' => 'required|numeric',
                    'SecondIndustry' => 'numeric',
                    'SecondExperience' => 'numeric',
                    'ThirdIndustry' => 'numeric',
                    'ThirdExperience' => 'numeric',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        if ($request->Function == "Add") {
            $this->system->AddExperience($request);
        } else if ($request->Function == "Edit") {
            $this->system->EditExperience($request);
        } else {
            return json_encode([
                "status" => false,
                "error" => "Invalid Function"
            ]);
        }
    }

    function postNeed(Request $request) {
        $validator = Validator::make($request->all(), [
                    'Function' => 'required',
                    'MemberId' => 'required|numeric',
                    'Investment' => 'required|numeric',
                    'TimeCommint' => 'required|numeric',
                    'PartnerFirstRole' => 'required|numeric',
                    'PartnerSecondRole' => 'numeric',
                    'PartnerThirdRole' => 'numeric',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        if ($request->Function == "Add") {
            $this->system->AddNeed($request);
        } else if ($request->Function == "Edit") {
            $this->system->EditNeed($request);
        } else {
            return json_encode([
                "status" => false,
                "error" => "Invalid Function"
            ]);
        }
    }

    function postContact(Request $request) {
        $validator = Validator::make($request->all(), [
                    'Function' => 'required',
                    'MemberId' => 'required|numeric',
                    'Mobile' => 'required|max:255',
                    'Skype' => 'required|max:255',
                    'Line' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        if ($request->Function == "Add") {
            $this->system->AddContact($request);
        } else if ($request->Function == "Edit") {
            $this->system->EditContact($request);
        } else {
            return json_encode([
                "status" => false,
                "error" => "Invalid Function"
            ]);
        }
    }

    function postSocial(Request $request) {
        $validator = Validator::make($request->all(), [
                    'Function' => 'required',
                    'MemberId' => 'required|numeric',
                    'Mobile' => 'required|max:255',
                    'Skype' => 'required|max:255',
                    'Line' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        if ($request->Function == "Add") {
            $this->system->AddSocial($request);
        } else if ($request->Function == "Edit") {
            $this->system->EditSocial($request);
        } else {
            return json_encode([
                "status" => false,
                "error" => "Invalid Function"
            ]);
        }
    }

    function postDetail(Request $request) {
        $validator = Validator::make($request->all(), [
                    'Function' => 'required',
                    'MemberId' => 'required|numeric',
                    'Firstname' => 'alpha|max:255',
                    'Middlename' => 'alpha|max:255',
                    'Lastname' => 'alpha|max:255',
                    'About' => 'required',
                    'Image' => 'image',
                    'Video' => 'active_url',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        if ($request->Function == "Add") {
            $this->system->AddDetail($request);
        } else if ($request->Function == "Edit") {
            $this->system->EditDetail($request);
        } else {
            return json_encode([
                "status" => false,
                "error" => "Invalid Function"
            ]);
        }
    }

    function postImage(Request $request) {
        $validator = Validator::make($request->all(), [
                    'Function' => 'required',
                    'MemberId' => 'required|numeric',
                    'Image' => 'required|image',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        if ($request->Function == "Add") {
            $this->system->AddImage($request);
        } else if ($request->Function == "Edit") {
            $this->system->EditImage($request);
        } else {
            return json_encode([
                "status" => false,
                "error" => "Invalid Function"
            ]);
        }
    }

    function postComplete(Request $request) {
        $validator = Validator::make($request->all(), [
                    'MemberId' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        return $this->system->CompleteSetup($request);
    }

}
