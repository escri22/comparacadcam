<?php
/* Smarty version 3.1.33, created on 2023-03-01 18:01:24
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63ff84e4677788_46183945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1592472444,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff84e4677788_46183945 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="user-info-block">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mi cuenta','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>
	<!--a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink("cart",true),"html","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
?action=show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a-->
	
<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
  <a
	class="logout hidden-sm-down"
	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
	rel="nofollow"
  >
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Salir','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </a>
  <a
	class="account"
	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
	title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ver mi cuenta','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
	rel="nofollow"
  >
	<i class="material-icons hidden-md-up logged">&#xE7FF;</i>
	<span class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  </a>
<?php } else { ?>
  <a
	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
	title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
	rel="nofollow"
  >
	<span class="login"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
  </a>
<?php }?>
</div>

<?php }
}
