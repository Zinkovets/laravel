<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;




define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';


$kernel = $app->make(Kernel::class);
//$personal = [
//
//    "kitchen" => [ [ "name" => "taras",'age'=>22 ], [ "name" => "Marichka",'age'=>22 ] ],
//    "bartender" => [["name" => "svitlana",'age' =>22,"has_fartuch" => true],['name' => 'Olia', 'age' => 21,"has_fartuch" => false]],
//    "waiter" => [
//        "general" =>[   ["name" => "taras",'age'=>22 ] ,[ "name" => "taras",'age'=>22 ]   ],
//        "levi" =>[   ["name" => "taras",'age'=>22 ] ,[ "name" => "taras",'age'=>22 ]   ]
//
//    ],
//    'admin' =>  ["name" => "taras",'age'=>22 ]
//
//];
//
//$discounts = [
//    [
//        "name" => "Training",
//        "value" => 20
//    ],
//    [
//       "name" => "Personal",
//       "value" => 50
//    ],
//     [
//         "name" => "vip",
//         "value" => 15
//     ],
//];
//foreach ($discounts as  $discount) {
//    if($discount['value'] == 15){
//        echo $discount['name'];
//    }
//}

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);

//
//if (isset($_POST['login'], $_POST['password']) && $_POST['login'] == 'inpost' && $_POST['password'] == '123') {
//    echo 'Hello,User';
//} else {
//     echo '<a href= "&" class="btn">Autorization<a>'.'<br>';
//
//}
//
//$dicsounts = [
//    "50%"=> "Vip Clients",
//    "30%"=> "Personal",
//    "15%"=> "Players"
//];
//echo $dicsounts ["50%"] .'<br>';
//
//$x=1;
//
//echo '<table="1"><tr>';
// while($x < 10) {
//     echo '<td>';
//     echo $x . ')Discounts<br>';
//     ++$x;
//     echo '</td>';
// }
// echo '</tr></table>';
//
//
//echo 'GET: <pre>'.print_r($_GET,1).'</pre>';
//echo 'POST: <pre>'.print_r($_POST,1).'</pre>';
//
//
//
//
//
//
//
//?>
<!---->
<!--<form action ="" method = "get">-->
<!--  <div>Enter Login:<input type="text" name="login" value="" </div>-->
<!--    <div>Enter Password:<input type="text" name="password" value="" </div>-->
<!--    <div><input type ="submit" name = "submit" value="Send"</div>-->
<!--</form>-->



