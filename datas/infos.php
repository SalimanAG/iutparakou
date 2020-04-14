<?php


				$lorem = "A venir...";

				$formations = array('0' => array('GE' => 'Gestion des Entreprises (GE)', 
															 'GB' => 'Gestion des Banques (GB)',
															 'GC' => 'Gestion Commerciale (GC)',
															 'IG' => 'Informatique de Gestion (IG)',
															 'GTL' => 'Gestion des Transports et Logistique (GTL)',
															 'GRH' => 'Gestion des Ressources Humaines (GRH)'
														) ,
												'1' => array('CCA' => 'Comptabilité, Contrôle et Audit (CCA)',
															 'AIRH' => 'Administration et Ingénierie des Ressources Humaines (AIRH',
															 'GEC' => 'Gestion et Expertise Commerciale (GEC)',
															 'GLIA' => 'Génie Logiciel et Intégration d\'Application (GLIA)',
															 'SIAD' => 'Système d\'Information et d\'Aide à la Décision (SIAD)'
														)
											);

				$formationsMaster = array(

										'CCA' => array(	'nom' => "Comptabilité, Contrôle et Audit (CCA)",
												'description' => $lorem,
												'debouches' => "Contrôleur de gestion ; Auditeur interne ; Analyste financier ; Consultant en audit et contrôle de gestion."
											),
										'AIRH' => array(
												'nom' => "Administration et Ingénierie des Ressources Humaines (AIRH)",
												'description' => $lorem,
												'debouches' => $lorem
											),
										'GEC' => array(
												'nom' => "Gestion et Expertise Commerciale",
												'description' => $lorem,
												'debouches' => $lorem
											),
										'GLIA' => array(
												'nom' => "Génie Logiciel et Intégration d\'Application (GLIA)",
												'description' => $lorem,
												'debouches' => $lorem
											),
										'SIAD' => array(
												'nom' => "Système d\'Information et d\'Aide à la Décision (SIAD)",
												'description' => $lorem,
												'debouches' => $lorem
											)

										);


				$Descriptions = array(	'GE' => $lorem , 
										'GB' => $lorem ,
										'GC' => $lorem ,
										'IG' => $lorem ,
										'GTL' => $lorem ,
										'GRH' => $lorem
											);

				$debouches = array('GE' => "Cabinets comptables, services de comptabilité des entreprises, banque, assurances, administrations, petites, moyennes  et grandes entreprises, auto emploi.", 
												 'GB' => "Organismes financiers ou de gestion (établissement de crédits, entreprises commerciales de banque).",
												 'GC' => "Entreprises commerciales ou services commerciaux de tout type d’entreprise, services de logistiques internationale, entreprise d’export, sociétés de transit et de manutention, banque, agence de communication, grandes entreprises de représentant commercial de chef de rayon dans le centre commercial (supermarché), d’attaché commercial de chef de produit, chargé des relations publiques,  assistant de communication interne diffusant des informations à l’intérieur de l’entreprise.",
												 'IG' => "Centre informatique, banque, entreprise de prestation de service, éditeur de logiciels, grandes entreprises informatisées, poste d’analyse programmeur, chef de programme informatique, d’ingénieur logiciel, administrateur de réseau. ",
												 'GTL' => "Banque, Société d’assurance et administrations, petites et moyennes entreprises, grandes entreprises, entreprises de transport et de Gestion ferroviaire, service chargé de la logistique au niveau des entreprises, des administrations, poste d’agent comptable dans les compagnies aériennes, d’agent de fret dans les aéroports, de techniciens des études et l’exploitation de l’avion  civile.",
												 'GRH' => "Entreprises, assurance, administrations,  Organisations, ONG");


				$listEnseignant = array(
					array(	'nom' => "TCHOKPONHOUE", 
							'prenoms' => "Henri A.",
							'grade' => "Maître Assistant ",
							'specialite' => "Théorie des Organisations et Gestion des Ressources Humaines",
							'photo' => "avatar.png",
							'contact' => array(	'telephone' => "contact Vide",
												'whatsApp' => "contact Vide",
												'eMail' => "contact Vide",
												'facebook' => "contact Vide",
												'skype' => "contact Vide",
												'twitter' => "contact Vide"
												),
							'presentation' => $lorem ,
							'axesDeRecherche' => $lorem ,
							'enseignement' => $lorem ,
							'publication' => $lorem ,
							'parcours' => $lorem 
							),
					array(	'nom' => "SADIKOU", 
							'prenoms' => "Akimou",
							'grade' => "Maître Assistant",
							'specialite' => "Analyse et conception des algorithmes",
							'photo' => "avatar.png",
							'contact' => array(	'telephone' => "contact Vide",
												'whatsApp' => "contact Vide",
												'eMail' => "contact Vide",
												'facebook' => "contact Vide",
												'skype' => "contact Vide",
												'twitter' => "contact Vide"
												),
							'presentation' => $lorem ,
							'axesDeRecherche' => $lorem ,
							'enseignement' => $lorem ,
							'publication' => $lorem ,
							'parcours' => $lorem 
							),
					array(	'nom' => "ADEKAMBI", 
							'prenoms' => "Souléimane",
							'grade' => "Maître Assistant",
							'specialite' => "Agroéconomie : marketing et stratégies pour le développement durable",
							'photo' => "enseignants/drAdeSou.jpg",
							'contact' => array(	'telephone' => "contact Vide",
												'whatsApp' => "contact Vide",
												'eMail' => "contact Vide",
												'facebook' => "contact Vide",
												'skype' => "contact Vide",
												'twitter' => "contact Vide"
												),
							'presentation' => $lorem ,
							'axesDeRecherche' => $lorem ,
							'enseignement' => $lorem ,
							'publication' => $lorem ,
							'parcours' => $lorem 
							),
					array(	'nom' => "BOKO", 
							'prenoms' => "Fadonougbo",
							'grade' => "Maître Assistant",
							'specialite' => "Macroéconomie",
							'photo' => "avatar.png",
							'contact' => array(	'telephone' => "contact Vide",
												'whatsApp' => "contact Vide",
												'eMail' => "contact Vide",
												'facebook' => "contact Vide",
												'skype' => "contact Vide",
												'twitter' => "contact Vide"
												),
							'presentation' => $lorem ,
							'axesDeRecherche' => $lorem ,
							'enseignement' => $lorem ,
							'publication' => $lorem ,
							'parcours' => $lorem 
							),
					array(	'nom' => "AIFA", 
							'prenoms' => "Emil K.",
							'grade' => "Maître Assistant",
							'specialite' => "Macroéconomie appliquée",
							'photo' => "avatar.png",
							'contact' => array(	'telephone' => "contact Vide",
												'whatsApp' => "contact Vide",
												'eMail' => "contact Vide",
												'facebook' => "contact Vide",
												'skype' => "contact Vide",
												'twitter' => "contact Vide"
												),
							'presentation' => $lorem ,
							'axesDeRecherche' => $lorem ,
							'enseignement' => $lorem ,
							'publication' => $lorem ,
							'parcours' => $lorem 
							),
					array(	'nom' => "ALIDOU", 
							'prenoms' => "Djaoudath",
							'grade' => "Maître Assistant",
							'specialite' => "Finance",
							'photo' => "avatar.png",
							'contact' => array(	'telephone' => "contact Vide",
												'whatsApp' => "contact Vide",
												'eMail' => "contact Vide",
												'facebook' => "contact Vide",
												'skype' => "contact Vide",
												'twitter' => "contact Vide"
												),
							'presentation' => $lorem ,
							'axesDeRecherche' => $lorem ,
							'enseignement' => $lorem ,
							'publication' => $lorem ,
							'parcours' => $lorem 
							),
					array(	'nom' => "AHOTONDJI", 
							'prenoms' => "Sosthène A.",
							'grade' => "Assistant",
							'specialite' => "Marketing et stratégie",
							'photo' => "avatar.png",
							'contact' => array(	'telephone' => "contact Vide",
												'whatsApp' => "contact Vide",
												'eMail' => "contact Vide",
												'facebook' => "contact Vide",
												'skype' => "contact Vide",
												'twitter' => "contact Vide"
												),
							'presentation' => $lorem ,
							'axesDeRecherche' => $lorem ,
							'enseignement' => $lorem ,
							'publication' => $lorem ,
							'parcours' => $lorem 
							),
					array(	'nom' => "WOROUCOUBOU", 
							'prenoms' => "Habibou A.",
							'grade' => "Assistant",
							'specialite' => "Finance",
							'photo' => "avatar.png",
							'contact' => array(	'telephone' => "contact Vide",
												'whatsApp' => "contact Vide",
												'eMail' => "contact Vide",
												'facebook' => "contact Vide",
												'skype' => "contact Vide",
												'twitter' => "contact Vide"
												),
							'presentation' => $lorem ,
							'axesDeRecherche' => $lorem ,
							'enseignement' => $lorem ,
							'publication' => $lorem ,
							'parcours' => $lorem 
							),
					array(	'nom' => "DAMENOU", 
							'prenoms' => "Ermine",
							'grade' => "Assistante",
							'specialite' => "Management des organisations",
							'photo' => "avatar.png",
							'contact' => array(	'telephone' => "contact Vide",
												'whatsApp' => "contact Vide",
												'eMail' => "contact Vide",
												'facebook' => "contact Vide",
												'skype' => "contact Vide",
												'twitter' => "contact Vide"
												),
							'presentation' => $lorem ,
							'axesDeRecherche' => $lorem ,
							'enseignement' => $lorem ,
							'publication' => $lorem ,
							'parcours' => $lorem 
							),
					array(	'nom' => "LIHOUSSOU", 
							'prenoms' => "Messan",
							'grade' => "Assistant",
							'specialite' => "Transport et logistique",
							'photo' => "avatar.png",
							'contact' => array(	'telephone' => "contact Vide",
												'whatsApp' => "contact Vide",
												'eMail' => "contact Vide",
												'facebook' => "contact Vide",
												'skype' => "contact Vide",
												'twitter' => "contact Vide"
												),
							'presentation' => $lorem ,
							'axesDeRecherche' => $lorem ,
							'enseignement' => $lorem ,
							'publication' => $lorem ,
							'parcours' => $lorem 
							),
					array(	'nom' => "MOUSSE", 
							'prenoms' => "Ange Mikael",
							'grade' => "Assistant",
							'specialite' => "Vision par ordinateur et reconnaissance de forme",
							'photo' => "enseignants/drMouAngMik.jpg",
							'contact' => array(	'telephone' => "contact Vide",
												'whatsApp' => "contact Vide",
												'eMail' => "contact Vide",
												'facebook' => "contact Vide",
												'skype' => "contact Vide",
												'twitter' => "contact Vide"
												),
							'presentation' => $lorem ,
							'axesDeRecherche' => $lorem ,
							'enseignement' => $lorem ,
							'publication' => $lorem ,
							'parcours' => $lorem 
							),
					array(	'nom' => "GOMINA MAMA", 
							'prenoms' => "Fousséni",
							'grade' => "Assistant",
							'specialite' => "Transport et logistique",
							'photo' => "avatar.png",
							'contact' => array(	'telephone' => "contact Vide",
												'whatsApp' => "contact Vide",
												'eMail' => "contact Vide",
												'facebook' => "contact Vide",
												'skype' => "contact Vide",
												'twitter' => "contact Vide"
												),
							'presentation' => $lorem ,
							'axesDeRecherche' => $lorem ,
							'enseignement' => $lorem ,
							'publication' => $lorem ,
							'parcours' => $lorem 
							),
					array(	'nom' => "DAGBELOU", 
							'prenoms' => "Dominique",
							'grade' => "Doctorant",
							'specialite' => "Marketing et stratégies des organisations",
							'photo' => "avatar.png",
							'contact' => array(	'telephone' => "contact Vide",
												'whatsApp' => "contact Vide",
												'eMail' => "contact Vide",
												'facebook' => "contact Vide",
												'skype' => "contact Vide",
												'twitter' => "contact Vide"
												),
							'presentation' => $lorem ,
							'axesDeRecherche' => $lorem ,
							'enseignement' => $lorem ,
							'publication' => $lorem ,
							'parcours' => $lorem 
							)
				 );


				$listMembrAdministration = array(
												array(	'nom' => "Dr TCHOKPONHOUE", 
														'prenoms' => "Henri A.",
														'denomination' => "Directeur de L'IUT",
														'descriptionDenomination' => "",
														'photo' => "avatar.png"
														),
												array(	'nom' => "Dr ADEKAMBI", 
														'prenoms' => "Souléimane A.",
														'denomination' => "Directeur Adjoint de L'IUT",
														'descriptionDenomination' => "",
														'photo' => "avatar.png"
														),
												array(	'nom' => "TOUDONOU", 
														'prenoms' => "S. Roland",
														'denomination' => "Secrétaire général de l'entité; \n Responsable de l'administration de l'Institut; \n Responsable de la vie estudiantine de l'Institut; \n Responsable de la discipline des membres de l'administration au sein de  l'Institut.",
														'descriptionDenomination' => "",
														'photo' => "avatar.png"
														),
												array(	'nom' => "ADONON", 
														'prenoms' => "Max Boris",
														'denomination' => "Chef service comptabilité de l'Institut.",
														'descriptionDenomination' => "",
														'photo' => "avatar.png"
														),
												array(	'nom' => "ATTERE", 
														'prenoms' => "J. Marlène",
														'denomination' => "Chef division du secrétariat administratif de l'Institut;
								    	\n Assistante du secrétaire général de l'Institut.",
														'descriptionDenomination' => "",
														'photo' => "avatar.png"
														),
												array(	'nom' => "BABA DAMAGUI", 
														'prenoms' => "Sinaissiré",
														'denomination' => "Agent du secrétariat administratif de l'Institut.",
														'descriptionDenomination' => "",
														'photo' => "avatar.png"
														),
												array(	'nom' => "TOUDONOU", 
														'prenoms' => "K. Marcelin",
														'denomination' => "Conducteur de véhicule administratif de l'Institut",
														'descriptionDenomination' => "",
														'photo' => "avatar.png"
														)


											 );





?>
				