<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    static $password;
//
//    return [
//        'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
//        'password' => $password ?: $password = bcrypt('secret'),
//        'remember_token' => str_random(10),
//    ];
//});

$factory->define(App\Models\Skill::class, function (Faker\Generator $faker){
     return [
         'name' => $faker->name,
         'power' => $faker->numberBetween(50, 100),
         'img_url' => $faker->imageUrl(300,300),
     ];
});

$factory->define(App\Models\ProjectTypes::class, function (Faker\Generator $faker){
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Models\Project::class, function (Faker\Generator $faker){
   return [
       'name' => $faker->name,
       'img_url' => $faker->imageUrl(360,300),

   ] ;
});

$factory->define(App\Models\Service::class, function(Faker\Generator $faker) {
   return [
       'name' => $faker->name,
       'description' => $faker->paragraph,
       'img_url' => $faker->imageUrl(25,25),
   ];
});

$factory->define(App\Models\Company::class, function(){
   return [
       'table_name' => 'personal_info',
       'email' =>'minhliemphp@gmail.com',
       'address' => '128 Lê Quang Định F:14, Q: Bình Thạnh, HCM',
       'phone' => '0902 942 054 - 09186 91860'
   ];
});