<?php

namespace lesha724\documentviewer;

use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\Html;

/**
 * 
 */
abstract class ADocumentViewer extends Widget
{
    /**
     * @var static ширина iframe
     */
    public $width = '100%';
    /**
     * @var string высота iframe
     */
    public $height = '100%';
    /**
     * @var string url документа
     */
    public $url;
    /**
     * @var string патерн строки viewer
     */
    protected $_urlViewer;

    /**
     * @return string геренрация url для iframe
     */
    protected abstract function _getIframeUrl();

    public function init(){

        parent::init();

        $this->_checkUrl();
    }

    /**
     * проверка не пустой ли url
     */
    protected  function  _checkUrl(){
        if(empty($this->url))
            throw new InvalidConfigException('Ошибка не задан url');

        if(empty($this->_urlViewer))
            throw new InvalidConfigException('Ошибка не задан url viewer');
    }

    public function run()
    {
        parent::run();

        return $this->_run();
    }

    /**
     * герерация iframe
     * @return string
     */
    protected function _run(){
        $options = [
            'src'=>$this->_getIframeUrl(),
            'width'=>$this->width,
            'height'=>$this->height
        ];

        return Html::tag('iframe','',$options);
    }
}
