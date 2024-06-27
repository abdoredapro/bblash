<?php

namespace App\Http\Controllers\Seller;

use App\Models\Order;
use App\Models\Product;
use Auth;
use Carbon\Carbon;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        
        $data['products'] = filter_products(Product::where('user_id', Auth::user()->id)->orderBy('num_of_sale', 'desc'))->limit(12)->get();
        $data['last_7_days_sales'] = Order::where('created_at', '>=', Carbon::now()->subDays(7))
                                ->where('seller_id', '=', Auth::user()->id)
                                ->where('delivery_status', '=', 'delivered')
                                ->select(DB::raw("sum(grand_total) as total, DATE_FORMAT(created_at, '%d %b') as date"))
                                ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"))
                                ->get()->pluck('total', 'date');  

        $stock   = 0;
        $p_stock = Product::where('user_id', Auth::user()->id)->with('stocks')->get();
        
        foreach ($p_stock as $key => $product) {
            foreach ($product->stocks as $key => $s) {
                $stock += $s->qty;
            }
        }

        $data['stock'] = $stock;

        $total_qty = 0;

        $orders = \App\Models\Order::where('seller_id', Auth::user()->id)->where('delivery_status', 'delivered')->get();
        foreach($orders as $o) {
            foreach($o->orderDetails as $d) {
                $total_qty += $d->quantity;
            }
        }

        $data['total_qty'] = $total_qty;

        $data['total_stock'] = $stock + $total_qty;

        return view('seller.dashboard', $data);
    }
}
