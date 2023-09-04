<?php

/** @var $content string */
/** @var $this \yii\web\View */

// ne afiseazza CSS
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php  echo $this->beginPage() ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <?php echo $this->registerCsrfMetaTags()?>
    <title>Document</title>
    <?php echo $this->head()?>
</head>
<body>
<?php echo $this->beginBody() ?>
<?php echo  $content?>
<!-- //daca nu pun asta nu afiseaza nimic pe contact si
pe celelalte pagini care au ca layout base-->
<?php  $this->endBody()?>
</body>
</html>
<?php  echo $this->endPage()?>

<!--//pentru a randa layoutul login se va apela ca si
layout in
 site controler pe ruta site/login-->
