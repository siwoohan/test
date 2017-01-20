<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $category->name;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['site/categories']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?=print_r($dataProvider);?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post', ['post/create', 'category_id' => $category->id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'user_id',
            'name',
            'subject',
            // 'content:ntext',
            // 'date_added',
            // 'ip',
            [
            	'class' => 'yii\grid\ActionColumn',
            	'template' => '{view} {update} {delete} {link}',
	            'buttons' => [
	            	'view' => function ($url,$model,$key) {
	            		return Html::a('View', ['post/view', 'id'=>$key]);
	            	},
					'link' => function ($url,$model,$key) {
						return Html::a('Action', $url);
					},          
	            ],
            ],
        ],
    ]); ?>
</div>