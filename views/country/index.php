<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Countries</h1>

<ul>
<?php foreach ($countries as $country): ?>
    <li>
        <?= Html::encode("{$country->code} ({$country->name})") ?>:<?= $country->population ?>
    </li>
<?php endforeach; ?>
</ul>

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