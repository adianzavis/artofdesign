<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class WebController extends Controller {
    public function index(Request $request) {
        return view('web/index');
    }

    public function tray(Request $request) {
        return view('web/tray');
    }

    public function doubleColor(Request $request) {
        return view('web/double-color');
    }

    public function photoPrinting(Request $request) {
        return view('web/photo-printing');
    }

    public function starrySky(Request $request) {
        return view('web/starry-sky');
    }

    public function artPerforation(Request $request) {
        return view('web/art-perforation');
    }

    public function floatingCeilings(Request $request) {
        return view('web/floating-ceilings');
    }

    public function translucent(Request $request) {
        return view('web/translucent');
    }

    public function floatingLines(Request $request) {
        return view('web/floating-lines');
    }

    public function stretchCeilings(Request $request) {
        return view('web/stretch-ceilings');
    }

    public function lightSolutions(Request $request) {
        return view('web/light-solutions');
    }

    public function lightBoxes(Request $request) {
        return view('web/lightboxes');
    }

    public function certificates(Request $request) {
        return view('web/certificates');
    }

    public function contact(Request $request) {
        return view('web/contact');
    }

    public function privacyPolicy(Request $request) {
        return view('web/privacy');
    }

    public function sendMail(Request $request) {
        Mail::to('info@artofdecoration.ch')->send(new ContactMail($request->all()));
        
        return redirect()->route('contact');
    }
}
