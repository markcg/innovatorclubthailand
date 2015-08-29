<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProjectController extends Controller {

    protected $system;

    function __construct() {
        $this->middleware("auth");
        //$this->middleware("member", ['only' => []]);
    }

    function getManage() {
        return view('project.manage');
    }

    function getCreate() {
        return view('project.create');
    }

    function getJob() {
        return view('project.job');
    }

}
