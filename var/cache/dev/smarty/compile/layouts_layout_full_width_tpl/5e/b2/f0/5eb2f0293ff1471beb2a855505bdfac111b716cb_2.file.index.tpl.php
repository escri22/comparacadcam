<?php
/* Smarty version 3.1.33, created on 2023-03-01 17:59:37
  from 'C:\xampp\htdocs\comparacadcam\themes\theme_boxstore3\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63ff8479848503_03310156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5eb2f0293ff1471beb2a855505bdfac111b716cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\comparacadcam\\themes\\theme_boxstore3\\templates\\index.tpl',
      1 => 1591287688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff8479848503_03310156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15266135363ff8479838b09_57407732', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_29498436463ff847983c987_12126797 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_188808596063ff8479844681_23729798 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_158657829963ff8479840809_91014814 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188808596063ff8479844681_23729798', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15266135363ff8479838b09_57407732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_15266135363ff8479838b09_57407732',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_29498436463ff847983c987_12126797',
  ),
  'page_content' => 
  array (
    0 => 'Block_158657829963ff8479840809_91014814',
  ),
  'hook_home' => 
  array (
    0 => 'Block_188808596063ff8479844681_23729798',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29498436463ff847983c987_12126797', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158657829963ff8479840809_91014814', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
