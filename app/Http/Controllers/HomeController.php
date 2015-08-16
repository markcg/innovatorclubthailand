<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HTTPRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use CURLFile;
use App\cURL;
use App\Models\WordPress\WordPressPost;
use Spatie\Newsletter\NewsletterFacade as Newsletter;
use Jenssegers\Agent\Agent;

class HomeController extends Controller {

    function getIndex() {
        $detect = new Agent();
        if ($detect->isMobile()) {
            return view('home.landing')->with(["mobile" => true]);
        }
        return view('home.landing');
    }

    function getContact() {
        try {
            $wordpress_post = WordPressPost::where("post_name", "=", "contactth")->firstOrFail();
        } catch (Exception $e) {
            return view('home.contact.contact')->with([
                        "post" => $e
            ]);
        }
        return view('home.contact.contact')->with([
                    "post" => $wordpress_post->post_content
        ]);
    }

    function postSubcribe(HTTPRequest $request) {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        Newsletter::subscribe($request->email);
        return redirect()->back();
    }

    function getAbout() {
        try {
            $wordpress_post = WordPressPost::where("post_name", "=", "aboutth")->firstOrFail();
        } catch (Exception $e) {
            return view('home.about.about')->with([
                        "post" => $e
            ]);
        }
        return view('home.about.about')->with([
                    "post" => $wordpress_post->post_content
        ]);
    }

    // Under develop
    function getM() {
        return view('home.mobile.landing');
    }

}
