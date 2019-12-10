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
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

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
     * @var array
     */
    public $items = [];

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

        $this->clientOptions = ArrayHelper::merge([
            "thumbnailWidth"        => "auto",
            "thumbnailHeight"       => 350,
            "colorScheme"           => "none",
            "thumbnailHoverEffect"  => [
                'name'     => 'labelAppear75',
                'duration' => 300,
            ],
            "theme"                 => "light",
            "thumbnailGutterWidth"  => 0,
            "thumbnailGutterHeight" => 0,
            "i18n"                  => [
                'thumbnailImageDescription' => 'Смотреть фото',
                'thumbnailAlbumDescription' => 'Открыть альбом',
            ],
            "thumbnailLabel"        => [
                'display'  => true,
                'position' => 'overImageOnMiddle',
                'align'    => 'center',
            ],
        ], $this->clientOptions);

        $jsOptions = Json::encode($this->clientOptions);

        $this->view->registerJs(<<<JS
        
    $(".sx-grid-images", $("#" + "{$this->options['id']}")).nanoGallery({$jsOptions});

    $(".sx-loader-container", $("#" + "{$this->options['id']}")).hide();
    $(".sx-grid-images", $("#" + "{$this->options['id']}")).show();
JS
        );
        return $this->render($this->viewFile);
    }
}