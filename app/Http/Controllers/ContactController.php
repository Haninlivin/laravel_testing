<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'contact_key' => 'contact_value',
        ];
        return view("contact", compact("data"));
    }
}
