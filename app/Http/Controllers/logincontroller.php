<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Staffs;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the input data
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Check if the staff exists with the provided email
        $staff = Staffs::where('email', $request->input('email'))->first();

        // Verify the staff's password
        if (!$staff || !Hash::check($request->input('password'), $staff->password)) {
            // Return error if staff does not exist or password is incorrect
            return back()->withErrors([
                'email' => 'Invalid credentials.',
            ]);
        }

        // Check if the staff_id (nomor_staff) exists and if the job is either admin or manager
        if ($staff->nomor_staff && in_array($staff->pekerjaan, ['admin', 'manager'])) {
            // If valid, log in the staff
            Auth::login($staff);
            return redirect('/dashboard'); // Redirect to the dashboard or any other page
        } else {
            // If not an admin or manager, return error
            return back()->withErrors([
                'email' => 'You do not have permission to log in.',
            ]);
        }
    }
}
