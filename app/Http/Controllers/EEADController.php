<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class EEADController extends Controller
{
    public function getAge(Request $request)
    {
        $this->validate($request, [
            'date' => 'required|date',
        ]);

        $age = Carbon::createFromFormat('Y-m-d', $request->input('date'))->diff(Carbon::now())->format('%y years, %m months and %d days');
        return response()->json(['msg' => 'You are ' . $age . ' old'], 200);
    }

    public function getTodayDate()
    {
        $today = Carbon::now()->format('l jS F Y');
        return response()->json(['today' => 'Today is ' . $today], 200);
    }
}
