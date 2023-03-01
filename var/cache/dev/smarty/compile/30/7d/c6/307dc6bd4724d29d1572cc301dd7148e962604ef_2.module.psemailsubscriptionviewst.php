<?php
/* Smarty version 3.1.33, created on 2023-03-01 17:59:37
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63ff8479b32680_96135751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1591287688,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff8479b32680_96135751 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\comparacadcam/themes/theme_boxstore3/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->
<div class="ft_newsletter ">


    <div id="block-newsletter-label" class="title-newsletter" >
		
			<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign Up For Newsletters','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
			<?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
				<p class="desc"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
			<?php }?>
		
	</div>
   
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
        <div class="row">
          <div class="col-xs-12">
		  
            <input
              class="btn btn-primary float-xs-right hidden-xs-down"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
            <input
              class="btn btn-primary float-xs-right hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
			
            <div class="input-wrapper">
              <input
                name="email"
                type="email"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
                aria-labelledby="block-newsletter-label"
              >
            </div>
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
          <div class="col-xs-12">
             
              <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                </p>
              <?php }?>
              <?php if (isset($_smarty_tpl->tpl_vars['id_module']->value)) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

              <?php }?>
          </div>
        </div>
      </form>

</div>

<!-- end C:\xampp\htdocs\comparacadcam/themes/theme_boxstore3/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
