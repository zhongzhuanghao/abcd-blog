<?php
/**
 * Z-Blog with PHP
 * @author 
 * @copyright (C) RainbowSoft Studio
 * @version 2.0 2013-07-05
 */

require_once '../function/c_system_base.php';
require_once '../function/c_system_admin.php';

$zbp->Initialize();
#$zbp->BuildTemplate();

$action=(GetVars('act','GET')=='') ? 'admin' : GetVars('act','GET') ;
if (!CheckRights($action)) {throw new Exception($GLOBALS['lang']['error'][6]);}

$f=null;
switch ($action) {
	case 'ArticleMng':
		if(GetVars('type','GET')==ZC_LOG_TYPE_PAGE){
			$f='Admin_PageMng';
			$blogtitle=$zbp->lang['msg']['page_manage'];	
		}else{
			$f='Admin_ArticleMng';
			$blogtitle=$zbp->lang['msg']['article_manage'];			
		}
		break;
	case 'CategoryMng':
		$f='Admin_CategoryMng';
		$blogtitle=$zbp->lang['msg']['category_manage'];
		break;
	case 'CommentMng':
		$f='Admin_CommentMng';
		$blogtitle=$zbp->lang['msg']['comment_manage'];
		break;
	case 'MemberMng':
		$f='Admin_MemberMng';
		$blogtitle=$zbp->lang['msg']['member_manage'];
		break;
	case 'UploadMng':
		$f='Admin_UploadMng';
		$blogtitle=$zbp->lang['msg']['upload_manage'];
		break;
	case 'TagMng':
		$f='Admin_TagMng';
		$blogtitle=$zbp->lang['msg']['tag_manage'];
		break;
	case 'PluginMng':
		$f='Admin_PluginMng';
		$blogtitle=$zbp->lang['msg']['plugin_manage'];
		break;
	case 'ThemeMng':
		$f='Admin_ThemeMng';
		$blogtitle=$zbp->lang['msg']['theme_manage'];
		break;
	case 'ModuleMng':
		$f='Admin_ModuleMng';
		$blogtitle=$zbp->lang['msg']['module_manage'];
		break;
	case 'SettingMng':
		$f='Admin_SettingMng';
		$blogtitle=$zbp->lang['msg']['settings'];
		break;		
	default:
		$f='Admin_SiteInfo';
		$blogtitle=$zbp->lang['msg']['dashboard'];
		break;
}

require_once $blogpath . 'zb_system/admin/admin_header.php';
require_once $blogpath . 'zb_system/admin/admin_top.php';

?>
<div id="divMain">
<?php
$f();
?>
</div>
<?php
require_once $blogpath . 'zb_system/admin/admin_footer.php';

$zbp->Terminate();

RunTime();
?>