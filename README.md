Work schedule widget for yii2
=====================

A small element for the form of the yii2 framework. Allows you to select working days and time for working on them. Ability to select multiple ranges for one day.

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


How to use without model
----------

```php

\skeeks\yii2\nanogalleryWidget\NanogalleryWidget::widget([
    'name' => 'schedule'
]);

```

How to use with model
----------

```php

$form = new \yii\widgets\ActiveForm();

$form->field($model, 'schedule')->widget(
    \skeeks\yii2\nanogalleryWidget\NanogalleryWidget::class
);

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

