<?php

/** @var $content string */
/** @var $this \yii\web\View */

// ne afiseazza CSS
use app\assets\AppAsset;

?>
<!---->
<!--//includ fisierul de baza clear -->

<?php  $this->beginContent('@app/views/layouts/clear.php')?>
<header>
    header andrei
</header>
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <?php echo $content ?>
        </div>
        <div class="col-sm-3">
            <ul class="list-group">
                <li class="list-group-item">Sidebar Item 1</li>
                <li class="list-group-item">Sidebar Item 1</li>
                <li class="list-group-item">Sidebar Item 1</li>
            </ul>

<!--            verific daca am blocuri precum blocul cu nuemle side si daca il am il afisez in layoutul base-->
            <?php  if(isset($this->blocks['side'])): ?>
                <hr>
            <?php echo $this->blocks['side']?>
            <?php endif; ?>
        </div>
    </div>

</div>
<footer>
    footer andrei
</footer>

<?php $this->endContent() ?>