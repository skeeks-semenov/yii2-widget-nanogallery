<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\yii2\nanogalleryWidget\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class NanogalleryWidgetAsset extends \skeeks\cms\base\AssetBundle
{
    public $sourcePath = '@skeeks/yii2/nanogalleryWidget/assets/src';

    public $css = [
        'vendor/nanogallery-5.10.3/dist/css/nanogallery.min.css',
        'vendor/nanogallery-5.10.3/dist/css/themes/light/nanogallery_light.min.css',
    ];

    public $js = [
        'vendor/nanogallery-5.10.3/dist/jquery.nanogallery.min.js',
    ];

    public $depends = [
        YiiAsset::class
    ];
    
    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);

       
        $appendTimestamp = \Yii::$app->assetManager->appendTimestamp;
        \Yii::$app->assetManager->appendTimestamp = false;


        $href = self::getAssetUrl('vendor/nanogallery-5.10.3/dist/css/themes/light/font/nano_icon_font3.woff');
        \Yii::$app->view->registerLinkTag([
            'rel'         => 'preload',
            'href'        => $href,
            'as'          => 'font',
            'type'        => 'font/woff',
            'crossorigin' => 'crossorigin',
        ]);


        \Yii::$app->assetManager->appendTimestamp = $appendTimestamp;


    }

}