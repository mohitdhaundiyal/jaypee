<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultyController extends Controller
{
    //
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email_address' => 'required|email:rfc,dns',
            'jiit_employee_code' => 'required',
            'date_birth' => 'required|date'
        ]);

        Faculty::create($request->all());

        return redirect('faculty/home')->with('success', 'Data submitted successfully!');
    }
}
