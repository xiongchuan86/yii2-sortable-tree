<?php
namespace xiongchuan\tree;

use yii\web\AssetBundle;
/**
 * SortableTreeAsset bundle
 *
 * @author chuan xiong <xiongchuan86@gmail.com>
 *
 * @since 1.0
 */
class SortableTreeAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = __DIR__ ;
    /**
     * @var array
     */
    public $css = [
        'assets/css/sortable-tree.css'
    ];
    /**
     * @var array
     */
    public $js = [
        'assets/js/jquery-sortable-lists/jquery-sortable-lists.js',
    ];
    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];

}