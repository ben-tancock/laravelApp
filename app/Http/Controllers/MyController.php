<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hyalto\Models\Core\Service;

// just make a simple request from the sql DB for now...
class MyController extends Controller
{
    //

    public function simpleRequest(){
        // Test database connection
        try {
            $pdo = DB::connection()->getPdo();

            if($pdo)
            {
                return "Connected successfully to database ".DB::connection()->getDatabaseName();
            } else {
                return "You are not connected to database";
            }
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
        //return 'test simple request';
    }

    public function testAPI(){
        return "this is the api";
    }

    public function getServiceOfferings(){
        print("test getServiceOfferings");
        $myService = Service::ServiceOffering();
        //$myService="sadffds";
        return "asdfsfdfds";
    }
}

// Example request:
// $snapshots = BillingSnapshotItems::where('service_id', '=', $serviceId)
//     ->where('created_at', '<', $end_time)
//     ->where('created_at', '>=', $start_time)
//     ->oldest()
//     ->get();


// Example method:
// public function list(Request $request)
// {
//     $query = $request->query();
//     $account_id = $request->get('jwt')->accountId;
//     $service_provider_id = $request->get('jwt')->serviceProviderId;
//     $services = Service::with(['serviceOffering', 'account'])
//                         ->clientLimit($account_id, $service_provider_id);

//     /*
//         * set filter params with respect to show-flags for dates
//         */
//     $services = $services->applyFilterWithDate($query['filter'] ?? []);

//     /*
//         * set search params
//         */
//     if (array_key_exists('search', $query)) {
//         $services = $services->applySearch($query['search']);
//     }

//     /*
//         * set sort params
//         */
//     if (array_key_exists('sort', $query)) {
//         $services = $services->applyOrder($query['sort']);
//     }

//     // paginate request
//     $page = $query['page'] ?? [];
//     $page['size'] = $page['size'] ?? 10;
//     $page['number'] = $page['number'] ?? 1;

//     $services = $services->paginate($page['size'], ['*'], 'page', $page['number']);

//     return response()->json($services, 200);
// }

