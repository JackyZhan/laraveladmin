<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-7-17
 * Time: 上午11:09
 */

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => '答题题目',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'eventquestion',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'App\EventQuestion',

    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'id',
        'title' => array(
            'title' => '题目'
        ),
        'answer' => array(
            'title' => '答案',
            'relationship' => 'answer',
            'select' => '(:table).content',
        ),
        'event' => array(
            'title' => '所属活动',
            'relationship' => 'event',
            'select' => '(:table).title',
        ),
    ),
    /**
     * The width of the model's edit form
     *
     * @type int
     */
    'form_width' => 600,

    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'title' => array(
            'title' => '答题题目',
            'type' => 'text',
        ),
        'answer' => array(
            'title' => '答案',
            'type' => 'relationship',
            'name_field' => 'content',
        ),
        'event' => array(
            'title' => '所属活动',
            'type' => 'relationship',
            'name_field' => 'title',
        ),
    ),
);