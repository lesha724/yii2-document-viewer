<?php
/**
 * Created by PhpStorm.
 * User: Lesha
 * Date: 07.11.2017
 * Time: 23:00
 */

namespace lesha724\documentviewer;

use yii\helpers\Html;

/**
 * Class ViewerJsDocumentViewer
 * @package lesha724\documentviewer
 * @property string $urlViewer
 */
class ViewerJsDocumentViewer extends ADocumentViewer
{
    /**
     * @var string|null
     */
    protected $_urlViewer = null;

    /**
     * getter for urlViewer
     * @return string|null
     */
    /*public function getUrlViewer(){
        return $this->_urlViewer;
    }*/

    /**
     * setter for urlViewer
     * @param $value
     */
    /*public function setUrlViewer($value){
        $this->_urlViewer = $value;
    }*/

    /**
     * Get iframe url for doc
     * @return mixed
     */
    protected function _getIframeUrl()
    {
        return $this->_urlViewer.'#'.$this->url;
    }

    public function init()
    {
        ViewerJsAssets::register($this->view);
        $this->_urlViewer = \Yii::$app->assetManager->getPublishedUrl('@bower/viewerjs/ViewerJS');
        parent::init();
    }

    /**
     * герерация iframe
     * @return string
     */
    protected function _run(){
        $options = [
            'src'=>$this->_getIframeUrl(),
            'width'=>$this->width,
            'height'=>$this->height,
            'allowfullscreen',
            'webkitallowfullscreen'
        ];

        return Html::tag('iframe','',$options);
    }
}