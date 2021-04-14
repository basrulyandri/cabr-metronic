<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function viewCategory($category)
    {
        $settings = Setting::where('setting_category',$category)->get();
        if($settings->isEmpty()){
            abort(404);
        }else{
            return view('settings.general',compact(['settings','category']));
        }
    }

    public function update(Request $r)
    {
    	// $pt_options = \App\PtOption::where('pt_id','=',\Auth::user()->pt_id)->get();
    	//dd($r->all());
    	foreach($r->all() as $key => $value){
    		if($key != '_token'){    			
	    		$option = Setting::where('setting_key',$key)->first();
                if($option){
                    $option->setting_value = $value;
                    $option->save();
                }    		
	    		
    		}
    	}

    	return redirect()->back()->with('success','Setting has been updated successfully');
	}

    public function create(Request $request)
	{
		$setting = Setting::create($request->all());
		return redirect()->back()->with('success','New Setting has been created successfully');
	}
}
