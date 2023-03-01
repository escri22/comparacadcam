<?php
/* Smarty version 3.1.33, created on 2023-03-01 17:59:37
  from 'C:\xampp\htdocs\comparacadcam\themes\theme_boxstore3\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63ff8479aa9b05_07645132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b76b57b8687a6f8d61ee279aaf17757cb693ad74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\comparacadcam\\themes\\theme_boxstore3\\templates\\_partials\\footer.tpl',
      1 => 1591287688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff8479aa9b05_07645132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer-container">

	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col col-lg-8 col-md-12 col-xs-12 box-footer">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3787064863ff8479a9df89_44695551', 'hook_footer');
?>

				</div>
				<div class="col col-lg-4 col-md-12 col-xs-12 footer_block">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlockFooter2'),$_smarty_tpl ) );?>


				</div>
			</div>
		</div>
	</div>
	
	<div class="footer-bottom">	
		<div class="container">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87429140263ff8479aa1e02_86410996', 'hook_footer_before');
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlockFooter1'),$_smarty_tpl ) );?>

		</div>
	</div>
	<div class="after_botom">
		<div class="container">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57777502263ff8479aa5c88_09802977', 'hook_footer_after');
?>

		</div>	
	</div>	
</div>
<?php }
/* {block 'hook_footer'} */
class Block_3787064863ff8479a9df89_44695551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_3787064863ff8479a9df89_44695551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_before'} */
class Block_87429140263ff8479aa1e02_86410996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_87429140263ff8479aa1e02_86410996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer_after'} */
class Block_57777502263ff8479aa5c88_09802977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_57777502263ff8479aa5c88_09802977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_footer_after'} */
}
