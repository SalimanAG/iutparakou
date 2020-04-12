<?php
	include "../vendor/autoload.php";
	use \Twig\Environment as envTwig;
	use \Twig\Loader\FilesystemLoader as loader1;

	$loa1 = new loader1(__DIR__."/../templates");
	$env1 = new envTwig ($loa1, [ "cache" => false, ]);
	$env1 -> addFunction ( new \Twig\TwigFunction ( "fonction1",
	function (){
		echo "je suis la fonction numéro 1, ça vous étonne peut-être ??";
	}));
	


	require "../datas/infos.php";

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

				$form=""; $opt=""; $erreur = false; $description = ""; $debouche = ""; $nive = 2 ;


					if (isset($_GET['fo']) && $_GET['fo']==='lp') {
						
						$form="LICENCE PROFESSIONNELLE";
						$nive = 0;

						if (isset($_GET['op']) && $_GET['op']=='ge') {
							
							$opt = $formations ['0'] ['GE'];
							$description = $Descriptions ['GE'];
							$debouche = $debouches ['GE']; 
						} 
						elseif (isset($_GET['op']) && $_GET['op']==='gb') {
							
							$opt = $formations ['0'] ['GB'];
							$description = $Descriptions ['GB'];
							$debouche = $debouches ['GB']; 
						}
						elseif (isset($_GET['op']) && $_GET['op']==='gc') {
							
							$opt = $formations ['0'] ['GC'];
							$description = $Descriptions ['GC'];
							$debouche = $debouches ['GC']; 
						}
						elseif (isset($_GET['op']) && $_GET['op']==='ig') {
							
							$opt = $formations ['0'] ['IG'];
							$description = $Descriptions ['IG'];
							$debouche = $debouches ['IG']; 
						}
						elseif (isset($_GET['op']) && $_GET['op']==='gtl') {
							
							$opt = $formations ['0'] ['GTL'];
							$description = $Descriptions ['GTL'];
							$debouche = $debouches ['GTL']; 
						} 
						elseif (isset($_GET['op']) && $_GET['op']==='grh') {
							
							$opt = $formations ['0'] ['GRH'];
							$description = $Descriptions ['GRH'];
							$debouche = $debouches ['GRH']; 
						} 
						else {

							$erreur=true;
						}


					}
					elseif (isset($_GET['fo']) && $_GET['fo']==='mp') {
						
						$form="MASTER PROFESSIONNEL";
						$nive = 1;

						if (isset($_GET['op']) && $_GET['op']==='cca') {
							
							$opt = $formations ['1'] ['CCA'];
							$description = $formationsMaster ['CCA']['description'];
							$debouche =  $formationsMaster ['CCA']['debouches'];
						} 
						elseif (isset($_GET['op']) && $_GET['op']==='airh') {
							
							$opt = $formations ['1'] ['AIRH'];
							$description = $formationsMaster ['AIRH']['description'];
							$debouche =  $formationsMaster ['AIRH']['debouches'];
						}
						elseif (isset($_GET['op']) && $_GET['op']==='gec') {
							
							$opt = $formations ['1'] ['GEC'];
							$description = $formationsMaster ['GEC']['description'];
							$debouche =  $formationsMaster ['GEC']['debouches'];
						}
						elseif (isset($_GET['op']) && $_GET['op']==='glia') {
							
							$opt = $formations ['1'] ['GLIA'];
							$description = $formationsMaster ['GLIA']['description'];
							$debouche =  $formationsMaster ['GLIA']['debouches'];
						}
						elseif (isset($_GET['op']) && $_GET['op']==='siad') {
							$opt = $formations ['1'] ['SIAD'];
							$description = $formationsMaster ['SIAD']['description'];
							$debouche =  $formationsMaster ['SIAD']['debouches'];
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
																				'option' => $opt,
																				'description' => $description,
																				'debouche' => $debouche, 
																				'niv' => $nive
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

				if (isset($_GET['num']) && ($_GET['num'] < count($listEnseignant)))
				{
					if (isset($_GET['rub']) && $_GET['rub']==='axe') {
						echo $env1 -> render ("autre1/iut_single_enseignant_axe.html.twig", array('enseignant' => $listEnseignant[$_GET['num']], 'numero' => $_GET['num']));
					}
					elseif (isset($_GET['rub']) && $_GET['rub']==='ens') {
						echo $env1 -> render ("autre1/iut_single_enseignant_ens.html.twig", array('enseignant' => $listEnseignant[$_GET['num']], 'numero' => $_GET['num'], 'numero' => $_GET['num']));
					}
					elseif (isset($_GET['rub']) && $_GET['rub']==='parcs') {
						echo $env1 -> render ("autre1/iut_single_enseignant_parcs.html.twig", array('enseignant' => $listEnseignant[$_GET['num']], 'numero' => $_GET['num']));
					}
					elseif (isset($_GET['rub']) && $_GET['rub']==='publi') {
						echo $env1 -> render ("autre1/iut_single_enseignant_publi.html.twig", array('enseignant' => $listEnseignant[$_GET['num']], 'numero' => $_GET['num']));
					}
					else{
						echo $env1 -> render ("autre1/iut_single_enseignant.html.twig", array('enseignant' => $listEnseignant[$_GET['num']], 'numero' => $_GET['num']));
					}
				}
				else {
					echo $env1 -> render ("autre1/iut_list_enseign.html.twig", array('listEnseignant' => $listEnseignant));
				}
				
				break;



			case 'administration':
				echo $env1 -> render ("autre1/iut_administration.html.twig", array('listMembrAdministration' => $listMembrAdministration));
				break;



			case 'actualites':

					if (!isset($_GET['id'])) {
						echo $env1 -> render ("autre1/iut_actualites.html.twig");
					}
					else {
						echo $env1 -> render ("autre1/actualiter.html.twig");
					}

				break;
			


			default:
				echo $env1 -> render ("autre1/notFound.twig");
				break;
		}

		
	}



	


	
	?>