<?php
//<language>简化字</language>
//The second line of this file is the name of the language


//'Custom Information
//'Don't delete %s and ()

return array(

#Front-End & Back-End
'msg'=>array(
	'error'=>'错误',
	'anonymous'=>'无名氏',
	'edit'=>'编辑',
	'login'=>'登录',	
	'logout'=>'退出登录',	
	'view_permissions'=>'查看权限',
	'password'=>'密码',
	'username'=>'用户名',
	'return_to_site'=>'返回网站',
	'dashboard'=>'后台首页',
	'settings'=>'设置管理',
	'official_website'=>'官方网站',
	'new_article'=>'新建文章',
	'article_manage'=>'文章管理',
	'page_manage'=>'页面管理',
	'category_manage'=>'分类管理',
	'tags_manage'=>'标签管理',
	'comment_manage'=>'评论管理',
	'upload_manage'=>'附件管理',	
	'member_manage'=>'用户管理',	
	'theme_manage'=>'主题管理',	
	'plugin_manage'=>'插件管理',	
	'module_manage'=>'模块管理',
	'site_analyze'=>'站内统计摘要',	
	'info_intro'=>'Info Intro',
	'refresh_cache'=>'更新缓存',
	'latest_news'=>'最新动态信息',
	'refresh'=>'更新',	
	'stay_signed_in'=>'保持登录',
	'notify'=>'通知',
	'current_member'=>'当前用户',
	'current_version'=>'当前版本',
	'all_artiles'=>'文章总数',
	'all_pages'=>'页面总数',
	'all_tags'=>'标签总数',
	'all_categorys'=>'分类总数',
	'all_comments'=>'评论总数',
	'all_members'=>'用户总数',
	'all_views'=>'浏览总数',	
	'current_theme'=>'当前主题',
	'current_style'=>'当前样式',
	'xmlrpc_address'=>'XML-RPC地址',
	'system_environment'=>'系统环境',
	'view_rights'=>'查看权限',
	'member_level'=>'用户等级',	
	
	'batch_operation'=>'批量操作',
	'batch_operation_in_progress'=>'批量操作进行中...',
	'previous_operation_not_finished'=>'之前的批量操作还未全部执行,请点击',',<a href=\'#\'>继续</a>',',执行完所有的操作.',	
	''=>'',
),

//Article Level
'article_level_name'=>array(
'0','公开',
'1','私人',
'2','草稿',
),

//User Level
'user_level_name'=>array(
'1'=>'管理员',
'2'=>'网站编辑',
'3'=>'作者',
'4'=>'评论者',
'5'=>'游客',
),

//January, February...
'month'=>array(
'1'=>'一月',
'2'=>'二月',
'3'=>'三月',
'4'=>'四月',
'5'=>'五月',
'6'=>'六月',
'7'=>'七月',
'8'=>'八月',
'9'=>'九月',
'10'=>'十月',
'11'=>'十一月',
'12'=>'十二月',
),

//Jan., Feb. ...
'month_abbr'=>array(
'1'=>'1月',
'2'=>'2月',
'3'=>'3月',
'4'=>'4月',
'5'=>'5月',
'6'=>'6月',
'7'=>'7月',
'8'=>'8月',
'9'=>'9月',
'10'=>'10月',
'11'=>'11月',
'12'=>'12月',
),

//Sunday, Monday..
'week'=>array(
'1'=>'星期日',
'2'=>'星期一',
'3'=>'星期二',
'4'=>'星期三',
'5'=>'星期四',
'6'=>'星期五',
'7'=>'星期六',
),

//Sun., Mon. ...
'week_abbr'=>array(
'1'=>'日',
'2'=>'一',
'3'=>'二',
'4'=>'三',
'5'=>'四',
'6'=>'五',
'7'=>'六',
),

//Custom Error Information
'error'=>array(
'0'=>'未知错误',
'1'=>'未知命令',
'2'=>'未查询到相关页面',
'3'=>'参数提交错误',
'4'=>'数据库连接错误',
'5'=>'非法访问',
'6'=>'没有权限',
'7'=>'用户名为空,超长或格式错误',
'8'=>'登录失败',
'9'=>'该文章不存在',
'10'=>'系统初始化失败',
'11'=>'编辑文章失败',
'12'=>'编辑分类失败',
'13'=>'该分类下有文章，删除失败',
'14'=>'你的评论已被拦截,发表失败.',
'15'=>'名称不能为空或过长及格式不正确',
'16'=>'编辑用户失败',
'17'=>'删除用户失败',
'18'=>'删除评论失败',
'19'=>'删除引用失败',
'20'=>'发送引用失败',
'21'=>'文件上传失败',
'22'=>'文件删除失败',
'23'=>'系统重建失败',
'24'=>'搜索字符串失败',
'25'=>'保存设置失败',
'26'=>'文件类型超出设定范围',
'27'=>'文件大小超出设定范围',
'28'=>'文件已存在，请先删除',
'29'=>'邮箱不能为空或过长及格式不正确',
'30'=>'网址不能为空或过长及格式不正确',
'31'=>'请勿冒名顶替,如果你是该用户,请先登录后再发表评论',
'32'=>'由于设定时间间隔而拒绝操作',
'33'=>'编辑关键字失败',
'34'=>'删除关键字失败',
'35'=>'编辑Tags失败',
'36'=>'删除Tags失败',
'37'=>'编辑文件失败',
'38'=>'验证码输入错误',
'39'=>'请不要对Blog提交相同的评论',
'40'=>'评论功能已关闭',
'41'=>'引用功能已关闭',
'42'=>'编辑评论失败',
'43'=>'校验码错误,请勿发布垃圾信息',
'44'=>'非公开文章不能发表评论',
'45'=>'留言本只允许注册用户回复,游客只能留言.',
'46'=>'评论内容不能为空或过长',
'47'=>'回复功能只对注册用户开启,游客只能留言.',
'48'=>'插件未启用,请在管理界面启用.',
'49'=>'该分类下有子分类,删除失败.',
'50'=>'指定的父分类不存在',
'51'=>'子分类下不能再包含分类',
'52'=>'超过博客设置的最大回复层数',
'53'=>'你的评论已进入审核过程,请勿再次提交.',
'54'=>'密码只能使用a-z0-9`~!@#$%^&*-_字符组事,且不能小于8位.',
'55'=>'MD5哈希算法后的字符串长度不是32位的',
'56'=>'超出了设置的回复层数！',
'57'=>'父评论和子评论不在同一篇文章!',
'58'=>'不存在父分类',
'59'=>'不存在子分类',
'60'=>'回复评论失败',
'61'=>'该记录不存在',
'62'=>'同名用户已存在,请修改用户名.',
'63'=>'草稿禁止浏览',
'64'=>'启用失败,该应用的xml配置信息不是Z-Blog 2.X版本的.',
'65'=>'Windows Phone手机自带IE可能无法正常上传，建议您使用第三方浏览器。',
'66'=>'用户名和密码不能为空',
),



'ZC_MSGXXX'=>array(
'001'=>'名称',
'002'=>'密码',
'003'=>'用户名',
'004'=>'保存',
'005'=>'当前用户',
'006'=>'官方网站',
'007'=>'侧栏管理',
'008'=>'侧栏',
'009'=>'用户登录',
'010'=>'用户名,密码不能为空',
'011'=>'发布',
'012'=>'分类',
'013'=>'评论',
'014'=>'引用',
'015'=>'查看',
'016'=>'摘要',
'017'=>'显示',
'018'=>'来宾',
'019'=>'超级管理%s登录%s验证身份%s注销%s后台管理%s发表评论%s查看权限%s查看RSS输出%s批量操作%s索引重建%s文章重建%s管理文章%s编辑文章%s发布文章%s删除文章%s管理分类%s修改分类%s删除分类%s管理评论%s删除评论%s管理用户%s编辑用户%s创建用户%s修改用户%s删除用户%s附件管理%s附件上传%s附件删除%s站内搜索%sTag管理%sTag编辑%sTag保存%sTag删除%s网站设置%s网站设置保存%s插件管理%s侧栏模块管理%s所有文件管理%s所有评论管理%s所有附件管理%s', 
'020'=>'退出登录',
'021'=>'查看权限',
'022'=>'管理',
'023'=>'您好,%s',
'024'=>'发表留言',
'025'=>'控制面板',
'026'=>'网站分类',
'027'=>'最新留言',
'028'=>'文章归档',
'029'=>'站点统计',
'030'=>'网站收藏',
'031'=>'友情链接',
'032'=>'最近发表',
'033'=>'名称不能为空',
'034'=>'名称或邮箱,网址格式不对',
'035'=>'留言不能为空或过长',
'036'=>'%s',
'037'=>'UBB标签',
'038'=>'密码不能小于8位',
'039'=>'图标汇集','Misc',
'040'=>'◎欢迎参与讨论，请在这里发表您的看法、交流您的观点。',
'041'=>'大小',
'042'=>'分页',
'043'=>'私人文章，登录状态下方可查看。',
'044'=>'-',
'045'=>'错误提示',
'046'=>'加入导航栏菜单',
'047'=>'文章编辑',
'048'=>'文章',
'049'=>'记住我,下次回复时不用重新输入个人信息',
'050'=>'日历',
'051'=>'置顶',
'052'=>'导航栏菜单',
'053'=>'邮箱',
'054'=>'网站链接',
'055'=>'正文',
'056'=>'留言最长字数',
'057'=>'显示UBB表情>>',
'058'=>'单击“确定”继续。单击“取消”停止。',
'059'=>'未分类',
'060'=>'标题',
'061'=>'类型',
'062'=>'日期',
'063'=>'删除',
'064'=>'传送引用',
'065'=>'返回网站',
'066'=>'分类管理',
'067'=>'文章管理',
'068'=>'评论管理',
'069'=>'引用管理',
'070'=>'用户管理',
'071'=>'附件管理',
'072'=>'索引重建',
'073'=>'文件重建',
'074'=>'不指定给侧栏',
'075'=>'时间',
'076'=>'ID',
'077'=>'新建分类',
'078'=>'编辑',
'079'=>'排序',
'080'=>'IP',
'081'=>'URL',
'082'=>'文章总数',
'083'=>'当前样式',
'084'=>'当前语言',
'085'=>'Search',
'086'=>'搜索%s，共找到%s个结果',
'087'=>'提交',
'088'=>'重置',
'089'=>'验证',
'090'=>'内容',
'091'=>'通过审核',
'092'=>'加入审核',
'093'=>'网站的标题',
'094'=>'网站的子标题',
'095'=>'回复评论ID',
'096'=>'BLOG版权说明(可以放置备案号和统计代码,支持HTML代码,可用\'&lt;br/&gt;\'标签换行)',
'097'=>'正常评论管理',
'098'=>'错误原因',
'099'=>'未命名文章',
'100'=>'可视编辑',
'101'=>'UBB编辑',
'102'=>'检测到%s备份的数据还未使用!',
'103'=>'播放/隐藏 媒体',
'104'=>'待审核评论管理',
'105'=>'基础设置',
'106'=>'高级设置',
'107'=>'插件管理',
'108'=>'上传图片、影音及其它类型的文件',
'109'=>' 操作正在进行中,请稍候...',
'110'=>'批量操作',
'111'=>'页面管理',
'112'=>'如果你更换了主题模板或修改了某些必需文件重建才能生效的网站设置,请使用\'文件重建\'功能.<br/><br/>重建所有日志可能需要很长时间,请点击\'提交\'按钮执行.',
'113'=>'新建页面',
'114'=>'保存我的登录信息',
'115'=>'分类不能为空',
'116'=>'正文不能为空',
'117'=>'数据获取中',
'118'=>'名称不能为空',
'119'=>'密码不能为空',
'120'=>'邮箱不能为空',
'121'=>'添加新日志',
'122'=>'添加新分类',
'123'=>'添加新用户',
'124'=>'评论总数',
'125'=>'页面总数',
'126'=>'网站地址(默认自动读取当前网址,如果系统的识别功能出现问题,或是需要固化网站域名,请点锁定按钮后输入网址并提交保存.)',
'127'=>'新建用户',
'128'=>'作者',
'129'=>'浏览总数',
'130'=>'浏览',
'131'=>'自动命名上传文件',
'132'=>'首页及分类页翻页条数量',
'133'=>'没有备份内容',
'134'=>'添加Tags',
'135'=>'新建关键字',
'136'=>'新建Tags',
'137'=>'ID值是html页面唯一的,请不要与其它模块的ID重复,建议以fn或div为前缀加文件名.',
'138'=>'Tags',
'139'=>'显示常用Tags',
'140'=>'为0则不限制LI的输出项数',
'141'=>'Tags管理',
'142'=>'新建模块',
'143'=>'UL内LI的最大行数',
'144'=>'模块编辑',
'145'=>'请拖动需要的模块到右侧区域指定侧栏。侧栏中的模块可排序，也可拖至左侧区域移除。',
'146'=>'« 上一篇',
'147'=>'别名',
'148'=>'下一篇 »',
'149'=>'回复',
'150'=>'当前版本',
'151'=>'最后更新',
'152'=>'回复ID',
'153'=>'引自',
'154'=>'最近引用',
'155'=>'更早的文章 »',
'156'=>'« 之后的文章',
'157'=>'任意',
'158'=>'搜索文章',
'159'=>'信息摘要',
'160'=>'页面',
'161'=>'页面编辑',
'162'=>'分类总数',
'163'=>'Tags总数',
'164'=>'最新动态信息',
'165'=>'正在获取中，请稍候。',
'166'=>'用户总数',
'167'=>'站内统计摘要',
'168'=>'新建文章',
'169'=>'总计耗时%n秒',
'170'=>'文件名',
'171'=>'日志页面显示评论的数量(设为0则评论不分页,全部输出在同一页.)',
'172'=>'备份与更新',
'173'=>'全局设置',
'174'=>'所选项目通过审核',
'175'=>'BLOG用户所在的时区',
'176'=>'BLOG 页面语言',
'177'=>'所选项目加入审核',
'178'=>'文章存放目录',
'179'=>'此目录下文章的默认模板',
'180'=>'无',
'181'=>'单次重建文件数目',
'182'=>'单次重建文件后的间隔秒数',
'183'=>'允许上传文件的类型(以|做为分隔)',
'184'=>'上传文件的最大字节数',
'185'=>'发表评论时启用验证码',
'186'=>'页面设置',
'187'=>'默认模板',
'188'=>'模板',
'189'=>' 提示:删除用户会将该用户所有的文章和评论及附件全部删除。',
'190'=>'首页及分类页显示文章的数量',
'191'=>'管理页显示记录的数量',
'192'=>'« 上一页评论',
'193'=>'下一页评论 »',
'194'=>'翻页条的条目数量',
'195'=>'父分类',
'196'=>'样式',
'197'=>'原作',
'198'=>'简介',
'199'=>'主题自带插件',
'200'=>'手动生成摘要',
'201'=>'状态',
'202'=>'启用',
'203'=>'停用',
'204'=>'当前主题',
'205'=>'无名氏',
'206'=>'主机服务器所在的时区',
'207'=>'返回源地址',
'208'=>'逗号分割',
'209'=>'启用单日志页面前后文章导航',
'210'=>'文件管理',
'211'=>'留言列表',
'212'=>'查看评论',
'213'=>'首页',
'214'=>'分类查看',
'215'=>'评论设置',
'216'=>'在正文插入分隔符&quot;&lt;hr class=&quot;more&quot; /&gt;&quot;可以让系统识别摘要内容。如需另外指定摘要内容，请点击 ',
'217'=>'',
'218'=>'',
'219'=>'',
'220'=>'',
'221'=>'',
'222'=>'删除全部未审核评论',
'223'=>'主题管理',
'224'=>'要查询的内容',
'225'=>'更新',
'226'=>'启用RSS的全文输出',
'227'=>'批量操作已完成.',
'228'=>'删除所选项目',
'229'=>'全选',
'230'=>'日志页面相关文章的数量(设为0则不输出相关文章内容)',
'231'=>'相关文章',
'232'=>'点击这里获取该日志的TrackBack引用地址',
'233'=>'%y年',
'234'=>'搜索符合条件的评论',
'235'=>'&laquo;',
'236'=>'&raquo;',
'237'=>'确认密码',
'238'=>'文件大小',
'239'=>'回上级目录',
'240'=>'当前路径',
'241'=>'Tags编辑',
'242'=>'用户编辑',
'243'=>'分类编辑',
'244'=>'留言编辑',
'245'=>'后台首页',
'246'=>'文件编辑',
'247'=>'网站设置',
'248'=>'后台管理',
'249'=>'等级',
'250'=>'正在保存',
'251'=>'秒后自动保存',
'252'=>'恢复',
'253'=>'已恢复',
'254'=>'这将覆盖你原有的内容！继续？',
'255'=>'静态化设置',
'256'=>'无内容',
'257'=>'Z-Blog提示',
'258'=>'自动保存成功',
'259'=>'重建首页缓存文件',
'260'=>'登录',
'261'=>' 提示:\'未分类\'分类是系统默认加入的分类,不能删除;未指定分类的文章都归入\'未分类\'下,该分类下没有文章的话将不显示在前台分类列表中.',
'262'=>'关闭评论功能',
'263'=>'启用Chrome推送通知',
'264'=>'取消',
'265'=>'回复该留言',
'266'=>' 操作成功.',
'267'=>' 操作失败.',
'268'=>' 提示:需要进行\'[索引重建]\'.',
'269'=>' 提示:需要进行\'<a href=\'%u\'>文件重建</a>.',
'270'=>'所属文章',
'271'=>'启用评论倒序输出',
'272'=>'评论编辑',
'273'=>' 之前的批量操作还未全部执行,请点击',',<a href=\'#\'>继续</a>',',执行完所有的操作.',
'274'=>'显示搜索文章的数量',
'275'=>'发布于',
'276'=>'正在为您加载编辑器',
'277'=>'系统模块',
'278'=>'配置',
'279'=>'侧栏加载方式',
'280'=>'自动',
'281'=>'缓存',
'282'=>'这些应用未启用,无法启用此应用:',
'283'=>'该应用无法被停用,如果要停用请先停用这些应用:',
'284'=>'该应用无法被安装,这些应用与它冲突:',
'285'=>'该应用可能与这些应用冲突,请关注作者官方网站:',
'286'=>'用户自定义模块',
'287'=>'主题定义模块',
'288'=>'插件定义模块',
'289'=>'碎片模块',
'290'=>'默认侧栏',
'291'=>'侧栏2',
'292'=>'侧栏3',
'293'=>'侧栏4',
'294'=>'侧栏5',
'295'=>'内含<span>%n</span>个模块',
'296'=>'手动修改并锁定网站地址',
'297'=>'自动识别网站地址',
'298'=>'隐藏模块标题',
'299'=>'该模块在模版中的独立调用标签为:',
'300'=>'语言包(部分模板和插件可能依然显示其它的语言。)',
'301'=>'打开代码高亮(系统自带编辑器使用SyntaxHighLighter代码高亮库，使用其它编辑器可能不同)',
'302'=>'刷新缓存'
),


);

?>