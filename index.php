<?php
use backend\models\Categories ;
use yii\helpers\Html ;
use yii\helpers\Url ;


foreach ($categories as $category) { ?>
    
<strong> Mark: </strong> <?= $category->mark ?>
<strong> Model: </strong> <?= $category->model ?>
<strong> Engine: </strong> <?= $category->engine ?>
<strong> Transmission: </strong> <?= $category->transmission ?>

<a href="<?=Url::to(['/categories/view', 'id' => $category->id]) ?>" style="color:cyan"> Learn more! </a> 
<br><br>
    
<?php } ?>


