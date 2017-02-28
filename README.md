Owl Carousel Widget 2
============================

The OwlCarouselWidget is a Yii2 wrapper for the [Owl Carousel 2] (https://owlcarousel2.github.io/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist kv4nt/yii2-owl-carousel2 "*"
```

or add

```
"kv4nt/yii2-owl-carousel2": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use kv4nt\owlcarousel\OwlCarouselWidget;

OwlCarouselWidget::begin([
    'container' => 'div',
    'containerOptions' => [
        'id' => 'my-container-id',
        'class' => 'my-container-class'
    ],
    'pluginOptions' => [
        'autoPlay' => 3000,
        'items' => 4,
        'itemsDesktop' => [1199,3],
        'itemsDesktopSmall' => [979,3]
    ]
]);

<div class="my-item-class"><img src="my-image-1" alt="My Image"></div>
<div class="my-item-class"><img src="my-image-2" alt="My Image"></div>
<div class="my-item-class"><img src="my-image-3" alt="My Image"></div>
<div class="my-item-class"><img src="my-image-4" alt="My Image"></div>


OwlCarouselWidget::end();
