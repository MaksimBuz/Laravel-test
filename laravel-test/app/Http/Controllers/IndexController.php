<?php

namespace App\Http\Controllers;
use App\Models\View;
use Illuminate\Support\Facades\DB;
use App\Events\CustomEvent;
use App\Models\offer_item;
use App\Models\offers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function  __invoke(){
        $Count = View::find(1)->view_count;
        CustomEvent::dispatch( $Count);
        $data=offer_item::all();


        return view('main.index',compact('data'));
    }
    
}
