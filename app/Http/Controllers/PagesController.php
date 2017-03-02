<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{

    // Home page.
    public function getIndex() {
        return view('pages.welcome');
    }

    // About me page.
    public function getAbout() {

        $first = 'John';
        $last = 'Verginis';
        $fullname = $first . " " . $last;
        $email = "giannisverg@gmail.com";
        $data = array();
        $data = array('fullname' => $fullname, 'email' => $email);

        return view('pages.about')->withData($data);
    }

    // Contact me page
    public function getContact() {
        return view('pages.contact');
    }
}