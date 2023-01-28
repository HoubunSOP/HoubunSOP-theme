<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        null,
        _t('站点 LOGO 地址'),
        _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO')
    );

    $form->addInput($logoUrl);

    $sidebarBlock = new \Typecho\Widget\Helper\Form\Element\Checkbox(
        'sidebarBlock',
        [
            'ShowRecentPosts'    => _t('显示最新文章'),
            'ShowRecentComments' => _t('显示最近回复'),
            'ShowCategory'       => _t('显示分类'),
            'ShowArchive'        => _t('显示归档'),
            'ShowOther'          => _t('显示其它杂项')
        ],
        ['ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'],
        _t('侧边栏显示')
    );

    $form->addInput($sidebarBlock->multiMode());
}


function themeFields($layout)
{
  $IsManga= new Typecho_Widget_Helper_Form_Element_Radio('IsManga',array('1' => _t('漫画'),'2' => _t('文章')),'2',_t('是否为漫画'),_t("如果选择漫画，我们会着重以漫画的角度来输出内容以及添加到对应位置"));
  $layout->addItem($IsManga);
  
  $thumbnail = new Typecho_Widget_Helper_Form_Element_Text('thumbnail', NULL, NULL, _t('文章/漫画封面'), _t('漫画建议尺寸1761∶2500，文章建议尺寸3∶2'));
  $layout->addItem($thumbnail);

  $UpDate = new Typecho_Widget_Helper_Form_Element_Text('UpDate', NULL, NULL, _t('漫画发布日期'), _t('请直接填写 月/日，文章无需填写'));
  $layout->addItem($UpDate);
  
}