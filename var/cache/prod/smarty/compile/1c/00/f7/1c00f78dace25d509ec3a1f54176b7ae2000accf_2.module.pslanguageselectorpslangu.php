<?php
/* Smarty version 3.1.33, created on 2023-03-01 18:01:24
  from 'module:pslanguageselectorpslangu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63ff84e4687184_94681594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:pslanguageselectorpslangu',
      1 => 1591287688,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff84e4687184_94681594 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="language-selector-wrapper selector-block">
     <span id="language-selector-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <div class="language-selector localiz_block  dropdown js-dropdown">
      <button data-toggle="dropdown" class=" btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language dropdown','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_lang_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['current_language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="" width="16" height="11" />
		<span class="expand-more"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</span>
		<i class="fa fa-angle-down"></i>
      </button>
      <ul class="dropdown-menu">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
          <li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" class="dropdown-item"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_lang_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="" width="16" height="11" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</a>
          </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>

<?php }
}
