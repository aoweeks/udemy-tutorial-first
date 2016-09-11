<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;

class NiceActionController extends Controller
{
    
    
    public function getNiceAction($action, $name = "you")
    {
        return view('actions.' . $action, ['name' => $name]);
    }
    
    public function postNiceAction(Request $request)
    {
        if (isset($request['action']) && $request['name']){
            if(strlen($request['name']) > 0){
                return view('actions.nice', ['action' => $request['action'], 'name' => $this->transformName($request['name'])]);
            }
            else {
                return redirect()->back();
            }
        }
        else {
                return redirect()->back();
        }
    }
    
    private function transformName($name)
    {
        $prefix = "KING ";
        return $prefix . strtoupper($name);
    }
    
}