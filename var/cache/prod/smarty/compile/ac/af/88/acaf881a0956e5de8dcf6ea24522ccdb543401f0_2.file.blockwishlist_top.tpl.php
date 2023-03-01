<?php
/* Smarty version 3.1.33, created on 2023-03-01 18:01:24
  from 'C:\xampp\htdocs\comparacadcam\modules\blockwishlist\blockwishlist_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63ff84e469aa04_24223593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acaf881a0956e5de8dcf6ea24522ccdb543401f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\comparacadcam\\modules\\blockwishlist\\blockwishlist_top.tpl',
      1 => 1591287686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff84e469aa04_24223593 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var wishlistProductsIds='';
var baseDir ='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_dir']->value, ENT_QUOTES, 'UTF-8');?>
';
var static_token='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
';
var isLogged ='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['isLogged']->value, ENT_QUOTES, 'UTF-8');?>
';
var loggin_required='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must be logged in to manage your wishlist.','mod'=>'blockwishlist','js'=>1),$_smarty_tpl ) );?>
';
var added_to_wishlist ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product was successfully added to your wishlist.','mod'=>'blockwishlist','js'=>1),$_smarty_tpl ) );?>
';
var mywishlist_url='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
<?php if (isset($_smarty_tpl->tpl_vars['isLogged']->value) && $_smarty_tpl->tpl_vars['isLogged']->value) {?>
	var isLoggedWishlist=true;
<?php } else { ?>
	var isLoggedWishlist=false;
<?php }
echo '</script'; ?>
>
<div class="wishtlist_Top">
<a class="wishtlist_top" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <i class="lnr lnr-heart"></i>
	<div class="groud-wlist">
		<span class="cart-wishlist-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_product']->value, ENT_QUOTES, 'UTF-8');?>
</span>
		<span class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span>
	</div>	
	</a>
</div><?php }
}
