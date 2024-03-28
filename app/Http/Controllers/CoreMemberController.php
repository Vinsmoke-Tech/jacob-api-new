<?php

namespace App\Http\Controllers;

use App\Http\Resources\PPOBTransactionResource;
use Illuminate\Http\Request;
use App\Models\AcctSavingsAccount;

class CoreMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
    {
        //
        $CoreMember = CoreMember::all();
        return $CoreMember;
    }

    //simp anggota 
    public function getMemberSavings()
    {
        //    $branch_id          = auth()->user()->branch_id;
        //    if($branch_id == 0){
            $data = CoreMember::withoutGlobalScopes() 
            //    ->whereDate('updated_at', '=', date('Y-m-d'))
            ->where('data_state',0)
            ->get();
        //    }else{
        //        $data = CoreMember::withoutGlobalScopes() 
        //        ->whereDate('updated_at', '=', date('Y-m-d'))
        //        ->where('branch_id',auth()->user()->branch_id)
        //        ->where('data_state',0)
        //        ->get();
        //    }

        return response()->json([
            'data' => $data,
        ]);
    }
}
