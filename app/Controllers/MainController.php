<?php
namespace App\Controllers;

use App\Service\Database;


class MainController{


	public  function index() {
		$db = Database::getDB();
		$numberAlumnis = $db->count("alumnis", "*", ['status' => 1]);
		$numberDistinctions = $db->count("distinctions", "*", ['status' => 1]);
		$numberLicence = $db->count("formations", "*", ['formationDiploma' => 'Licence']);
		$numberMaster = $db->count("formations", "*", ['formationDiploma' => 'Master']);
		$numberDoctorat = $db->count("formations", "*", ['formationDiploma' => 'Doctorat']);
		$numberAlumnisCountry = $db->count("alumnis", ["@country"], ['status' => 1]);
		$activities = $db->select('activities', "*", [
			'status' => 1,
			"ORDER" => [
				"created_at" => "DESC"
			], 
			"LIMIT" => 2
		]);
		$events = $db->select('events', "*", [
			'status' => 1,
			"ORDER" => [
				"created_at" => "DESC"
			], 
			"LIMIT" => 2
		]);
		$statistiques = $db->select('statistiques', "*", [
			'status' => 1
		]);
		$infonotes = $db->select('infonotes', "*", [
			'status' => 1,
			"ORDER" => [
				"created_at" => "DESC"
			], 
			"LIMIT" => 2
		]);
		$patners = $db->select('patners', "*", ['status' => 1, "LIMIT" => [0,6]]);
		$numberFormation = $db->count('formations', "*", ['status' => 1]);
		render('index', ['numberDistinctions' => $numberDistinctions, 'statistiques' => $statistiques, 'numberLicence' => $numberLicence, 'numberMaster' => $numberMaster, 'numberDoctorat' => $numberDoctorat, 'numberAlumnis' => $numberAlumnis, 'numberFormation' => $numberFormation, "numberAlumnisCountry" => $numberAlumnisCountry, "activities" => $activities,  "events" => $events,  "infonotes" => $infonotes, "patners" => $patners]);
	}

