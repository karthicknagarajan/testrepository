<?php 
	$region =  'Zürich';

	$countryid = 'CH';
	
	echo getstate($region,$countryid);
	
	function getstate($region,$countryid){
		
		if($region == 'Niederösterreich'){
			$region = strtoupper(str_replace("Niederösterreich","Niederosterreich",$region));
		}else if($region == 'Oberösterreich'){
			$region = strtoupper(str_replace("Oberösterreich","Oberosterreich",$region));
		}else if($region == 'Kärnten'){
			$region = strtoupper(str_replace("Kärnten","Karnten",$region));
		}else if($region == 'Baden-Württemberg'){
			$region = strtoupper(str_replace("Baden-Württemberg","Baden-Wurttemberg",$region));
		}else if($region == 'Thüringen'){
			$region = strtoupper(str_replace("Thüringen","Thuringen",$region));
		}else if($region == 'A Coruña'){
			$region = strtoupper(str_replace("A Coruña","A Coruna",$region));
		}else if($region == 'Graubünden'){
			$region = strtoupper(str_replace("Graubünden","Graubunden",$region));
		}else if($region == 'Zürich'){
			$region = strtoupper(str_replace("Zürich","Zurich",$region));
		}
		
		$countrycode =  array(
				'AT' => 'AT',
				'CA' => 'CA',
				'DE' => 'DE',
				'ES' => 'ES',
				'CH' => 'CH',
				'US' => 'US',
			);
			
	$statecode = array(

	'AT' => array(
		'WI' => 'WIEN',
		'NO' => 'NIEDEROSTERREICH',
		'OO' => 'OBEROSTERREICH',
		'SB' => 'SALZBURG', 
		'KN' => 'KARNTEN',
		'ST' => 'STEIERMARK',
		'TI' => 'TIROL',
		'BL' => 'BURGENLAND',
		'VB' => 'VORALBERG'
	),
	
	'CA' => ARRAY(
		'AB' => 'ALBERTA',
		'BC' => 'BRITISH COLUMBIA',
		'MB' => 'MANITOBA',
		'NL' => 'NEWFOUNDLAND AND LABRADOR',
		'NB' => 'NEW BRUNSWICK',
		'NS' => 'NOVA SCOTIA',
		'NT' => 'NORTHWEST TERRITORIES',
		'NU' => 'NUNAVUT',
		'ON' => 'ONTARIO',
		'PE' => 'PRINCE EDWARD ISLAND',
		'QC' => 'QUEBEC',
		'SK' => 'SASKATCHEWAN',
		'YT' => 'YUKON TERRITORY'
	),
	
	'DE' => array(
		'NDS' => 'NIEDERSACHSEN',
		'BAW' => 'BADEN-WURTTEMBERG',
		'BAY' => 'BAYERN',
		'BER' => 'BERLIN',
		'BRG' => 'BRANDENBURG',
		'BRE' => 'BREMEN',
		'HAM' => 'HAMBURG',
		'HES' => 'HESSEN',
		'MEC' => 'MECKLENBURG-VORPOMMERN',
		'NRW' => 'NORDRHEIN-WESTFALEN',
		'RHE' => 'RHEINLAND-PFALZ',
		'SAR' => 'SAARLAND',
		'SAS' => 'SACHSEN',
		'SAC' => 'SACHSEN-ANHALT',
		'SCN' => 'SCHLESWIG-HOLSTEIN',
		'THE' => 'THURINGEN'
	),
	
	'ES' => ARRAY(
		'A CORUNA' => 'A CORUNA',
		'ALAVA' => 'ALAVA',
		'ALBACETE' => 'ALBACETE',
		'ALICANTE' => 'ALICANTE',
		'ALMERIA' => 'ALMERIA',
		'ASTURIAS' => 'ASTURIAS',
		'AVILA' => 'AVILA',
		'BADAJOZ' => 'BADAJOZ',
		'BALEARES' => 'BALEARES',
		'BARCELONA' => 'BARCELONA',
		'BURGOS' => 'BURGOS',
		'CACERES' => 'CACERES',
		'CADIZ' => 'CADIZ',
		'CANTABRIA' => 'CANTABRIA',
		'CASTELLON' => 'CASTELLON',
		'CEUTA' => 'CEUTA',
		'CIUDAD REAL' => 'CIUDAD REAL',
		'CORDOBA' => 'CORDOBA',
		'CUENCA' => 'CUENCA',
		'GIRONA' => 'GIRONA',
		'GRANADA' => 'GRANADA',
		'GUADALAJARA' => 'GUADALAJARA',
		'GUIPUZCOA' => 'GUIPUZCOA',
		'HUELVA' => 'HUELVA',
		'HUESCA' => 'HUESCA',
		'JAEN' => 'JAEN',
		'LA RIOJA' => 'LA RIOJA',
		'LAS PALMAS' => 'LAS PALMAS',
		'LEON' => 'LEON',
		'LLEIDA' => 'LLEIDA',
		'LUGO' => 'LUGO',
		'MADRID' => 'MADRID',
		'MALAGA' => 'MALAGA',
		'MELILLA' => 'MELILLA',
		'MURCIA' => 'MURCIA',
		'NAVARRA' => 'NAVARRA',
		'OURENSE' => 'OURENSE',
		'PALENCIA' => 'PALENCIA',
		'PONTEVEDRA' => 'PONTEVEDRA',
		'SALAMANCA' => 'SALAMANCA',
		'SANTA CRUZ DE TENERIFE' => 'SANTA CRUZ DE TENERIFE',
		'SEGOVIA' => 'SEGOVIA',
		'SEVILLA' => 'SEVILLA',
		'SORIA' => 'SORIA',
		'TARRAGONA' => 'TARRAGONA',
		'TERUEL' => 'TERUEL',
		'TOLEDO' => 'TOLEDO',
		'VALENCIA' => 'VALENCIA',
		'VALLADOLID' => 'VALLADOLID',
		'VIZCAYA' => 'VIZCAYA',
		'ZAMORA' => 'ZAMORA',
		'ZARAGOZA' => 'ZARAGOZA'
		),
		
		'CH' => ARRAY(
			'AG' => 'AARGAU',
			'AI' => 'APPENZELL INNERRHODEN',
			'AR' => 'APPENZELL AUSSERRHODEN',
			'BE' => 'BERN',
			'BL' => 'BASEL-LANDSCHAFT',
			'BS' => 'BASEL-STADT',
			'FR' => 'FREIBURG',
			'GE' => 'GENF',
			'GL' => 'GLARUS',
			'GL' => 'GRAUBUNDEN',
			'JU' => 'JURA',
			'LU' => 'LUZERN',
			'NE' => 'NEUENBURG',
			'NW' => 'NIDWALDEN',
			'OW' => 'OBWALDEN',
			'SG' => 'ST. GALLEN',
			'SH' => 'SCHAFFHAUSEN',
			'SO' => 'SOLOTHURN',
			'SZ' => 'SCHWYZ',
			'TG' => 'THURGAU',
			'TI' => 'TESSIN',
			'UR' => 'URI',
			'VD' => 'WAADT',
			'VS' => 'WALLIS',
			'ZG' => 'ZUG',
			'ZH' => 'ZURICH'
		),
		
		'US' => array(
				'AL' => 'ALABAMA',
				'AK' => 'ALASKA',
				'AS' => 'AMERICAN SAMOA',
				'AZ' => 'ARIZONA',
				'AR' => 'ARKANSAS',
				'AF' => 'ARMED FORCES AFRICA',
				'AA' => 'ARMED FORCES AMERICAS',
				'AC' => 'ARMED FORCES CANADA',
				'AE' => 'ARMED FORCES EUROPE',
				'AM' => 'ARMED FORCES MIDDLE EAST',
				'AP' => 'ARMED FORCES PACIFIC',
				'CA' => 'CALIFORNIA',
				'CO' => 'COLORADO',
				'CT' => 'CONNECTICUT',
				'DE' => 'DELAWARE',
				'DC' => 'DISTRICT OF COLUMBIA',
				'FM' => 'FEDERATED STATES OF MICRONESIA',
				'FL' => 'FLORIDA',
				'GA' => 'GEORGIA',
				'GU' => 'GUAM',
				'HI' => 'HAWAII',
				'ID' => 'IDAHO',
				'IL' => 'ILLINOIS',
				'IN' => 'INDIANA',
				'IA' => 'IOWA',
				'KS' => 'KANSAS',
				'KY' => 'KENTUCKY',
				'LA' => 'LOUISIANA',
				'ME' => 'MAINE',
				'MH' => 'MARSHALL ISLANDS',
				'MD' => 'MARYLAND',
				'MA' => 'MASSACHUSETTS',
				'MI' => 'MICHIGAN',
				'MN' => 'MINNESOTA',
				'MS' => 'MISSISSIPPI',
				'MO' => 'MISSOURI',
				'MT' => 'MONTANA',
				'NE' => 'NEBRASKA',
				'NV' => 'NEVADA',
				'NH' => 'NEW HAMPSHIRE',
				'NJ' => 'NEW JERSEY',
				'NM' => 'NEW MEXICO',
				'NY' => 'NEW YORK',
				'NC' => 'NORTH CAROLINA',
				'ND' => 'NORTH DAKOTA',
				'MP' => 'NORTHERN MARIANA ISLANDS',
				'OH' => 'OHIO',
				'OK' => 'OKLAHOMA',
				'OR' => 'OREGON',
				'PW' => 'PALAU',
				'PA' => 'PENNSYLVANIA',
				'PR' => 'PUERTO RICO',
				'RI' => 'RHODE ISLAND',
				'SC' => 'SOUTH CAROLINA',
				'SD' => 'SOUTH DAKOTA',
				'TN' => 'TENNESSEE',
				'TX' => 'TEXAS',
				'UT' => 'UTAH',
				'VT' => 'VERMONT',
				'VI' => 'VIRGIN ISLANDS',
				'VA' => 'VIRGINIA',
				'WA' => 'WASHINGTON',
				'WV' => 'WEST VIRGINIA',
				'WI' => 'WISCONSIN',
				'WY' => 'WYOMING'
				)
		);
		
		if(in_array($countryid, $countrycode)){
			return array_search(strtoupper($region),$statecode[$countryid]);
		}else{
			return $region;
		}
		
	}
		
		//echo '<pre>'; print_r($countrycode); print_r($statecode);
		

	
	
