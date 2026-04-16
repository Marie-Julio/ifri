<?php
use App\Service\AllConstants;

use App\Service\Database;


function render($pagePath, $arguments = null) {
    if ($arguments != null) {
        extract($arguments);
    }

    ob_start();
    require 'app/Views/site/'.$pagePath.'.php';
    $content = ob_get_clean();
    require 'app/Views/site/template.php';
} 





function asset($assetPath) {
    return AllConstants::$APP_URL."assets/".$assetPath;
}

function route($pagePath, $arguments = null) {
    $pagePath = $pagePath.'/';
    if ($arguments != null) {
        for ($i=0; $i < count($arguments) ; $i++) { 
            if ($i === 0) {
                $pagePath = $pagePath.''.$arguments[$i]; 
            } else {
                $pagePath = $pagePath.'-'.$arguments[$i]; 
            }
        }
    }
    return AllConstants::$APP_URL.$pagePath;
}


function page_title(?string $title = null) : string{
    return $title ? $title.' > '.AllConstants::$APP_NAME : AllConstants::$APP_NAME;
}



function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



function hasLike($name) {
    return (isset($_COOKIE[$name]) && !empty($_COOKIE[$name])) ? "isLiked" : "";
}


function deleteLike($name) {
    setcookie($name, 0, time() - 86400, '/');
}





function getParamsUrl($url) {
    $explode = explode('/', $url);
    if (count($explode) > 1) {
        return $explode[1];
    } else {
        return "";
    }
}





function AllConstants() {
    return [
        "APP_URL" => AllConstants::$API_URL,
        "SITE_URL" => AllConstants::$APP_URL,
    ];
}


function getPostCategoryName($postCategory) {
    $postCategory = intval($postCategory);
    if ($postCategory === 1) {
        return "Activités";
    } elseif ($postCategory === 2) {
        return "Etudiants";
    } else {
        return "Notes d'informations";
    }
}




function getAllCountrySelect() {
    $db = Database::getDB();
    $countries = "";
    $data = $db->select("countries", ["countryName"], [
        "ORDER" => [
            "countryName" => "ASC",
        ]  
    ]);

    foreach ($data as $item) {
        $countries = $countries."<option value='".$item["countryName"]."'>".$item["countryName"]."</option>";
    }
    return $countries;
}



function toDateSimple($date) {
    $dateNew = date_create($date);
    return date_format($dateNew ,"d/m/Y");
}


function getDistinctionsForYear($distinctionYear) {
    $db = Database::getDB();
    $distinctions = $db->select("distinctions", "*", ['status' => 1, "distinctionYear" => $distinctionYear]);
    return $distinctions;
}


function getImgForDist($distinctionId) {
    $db = Database::getDB();
    $dist_imgs = $db->select('distinction_images', [
        "[><]distinctions" => ["id_distinction" => "distinctionId"]
    ], "*", [
        'distinctions.distinctionId' => $distinctionId,
        'distinctions.status' => 1,
        'distinctions.status' => 1,
        "ORDER" => [
            "distinction_images.created_at" => "DESC"
        ]
    ]);
    return $dist_imgs;
}



function getFormations() {
    $db = Database::getDB();

    $formationLicences = $db->select('formations', '*', [
        'status' => 1,
        'formationDiploma' => 'Licence',
        "ORDER" => [
            "created_at" => "DESC"
        ]
    ]);

    $formationMasters = $db->select('formations', '*', [
        'status' => 1,
        'formationDiploma' => 'Master',
        "ORDER" => [
            "created_at" => "DESC"
        ]
    ]);

    $formationDoctorats = $db->select('formations', '*', [
        'status' => 1,
        'formationDiploma' => 'Doctorat',
        "ORDER" => [
            "created_at" => "DESC"
        ]
    ]);

    $formationCertificats = $db->select('formations', '*', [
        'status' => 1,
        'formationDiploma' => 'Certification',
        "ORDER" => [
            "created_at" => "DESC"
        ]
    ]);

    $formations = array();

    foreach ($formationLicences as $formation) {
        array_push($formations, $formation);
    }
    foreach ($formationMasters as $formation) {
        array_push($formations, $formation);
    }
    foreach ($formationDoctorats as $formation) {
        array_push($formations, $formation);
    }
    foreach ($formationCertificats as $formation) {
        array_push($formations, $formation);
    }

    return $formations;
}


function timeago($date) {
   $timestamp = strtotime($date);   
   
   $strTime = array("seconde", "minute", "heure", "jour", "mois", "année");
   $length = array("60","60","24","30","12","10");

   $currentTime = time();
   if($currentTime >= $timestamp) {
        $diff     = time()- $timestamp;
        for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
        $diff = $diff / $length[$i];
        }

        $diff = round($diff);
        $s =  $strTime[$i];
        if ($diff > 1) {
            $s .= "s";
        }
        return "il y ".$diff . " " .$s;
   }
}


function makeSubstr($string, $url = null, $length = 400) {
    if ($url !== null) {
        $result = substr($string, 0, $length)."<a href='".$url."' class='text-decoration-none'>Lire plus</a>";
    } else {
        $result = (strlen($string) > $length) ? substr($string, 0, $length).'...' : $string;
    }    
    return $result;
}



function checkInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}