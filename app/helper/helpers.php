<?php
use Carbon\Carbon;
use App\Models\Product;
use App\Models\HistoryProduct;

function serial_number($count)
{
    // Get Last Product Serial
    $product = Product::where('serial_number', 'LIKE', '%Elap-%')->max('serial_number');
    // $product = Product::select('serial_number')->max('serial_number');
    if ($product) {
        // Get Last Serial And Convert String To Array
        $last_count = explode('-', $product);
        // Get Last Count
        $last_count_id = end($last_count) + $count;
        // Get Date Now
        $date_now = Carbon::now();
        // Convert Date Type String To Array
        $date_and_time = explode('-', $date_now);
        // return $date_time[0] . $date_time[1] . $date_time[2];
        // Convert - To Space
        $date_only = explode(' ', $date_and_time[2]);
        // Get Year
        $year = $date_and_time[0];
        // Get Month
        $month = $date_and_time[1];
        // Get Day
        $day = $date_only[0];
        // Return Data
        return 'Elap-' . $year . $month . $day . '-' . $last_count_id;
    }else {
        // Get Date Now
        $date_now = Carbon::now();
        // Convert Date Type String To Array
        $date_and_time = explode('-', $date_now);
        // return $date_time[0] . $date_time[1] . $date_time[2];
        // Convert - To Space
        $date_only = explode(' ', $date_and_time[2]);
        // Get Year
        $year = $date_and_time[0];
        // Get Month
        $month = $date_and_time[1];
        // Get Day
        $day = $date_only[0];
        // Return Data
        return 'Elap-' . $year . $month . $day . '-' . $count;
    }
}

function history($status, $user_id, $product_id, $serial_number)
    {
        $histort = [];
        $histort['status'] = $status;
        $histort['user_id'] = $user_id;
        $histort['product_id'] = $product_id;
        $histort['serial_number'] = $serial_number;
        HistoryProduct::create($histort);
    }

