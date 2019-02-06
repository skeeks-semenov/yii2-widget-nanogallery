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
php composer.phar require --prefer-dist skeeks/yii2-widget-nanogallery "^0.0.1"
```

or add

```
"skeeks/yii2-widget-nanogallery": "^0.0.1"
```


How to use
----------

```php
<?= \skeeks\yii2\nanogalleryWidget\NanogalleryWidget::widget([
    'items' => [
        [
            'src' => 'https://images.wallpaperscraft.ru/image/leopard_hischnik_morda_oskal_agressiya_58086_1280x720.jpg',
            'preview_src' => 'https://images.wallpaperscraft.ru/image/leopard_hischnik_morda_oskal_agressiya_58086_1280x720.jpg',
            'title' => 'title',
            'description' => 'description',
        ],
        [
            'src' => 'https://s1.1zoom.ru/b5050/261/348938-sepik_2048x1152.jpg',
            'preview_src' => 'https://s1.1zoom.ru/b5050/261/348938-sepik_2048x1152.jpg',
            'title' => 'title',
            'description' => 'description',
        ],
        [
            'src' => 'https://s1.1zoom.ru/big3/297/Canada_Mountains_Scenery_488936.jpg',
            'preview_src' => 'https://s1.1zoom.ru/big3/297/Canada_Mountains_Scenery_488936.jpg',
            'title' => 'title',
            'description' => 'description',
        ]
    ],
    'clientOptions' => [
        'thumbnailHeight' => 500
        
        //all options see http://nanogallery.brisbois.fr/
    ],
]); ?>
```

How to use for SkeekS CMS
----------

```php

<? 

$tree = \skeeks\cms\models\CmsTree::findOne(10);
$images = $tree->images; 
$items = \yii\helpers\ArrayHelper::map($images, "id", function (\skeeks\cms\models\StorageFile $model) {
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
}); 

?>


<?= \skeeks\yii2\nanogalleryWidget\NanogalleryWidget::widget([
    'items' => $items,
    'clientOptions' => [
        'thumbnailHeight' => 200
        
        //all options see http://nanogallery.brisbois.fr/
    ],
]); ?>

```



![Animation](https://skeeks.com/uploads/all/e7/c1/61/e7c161f5775c1cf184cebed3b1cf51de.gif "Animation")  
[<img src="https://skeeks.com/uploads/all/9a/e4/a1/9ae4a18a23686f3a1d19004807c82c64.png" alt="Screenshot1" width="400"/>](https://skeeks.com/uploads/all/9a/e4/a1/9ae4a18a23686f3a1d19004807c82c64.png)
[<img src="https://skeeks.com/uploads/all/6c/c1/6d/6cc16d8e75a04a52813e59478ef9c048.png" alt="Screenshot1" width="400"/>](https://skeeks.com/uploads/all/6c/c1/6d/6cc16d8e75a04a52813e59478ef9c048.png)

Video
------------

[<img src="https://skeeks.com/uploads/all/87/3b/01/873b017127632e3d09b636555869a599.jpg" alt="Video" width="400"/>](https://www.youtube.com/watch?v=LXAGrxcmQiE)


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

