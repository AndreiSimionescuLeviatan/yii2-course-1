<?php

/** @var $content string */
/** @var $this \yii\web\View */

// ne afiseazza CSS
use app\assets\AppAsset;

?>
    <!---->
    <!--//includ fisierul de baza clear -->

<?php  $this->beginContent('@app/views/layouts/clear.php')?>
    <div class="container">
        <?php echo $content ?>
    </div>
<?php $this->endContent() ?>