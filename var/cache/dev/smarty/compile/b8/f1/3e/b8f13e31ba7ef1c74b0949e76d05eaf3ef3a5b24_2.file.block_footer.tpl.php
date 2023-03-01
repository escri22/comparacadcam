<?php
/* Smarty version 3.1.33, created on 2023-03-01 17:59:37
  from 'C:\xampp\htdocs\comparacadcam\modules\posstaticfooter\block_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63ff8479ab9505_21887230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8f13e31ba7ef1c74b0949e76d05eaf3ef3a5b24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\comparacadcam\\modules\\posstaticfooter\\block_footer.tpl',
      1 => 1591287686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff8479ab9505_21887230 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staticblocks']->value, 'block', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['block']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['block']->value['active'] == 1) {?>
			<p class ="title_block"> <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_prefixVariable2),$_smarty_tpl ) );?>
 </p>
		      
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

		<?php if ($_smarty_tpl->tpl_vars['block']->value['insert_module'] == 1) {?>
		      <?php echo $_smarty_tpl->tpl_vars['block']->value['block_module'];?>

		 <?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
