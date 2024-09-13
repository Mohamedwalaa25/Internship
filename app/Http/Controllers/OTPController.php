<?php

namespace App\Http\Controllers;

use App\Models\OTP;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OTPController extends Controller
{
public function index(){
    return view('otp');
}

    public function verifyOTP(Request $request)
    {

        $user = User::query()->where('OTP', $request->otp_code)->first();

        if ($user) {
            $user->update(['OTP' => null]);
            return redirect()->route('home')->with('message', 'تم التحقق من الـ OTP بنجاح!');
        }


        return back()->withErrors(['otp' => 'الـ OTP غير صحيح أو قد انتهت صلاحيته.']);
    }
}
