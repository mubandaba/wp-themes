<?php if (!defined('ABSPATH')) {die;} // Cannot access directly.


//美化二次开发用户请添加自定义设置框架到下面
//美化二次开发用户请添加自定义设置框架到下面
//美化二次开发用户请添加自定义设置框架到下面
//美化二次开发用户请添加自定义设置框架到下面
//美化二次开发用户请添加自定义设置框架到下面
//美化二次开发用户请添加自定义设置框架到下面
//美化二次开发用户请添加自定义设置框架到下面



//
// Field: 自定义选项框架 美化二开专用 代码已经注释
//
CSF::createSection($prefix, array(
    'id'    => 'ztj_home',
    'title' => '子主题设置',
    'icon'  => 'fa fa-paper-plane',
));
CSF::createSection($prefix, array(
    'parent' => 'ztj_home',
    'title'       => '综合设置',
    'icon'        => 'csf-tab-icon fa fa-circle',
    'fields'      => array(
        array(
            'id'      => 'ztj_c_pm',
            'type'    => 'color',
            'title'   => '网站主色系',
            'default' => '#7a7af9'
        ),
        array(
          'id'      => 'show_siteCount',
          'type'    => 'switcher',
          'title'   => '隐藏底部网站统计',
          'desc'    => '默认为显示',
          'default' => false
        ),
        array(
            'id'           => 'siteCount_bg',
            'type'         => 'upload',
            'title'        => '底部网站统计背景',
            'library'      => 'image',
            'placeholder'  => 'http://',
            'button_title' => '上传',
            'remove_title' => '移出',
            'default'      => 'https://img.ztjun.com/wp-content/themes/ripro-chlid/assets/images/siteCount-bg.jpg',
            'desc'      => '首页顶部背景图片'
        ),
        array(
            'id'    => 'siteCount_btn',
            'type'  => 'text',
            'dependency' => array('show_siteCount', '==', false),
            'title' => '底部网站统计按钮',
            'default'=> '加入我们',
            'desc'  => '底部网站统计按钮'
        ),
        array(
            'id'    => 'siteCount_btn_url',
            'type'  => 'text',
            'dependency' => array('show_siteCount', '==', false),
            'title' => '底部网站统计按钮链接',
            'default'=> 'https://www.ztjun.com/',
            'desc'  => '底部网站统计按钮链接'
        ),
        array(
            'id'    => 'siteCount_text',
            'type'  => 'text',
            'title' => '底部网站统计文字',
            'dependency' => array('show_siteCount', '==', false),
            'default'=> '加入主题君VIP，快速免费获取优质资源！',
            'desc'  => '底部网站统计文字'
        ),
        array(
          'id'      => 'show_recomUser',
          'type'    => 'switcher',
          'title'   => '隐藏底部推荐用户',
          'desc'    => '默认为显示',
          'default' => false
        ),
        array(
            'id'    => 'recomUser_id',
            'type'  => 'text',
            'title' => '首页推荐用户ID',
            'dependency' => array('show_recomUser', '==', false),
            'desc'  => '多个ID用,间隔'
        ),
    ),
));
CSF::createSection($prefix, array(
    'parent' => 'ztj_home',
    'title'       => '首页设置',
    'icon'        => 'csf-tab-icon fa fa-circle',
    'fields'      => array(
        array(
            'id'    => 'ztj_home_h1',
            'type'  => 'text',
            'title' => '首页标题',
            'default' => '首页标题',
            'desc'  => '标题下方描述文字'
        ),
        array(
            'id'    => 'ztj_home_p',
            'type'  => 'text',
            'title' => '首页标题描述',
            'default' => '首页标题描述',
            'desc'  => '标题下方描述文字'
        ),
        array(
            'id'           => 'ztj_home_bg',
            'type'         => 'upload',
            'title'        => '首页顶部背景',
            'library'      => 'image',
            'placeholder'  => 'http://',
            'button_title' => '上传',
            'remove_title' => '移出',
            'default'      => 'https://www.ztjun.com/wp-content/themes/ripro-chlid/assets/images/ztj-bg.jpg',
            'desc'      => '首页顶部背景图片'
        ),
        array(
          'id'     => 'ztj_search',
          'type'   => 'fieldset',
          'title'  => '首页搜索',
          'fields' => array(
            array(
                'id'    => 'search_input_text',
                'type'  => 'text',
                'title' => '默认文字',
                'default'  => '搜你想要！',
                'desc'  => '搜索框内默认文字'
            ),
            array(
                'id'    => 'all_text',
                'type'  => 'text',
                'title' => '链接文字',
                'default'      => '全部主题',
                'desc'  => '搜索框上方自定义链接(第一个)'
            ),
            array(
                'id'    => 'all_link',
                'type'  => 'text',
                'title' => '链接地址',
                'default'    => 'https://www.ztjun.com/theme',
                'desc'  => '搜索框上方自定义链接(第一个)'
            ),
            array(
                'id'        => 'link_item',
                'type'      => 'group',
                'title'     => '搜索框上方链接',
                'fields'    => array(
                    array(
                        'id'    => 'text',
                        'type'  => 'text',
                        'title' => '链接文字',
                    ),
                    array(
                        'id'    => 'link',
                        'type'  => 'text',
                        'title' => '链接地址',
                    ),
                ),
            ),
          ),
        ),
    ),
));
CSF::createSection($prefix, array(
    'parent' => 'ztj_home',
    'title'       => '网站底部',
    'icon'        => 'csf-tab-icon fa fa-circle',
    'fields'      => array(
        array(
            'id'           => 'site_foot_logo',
            'type'         => 'upload',
            'title'        => '网站底部logo',
            'library'      => 'image',
            'placeholder'  => 'http://',
            'button_title' => '上传',
            'remove_title' => '移出',
            'default'      => 'https://img.ztjun.com/wp-content/uploads/2020/11/1606447030-944e886ef806846.png',
        ),
        array(
            'id'    => 'site_foot_logo_desc',
            'type'  => 'text',
            'title' => '网站底部logo描述',
            'default'=> '免费WordPress主题模板下载'
        ),
        array(
            'id'        => 'foot_link',
            'type'      => 'group',
            'title'     => '网站底部链接',
            'fields'    => array(
                array(
                    'id'    => 'text',
                    'type'  => 'text',
                    'title' => '链接文字',
                    'default'=> '链接文字'
                ),
                array(
                    'id'    => 'link',
                    'type'  => 'text',
                    'title' => '链接地址',
                    'default'=> 'https://www.ztjun.com/'
                ),
            ),
        ),
    
    ),
));
CSF::createSection($prefix, array(
    'parent' => 'ztj_home',
    'title'       => '列表设置',
    'icon'        => 'csf-tab-icon fa fa-circle',
    'fields'      => array(
     array(
         'id'    => '_diy_ripro_opt2',
         'type'  => 'text',
         'title' => '自定义选项2',
         'after' => '自定义选项22222',
     ),
    
    ),
));