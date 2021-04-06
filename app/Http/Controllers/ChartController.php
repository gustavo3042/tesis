<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trabajos;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{



public function index(){


$users = User::select (DB::raw("COUNT(*) as count"))->whereYear('created at',date('Y'))
->groupBy(DB::raw("Month(created_at)"))
->pluck('count');

$months = User::select(DB::raw("Month(created_at) as month"))
->whereYear('created_at', date('Y'))
->groupBy(DB::raw("Month(created_at)"))
->pluck('month');

$datas= array(0,0,0,0,0,0,0,0,0,0,0,0);
foreach ($months as $index => $month) {

  $datas[$month-1] = $users[$index];

}

return view('index', compact('datas'));

}


public function barChart(){



  $users = User::select (DB::raw("COUNT(*) as count"))->whereYear('created_at',date('Y'))
  ->groupBy(DB::raw("Month(created_at)"))
  ->pluck('count');

  $months = User::select(DB::raw("Month(created_at) as month"))
  ->whereYear('created_at', date('Y'))
  ->groupBy(DB::raw("Month(created_at)"))
  ->pluck('month');

  $datas= array(0,0,0,0,0,0,0,0,0,0,0,0);
  foreach ($months as $index => $month) {

    $datas[$month-1] = $users[$index];

  }

  return view('bar-chart', compact('datas'));


}


public function Suma(){

//$categoria = Trabajos::sum('precio')->groupBy('NombreTrabajo')->get();
//$result = $categoria;

//return view('bar-chart',compact('result'));

return null;
}

}
