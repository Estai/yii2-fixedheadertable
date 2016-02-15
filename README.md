#Yii2-JFixedHeaderTable Widget



## Install

Either run

```composer require estai/yii2-fixedheadertable "@dev"```

or add

```"estai/yii2-fixedheadertable": "@dev"```

to the ```require``` section of your `composer.json` file.

## Usage

```php
<? \estai\fixedheadert\JFixedHeaderTableWidget::widget([
    'container' => '.table',
    'settings' => [
        // Plugin options (http://www.fixedheadertable.com/)
    ]
]); ?>
    
<table class="table">
    ...
</table>
```
