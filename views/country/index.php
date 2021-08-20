<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = '国家列表';

$metaTag = [
    ['name' => 'keywords', 'content' => 'yii, framework, php, space'],
    ['name' => 'description', 'content' => '国家与邮政编码']
];
$this->registerMetaTag($metaTag);
// $this->registerMetaTag(['name' => 'keywords', 'content' => 'yii, framework, php, space']);
// $this->registerMetaTag(['name' => 'description', 'content' => '国家与邮政编码']);
?>

<h1>Countries</h1>

<?= $this->params['breadcrumbs'][] = 'Country' ?>

<table class="table table-hover">
<?php foreach ($countries as $country): ?>
  <tr>
      <td><?= Html::encode("{$country->code}") ?></td>
      <td><?= Html::encode("{$country->name}") ?></td>
      <td><?= Html::encode("{$country->population}") ?></td>
  </tr>
<?php endforeach;?>
</table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>