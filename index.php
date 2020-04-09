<?php
	include "vendor/autoload.php";
	use \Twig\Environment as envTwig;
	use \Twig\Loader\FilesystemLoader as loader1;

	$loa1 = new loader1(__DIR__."/templates");
	$env1 = new envTwig ($loa1, [ "cache" => false, ]);
	$env1 -> addFunction ( new \Twig\TwigFunction ( "fonction1",
	function (){
		echo "je suis la fonction numéro 1, ça vous étonne peut-être ??";
	}));
	


	if (!isset($_GET["p"])) {
		echo $env1 -> render ("base.twig");
	}
	else {
		$page = $_GET["p"];

		switch ($page) {
			case 'accueil':
				echo $env1 -> render ("base.twig");
				break;
			case 'formations':
				
				$formations = array('0' => array('GE' => 'Gestion des Entreprises (GE)', 
												 'GB' => 'Gestion des Banques (GB)',
												 'GC' => 'Gestion Commerciale (GC)',
												 'IG' => 'Informatique de Gestion (IG)',
												 'GTL' => 'Gestion des Transports et Logistique'
											) ,
									'1' => array('CCA' => 'Comptabilité, Contrôle et Audit',
												 'AIRH' => 'Administration et Ingénierie des Ressources Humaines',
												 'GEC' => 'Gestion et Expertise Commerciale',
												 'GLIA' => 'Génie Logiciel et Intégration d\'Application',
												 'SIAD' => 'Système d\'Information et d\'Aide à la Décision'
											)
								);

				$form=""; $opt=""; $erreur = false;


					if (isset($_GET['fo']) && $_GET['fo']==='lp') {
						
						$form="LICENCE PROFESSIONNELLE";


						if (isset($_GET['op']) && $_GET['op']=='ge') {
							
							$opt = $formations ['0'] ['GE'];
						} 
						elseif (isset($_GET['op']) && $_GET['op']==='gb') {
							
							$opt = $formations ['0'] ['GB'];
						}
						elseif (isset($_GET['op']) && $_GET['op']==='gc') {
							
							$opt = $formations ['0'] ['GC'];
						}
						elseif (isset($_GET['op']) && $_GET['op']==='ig') {
							
							$opt = $formations ['0'] ['IG'];
						}
						elseif (isset($_GET['op']) && $_GET['op']==='gtl') {
							
							$opt = $formations ['0'] ['GTL'];
						} 
						else {

							$erreur=true;
						}


					}
					elseif (isset($_GET['fo']) && $_GET['fo']==='mp') {
						
						$form="MASTER PROFESSIONNEL";

						if (isset($_GET['op']) && $_GET['op']==='cca') {
							
							$opt = $formations ['1'] ['CCA'];
						} 
						elseif (isset($_GET['op']) && $_GET['op']==='airh') {
							
							$opt = $formations ['1'] ['AIRH'];
						}
						elseif (isset($_GET['op']) && $_GET['op']==='gec') {
							
							$opt = $formations ['1'] ['GEC'];
						}
						elseif (isset($_GET['op']) && $_GET['op']==='glia') {
							
							$opt = $formations ['1'] ['GLIA'];
						}
						elseif (isset($_GET['op']) && $_GET['op']==='siad') {
							$opt = $formations ['1'] ['SIAD'];
						} 
						else {
							
							$erreur=true;
						}

					}
					else {

						$erreur=true;
					}

					if ($erreur == false) {
						
						echo $env1 -> render ("autre1/formations.twig", array('formation' => $form ,
																				'option' => $opt
																				)
											    );
					}
					else {
						
						echo $env1 -> render ("autre1/notFound.twig");
					}


				
				break;
			case 'iut':
				echo $env1 -> render ("autre1/iut.twig");
				break;
			case 'recherches':
				echo $env1 -> render ("autre1/recherches.twig");
				break;
			case 'partenaires':
				echo $env1 -> render ("autre1/partenaires.twig");
				break;
			case 'vieEtudi':
				echo $env1 -> render ("autre1/etudiantLife.twig");
				break;
			case 'moodle':
				echo $env1 -> render ("autre1/moodle.twig");
				break;
			case 'contact':
				echo $env1 -> render ("autre1/contact.twig");
				break;
			case 'enseignants':
				echo $env1 -> render ("autre1/iut_list_enseign.html.twig");
				break;
			case 'administration':
				echo $env1 -> render ("autre1/iut_administration.html.twig");
				break;
			case 'actualites':
				echo $env1 -> render ("autre1/iut_actualites.html.twig");
				break;
			
			default:
				echo $env1 -> render ("autre1/notFound.twig");
				break;
		}

		
	}



	
	
?>
