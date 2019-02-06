Image gallery for jQuery
=====================

nanoGALLERY is a touch enabled and fully responsive image gallery with justified, cascading and grid layout.
It supports self hosted images and pulling in Flickr, Google Photos and Google+ photo albums.

[nanogallery.brisbois.fr](http://nanogallery.brisbois.fr/)

[nanoGALLERY github](https://github.com/Kris-B/nanoGALLERY)

[![Latest Stable Version](https://poser.pugx.org/skeeks/yii2-widget-nanogallery/v/stable.png)](https://packagist.org/packages/skeeks/yii2-widget-nanogallery)
[![Total Downloads](https://poser.pugx.org/skeeks/yii2-widget-nanogallery/downloads.png)](https://packagist.org/packages/skeeks/yii2-widget-nanogallery)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist skeeks/yii2-widget-nanogallery "*"
```

or add

```
"skeeks/yii2-widget-nanogallery": "*"
```


How to use
----------

```php

<? $items = \yii\helpers\ArrayHelper::map($images, "id", function (\skeeks\cms\models\StorageFile $model) {
    return [
        'src'         => $model->src,
        'preview_src' => \Yii::$app->imaging->thumbnailUrlOnRequest($model->src,
            new \skeeks\cms\components\imaging\filters\Thumbnail([
                'h' => 350,
                'w' => 0,
            ])
        ),
        'description' => $model->name,
        'title'       => $model->name,
    ];
}); ?>


<?= \skeeks\yii2\nanogalleryWidget\NanogalleryWidget::widget([
    'items' => $items,
    'clientOptions' => [
        'thumbnailHeight' => 200
    ],
]); ?>

```


Video
------------

[![Work schedule widget for yii2](https://www.fresher.ru/manager_content/12-2018/youtube-podvel-tradicionnye-itogi-goda/1.jpg)](https://www.youtube.com/watch?v=mSZi8ukgngA)



Links
----------
* [Github](https://github.com/skeeks-semenov/yii2-widget-nanogallery)
* [Changelog](https://github.com/skeeks-semenov/yii2-widget-nanogallery/blob/master/CHANGELOG.md)
* [Issues](https://github.com/skeeks-semenov/yii2-widget-nanogallery/issues)
* [Packagist](https://packagist.org/packages/skeeks/yii2-widget-nanogallery)

___

> [![skeeks!](https://skeeks.com/img/logo/logo-no-title-80px.png)](https://skeeks.com)  
<i>SkeekS CMS (Yii2) — fast, simple, effective!</i>  
[skeeks.com](https://skeeks.com) | [cms.skeeks.com](https://cms.skeeks.com)

