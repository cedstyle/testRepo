<?php /* Smarty version Smarty-3.1.14, created on 2014-05-05 09:48:15
         compiled from "C:\wamp\www\prestashop\admin\themes\default\template\helpers\tree\tree_toolbar_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256353675e5f952635-74633095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fe22708b49844ad2d45c1efb2bb4b083d50d444' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\helpers\\tree\\tree_toolbar_search.tpl',
      1 => 1397146152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256353675e5f952635-74633095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'id' => 0,
    'name' => 0,
    'class' => 0,
    'typeahead_source' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53675e5f9bd875_65627322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53675e5f9bd875_65627322')) {function content_53675e5f9bd875_65627322($_smarty_tpl) {?>

<!-- <label for="node-search"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);?>
</label> -->
<div class="pull-right">
	<input type="text"
		<?php if (isset($_smarty_tpl->tpl_vars['id']->value)){?>id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>
		class="search-field <?php if (isset($_smarty_tpl->tpl_vars['class']->value)){?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>"
		placeholder="<?php echo smartyTranslate(array('s'=>'search...'),$_smarty_tpl);?>
" />
</div>

<?php if (isset($_smarty_tpl->tpl_vars['typeahead_source']->value)&&isset($_smarty_tpl->tpl_vars['id']->value)){?>

<script type="text/javascript">
	$(document).ready(
		function()
		{
			$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").typeahead(
			{
				name: "<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
",
				valueKey: 'name',
				local: [<?php echo $_smarty_tpl->tpl_vars['typeahead_source']->value;?>
]
			});

			$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").keypress(function( event ) {
				if ( event.which == 13 ) {
					event.stopPropagation();
				}
			});
		}
	);
</script>
<?php }?>
<?php }} ?>