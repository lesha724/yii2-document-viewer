<?php
/**
 * Created by PhpStorm.
 * User: Neff
 * Date: 11.03.2017
 * Time: 15:12
 */

namespace lesha724\documentviewer;

/**
 * Class GoogleDocumentViewer
 * @package lesha724\documentviewer
 * @link https://geektimes.ru/post/111647/
 */
class GoogleDocumentViewer extends ADocumentViewer
{
    const A_V = 'v';
    const A_GT = 'gt';
    const A_BI = 'bi';
    /**
     *  включение/выключение (значения соответственно true/false) интерфейса встраиваемого в сторонние html-страницы (по умолчанию false);
     * @var bool
     */
    public $embedded = false;
    /**
     * тип возвращаемого документа:
        “v” — будет отрыто приложение просмотра документа (это значение по умолчанию);
        “gt” — будет возвращен xml документ с распознанным текстом (пример);
        “bi” — будет возвращено изображение страницы документа в формате PNG8 (параметр pagenumber обязателен);
     * @var string
     */
    public $a = self::A_V;

    protected $_urlViewer = "https://docs.google.com/gview?url={url}";

    protected function _getIframeUrl()
    {
        // TODO: Implement _getIframeUrl() method.
        $url = str_replace('{url}',$this->url, $this->_urlViewer);

        if($this->embedded)
            $url.='&embedded=true';

        $url.='&a='.$this->a;

        return $url;
    }
}