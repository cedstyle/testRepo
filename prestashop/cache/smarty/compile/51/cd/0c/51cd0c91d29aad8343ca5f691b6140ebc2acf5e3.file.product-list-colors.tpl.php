<?php /* Smarty version Smarty-3.1.14, created on 2014-05-05 09:48:29
         compiled from "C:\wamp\www\prestashop\themes\default-bootstrap\product-list-colors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1347553675e6d6cc176-10281452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51cd0c91d29aad8343ca5f691b6140ebc2acf5e3' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default-bootstrap\\product-list-colors.tpl',
      1 => 1397146152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1347553675e6d6cc176-10281452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'colors_list' => 0,
    'color' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53675e6d706276_65792881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53675e6d706276_65792881')) {function content_53675e6d706276_65792881($_smarty_tpl) {?>

<ul class="color_to_pick_list clearfix">
	<?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colors_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value){
$_smarty_tpl->tpl_vars['color']->_loop = true;
?>
		<li>
			<a
			href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['color']->value['id_product'],null,null,null,null,null,$_smarty_tpl->tpl_vars['color']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
"
			id="color_<?php echo intval($_smarty_tpl->tpl_vars['color']->value['id_product_attribute']);?>
"
			class="color_pick"
			style="background: <?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
;">
			</a>
		</li>
	<?php } ?>
</ul><?php }} ?>