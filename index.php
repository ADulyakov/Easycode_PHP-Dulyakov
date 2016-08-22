<?php
/*
$country = array (
 			'name' => 'Ukr',
				'cyty' = array (
 					array(
						'name' => 'Kharkiv',
						'population' => 100500,
 						),

 					array(
						'name' => 'Lviv',
						'population' => 200500
 						),

 					array(
						'name' => 'Poltava',
						'population' => 300500
 						)
);





//Автомобильный сало




$Arr = array( 
	'name' => 'SunKOR',
		'brand' = array (
			array = (
				'br_name' => 'HUNDAI'
					array( 
						array( 
							'm_name1' => 'Accent',
								array(
									'ear1' => 2005,
									'ear2' => 2010,
									'ear3' => 2015,
									),
							'm_name2' => 'Elantra',
								array(
									'ear1' => 2005,
									'ear2' => 2010,
									'ear3' => 2015,
									),
							'm_name2' => 'Elantra',
								array(
									'ear1' => 2005,
									'ear2' => 2010,
									'ear3' => 2015,
									)
							) 

						)

				),

			)


	);


<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.06.2016
 * Time: 23:49
 */
/*
$Arr = array(
    'info' => 'Замечательный салон ',
    'info1' => 'в ктором вы можете преобрести автомобили корейского автопрома, выпуска от 2005 по 2015',
    'name' => 'SunKOR',
    array (
           'br_name1' => 'HUNDAI',
                   				array(
                            'm_name1' => 'Accent',
                                array(2005, 2010, 2015),

                            'm_name2' => 'Elantra',
                                array( 2005, 2010, 2015),

                            'm_name3' => 'Elantra',
                                array( 2005, 2010, 2015)
                            )
        )
);

echo $Arr['info'], $Arr['name'], $Arr['info1'];
echo "\n";
echo $Arr[0]['br_name1'][0]['m_name1'];

*/



// ДЗ Автосалон
/*
$Arr = array(
    'info' => 'Замечательный салон ',
    'name' => 'SunKOR',
    'info1' => 'в ктором вы можете преобрести автомобили корейского автопрома, выпуска от 2005 по 2015',

                array (
                    'br_name1' => 'HUNDAI',
                   	  'HU_mod' =>  array(
                        	'm_name1' => 'Accent',
                        	   'ear1' => array(2005, 2010, 2015),

                        	'm_name2' => 'Elantra',
                        	   'ear2' => array( 2005, 2010, 2015),

                        	'm_name3' => 'Elantra',
                        	   'ear3' => array( 2005, 2010, 2015)
                    		),
                    'br_name2' => 'KIA',
                      'KA_mod' =>  array(
                        	'm_name1' => 'Rio',
                        	   'ear1' => array(2005, 2010, 2015),

                        	'm_name2' => 'Cerato',
                        	   'ear2' => array( 2005, 2010, 2015),

                        	'm_name3' => 'Quoris',
                        	   'ear3' => array( 2005, 2010, 2015)
                    		),
                    'br_name3' => 'DAEWOO',
                      'DW_mod' => array(
                        	'm_name1' => 'Gentra',
                        	   'ear1' => array(2005, 2010, 2015),

                        	'm_name2' => 'Lanos',
                        	   'ear2' => array( 2005, 2010, 2015),

                        	'm_name3' => 'Matiz',
                        	   'ear3' => array( 2005, 2010, 2015)
                    )
                )
);

*/

//attempt №2

$Arr = array(
    'info' => 'Замечательный салон ',
    'name' => 'SunKOR',
    'info1' => 'в котором вы можете приобрести автомобили корейского автопрома, выпуска от 2005 по 2015',
    'br_name' => array ('HUNDAI', 'KIA', 'DAEWOO'),
    'HU_mod' =>  array('Accent','Elantra','Elantra'),    
    'KA_mod' =>  array('Rio', 'Cerato', 'Quoris'),
    'DW_mod' => array('Gentra', 'Lanos', 'Matiz'), 
    'ear' => array(2005, 2010, 2015)             
);

//echo

echo $Arr['info']. ' ' .$Arr['name']. ' ' .$Arr['info1'];
echo "\n";
echo "\n";
echo $Arr['br_name'][0];
echo "\n";
echo $Arr['HU_mod'][0].' '.$Arr['HU_mod'][1].' '.$Arr['HU_mod'][2];
echo "\n";
echo $Arr['ear'][0]. ' ' .$Arr['ear'][1]. ' ' .$Arr['ear'][2];
echo "\n";
echo "\n";
echo $Arr['br_name'][1];
echo "\n";
echo $Arr['KA_mod'][0].' '.$Arr['KA_mod'][1].' '.$Arr['KA_mod'][2];
echo "\n";
echo $Arr['ear'][0]. ' ' .$Arr['ear'][1]. ' ' .$Arr['ear'][2];
echo "\n";
echo "\n";
echo $Arr['br_name'][2];
echo "\n";
echo $Arr['DW_mod'][0].' '.$Arr['DW_mod'][1].' '.$Arr['DW_mod'][2];
echo "\n";
echo $Arr['ear'][0]. ' ' .$Arr['ear'][1]. ' ' .$Arr['ear'][2];

//2variant

$auto = [
	'ear' => [ 2005, 2010, 2015],
	'brand' => ['DAEWOO','KIA', 'HUNDAI'],
	 'br_model' => [
	  'm_dw' => ['Gentra', 'Lanos', 'Matiz'],
	  'm_kia' => ['Rio', 'Cerato', 'Quoris'],
	  'm_hu' => ['Accent','Elantra','Elantra']
	 ]
];
