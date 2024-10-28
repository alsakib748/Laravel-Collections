<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

Route::get('/', function () {

    $users = User::get();

    // $collection = collect($users);

    // dd($users->pluck('email'));

    // todo: modify user data
    // $output = $users->each(function($user){
    //     $user->username = 'a';
    //     $user->year = date('Y');
    //     unset($user->created_at);
    //     unset($user->email_verified_at);
    //     unset($user->updated_at);
    // });

    // dd($output->toArray());

    // todo: filter user data
    // $output = $users->filter(function($user){
    //     return $user->age > 40 && $user->status == 1;
    // });

    // dd($output->toArray());

    // todo: Search index of collection
    // $output = $users->search(function($user){
        // ** return index value
    //     return $user->email == 'jennifer.green@service.com';

    // }) ;

    // dd($output); //** output : 28

    //** Note: Collection method is not work in array data  */
    // $list = $users->pluck('email');

    // $output = $list->search('melissa.evans@domain.org');

    // dd($output);

    $output = $users->whereNotIn('status',[1])->all();

    dd($output);


});

Route::controller(CollectionController::class)->group(function(){

    Route::get('/items','test')->name('items');

    Route::get('/user-items','userItems')->name('user.items');

    Route::get('/user-items','userItems')->name('user.items');

});
