<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */
/* @var $this yii\web\View */
/* @var $widget \skeeks\yii2\nanogalleryWidget\NanogalleryWidget */
$widget = $this->context;
?>
<?= \yii\helpers\Html::beginTag("div", $widget->options); ?>

    <? if ($widget->items) : ?>
        <div style="text-align: center; padding-top: 20px;" class="sx-loader-container">
            Загрузка...
        </div>
        <div class="sx-grid-images" style="display: none;">
           <? foreach ($widget->items as $item) : ?>
               <a href="<?= \yii\helpers\ArrayHelper::getValue($item, 'src'); ?>"
                  data-ngthumb="<?= \yii\helpers\ArrayHelper::getValue($item, "preview_src"); ?>"
                  data-ngdesc="<?= \yii\helpers\ArrayHelper::getValue($item, "description"); ?>">
                   <?= \yii\helpers\ArrayHelper::getValue($item, "title"); ?>
               </a>
           <? endforeach; ?>
        </div>
    <? endif; ?>

<?= \yii\helpers\Html::endTag("div"); ?>