	public function wordFromDirector() {
		render('word_from_director', ['title' => 'Mot du directeur']);
	}
	public function laboratoirepedagogique() {
		render('laboratoirepedagogique', ['title' => "Laboratoire pédagogique et d'innovation"]);
	}
	public function ressources() {
		render('ressources', ['title' => 'Ressources académiques et para-académiques']);
	}
	public function organisation() {
		render('organisation', ['title' => 'Organisation adminisitrative']);
	}
	public function administration() {
		$db = Database::getDB();
		$periodes = $db->select("periode", "*", [
			'status' => 1,
			"ORDER" => [
				"date_debut" => "DESC"
			]
		]);
		$periode = $db->select("periode", "*", [
			'status' => 1,
			"ORDER" => [
				"date_debut" => "DESC"
			]
		])[0];
		$administrators1 = $db->select("administrators", [
			"[><]periode_membres" => ["administratorId" => "id_administrator"],
			"[><]periode" => ["periode_membres.id_periode" => "id"],
		], "*", [
			'periode.status' => 1,
			'periode_membres.status' => 1,
			'administrators.status' => 1,
			'administrators.niveau' => 1,
			"periode.id" => $periode["id"],
			"ORDER" => [
				"periode_membres.position" => "ASC"
			]
		]);
		$administrators2 = $db->select("administrators", [
			"[><]periode_membres" => ["administratorId" => "id_administrator"],
			"[><]periode" => ["periode_membres.id_periode" => "id"],
		], "*", [
			'periode.status' => 1,
			'periode_membres.status' => 1,
			'administrators.status' => 1,
			'administrators.niveau' => 2,
			"periode.id" => $periode["id"],
			"ORDER" => [
				"periode_membres.position" => "ASC"
			]
		]);
		$administrators3 = $db->select("administrators", [
			"[><]periode_membres" => ["administratorId" => "id_administrator"],
			"[><]periode" => ["periode_membres.id_periode" => "id"],
		], "*", [
			'periode.status' => 1,
			'periode_membres.status' => 1,
			'administrators.status' => 1,
			'administrators.niveau' => 3,
			"periode.id" => $periode["id"],
			"ORDER" => [
				"periode_membres.position" => "ASC"
			]
		]);
		render('administration', ['title' => 'Administration', "periode" => $periode, "periodes" => $periodes, "administrators1" => $administrators1, "administrators2" => $administrators2, "administrators3" => $administrators3]);
	}
	public function administrationid($params = null) {
		$db = Database::getDB();
	
		$params = ($params !== null) ? strtolower($params) : "";
		$periodes = $db->select("periode", "*", [
			'status' => 1,
			"ORDER" => [
				"date_debut" => "DESC"
			]
		]);
		$periode = $db->select("periode", "*", [
			'status' => 1,
			'id' => $params
		])[0];
		$administrators1 = $db->select("administrators", [
			"[><]periode_membres" => ["administratorId" => "id_administrator"],
			"[><]periode" => ["periode_membres.id_periode" => "id"],
		], "*", [
			'periode.status' => 1,
			'periode_membres.status' => 1,
			'administrators.status' => 1,
			'administrators.niveau' => 1,
			"periode.id" => $params,
			"ORDER" => [
				"periode_membres.position" => "ASC"
			]
		]);
		$administrators2 = $db->select("administrators", [
			"[><]periode_membres" => ["administratorId" => "id_administrator"],
			"[><]periode" => ["periode_membres.id_periode" => "id"],
		], "*", [
			'periode.status' => 1,
			'periode_membres.status' => 1,
			'administrators.status' => 1,
			'administrators.niveau' => 2,
			"periode.id" => $params,
			"ORDER" => [
				"periode_membres.position" => "ASC"
			]
		]);
		$administrators3 = $db->select("administrators", [
			"[><]periode_membres" => ["administratorId" => "id_administrator"],
			"[><]periode" => ["periode_membres.id_periode" => "id"],
		], "*", [
			'periode.status' => 1,
			'periode_membres.status' => 1,
			'administrators.status' => 1,
			'administrators.niveau' => 3,
			"periode.id" => $params,
			"ORDER" => [
				"periode_membres.position" => "ASC"
			]
		]);
		render('administrationid', ['title' => 'Administration', "periode" => $periode, "periodes" => $periodes, "administrators1" => $administrators1, "administrators2" => $administrators2, "administrators3" => $administrators3]);
	}
	
	public function distinction() {
		$db = Database::getDB();

		$distinctions = $db->select("distinctions", "*", ['status' => 1], ['distinctionYear' => 'DESC'], 1);
		

		$params = 2020;
		$params = ($params !== null) ? strtolower($params) : "";
		$distinctions = $db->select("distinctions", "*", [
			'status' => 1,
			"GROUP" => [
				"distinctionYear"
			],
			"ORDER" => [
				"distinctionYear" => "DESC"
			]
		]);
		render('distinction', ['title' => 'Distinction', "distinctionYears" => $distinctions , 'year' => $params]);
	}

	public function distinctionid($params = null) {
		$db = Database::getDB();
	
		$params = ($params !== null) ? strtolower($params) : "";
		$distinctions = $db->select("distinctions", "*", [
			'status' => 1,
			"GROUP" => [
				"distinctionYear"
			],
			"ORDER" => [
				"distinctionYear" => "DESC"
			]
		]);
		render('distinctionid', ['title' => 'Distinction', "distinctionYears" => $distinctions, 'year' => $params]);
	}
	public function admission() {
		render('admission', ['title' => 'Admission']);
	}

	public function patners() {
		$db = Database::getDB();
		$patners = $db->select('patners', "*", ['status' => 1]);
		render('patners', ['title' => "Coopération", 'patners' => $patners]);
	}
	public function acte_academiques() {
		$db = Database::getDB();
		$acte_academiques = $db->select('acte_academiques', "*", ['active' => 1]);
		render('acte_academiques', ['title' => "Actes académiques", 'acte_academiques' => $acte_academiques]);
	}

