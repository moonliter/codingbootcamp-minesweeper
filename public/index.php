<?php


include '../bootstrap/bootstrap.php';

function getControllerActionFromRequest() {

    $routes = [];
    include ROUTES_DIR . '/web.php';
   // var_dump($routes);
   //get the current route parmeter or homepage
    $current_route =request::get('route', 'homepage');
     
     if (array_key_exists($current_route, $routes)) {
         return $routes[$current_route];
     }else {
         return [

             
    'controller' => 'errorController',
    'action' => 'error404'

         ];
     }
}
//run an action of a controller
function runControllerAction($controller_name, $action_name) {



require APP_DIR . '/controllers/'.$controller_name. ' .php';
$controller = new $controller_name();
echo $controller->$action_name();

}



$controller_action = getControllerActionFromRequest();
var_dump($controller_action);
runControllerAction(
    $controller_action['controller'],
    $controller_action ['action']

);
getControllerActionFromRequest();
$current_route = request::GET('route', '404');
if($current_route == '404') {

require APP_DIR . '/controllers/errorController.php';
$controller = new errorController();
echo $controller->error404();

}
else {
    
require APP_DIR . '/controllers/gamesController.php';
$controller = new gamesController();
echo $controller->listing();
    
}




//echo PUBLIC_DIR.'<br>';
//echo __FILE__;
//echo __DIR__;
//echo SYSTEM_DIR;

//echo request::GET('route', '404');
//echo ' I will playing ' . request::get('name', 'with my hands');

?>
