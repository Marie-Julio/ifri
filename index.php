<?php
session_start();
require 'vendor/autoload.php';

use App\Service\Database;
use App\Controllers\MainController;
use App\Service\AllConstants;
use App\Router\Router;



$router = new Router($_GET['url']); 



$router->get('/',  [MainController::class, "index"]); 

$router->get('/home',  "MainController@index"); 

$router->get('/word-from-director',  [MainController::class, "wordFromDirector"]); 

$router->get('/history',  [MainController::class, "history"]); 

$router->get('/laboratoirepedagogique',  [MainController::class, "laboratoirepedagogique"]); 

$router->get('/acte_academiques',  [MainController::class, "acte_academiques"]); 

$router->get('/administration',  [MainController::class, "administration"]);

$router->get('/administrationid/:id',  [MainController::class, "administrationid"]); 

$router->get('/administrator/:administrator',  [MainController::class, "administrator"]); 

$router->get('/distinctionid/:year',  [MainController::class, "distinctionid"]); 

$router->get('/distinction',  [MainController::class, "distinction"]); 

$router->get('/organisation',  [MainController::class, "organisation"]); 

$router->get('/students-works',  [MainController::class, "students_works"]); 

$router->get('/admission',  [MainController::class, "admission"]); 

$router->get('/ressources',  [MainController::class, "ressources"]); 

$router->get('/formations/',  [MainController::class, "formations"]);

$router->get('/f_licence',  [MainController::class, "f_licence"]); 

$router->get('/f_master',  [MainController::class, "f_master"]); 

$router->get('/f_doctorat',  [MainController::class, "f_doctorat"]); 

$router->get('/formations/:diploma',  [MainController::class, "formations"]); 

$router->get('/formation/:formation',  [MainController::class, "formation"]); 

$router->get('/contact',  [MainController::class, "contact"]); 

$router->get('/events',  [MainController::class, "events"]); 

$router->get('/infonotes',  [MainController::class, "infonotes"]); 

$router->get('/activities',  [MainController::class, "activities"]); 

$router->get('/event/:slug',  [MainController::class, "event"]); 

$router->get('/infonote/:slug',  [MainController::class, "infonote"]); 

$router->get('/activity/:slug',  [MainController::class, "activity"]); 

$router->get('/cultural-activities',  [MainController::class, "cultural_activities"]); 

$router->get('/memorie',  [MainController::class, "memorie"]); 

$router->get('/wicsi',  [MainController::class, "wicsi"]); 

$router->get('/alumni',  [MainController::class, "alumni"]); 

$router->get('/gallery',  [MainController::class, "gallery"]); 

$router->get('/cooperation',  [MainController::class, "patners"]); 

$router->get('/stage-alternance',  [MainController::class, "stage_alternance"]); 

$router->get('/community-service',  [MainController::class, "community_service"]); 

$router->get('/pedagogy',  [MainController::class, "pedagogy"]); 

$router->get('/ifriworks/',  [MainController::class, "ifriworks"]); 

$router->get('/ifriwork/:ifriwork',  [MainController::class, "ifriwork"]); 



$router->run(); 
