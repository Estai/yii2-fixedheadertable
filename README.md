#Yii2-JFixedHeaderTable Widget



## Install

Either run

```composer require Estai/yii2-fixedheadertable "@dev"```

or add

```"Estai/yii2-fixedheadertable": "@dev"```

to the ```require``` section of your `composer.json` file.

## Usage

```php
<? \Estai\fixedheadert\JFixedHeaderTableWidget::widget([
    'container' => '.table',
    'settings' => [
        // Plugin options (http://www.fixedheadertable.com/)
    ]
]); ?>
    
<table class="table">
    ...
</table>
```
