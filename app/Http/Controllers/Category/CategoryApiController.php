<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category\Industry;
use App\Models\Category\MemberGroup;
use App\Models\Category\MemberStatus;
use App\Models\Category\ProjectState;
use App\Models\Category\Role;

class CategoryApiController extends Controller {

    function getMemberGroup() {
        $memberGroup = MemberGroup::all();
        return json_encode($memberGroup);
    }

    function getMemberStatus() {
        $memberStatus = MemberStatus::all();
        return json_encode($memberStatus);
    }

    function getProjectState() {
        $projectState = ProjectState::all();
        return json_encode($projectState);
    }

    function getMemberRole() {
        $memberRole = Role::all();
        return json_encode($memberRole);
    }

    function getIndustry() {
        $industry = Industry::all();
        return json_encode($industry);
    }

    function getProvince() {
        $province = DB::select("SELECT * FROM `province`");
        return json_encode($province);
    }

    function getProvinceByKeyword(Request $request) {
        $province = DB::select("SELECT * FROM `province` WHERE `province`.`PROVINCE_NAME` LIKE '%$request->keyword%' OR `province`.`PROVINCE_NAME_ENG` LIKE '%$request->keyword%'");
        return json_encode($province);
    }

}
