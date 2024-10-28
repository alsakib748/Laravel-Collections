<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CollectionController extends Controller
{

    public function test(){

        // todo: Example One //

        // todo: One Way
        $items = collect(['one','two','three','ayon']);

        // todo: Another Way
        // $items = new collection(['one','two','three']);

        // $result = $items->map(function ($item){

        // return strtoupper($item);

        // });

        // dd($items->toArray());

        // dd($items->sort());

        // dd($result);

        // todo: Example Two //

        $items2 = collect([
            ['name'=>'apple','price'=>125,'sales'=>15],
            ['name'=>'mango','price'=>375,'sales'=>52],
            ['name'=>'banana','price'=>245,'sales'=>12],
            ['name'=>'orange','price'=>235,'sales'=>5],
        ]);

        // $result = $items2->sortBy('sales');
        // $result = $items2->avg('sales');
        // $result = $items2->max('sales');
        // $result = $items2->min('sales');

        $result = $items2->where('sales','>',20);

        dd($result);

    }

    public function userItems(){

        $users = User::get();

        $above_18 = $users->where('age','>',18);
        $under_equal_18 = $users->where('age','<=',18);

        $total = $users->sum('age');
        $max = $users->max('age');
        $min = $users->min('age');
        $avg = $users->avg('age');

        // dd($under_equal_18);

        // $result = $users->map(function ($user){
        //     return strtoupper($user->email);
        // });

        // dd($users->count());

        // dd($result->all());

        // return $users;

    }

}
