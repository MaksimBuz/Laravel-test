<?php

namespace App\Http\Controllers;

use App\Events\CustomEventLikes;
use App\Http\Requests\StoreElemetRequest;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\offer_item;
use App\Models\offers;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class APIController extends Controller
{
   public function index()
   {
      $LikesCount = DB::table('offer_items')->sum('like');
      $likes = View::find(1);
      $likes->like = $LikesCount;
      if ($likes->isDirty('like')) {
         CustomEventLikes::dispatch();
      }
      $data = offer_item::all();
      $Count = View::find(1)->view_count;
      return view('main.admin', compact('data', 'Count', 'LikesCount'));
   }

   public function create()
   {
      return view('main.formCreate');
   }

   public function show()
   {
     $allOffers= offers::all();
      return view('main.OffersShow',compact('allOffers'));
   }

   public function store(StoreRequest $request)
   {
      //Первый способ 
      //    $dataJson='{
      //       "b24_contact_id": 1001,
      //       "b24_deal_id": 34532,
      //       "b24_manager_id": 12,
      //       "manager": "Иванов Иван",
      //       "position": "Специалист отдела продаж",
      //       "phone": "79526846266",
      //       "avatar": ""
      //   }';
      //   $dataJson=json_decode($dataJson, true);
      //   offers::firstOrCreate($dataJson);

      //Второй способ если надо создать вручную через форму из панели администратора
      $data = $request->validated();
      offers::firstOrCreate($data);
      return redirect()->route('main.index');
   }

   public function edit(offers $id)
   {
      return view('main.formEdite', compact('id'));
   }

   public function update(UpdateRequest $request, offers $id)
   {
      $data = $request->validated();
      $id->update($data);

      return redirect()->route('main.index');
   }


   public function elementCreate()
   {
      return view('main.formCreateElement');
   }

   public function elementShow( $id)
   { 
      $offer_element=offer_item::where('offer_id',$id)->get();
     return  view('main.OfferElementShow',compact('offer_element'));
   }

   public function elementStore(StoreElemetRequest $request)
   {
      $data = $request->validated();
      $offers = offers::where('status', 'Новая')->get();
      $offersData = $offers->find($request->offer_id);

      //Первый способ 
      // $dataJson = '{
      //    "b24_contact_id": 1001,
      //    "b24_deal_id": 34532,
      //    "b24_manager_id": 12,
      //    "manager": "Иванов Иван",
      //    "position": "Специалист отдела продаж",
      //    "phone": "79526846266",
      //    "avatar": ""
      //    }';

      // $data = json_decode($dataJson, true);
      // offers::firstOrCreate($dataJson);

      //Второй способ если надо создать вручную через форму из панели администратора
      if (isset($offersData)) {
         offer_item::firstOrCreate($data);
      }
      return redirect()->route('main.index');
   }

   public function elementDestroy(offer_item $id)
   {
      $id->delete();
      return redirect()->route('main.index');
   }
}
