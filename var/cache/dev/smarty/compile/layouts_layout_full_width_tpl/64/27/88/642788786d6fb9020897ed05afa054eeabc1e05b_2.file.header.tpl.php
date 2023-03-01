<?php
/* Smarty version 3.1.33, created on 2023-03-01 17:59:37
  from 'C:\xampp\htdocs\comparacadcam\themes\theme_boxstore3\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63ff8479951f00_97001104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '642788786d6fb9020897ed05afa054eeabc1e05b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\comparacadcam\\themes\\theme_boxstore3\\templates\\_partials\\header.tpl',
      1 => 1592472646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff8479951f00_97001104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84080003363ff847994a200_40495124', 'header_nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198661872663ff847994e086_21772387', 'header_top');
?>

<?php }
/* {block 'header_nav'} */
class Block_84080003363ff847994a200_40495124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_84080003363ff847994a200_40495124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<nav class="header-nav">
		<div class="container">
			<div class="setting_top dropdown js-dropdown">
				<span class="icon ion-android-settings" data-toggle="dropdown"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mi Cuenta','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				<div class="content-setting dropdown-menu">
				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

				</div>
			</div>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav'),$_smarty_tpl ) );?>

		</div>
	</nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_198661872663ff847994e086_21772387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_198661872663ff847994e086_21772387',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row">
		<div class="header_logo col-left col col-lg-3 col-md-12 col-xs-12">
		  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
			<!--img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"-->
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'COMPARA'),$_smarty_tpl ) );?>

		  </a><br />
		  <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CAD/CAD'),$_smarty_tpl ) );?>
</small>
		</div>
		<div class="col-right col col-xs-12 col-lg-9 col-md-12">
			<div class="seach-cart">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

			</div>
		</div>
      </div>
    </div>
  </div>
	<div class="header-bottom">
		<div class="container">
		<div class="bottom-iner">

			<div class="row">
				<!--div class="col col-lg-3 col-md-12 col-xs-12">
									</div-->	
				<div class="col col-lg-12 col-md-12 col-xs-12">
					
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaymegamenu'),$_smarty_tpl ) );?>

				</div>	
			</div>	

		</div>	
		</div>	
	</div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
