<?
if(!defined("__ZBXE__")) exit();

// 화면에 디스플레이 할때만 동작
if($called_position != "before_display_content") return;

// XE MIN CSS 로드 옵션
if(file_exists("./common/css/xe.min.css.bak") && $addon_info->css_min == "N") rename("./common/css/xe.min.css.bak","./common/css/xe.min.css");
if(file_exists("./common/css/xe.min.css") && $addon_info->css_min == "Y") rename("./common/css/xe.min.css","./common/css/xe.min.css.bak");

// XE MIN CSS .btn 제외 XE MIN CSS 로드 옵션
if($addon_info->css_btn == "Y") Context::addCssFile("./addons/CssOutPlus/css/xe.min.css");

// XE MIN CSS .btn 로드 옵션
if($addon_info->css_btn_skin == "old_xe")Context::addCssFile("./addons/CssOutPlus/css/old_xe.css");
if($addon_info->css_btn_skin == "bootstrap")Context::addCssFile("./addons/CssOutPlus/css/bootstrap.css");

// CSS 언로드 옵션
if($addon_info->css_option_out1 == "Y") Context::unloadCSSFile("$addon_info->css_get_out1"); //1번
if($addon_info->css_option_out2 == "Y") Context::unloadCSSFile("$addon_info->css_get_out2"); //2번

// CSS 로드 옵션
if($addon_info->css_option_plus1 == "Y") Context::addCssFile("$addon_info->css_get_plus1"); //1번
if($addon_info->css_option_plus2 == "Y") Context::addCssFile("$addon_info->css_get_plus2"); //2번

?>