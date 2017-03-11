<?php
/**
 * Created by PhpStorm.
 * User: Neff
 * Date: 11.03.2017
 * Time: 15:09
 */

namespace lesha724\documentviewer;

/**
 * Class MicrosoftDocumentViewer
 * @package lesha724\documentviewer
 * @link https://support.office.com/uk-ua/article/%D0%9F%D0%B5%D1%80%D0%B5%D0%B3%D0%BB%D1%8F%D0%B4-%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D1%96%D0%B2-Office-%D0%B2-%D0%86%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82%D1%96-1cc2ea26-0f7b-41f7-8e0e-6461a104544e?ui=uk-UA&rs=uk-UA&ad=UA&fromAR=1
 * @link https://products.office.com/en-us/office-online/view-office-documents-online
 * @link https://support.office.com/uk-ua/article/%D0%9F%D1%96%D0%B4%D1%82%D1%80%D0%B8%D0%BC%D0%BA%D0%B0-%D0%B1%D1%80%D0%B0%D1%83%D0%B7%D0%B5%D1%80%D1%96%D0%B2-%D1%83-%D0%B2%D0%B5%D0%B1-%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%B0%D1%85-Office-Online-ad1303e0-a318-47aa-b409-d3a5eb44e452?ui=uk-UA&rs=uk-UA&ad=UA
 */
class MicrosoftDocumentViewer extends ADocumentViewer
{
    protected $_urlViewer = "https://view.officeapps.live.com/op/embed.aspx?src={url}";

    protected function _getIframeUrl()
    {
        // TODO: Implement _getIframeUrl() method.

        return str_replace('{url}',$this->url, $this->_urlViewer);
    }
}