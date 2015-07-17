<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-7-17
 * Time: 下午4:49
 */

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => '题目选项',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'eventchoiceitem',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'App\EventChoiceItem',

    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'id',
        'event' => array(
            'title' => '所属活动',
            'relationship' => 'event',
            'select' => '(:table).title',
        ),
        'question' => array(
            'title' => '所属问题',
            'relationship' => 'question',
            'select' => '(:table).title',
        ),
        'content' => array(
            'title' => '答案选项'
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
        'content' => array(
            'title' => '答案选项',
            'type' => 'text',
        ),
        'event' => array(
            'title' => '所属活动',
            'type' => 'relationship',
            'name_field' => 'title',
        ),
        'question' => array(
            'title' => '所属问题',
            'type' => 'relationship',
            'name_field' => 'title',
        ),
    ),
);