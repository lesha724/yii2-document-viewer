<?php
/**
 * Created by PhpStorm.
 * User: Lesha
 * Date: 08.11.2017
 * Time: 0:29
 */

namespace lesha724\documentviewer;


use yii\web\AssetBundle;

/**
 * Class ViewerJsAssets
 * @package lesha724\documentviewer
 */
class ViewerJsAssets extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle.
     */
    public $sourcePath = '@bower/viewerjs/ViewerJS';
    /**
     * @var array list of JavaScript files that this bundle contains.
     */
    public $js = [
        /*'compatibility.js',
        'pdf.js',
        'pdf.worker.js',
        'pdfjsversion.js',
        'text_layer_builder.js',
        'ui_utils.js',
        'webodf.js',*/
    ];
    /**
     * @var array list of CSS files that this bundle contains.
     */
    public $css = [

    ];
}