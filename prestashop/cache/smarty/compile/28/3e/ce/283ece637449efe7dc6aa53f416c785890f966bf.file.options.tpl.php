<?php /* Smarty version Smarty-3.1.14, created on 2014-05-05 09:48:14
         compiled from "C:\wamp\www\prestashop\admin\themes\default\template\helpers\options\options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3022753675e5ea5e693-82557294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '283ece637449efe7dc6aa53f416c785890f966bf' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\helpers\\options\\options.tpl',
      1 => 1397146152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3022753675e5ea5e693-82557294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_id_lang' => 0,
    'current' => 0,
    'token' => 0,
    'table' => 0,
    'option_list' => 0,
    'categoryData' => 0,
    'category' => 0,
    'use_multishop' => 0,
    'field' => 0,
    'key' => 0,
    'hint' => 0,
    'option' => 0,
    'input' => 0,
    'k' => 0,
    'v' => 0,
    'currency_left_sign' => 0,
    'currency_right_sign' => 0,
    'id_lang' => 0,
    'value' => 0,
    'languages' => 0,
    'language' => 0,
    'p' => 0,
    'btn' => 0,
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53675e5f4f4ed4_43100590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53675e5f4f4ed4_43100590')) {function content_53675e5f4f4ed4_43100590($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.replace.php';
?>

<div class="leadin"></div>

<script type="text/javascript">
	id_language = Number(<?php echo $_smarty_tpl->tpl_vars['current_id_lang']->value;?>
);
</script>

<form action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"
	id="<?php if ($_smarty_tpl->tpl_vars['table']->value==null){?>configuration_form<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form<?php }?>"
	method="post"
	enctype="multipart/form-data" class="form-horizontal">
	<?php  $_smarty_tpl->tpl_vars['categoryData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoryData']->_loop = false;
 $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoryData']->key => $_smarty_tpl->tpl_vars['categoryData']->value){
$_smarty_tpl->tpl_vars['categoryData']->_loop = true;
 $_smarty_tpl->tpl_vars['category']->value = $_smarty_tpl->tpl_vars['categoryData']->key;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['top'])){?><?php echo $_smarty_tpl->tpl_vars['categoryData']->value['top'];?>
<?php }?>
		<div class="panel <?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['categoryData']->value['class'];?>
<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_fieldset_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
">
			
			<div class="panel-heading">
				<i class="<?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['icon'])){?><?php echo $_smarty_tpl->tpl_vars['categoryData']->value['icon'];?>
<?php }else{ ?>icon-cogs<?php }?>"></i>
				<?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['title'])){?><?php echo $_smarty_tpl->tpl_vars['categoryData']->value['title'];?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Options'),$_smarty_tpl);?>
<?php }?>
			</div>

			

			<?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['description'])&&$_smarty_tpl->tpl_vars['categoryData']->value['description'])){?>
				<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['categoryData']->value['description'];?>
</div>
			<?php }?>
			
			<?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['info'])&&$_smarty_tpl->tpl_vars['categoryData']->value['info'])){?>
				<p><?php echo $_smarty_tpl->tpl_vars['categoryData']->value['info'];?>
</p>
			<?php }?>

			<?php if (!$_smarty_tpl->tpl_vars['categoryData']->value['hide_multishop_checkbox']&&$_smarty_tpl->tpl_vars['use_multishop']->value){?>
			<div class="well clearfix">
				<label class="control-label col-lg-3">
					<i class="icon-sitemap"></i> <?php echo smartyTranslate(array('s'=>'Multistore'),$_smarty_tpl);?>

				</label>
				<div class="col-lg-9">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_multishop_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_multishop_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
_on" value="1" onclick="toggleAllMultishopDefaultValue($('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_fieldset_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
'), true)">
						<label for="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_multishop_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
_on">
							<?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>

						</label>
						<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_multishop_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_multishop_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
_off" value="0" checked="checked" onclick="toggleAllMultishopDefaultValue($('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_fieldset_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
'), false)">
						<label for="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_multishop_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
_off">
							<?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>

						</label>
						<a class="slide-button btn"></a>
					</span>
					<div class="row">
						<div class="col-lg-12">
							<p class="help-block">
								<strong><?php echo smartyTranslate(array('s'=>'Check / Uncheck all'),$_smarty_tpl);?>
</strong>
								<?php echo smartyTranslate(array('s'=>'(If you are editing this page for several shops, some fields may be disabled. If you need to edit them, you will need to check the box for each field)'),$_smarty_tpl);?>

							</p>
						</div>
					</div>
				</div>
			</div>
			<?php }?>

			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categoryData']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='hidden'){?>
						<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" />
					<?php }else{ ?>
						<div class="form-group <?php if (isset($_smarty_tpl->tpl_vars['field']->value['form_group_class'])){?> <?php echo $_smarty_tpl->tpl_vars['field']->value['form_group_class'];?>
 <?php }?>">
							<div id="conf_id_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['is_invisible']){?> class="isInvisible"<?php }?>>								
								
									<?php if (isset($_smarty_tpl->tpl_vars['field']->value['title'])&&isset($_smarty_tpl->tpl_vars['field']->value['hint'])){?>
										<label class="control-label col-lg-3 <?php if (isset($_smarty_tpl->tpl_vars['field']->value['required'])&&$_smarty_tpl->tpl_vars['field']->value['required']&&$_smarty_tpl->tpl_vars['field']->value['type']!='radio'){?>required<?php }?>" for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
											<?php if (!$_smarty_tpl->tpl_vars['categoryData']->value['hide_multishop_checkbox']&&$_smarty_tpl->tpl_vars['field']->value['multishop_default']&&empty($_smarty_tpl->tpl_vars['field']->value['no_multishop_checkbox'])){?>
											<input type="checkbox" name="multishopOverrideOption[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="1" <?php if (!$_smarty_tpl->tpl_vars['field']->value['is_disabled']){?>checked="checked"<?php }?> onclick="toggleMultishopDefaultValue(this, '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')"/>
											<?php }?>
											<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="
												<?php if (is_array($_smarty_tpl->tpl_vars['field']->value['hint'])){?>
													<?php  $_smarty_tpl->tpl_vars['hint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['hint']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hint']->key => $_smarty_tpl->tpl_vars['hint']->value){
$_smarty_tpl->tpl_vars['hint']->_loop = true;
?>
														<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)){?>
															<?php echo $_smarty_tpl->tpl_vars['hint']->value['text'];?>

														<?php }else{ ?>
															<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>

														<?php }?>
													<?php } ?>
												<?php }else{ ?>
													<?php echo $_smarty_tpl->tpl_vars['field']->value['hint'];?>

												<?php }?>
											" data-html="true">
												<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

											</span>
										</label>
									<?php }elseif(isset($_smarty_tpl->tpl_vars['field']->value['title'])){?>
										<label class="control-label col-lg-3" for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
											<?php if (!$_smarty_tpl->tpl_vars['categoryData']->value['hide_multishop_checkbox']&&$_smarty_tpl->tpl_vars['field']->value['multishop_default']&&empty($_smarty_tpl->tpl_vars['field']->value['no_multishop_checkbox'])){?>
											<input type="checkbox" name="multishopOverrideOption[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="1" <?php if (!$_smarty_tpl->tpl_vars['field']->value['is_disabled']){?>checked="checked"<?php }?> onclick="checkMultishopDefaultValue(this, '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')" />
											<?php }?>
											<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

										</label>
									<?php }?>									
								
								

								
									<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='select'){?>
										<div class="col-lg-9">
											<?php if ($_smarty_tpl->tpl_vars['field']->value['list']){?>
												<select class="fixed-width-xxl" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['field']->value['js'])){?> onchange="<?php echo $_smarty_tpl->tpl_vars['field']->value['js'];?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['field']->value['size'])){?> size="<?php echo $_smarty_tpl->tpl_vars['field']->value['size'];?>
"<?php }?>>
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['field']->value['identifier']];?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['value']==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['field']->value['identifier']]){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
													<?php } ?>
												</select>
											<?php }elseif(isset($_smarty_tpl->tpl_vars['input']->value['empty_message'])){?>
												<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

											<?php }?>
										</div>
									<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='bool'){?>
										<div class="col-lg-9">
											<span class="switch prestashop-switch fixed-width-lg">
												<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_on" value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']){?> checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['field']->value['js']['on'])){?> <?php echo $_smarty_tpl->tpl_vars['field']->value['js']['on'];?>
<?php }?>/>
												<label for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_on" class="radioCheck">
													<?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>

												</label>
												<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['field']->value['value']){?> checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['field']->value['js']['off'])){?> <?php echo $_smarty_tpl->tpl_vars['field']->value['js']['off'];?>
<?php }?>/>
												<label for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_off" class="radioCheck">
													<?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>

												</label>
												<a class="slide-button btn"></a>
											</span>
										</div>
									<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='radio'){?>
										<div class="col-lg-9">
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['choices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<p class="radio">
													<label for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
														<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['field']->value['value']){?> checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['field']->value['js'][$_smarty_tpl->tpl_vars['k']->value])){?> <?php echo $_smarty_tpl->tpl_vars['field']->value['js'][$_smarty_tpl->tpl_vars['k']->value];?>
<?php }?>/>
													 	<?php echo $_smarty_tpl->tpl_vars['v']->value;?>

													</label>
												</p>
											<?php } ?>
										</div>
									<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='checkbox'){?>
										<div class="col-lg-9">
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['choices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<p class="checkbox">
													<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_on" value="<?php echo intval($_smarty_tpl->tpl_vars['k']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['field']->value['value']){?> checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['field']->value['js'][$_smarty_tpl->tpl_vars['k']->value])){?> <?php echo $_smarty_tpl->tpl_vars['field']->value['js'][$_smarty_tpl->tpl_vars['k']->value];?>
<?php }?>/>
													<label class="col-lg-3" for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_on"> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label>
												</p>
											<?php } ?>
										</div>
									<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='text'){?>
										<div class="col-lg-9"><?php if (isset($_smarty_tpl->tpl_vars['field']->value['suffix'])){?><div class="input-group"><?php }?>
											<input type="<?php echo $_smarty_tpl->tpl_vars['field']->value['type'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['field']->value['id'])){?> id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"<?php }?> size="<?php if (isset($_smarty_tpl->tpl_vars['field']->value['size'])){?><?php echo intval($_smarty_tpl->tpl_vars['field']->value['size']);?>
<?php }else{ ?>5<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['field']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['field']->value['autocomplete']){?>autocomplete="off"<?php }?>/>
											<?php if (isset($_smarty_tpl->tpl_vars['field']->value['suffix'])){?>
											<span class="input-group-addon">
												<?php echo strval($_smarty_tpl->tpl_vars['field']->value['suffix']);?>

											</span>
											<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['field']->value['suffix'])){?></div><?php }?>
										</div>
									<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='password'){?>
										<div class="col-lg-9"><?php if (isset($_smarty_tpl->tpl_vars['field']->value['suffix'])){?><div class="input-group"><?php }?>
											<input type="<?php echo $_smarty_tpl->tpl_vars['field']->value['type'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['field']->value['id'])){?> id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"<?php }?> size="<?php if (isset($_smarty_tpl->tpl_vars['field']->value['size'])){?><?php echo intval($_smarty_tpl->tpl_vars['field']->value['size']);?>
<?php }else{ ?>5<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="" <?php if (isset($_smarty_tpl->tpl_vars['field']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['field']->value['autocomplete']){?>autocomplete="off"<?php }?> />
											<?php if (isset($_smarty_tpl->tpl_vars['field']->value['suffix'])){?>
											<span class="input-group-addon">
												<?php echo strval($_smarty_tpl->tpl_vars['field']->value['suffix']);?>

											</span>
											<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['field']->value['suffix'])){?></div><?php }?>
										</div>
									<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='textarea'){?>
										<div class="col-lg-9">
											<textarea class="textarea-autosize" name=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 cols="<?php echo $_smarty_tpl->tpl_vars['field']->value['cols'];?>
" rows="<?php echo $_smarty_tpl->tpl_vars['field']->value['rows'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										</div>
									<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='file'){?>
										<div class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['field']->value['file'];?>
</div>
									<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='color'){?>
										<div class="col-lg-2">
											<div class="input-group">
												<input type="color" size="<?php echo $_smarty_tpl->tpl_vars['field']->value['size'];?>
" data-hex="true" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?>class="<?php echo $_smarty_tpl->tpl_vars['field']->value['class'];?>
" <?php }else{ ?>class="color mColorPickerInput"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['field']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['field']->value['class'];?>
<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" />
											</div>
							            </div>
									<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='price'){?>
										<div class="col-lg-9">
											<div class="input-group fixed-width-lg">
												<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency_left_sign']->value;?>
<?php echo $_smarty_tpl->tpl_vars['currency_right_sign']->value;?>
 <?php echo smartyTranslate(array('s'=>'(tax excl.)'),$_smarty_tpl);?>
</span>
												<input type="text" size="<?php if (isset($_smarty_tpl->tpl_vars['field']->value['size'])){?><?php echo intval($_smarty_tpl->tpl_vars['field']->value['size']);?>
<?php }else{ ?>5<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" />
											</div>
										</div>
									<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='textLang'||$_smarty_tpl->tpl_vars['field']->value['type']=='textareaLang'||$_smarty_tpl->tpl_vars['field']->value['type']=='selectLang'){?>
										<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='textLang'){?>
											<div class="col-lg-9">
												<div class="row">
												<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['id_lang'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['id_lang']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
													<?php if (count($_smarty_tpl->tpl_vars['field']->value['languages'])>1){?>
													<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['id_lang']->value!=$_smarty_tpl->tpl_vars['current_id_lang']->value){?>style="display:none;"<?php }?>>
														<div class="col-lg-9">
													<?php }else{ ?>
													<div class="col-lg-12">
													<?php }?>
															<input type="text"
																name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
"
																value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"
																<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?>class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"<?php }?>
															/>
													<?php if (count($_smarty_tpl->tpl_vars['field']->value['languages'])>1){?>
														</div>
														<div class="col-lg-2">
															<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
																<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['id_lang']->value){?><?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
<?php }?>
																<?php } ?>
																<span class="caret"></span>
															</button>
															<ul class="dropdown-menu">
																<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
																<li>
																	<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
																</li>
																<?php } ?>
															</ul>
														</div>
													</div>
													<?php }else{ ?>
													</div>
													<?php }?>
												<?php } ?>
												</div>
											</div>
										<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='textareaLang'){?>
											<div class="col-lg-9">
												<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['id_lang'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['id_lang']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
													<div class="row translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['id_lang']->value!=$_smarty_tpl->tpl_vars['current_id_lang']->value){?>style="display:none;"<?php }?>>
														<div id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
" class="col-lg-9" >
															<textarea class="textarea-autosize" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['value']->value,'\r\n',"\n");?>
</textarea>
														</div>
														<div class="col-lg-2">
															<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
																<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['id_lang']->value){?><?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
<?php }?>
																<?php } ?>
																<span class="caret"></span>
															</button>
															<ul class="dropdown-menu">
																<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
																<li>
																	<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
																</li>
																<?php } ?>
															</ul>
														</div>

													</div>
												<?php } ?>
												<script type="text/javascript">
													$(document).ready(function() {
														$(".textarea-autosize").autosize();
													});
												</script>
											</div>
										<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='selectLang'){?>
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												<div id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="display: <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['current_id_lang']->value){?>block<?php }else{ ?>none<?php }?>;" class="col-lg-9">
													<select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['language']->value['iso_code'], 'UTF-8');?>
">
														<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
															<option value="<?php if (isset($_smarty_tpl->tpl_vars['v']->value['cast'])){?><?php echo $_smarty_tpl->tpl_vars['v']->value['cast'][$_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value['identifier']]];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value['identifier']];?>
<?php }?>"
																<?php if ($_smarty_tpl->tpl_vars['field']->value['value'][$_smarty_tpl->tpl_vars['language']->value['id_lang']]==$_smarty_tpl->tpl_vars['v']->value['name']){?> selected="selected"<?php }?>>
																<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

															</option>
														<?php } ?>
													</select>
												</div>
											<?php } ?>
										<?php }?>
									<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['field']->value['desc'])&&!empty($_smarty_tpl->tpl_vars['field']->value['desc'])){?>
									<div class="col-lg-9 col-lg-offset-3">
										<p class="help-block">
											<?php if (is_array($_smarty_tpl->tpl_vars['field']->value['desc'])){?>
												<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['desc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
													<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)){?>
														<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
													<?php }else{ ?>
														<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
													<?php }?>
												<?php } ?>
											<?php }else{ ?>
												<?php echo $_smarty_tpl->tpl_vars['field']->value['desc'];?>

											<?php }?>
										</p>
									</div>
									<?php }?>
								
								<?php if ($_smarty_tpl->tpl_vars['field']->value['is_invisible']){?>
								<div class="col-lg-9 col-lg-offset-3">
									<p class="alert alert-warning row-margin-top">
										<?php echo smartyTranslate(array('s'=>'You can\'t change the value of this configuration field in the context of this shop.'),$_smarty_tpl);?>

									</p>
								</div>
								<?php }?>
								
							</div>
						</div>
				<?php }?>
			<?php } ?>
			<?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['bottom'])){?><?php echo $_smarty_tpl->tpl_vars['categoryData']->value['bottom'];?>
<?php }?>
			
				<?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['submit'])||isset($_smarty_tpl->tpl_vars['categoryData']->value['buttons'])){?>
					<div class="panel-footer">
						<?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['submit'])&&!empty($_smarty_tpl->tpl_vars['categoryData']->value['submit'])){?>
						<button type="<?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['submit']['type'])){?><?php echo $_smarty_tpl->tpl_vars['categoryData']->value['submit']['type'];?>
<?php }else{ ?>submit<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['submit']['id'])){?>id="<?php echo $_smarty_tpl->tpl_vars['categoryData']->value['submit']['id'];?>
"<?php }?> class="btn btn-default pull-right" name="<?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['submit']['name'])){?><?php echo $_smarty_tpl->tpl_vars['categoryData']->value['submit']['name'];?>
<?php }else{ ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php }?>"><i class="process-icon-<?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['submit']['imgclass'])){?><?php echo $_smarty_tpl->tpl_vars['categoryData']->value['submit']['imgclass'];?>
<?php }else{ ?>save<?php }?>" ></i> <?php echo $_smarty_tpl->tpl_vars['categoryData']->value['submit']['title'];?>
</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['buttons'])){?>
						<?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categoryData']->value['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value){
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
							<button type="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['type'])){?><?php echo $_smarty_tpl->tpl_vars['btn']->value['type'];?>
<?php }else{ ?>button<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])){?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }else{ ?>btn btn-default<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['name'])){?><?php echo $_smarty_tpl->tpl_vars['btn']->value['name'];?>
<?php }else{ ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']){?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])){?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</button>
						<?php } ?>
						<?php }?>
					</div>
				<?php }?>
			
		</div>
	<?php } ?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminOptions'),$_smarty_tpl);?>

	<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)){?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
Options<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

	<?php }elseif(isset($_GET['controller'])){?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
Options<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

	<?php }?>
</form>


<?php }} ?>