	public function students_works() {
		$db = Database::getDB();
		$studentworks = $db->select('studentworks', '*', [
			'status' => 1,
			'ORDER' => [
				'created_at' => 'DESC'
			]
		]);
		render('students_works', ['title' => 'Travaux de nos étudiants', "studentworks" => $studentworks]);
	}

	public function formations($params = null) {
		$db = Database::getDB();
		$formations = getFormations();
		$params = ($params !== null) ? strtolower($params) : "";
		render('formation', ['title' => 'Formation', 'formations' => $formations, "diploma" => $params]);
	}
	public function f_master() {
		$db = Database::getDB();
		$formationsMaster = $db->select('formations', '*', [
			'status' => 1,
			'formationDiploma' => 'Master',
			"ORDER" => [
				"created_at" => "DESC"
			]
		]);
		render('f_master', ['title' => 'Formation', 'formations' => $formationsMaster]);
	}
	public function f_licence() {
		$db = Database::getDB();
		$formationsLicence = $db->select('formations', '*', [
			'status' => 1,
			'formationDiploma' => 'Licence',
			"ORDER" => [
				"created_at" => "DESC"
			]
		]);
		render('f_licence', ['title' => 'Formation', 'formations' => $formationsLicence]);
	}
	public function f_doctorat() {
		$db = Database::getDB();
		$formationsDoctorat = $db->select('formations', '*', [
			'status' => 1,
			'formationDiploma' => 'Doctorat',
			"ORDER" => [
				"created_at" => "DESC"
			]
		]);
		render('f_doctorat', ['title' => 'Formation', 'formations' => $formationsDoctorat]);
	}

	public function formation($params = null) {
		$db = Database::getDB();
		if (!($params === null || $params == "")) {
			$count = $db->count('formations', '*', ['status' => 1, 'formationSlug' => $params]);
			if ($count == 1) {
				$formation = $db->select('formations', '*', ['status' => 1, 'formationSlug' => $params]);
				render('formation_single', ['formation' => $formation[0]]);
			} 
		} 		
	}  

	public function licence() {
		header("Location:".route('formations/licence'));
	}

	public function master() {
		header("Location:".route('formations/master'));
	}

	public function contact() {
		render('contact', ['title' => 'Contact']); 
	}

	public function gallery() {
		$db = Database::getDB();
		$galeries = $db->select('galeries', '*', ['status' => 1, "ORDER" => ['created_at' => "DESC"]]);
		render('gallery', ['title' => 'Galerie', "galeries" => $galeries]); 
	}

	public function cultural_activities() {
		render('cultural_activities', ['title' => 'cultural activities']); 
	}

	public function memorie() {
		$db = Database::getDB();
		$memorie_pays_nbre = $db->select('memorydownloads', [
			'country',
			'nombre' => Database::getDB()::raw('COUNT(*)')
		], [
			'status' => 1,
			'GROUP' => 'country'
		]);
		render('memorie', ['title' => 'Mémorie', "memorie_pays_nbre" => $memorie_pays_nbre]);	  
	}

	public function alumni() {
		render('alumni', ['title' => 'Alumni']); 
	}

	public function wicsi() {
		render('wicsi', ['title' => 'WICSI']);
	}

	public function history() {
		render('history', ['title' => 'Historique']);
	}



	public function events() {
		$db = Database::getDB();
		$events = $db->select("events", "*", [
			'status' => 1,
			"ORDER" => [
				"created_at" => "DESC"
			]
		]);
		render('events', ['title' => 'Evènement', "events" => $events]);
	}



	public function activities() {
		$db = Database::getDB();
		$activities = $db->select("activities", "*", [
			'status' => 1,
			"ORDER" => [
				"created_at" => "DESC"
			]
		]);
		render('activities', ['title' => 'Activités', "activities" => $activities]);
	}



