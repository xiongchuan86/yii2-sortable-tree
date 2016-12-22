Sortable Tree Widget for Yii 2
====================
The Sortable Tree widget based on Jquery-sortable-list,drag and drop to sort the tree.


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xiongchuan/yii2-sortable-tree "*"
```

or add

```json
"xiongchuan/yii2-sortable-tree": "*"
```

to the require section of your composer.json.

Usage
------------
Once the extension is installed, simply add widget to your page as follows:

```php
<?php echo xiongchuan\tree\SortableTree::widget([
            'items' => [
                ['title' => 'Category 1'],
                ['title' => 'Category 2'],
                [
                    'title' => 'Category 3',
                    'children' => [
                        [
                            'title' => 'Category 3.1',
                        ],
                        [
                            'title' => 'Category 3.2',
                            'children' => [
                                [
                                    'title' => 'Category 3.2.1',
                                ]
                            ],
                            'folder' => true,
                        ],
                    ],
                    'folder' => true,
                ],

            ],
            'clientOptions' => [
                'autoCollapse' => true,
                'clickFolderMode' => 3,
                'activate' => new \yii\web\JsExpression('
                        function(node, data) {
                              node  = data.node;
                              // Log node title
                              console.log(node.title);
                        }
                '),
            ],
        ]); ?>
```
