<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改推广信息</title>
  <script type="text/javascript" src="/Public/resources/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="/Public/resources/layer/layer.js"></script>
<style type="text/css">
<!--
body {
  margin-left: 3px;
  margin-top: 0px;
  margin-right: 3px;
  margin-bottom: 0px;
}
.STYLE1 {
  color: #e1e2e3;
  font-size: 12px;
}
.STYLE6 {color: #000000; font-size: 12; }
.STYLE10 {color: #000000; font-size: 12px; }
.STYLE19 {
  color: #344b50;
  font-size: 12px;
}
.STYLE21 {
  font-size: 12px;
  color: #3b6375;
}
.STYLE22 {
  font-size: 12px;
  color: #295568;
}
a:link{
  color:#e1e2e3; text-decoration:none;
}
a:visited{
  color:#e1e2e3; text-decoration:none;
}
-->
</style>
  
  <!--引入富文本编辑器的3个js文件-->
<script type="text/javascript" charset="utf-8" src="<?php echo C('PLUGIN_URL');?>/Ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo C('PLUGIN_URL');?>/Ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="<?php echo C('PLUGIN_URL');?>/Ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript"  src="/Public/resources/jquery-1.8.2.min.js"></script>
</head>

<body>
  <style type="text/css">
    #tabbar-div {
      background: #80bdcb none repeat scroll 0 0;
      height: 22px;
      padding-left: 10px;
      padding-top: 1px;
      margin-bottom: 3px;
    }
    #tabbar-div p { margin: 2px 0 0;font-size:12px;
    }
    .tab-front {
      background: #bbdde5 none repeat scroll 0 0;
      border-right: 2px solid #278296;
      cursor: pointer;
      font-weight: bold;
      line-height: 20px;
      padding: 4px 15px 4px 18px;
    }
    .tab-back {
      border-right: 1px solid #fff;
      color: #fff; cursor: pointer;line-height: 20px;
      padding: 4px 15px 4px 18px;
    }
  </style>
  <script type="text/javascript">
  </script>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="<?php echo C('AD_IMG_URL');?>tb.gif" width="14" height="14" /></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1"> 推广管理 -> 邮件推广</span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1">
            <a href="<?php echo U('showlist');?>">返回</a>   &nbsp; </span>
              <span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
  </tr>
  <tr>
    <td>
      <form action="" method="post" enctype="multipart/form-data">
      <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" id="general-tab-show" >
              <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6">
          <div align="right">
            <input type="hidden" value="<?php echo ($extData["id"]); ?>" name='id'>
          <span class="STYLE19">推广主题：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <input type="text" name="ext_title" value="<?php echo ($extData["ext_title"]); ?>" />
        </div><span style="color: red;"><?php echo ((isset($errorInfo["ext_title"]) && ($errorInfo["ext_title"] !== ""))?($errorInfo["ext_title"]):''); ?></span></td>
        </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6">
          <div align="right">
          <span class="STYLE19">推广连接：</span>
          </div>
        </td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19">
         <input type="text" name="ext_url" value="<?php echo ($extData["ext_url"]); ?>" />
        </div><span style="color: red;"><?php echo ((isset($errorInfo["ext_url"]) && ($errorInfo["ext_url"] !== ""))?($errorInfo["ext_url"]):''); ?></span></td>
      </tr>
        <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right">
          <span class="STYLE19">推广数量：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <input type="text" name="ext_number" value="<?php echo ($extData["ext_number"]); ?>" />
        </div><span style="color: red;"><?php echo ((isset($errorInfo["ext_number"]) && ($errorInfo["ext_number"] !== ""))?($errorInfo["ext_number"]):''); ?></span></td></tr>
        <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right">
          <span class="STYLE19">推广内容：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
          <textarea style="width:620px; height:200px;"  name="ext_introduce"><?php echo ($extData["ext_introduce"]); ?></textarea>
        </div><span style="color: red;"><?php echo ((isset($errorInfo["ext_introduce"]) && ($errorInfo["ext_introduce"] !== ""))?($errorInfo["ext_introduce"]):''); ?></span></td>
      </tr>
    </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce"
      <tr>
        <td colspan='100'  bgcolor="#FFFFFF"  class="STYLE6" style="text-align:center;">
        <input type="submit" value="确认修改"  />
        </td>
      </tr>
    </table>
    </form>
    </td>
  </tr>
</table>
</body>
</html>
</script>