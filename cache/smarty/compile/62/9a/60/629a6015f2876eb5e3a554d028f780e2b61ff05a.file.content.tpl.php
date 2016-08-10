<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:43:48
         compiled from "C:\xampp\htdocs\tienda2\admin958czvcoa\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1484157ab59c4466c18-97461479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '629a6015f2876eb5e3a554d028f780e2b61ff05a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda2\\admin958czvcoa\\themes\\default\\template\\content.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1484157ab59c4466c18-97461479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab59c4466c16_37122905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab59c4466c16_37122905')) {function content_57ab59c4466c16_37122905($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
