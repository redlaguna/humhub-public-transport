<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model humhub\modules\transport\models\PtmNode */
\humhub\modules\transport\MapAsset::register($this);

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Остановки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('../layouts/breadcrumbs.php') ?>
<div class="container">
    <div class="ptm-node-view">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data'  => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method'  => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'name',
                'lat',
                'lng',
            ],
        ]) ?>
        <div id="map"></div>
    </div>
</div>