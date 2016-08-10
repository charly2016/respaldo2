<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 18:10:12
         compiled from "C:\xampp\htdocs\tienda2\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:369157ab51e4681329-19917085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '089fd541bae2d6a47e0d4a2c9e3d198fc8aa3a38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda2\\admin\\themes\\default\\template\\content.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '369157ab51e4681329-19917085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab51e47486c7_52130809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab51e47486c7_52130809')) {function content_57ab51e47486c7_52130809($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
