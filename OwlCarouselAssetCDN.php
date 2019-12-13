<?php

/**
 * @link      https://github.com/kv4nt/yii2-owl-carousel2
 * @license   https://github.com/kv4nt/yii2-owl-carousel2/blob/master/LICENSE.md
 */

namespace kv4nt\owlcarousel;

use yii\web\AssetBundle;

/**
 * Asset Bundle for Owl Carousel Widget
 *
 * @author Victor Shumeyko <kvant90@gmail.com>
 */
class OwlCarouselAssetCDN extends AssetBundle
{
    /**
     * @var array list of CSS files that this bundle contains.
     */
    public $css = [
        '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css',
        '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css',
    ];

    /**
     * @var array list of JavaScript files that this bundle contains.
     */
    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',
    ];

    /**
     * @var array list of depends assets that this bundle contains.
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