	public function infonotes() {
		$db = Database::getDB();
		$infonotes = $db->select("infonotes", "*", [
			'status' => 1,
			"ORDER" => [
				"created_at" => "DESC"
			]
		]);
		render('infonotes', ['title' => 'Notes d\'informations', "infonotes" => $infonotes]);
	}



	public function event($params = null) {
		$db = Database::getDB();
		if ($params != null) {
			$check = $db->count('events', "*", ['status' => 1, "eventSlug" => $params]);
			if ($check === 1) {
				$event = $db->select("events", "*", [
					'status' => 1,
					"eventSlug" => $params,
					"ORDER" => [
						"created_at" => "DESC"
					]
				])[0];
				render('event', ['title' => "Evènement > ".$event['eventName'], "event" => $event]);
			} 
		}
	}



	public function activity($params = null) {
		$db = Database::getDB();
		if ($params != null) {
			$check = $db->count('activities', "*", ['status' => 1, "activitySlug" => $params]);
			if ($check === 1) {
				$activity = $db->select("activities", "*", [
					'status' => 1,
					"activitySlug" => $params,
					"ORDER" => [
						"created_at" => "DESC"
					]
				])[0];
				render('activity', ['title' => "Activités > ".$activity['activityName'], "activity" => $activity]);
			} 
		}
	}



	public function infonote($params = null) {
		$db = Database::getDB();
		if ($params != null) {
			$check = $db->count('infonotes', "*", ['status' => 1, "infonoteSlug" => $params]);
			if ($check === 1) {
				$infonote = $db->select("infonotes", "*", [
					'status' => 1,
					"infonoteSlug" => $params,
					"ORDER" => [
						"created_at" => "DESC"
					]
				])[0];
				render('infonote', ['title' => "Notes d\'informations > ".$infonote['infonoteName'], "infonote" => $infonote]);
			} 
		}
	}


	public function administrator($params = null) {
		$db = Database::getDB();
		if ($params != null) {
			$check = $db->count('administrators', "*", ['status' => 1, "administratorSlug" => $params]);
			if ($check === 1) {
				$administrator = $db->select("administrators", "*", [
					'status' => 1,
					"administratorSlug" => $params,
					"ORDER" => [
						"created_at" => "DESC"
					]
				])[0];
				render('administrator', ['title' => $administrator['administratorName'], "administrator" => $administrator]);
			} 
		}
	}



	public function community_service() {
		$title = "Service à  commaunauté";
		$db = Database::getDB();
		$communityservices = $db->select('communityservices', '*');
		$ifriworks = $db->select('ifriworks', '*',[
			'status' => 1,
			'LIMIT' => 2,
			"ORDER" => [
				"created_at" => "DESC"
			]
		]);  
		render('community_service', compact("title", "communityservices", "ifriworks"));
	}


	public function stage_alternance() {
		$title = "Stages et alternance";
		render('stage_alternance', compact("title"));
	}


	public function pedagogy() {
		$title = "Pédagogie à l'IFRI";
		render('pedagogy', compact("title"));
	}





	public function ifriworks() {
		$title = "Les projets de l'IFRI";
		$db = Database::getDB();
		$ifriworks = $db->select('ifriworks', '*');
		$ifriworks = $db->select('ifriworks', '*',[
			'status' => 1,
			'LIMIT' => 2,
			"ORDER" => [
				"created_at" => "DESC"
			]
		]);  
		render('ifriworks', compact("title", "ifriworks", "ifriworks"));
	}


	public function ifriwork($params = null) {
		$db = Database::getDB();
		if ($params != null) {
			$check = $db->count('ifriworks', "*", ['status' => 1, "projectSlug" => $params]);
			if ($check === 1) {
				$ifriwork = $db->select("ifriworks", "*", [
					'status' => 1,
					"projectSlug" => $params,
					"ORDER" => [
						"created_at" => "DESC"
					]
				])[0];
				render('ifriwork', ['title' => $ifriwork['projectName'], "ifriwork" => $ifriwork]);
			} 
		}
	}
}
