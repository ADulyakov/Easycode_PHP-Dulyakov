<?php 
/*
$auto = array ( 'HUNDAI', 'KIA', 'DAEWOO',);
$arrayCount = count($auto);
for ($i=0; $i < $arrayCount; $i++ ) {
	echo $auto[$i];
    echo ",";
}

*/
/*
$carCenter = array(
    'bmw' => array(
        'm5' => array(
            1999,
            2001
        ),
        'm6' => array(
            2001,
            2002
        )
    ),
    'toyota' => array(
        'camry' => array(1999)
    )
);

foreach ($carCenter as $key => $models) {
    echo $key . ',';
    };

*/
/*
// 3

$carCenter = array(
    'brands' => array(
        'bmw' => array(
            'models' => array(
                'm5' => array(
                    'years' => array(
                        1999,
                        2000
                    )
                ),
                'm6' => array(
                    'years' => array(
                        2001,
                        2002
                    )
                )
            )
        ),
        'toyota' => array(
            'models' => array(
                'camry' => array(
                    'years' => array(
                        1999,
                        2000
                    )
                ),
                'corolla' => array(
                    'years' => array(
                        2003,
                        2004
                    )
                )
            )
        )
    )
);
/*
foreach ($carCenter['brands']['bmw']['models'] as $models => $years) {
    echo $models . ',';
}
*/
/*
foreach ($carCenter['brands'] as $brandName => $models) {
    foreach ($models['models'] as $modelName => $years) {
        echo $years . ',';
    }
}

*/
/*
$carCenter = array(
    'brands' => array(
        'bmw' => array(
            'models' => array(
                'm5' => array(
                    'years' => array(
                        1999,
                        2000
                    )
                ),
                'm6' => array(
                    'years' => array(
                        2001,
                        2002
                    )
                )
            )
        )
    )
);
$carCenter['brands']['bmw']['models']['m6']['years'];

$carCenter = array(
    'bmw' => array(
        'm5' => array(
            1999,
            2001
        ),
        'm6' => array(
            2001,
            2002
        )
    ),
    'toyota' => array(
        'camry' => array(1999)
    )
);
*/


$carCenter = array(
    'brands' => array(
        'BMW' => array(
            'models' => array(
                'm5' => array(
                    'years' => array(
                        1999,
                        2000
                    )
                ),
                'm6' => array(
                    'years' => array(
                        2001,
                        2002
                    )
                )
            )
        )
    )
);

//foreach

foreach ($carCenter['brands'] as $brName => $model) {
    echo  $brName. '<br />';
    foreach ($model['models'] as $modName => $years) {
        echo $modName. ',';
            foreach ($years['years'] as $years => $value) {
                echo $value. ','. '<br />';

            }
    }
};



 ?>