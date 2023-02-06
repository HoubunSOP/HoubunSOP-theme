<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        'https://fastly.jsdelivr.net/gh/HoubunSOP/HoubunSOP-remotion@main/public/Images/logo/logo-light.svg',
        _t('站点 LOGO 地址'),
        _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO')
    );
    $form->addInput($logoUrl);
    
    $icoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
      'icoUrl',
      null,
      null,
      _t('站点 图标 地址'),
      _t('在这里填入一个ico URL 地址, 以在浏览器标题前加上一个 图标')
  );

    $form->addInput($icoUrl);

    $backgroundUrl = new \Typecho\Widget\Helper\Form\Element\Text(
      'backgroundUrl',
      null,
      'https://s2.loli.net/2023/01/27/SU9M1XWPgdycYAF.jpg',
      _t('背景图片地址'),
      _t('在这里填入一个图片 URL 地址, 以在网站中设置背景')
  );

  $form->addInput($backgroundUrl);

    $commentImgUrl = new \Typecho\Widget\Helper\Form\Element\Text(
      'commentImgUrl',
      null,
      null,
      _t('评论框背景 地址'),
      _t('在这里填入一个图片 URL 地址')
  );

    $form->addInput($commentImgUrl);

    $swiperCid = new \Typecho\Widget\Helper\Form\Element\Text(
      'swiperCid',
      null,
      null,
      _t('轮播图的文章/漫画cid'),
      _t('在这里填入一个文章/漫画cid(以半角逗号隔开), 以将指定文章/漫画添加到首页轮播图中')
  );

    $form->addInput($swiperCid);
    //todo 重做此处
    $sidebarBlock = new \Typecho\Widget\Helper\Form\Element\Checkbox(
        'sidebarBlock',
        [
            'ShowRecentPosts'    => _t('显示最新文章'),
            'ShowRecentMangas'    => _t('显示最新漫画'),
            'ShowRecentComments' => _t('显示最近回复'),
            'ShowCategory'       => _t('显示分类'),
            'ShowArchive'        => _t('显示归档'),
            'ShowOther'          => _t('显示其它杂项')
        ],
        ['ShowRecentPosts','ShowRecentMangas', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'],
        _t('侧边栏显示')
    );

    $form->addInput($sidebarBlock->multiMode());
    
    $enterCur = new \Typecho\Widget\Helper\Form\Element\Checkbox('enterCur', array('yes' => _t('引用')), array('no'), _t('是否引用自定义指针'));
        $form->addInput($enterCur);

}


function themeFields($layout)
{
  $IsManga= new Typecho_Widget_Helper_Form_Element_Radio('IsManga',array('1' => _t('漫画'),'2' => _t('文章')),'2',_t('是否为漫画'),_t("如果选择漫画，我们会着重以漫画的角度来输出内容以及添加到对应位置"));
  $layout->addItem($IsManga);
  
  $thumbnail = new Typecho_Widget_Helper_Form_Element_Text('thumbnail', NULL, NULL, _t('文章/漫画封面'), _t('漫画建议尺寸1761∶2500，文章建议尺寸3∶2'));
  $layout->addItem($thumbnail);

  $UpDate = new Typecho_Widget_Helper_Form_Element_Text('UpDate', NULL, NULL, _t('漫画发布日期'), _t('请直接填写年/月/日(YYYY/MM/DD)，文章无需填写'));
  $layout->addItem($UpDate);
  
  $author = new Typecho_Widget_Helper_Form_Element_Text('author', NULL, NULL, _t('作者名称'), _t('漫画作者名字'));
  $layout->addItem($author);

  $Magazine= new Typecho_Widget_Helper_Form_Element_Radio('Magazine',array('1' => _t('Kirara'),'2' => _t('MAX'),'3' => _t('Carat'),'4' => _t('Forward'),'5' => _t('Comic Fuz')),null,_t('漫画登刊'),_t("漫画在哪个杂志中连载，不填写为其他"));
  $layout->addItem($Magazine);
  //漫画相关链接
  $MelonBookUrl = new Typecho_Widget_Helper_Form_Element_Text('MelonBookUrl', NULL, NULL, _t('MelonBook链接'), _t('文章无需填写'));
  $layout->addItem($MelonBookUrl);

  $GamersUrl = new Typecho_Widget_Helper_Form_Element_Text('GamersUrl', NULL, NULL, _t('Gamers链接'), _t('文章无需填写'));
  $layout->addItem($GamersUrl);

  $AnimateUrl = new Typecho_Widget_Helper_Form_Element_Text('AnimateUrl', NULL, NULL, _t('Animate链接'), _t('文章无需填写'));
  $layout->addItem($AnimateUrl);
  
}

class Tool{
  public static function avatr($mail, int $size = 100, bool $out = false)
  {
      $Op_avatr = Typecho_Widget::widget('Widget_Options')->gravatars;
      $Str = str_replace('@qq.com','',$mail);
      $avatr = '';
      if(stristr($mail,'@qq.com')&&is_numeric($Str)&&strlen($Str)<11&&strlen($Str)>4){
          $url = 'https://s.p.qq.com/pub/get_face?img_type=3&uin='.$Str;
          $api = get_headers($url,true)['Location'];
          $json_api = json_encode($api);
          $ex_api = explode("&k=",$json_api)[1];
          $k_value = explode("&s=",$ex_api)[0];
          $avatr = 'https://q.qlogo.cn/g?b=qq&k='.$k_value.'&s='.$size;
      }else{
          $mail = md5($mail);
          $avatr = 'https://'.$Op_avatr.'/'.$mail.'?s='.$size;
      }
      if ($out === true) {
          return $avatr;
      }else{
          echo $avatr;
      }
  }
}
class Widget_Post_GetCid extends Widget_Abstract_Contents {
	public function __construct($request, $response, $params = NULL) {
		parent::__construct($request, $response, $params);
		$this->parameter->setDefault(array('pageSize' => $this->options->commentsListSize, 'parentId' => 0, 'ignoreAuthor' => false));
	}
	public function execute() {
		$select  = $this->select()->from('table.contents')
		->where("table.contents.password IS NULL OR table.contents.password = ''")
		->where('table.contents.type = ?', 'post')
		->limit($this->parameter->pageSize)
		->order('table.contents.modified', Typecho_Db::SORT_DESC);
		if ($this->parameter->GetCid) {
			$cid=explode(",",$this->parameter->GetCid);
			$select->where('table.contents.cid in ?', $cid);
		}
		$this->db->fetchAll($select, array($this, 'push'));
	}
}