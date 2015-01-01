

<?php
/*
 *
 *Yii::app()->request->baseUrl;
 * */
$link = '<link rel = "stylesheet" type = "text/css" href = "%s/assets/css/%s.css" />';
if (isset($cssfile)) {
    foreach ($cssfile as $value) {
        echo sprintf ($link, '', $value);
    }
}

?>
