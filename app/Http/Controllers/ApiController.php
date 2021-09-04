<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Internet;
use App\Code;
use App\Discount;
use App\Message;
use App\Minute;
use App\Tariff;
use App\Category;

class ApiController extends Controller
{

    public function getCategory($company){
  $internet = Category::where('type',Category::TYPE_INTERNET)->where('company',$company)->get();
  $minute = Category::where('type',Category::TYPE_MINUTE )->where('company',$company)->get();
  $message = Category::where('type',Category::TYPE_SMS)->where('company',$company)->get();
  $tariff = Category::where('type',Category::TYPE_TARIFF)->where('company',$company)->get();

  return response()->json([
      'categoriesforInternet'=> $internet,
      'categoriesforminute' => $minute,
      'categoriesformessage' => $message,
      'categoriesfortariff' => $tariff
      ])->setStatusCode(200);

    }
public function getInternet($company,$category_id){
        $internets=Internet::where('company',$company)->where('category_id',$category_id )->get();
    return response()->json(['internets'=>$internets])->setStatusCode(200);



}
    public function getCode($company){
        $ussd=Code::where('company',$company)->where('category','ussd')->get();
        $xiz=Code::where('company',$company)->where('category','xiz')->get();
        $pxiz=Code::where('company',$company)->where('category','pxiz')->get();
        return response()->json([
            'USSD kodlar'=>$ussd ,
            'Xizmatlar'=>$xiz ,
            'Pullik XIzmatlar'=>$pxiz
            ])->setStatusCode(200);
    }


    public function getMessage($company,$category_id)
    {
        $messages = Message::where('company', $company)->where('category_id', $category_id)->get();
        return response()->json(['messages' => $messages])->setStatusCode(200);
    }
    public function getMinute($company,$category_id)
    {
        $minutes = Minute::where('company', $company)->where('category_id', $category_id)->get();
        return response()->json(['minutes' => $minutes])->setStatusCode(200);
    }
    public function getDiscount($company){
        $Aksiya=Discount::where('company',$company)->where('category','ak')->get();
        $Yangiliklar=Discount::where('company',$company)->where('category','yan')->get();
        return response()->json(['Aksiyalar'=>$Aksiya, 'Yangiliklar'=>$Yangiliklar])->setStatusCode(200);}

    public function getTariff($company,$category_id)
    {
        $tariffs = Tariff::where('company', $company)->where('category_id', $category_id)->get();
        return response()->json(['tariffs' => $tariffs])->setStatusCode(200);
    }


}
