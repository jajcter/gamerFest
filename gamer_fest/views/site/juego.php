<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Juego';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-juego">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
    <dir video controlslist="nodownload"><iframe width="80%" height="315;" src="https://www.youtube.com/embed/fuQLB3hQfHw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></dir>

    <code><?= __FILE__ ?></code>
</div>
