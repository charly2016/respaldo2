<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 18:10:19
         compiled from "C:\xampp\htdocs\tienda2\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3085457ab51eb7328d6-17956271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa2603047e3f68627bc239838fad93f47b4b4453' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda2\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3085457ab51eb7328d6-17956271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab51eb755b55_90690478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab51eb755b55_90690478')) {function content_57ab51eb755b55_90690478($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
