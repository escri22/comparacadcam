<?php
/* Smarty version 3.1.33, created on 2023-03-01 18:01:17
  from 'C:\xampp\htdocs\comparacadcam\backoffice\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63ff84dd003203_00107120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1d882efe9e8920aae921b5e86bd4884499b19b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\comparacadcam\\backoffice\\themes\\default\\template\\content.tpl',
      1 => 1587033346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff84dd003203_00107120 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
