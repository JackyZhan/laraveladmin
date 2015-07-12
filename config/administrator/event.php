<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-7-1
 * Time: 下午3:23
 */

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => '活动',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'event',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'App\event',

    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'id',
        'title' => array(
            'title' => '标题'
        ),
        'type' => array(
            'type' => 'enum',
            'title' => '活动类型',
//            'options' => array(
//                'Winter' => '1',
//                'Spring' => '2',
//                'Summer' => '3',
//                'Fall' => '4',
//            ),
//            'options' => array(
//                '第一种类',
//                '第二种类',
//                '第三种类',
//                '第四种类',
//            ),
        ),
        'gallaryid' => array(
            'title' => 'banner图片',
            'type' => 'image',
            'output' => '<img src="/uploads/products/originals/(:value)" height="100" />',
            'location' => public_path() . '/uploads/products/originals/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(65, 57, 'crop', public_path() . '/uploads/products/thumbs/small/', 100),
                array(220, 138, 'landscape', public_path() . '/uploads/products/thumbs/medium/', 100),
                array(383, 276, 'fit', public_path() . '/uploads/products/thumbs/full/', 100)
            )
        ),
    ),

    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'title' => array(
            'title' => '标题',
            'type' => 'text',
        ),
        'content' => array(
            'title' => '正文',
            'type' => 'wysiwyg',
        ),
        'type' => array(
            'type' => 'enum',
            'title' => '活动类型',
//            'options' => array(
//                'Winter' => '1',
//                'Spring' => '2',
//                'Summer' => '3',
//                'Fall' => '4',
//            ),
            'options' => array(
                '001' => 'Winter',
                '002' => 'Spring',
                '003' => 'Summer',
                '004' => 'Fall',
            ),
        ),
        'gallaryid' => array(
            'title' => 'Image (1200 x 1314)',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() .'/uploads/products/originals/',
            'size_limit' => 2,
            'sizes' => array(
                array(65, 57, 'crop', public_path() . '/uploads/products/thumbs/small/', 100),
                array(220, 138, 'landscape', public_path() . '/uploads/products/thumbs/medium/', 100),
                array(383, 276, 'fit', public_path() . '/uploads/products/thumbs/full/', 100)
            )
        ),
    ),
);