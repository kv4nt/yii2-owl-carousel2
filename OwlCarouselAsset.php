<?php

/**
 * @link      https://github.com/kv4nt/yii2-owlcarousel2
 * @license   https://github.com/kv4nt/yii2-owlcarousel2/blob/master/LICENSE.md
 */

namespace kv4nt\owlcarousel;

use yii\web\AssetBundle;

/**
 * Asset Bundle for Owl Carousel Widget
 *
 * @author Victor Shumeyko <kvant90@gmail.com>
 */
class OwlCarouselAsset extends AssetBundle
{

    /**
     * @inheritdoc
     */
    public $css = [
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/owl.carousel.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }

}
