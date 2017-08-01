<?php

namespace App\Http\Controllers;

use App\Rules\PhoneValidate;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'phone' => ['required',new PhoneValidate()]
        ]);

        return 'Nice!';
    }
}
