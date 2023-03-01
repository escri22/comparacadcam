<?php
/* Smarty version 3.1.33, created on 2023-03-01 17:59:37
  from 'C:\xampp\htdocs\comparacadcam\themes\theme_boxstore3\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63ff8479877304_99844652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9716449bc91a9d91e556f417e7fc95850d7d5b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\comparacadcam\\themes\\theme_boxstore3\\templates\\page.tpl',
      1 => 1591287688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff8479877304_99844652 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10386048063ff8479857f08_69724641', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_87391038763ff847985fc08_40322916 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_55398860663ff847985bd85_11174355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87391038763ff847985fc08_40322916', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_137924800963ff8479867906_19441515 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_28390790563ff847986b784_38446904 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_131972592863ff8479863a80_12471969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137924800963ff8479867906_19441515', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28390790563ff847986b784_38446904', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_159014185163ff8479873489_48161731 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_65933861463ff847986f600_72723379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159014185163ff8479873489_48161731', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10386048063ff8479857f08_69724641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10386048063ff8479857f08_69724641',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_55398860663ff847985bd85_11174355',
  ),
  'page_title' => 
  array (
    0 => 'Block_87391038763ff847985fc08_40322916',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_131972592863ff8479863a80_12471969',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_137924800963ff8479867906_19441515',
  ),
  'page_content' => 
  array (
    0 => 'Block_28390790563ff847986b784_38446904',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_65933861463ff847986f600_72723379',
  ),
  'page_footer' => 
  array (
    0 => 'Block_159014185163ff8479873489_48161731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55398860663ff847985bd85_11174355', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131972592863ff8479863a80_12471969', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65933861463ff847986f600_72723379', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
