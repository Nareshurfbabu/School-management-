<?php

namespace App\Http\Controllers;

use App\Models\Contect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContectController extends Controller
{
    public function show()
    {
        return view('contectus');
    }

    public function contect(Request $request)
    {
        $validator = validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'subject' => 'required|string',
            'email' => 'required|string|email',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('contect.show')
                ->withErrors($validator)
                ->withInput();
        }

        Contect::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->route('welcome')->with('success', 'Registration successful!');
    }
}
