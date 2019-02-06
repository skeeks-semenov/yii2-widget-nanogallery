<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\yii2\nanogalleryWidget;

use skeeks\yii2\nanogalleryWidget\assets\NanogalleryWidgetAsset;
use yii\base\Widget;

/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class NanogalleryWidget extends Widget
{
    /**
     * @var string
     */
    public static $autoIdPrefix = 'NanogalleryWidget';

    /**
     * @var array опции контейнера
     */
    public $options = [];

    /**
     * @var array
     */
    public $clientOptions = [];

    /**
     * @var string
     */
    public $viewFile = "nanogallery";

    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        parent::init();

        $this->options['id'] = $this->id."-widget";
        $this->clientOptions['id'] = $this->id."-widget";
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        NanogalleryWidgetAsset::register($this->view);

        return $this->render($this->viewFile);
    }
}