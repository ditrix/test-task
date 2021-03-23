<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Anketa;
use App\User;

class AnketaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $ankets = Anketa::all()->toArray();
        return array_reverse($ankets);      
    }


/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user($userid)
    {
        //
        
        $user = User::find($userid);
        if($user !== null){
            $user_email = $user->email;
        }else{
            $user_email = 'not found'; 
        }


        $ankets = Anketa::where(['user_id' => $userid])->get()->toArray();
        $result =['user_email' => $user_email,'ankets' => array_reverse($ankets)];
        return $result;      

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $anketa = Anketa::find($id);
        return response()->json(['result'=>'ok','anketa' => $anketa]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //
        $anketa = Anketa::find($id);
        $anketa->name = $request->name;
        $anketa->content = $request->content;
        $anketa->send_email = $request->send_email;
        $anketa->update();

        return response()->json('anketa updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $anketa = Anketa::find($id);
        if ($anketa) {
            $anketa->delete();
        }
        return response()->json(['result'=>'ok']);
    }
}
