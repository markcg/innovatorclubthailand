<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Member\MemberFunction;
use App\Models\Business\Business;
use App\Models\Business\BusinessContact;
use App\Models\Business\BusinessProfile;
use App\Models\Member\Member;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Image;

class BusinessApiController extends Controller {

    protected $system;

    function __construct() {
        $this->system = new MemberFunction();
        //$this->middleware("auth", ['except' => ['postLogin', 'postNew']]);
        //$this->middleware("member", ['except' => ['postLogin', 'postNew']]);
    }

    function postCreate(Request $request) {
        $validator = Validator::make($request->all(), [
                    'MemberId' => 'required|numeric',
                    'Category' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        try {
            $member = Member::findOrFail($request->MemberId);
            $business = new Business();
            $businessProfile = new BusinessProfile();
            $business->MemberId = $member->id;
            $business->Category = $request->Category;
            $business->save();
            $businessProfile->BusinessId = $business->id;
            $business->profile()->save($businessProfile);
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }

        return json_encode([
            "status" => true,
            "data" => [
                'businessId' => $business->id
            ]
        ]);
    }

    function postName(Request $request) {
        $validator = Validator::make($request->all(), [
                    'BusinessId' => 'required|numeric',
                    'Name' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        try {
            $business = Business::findOrFail($request->BusinessId);
            $business->Name = $request->Name;
            $business->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }

        return json_encode([
            "status" => true
        ]);
    }

    function postDescription(Request $request) {
        $validator = Validator::make($request->all(), [
                    'BusinessId' => 'required|numeric',
                    'Description' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        try {
            $business = Business::findOrFail($request->BusinessId);
            $business->Description = $request->Description;
            $business->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }

        return json_encode([
            "status" => true
        ]);
    }

    function postCategory(Request $request) {
        $validator = Validator::make($request->all(), [
                    'BusinessId' => 'required|numeric',
                    'Category' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        try {
            $business = Business::findOrFail($request->BusinessId);
            $business->Category = $request->Category;
            $business->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }

        return json_encode([
            "status" => true
        ]);
    }

    function postLocation(Request $request) {
        $validator = Validator::make($request->all(), [
                    'BusinessId' => 'required|numeric',
                    'Location' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        try {
            $business = Business::findOrFail($request->BusinessId);
            $business->Location = $request->Location;
            $business->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }

        return json_encode([
            "status" => true
        ]);
    }

    function postImage(Request $request) {
        $validator = Validator::make($request->all(), [
                    'BusinessId' => 'required|numeric',
                    'Image' => 'required'
        ]);
        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        try {
            $business = Business::findOrFail($request->BusinessId);
            $img = Image::make($request->file('Image'));
            $business->profile->Image = $img->encode('data-url');
            $business->profile->save();
            $business->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }

        return json_encode([
            "status" => true
        ]);
    }

    function postImageEncode(Request $request) {
        $validator = Validator::make($request->all(), [
                    'BusinessId' => 'required|numeric',
                    'Image' => 'required'
        ]);
        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        try {
            $business = Business::findOrFail($request->BusinessId);
            $business->profile->Image = $request->Image;
            $business->profile->save();
            $business->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }

        return json_encode([
            "status" => true
        ]);
    }

    function postVideo(Request $request) {
        $validator = Validator::make($request->all(), [
                    'BusinessId' => 'required|numeric',
                    'Video' => 'required'
        ]);
        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        try {
            $business = Business::findOrFail($request->BusinessId);
            $business->profile->Video = $request->Video;
            $business->profile->save();
            $business->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }

        return json_encode([
            "status" => true
        ]);
    }

    function postWebsite(Request $request) {
        $validator = Validator::make($request->all(), [
                    'BusinessId' => 'required|numeric',
                    'Website' => 'required'
        ]);
        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        try {
            $business = Business::findOrFail($request->BusinessId);
            $business->profile->Website = $request->Website;
            $business->profile->save();
            $business->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }

        return json_encode([
            "status" => true
        ]);
    }

    function postDetail(Request $request) {
        $validator = Validator::make($request->all(), [
                    'BusinessId' => 'required|numeric',
                    'Detail' => 'required'
        ]);
        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        try {
            $business = Business::findOrFail($request->BusinessId);
            $business->profile->Detail = $request->Detail;
            $business->profile->save();
            $business->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }

        return json_encode([
            "status" => true
        ]);
    }

    function postNewContact(Request $request) {
        $validator = Validator::make($request->all(), [
                    'BusinessId' => 'required|numeric',
                    'Name' => 'required|max:255',
                    'Contact' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        try {
            $businessContact = new BusinessContact();
            $businessContact->BusinessId = $request->BusinessId;
            $businessContact->Name = $request->Name;
            $businessContact->Contact = $request->Contact;
            $businessContact->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }

        return json_encode([
            "status" => true,
            "data" => $businessContact->id
        ]);
    }

    function postDeleteContact(Request $request) {
        $validator = Validator::make($request->all(), [
                    'ContactId' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return json_encode([
                "status" => false,
                "error" => $validator->errors()->all()
            ]);
        }
        try {
            $businessContact = BusinessContact::findOrFail($request->ContactId);
            $businessContact->delete();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }

        return json_encode([
            "status" => true,
        ]);
    }

}
