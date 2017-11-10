online document viewer
======================
виджет для отображения online документов с помощью google viewer, microsoft document viewer и [viewerJs](http://viewerjs.org/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist lesha724/yii2-document-viewer "*"
```

or add

```
"lesha724/yii2-document-viewer": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \lesha724\documentviewer\GoogleDocumentViewer::widget([
      'url'=>'http://example.com/test.doc',//url на ваш документ 
      'width'=>'100%',
      'height'=>'100%',
      //https://geektimes.ru/post/111647/
      'embedded'=>true,
      'a'=>\lesha724\documentviewer\GoogleDocumentViewer::A_BI //A_V = 'v', A_GT= 'gt', A_BI = 'bi'
]); ?>

```

```php
<?= \lesha724\documentviewer\MicrosoftDocumentViewer::widget([
        'url'=>'http://example.com/test.doc',//url на ваш документ
        'width'=>'100%',
        'height'=>'100%'
]); ?>

```

```php
<?php
echo \lesha724\documentviewer\ViewerJsDocumentViewer::widget([
   'url' => '/README-viewer.odt', //url на ваш документ или http://example.com/test.odt
   'width'=>'100%',
   'height'=>'100%',
]);?>
```

Links
-----

1. https://support.office.com/uk-ua/article/%D0%9F%D0%B5%D1%80%D0%B5%D0%B3%D0%BB%D1%8F%D0%B4-%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D1%96%D0%B2-Office-%D0%B2-%D0%86%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82%D1%96-1cc2ea26-0f7b-41f7-8e0e-6461a104544e?ui=uk-UA&rs=uk-UA&ad=UA&fromAR=1
2. https://products.office.com/en-us/office-online/view-office-documents-online
3. https://support.office.com/uk-ua/article/%D0%9F%D1%96%D0%B4%D1%82%D1%80%D0%B8%D0%BC%D0%BA%D0%B0-%D0%B1%D1%80%D0%B0%D1%83%D0%B7%D0%B5%D1%80%D1%96%D0%B2-%D1%83-%D0%B2%D0%B5%D0%B1-%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%B0%D1%85-Office-Online-ad1303e0-a318-47aa-b409-d3a5eb44e452?ui=uk-UA&rs=uk-UA&ad=UA
4. https://geektimes.ru/post/111647/
5. http://viewerjs.org/
6. http://viewerjs.org/examples/
7. https://github.com/kogmbh/ViewerJS