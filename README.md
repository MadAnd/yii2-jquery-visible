# jquery-visible plugin asset for Yii2
Provides asset class for easy integration of [jquery-visible](https://github.com/customd/jquery-visible/) into your Yii2 application.


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
composer require --prefer-dist "madand/yii2-jquery-visible:*"
```

or add

```
"madand/yii2-jquery-visible": "*"
```

to the `require` section of your `composer.json` file.


## Usage

In the view file register the asset:

```php
\madand\jqueryvisible\JqueryVisibleAsset::register($this);
```


## License

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.
