<?php

namespace App\Http\Controllers;

use App\Models\Jtw;
use Illuminate\Http\Request;

class JoinTheController extends Controller
{
    protected  function  JointTheWailist(Request $request){



        try {
            $check_mail = Jtw::where('email', $request->input('email'))->first();
            if ($check_mail==true) {
                return response()->json(['exists' => '1'], 200);
            }
            $jtw= new Jtw;

            $jtw->email = $request->input('email');
            $jtw->ip = $request->ip();
            $jtw->browser = $request->header('User-Agent');
            $jtw->save();
            return response()->json(['success' => 1], 200);
        }
        catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }









    }
}
