<?php
/* Smarty version 3.1.31, created on 2018-05-29 13:13:20
  from "C:\xampp\htdocs\secondmodx\setup\templates\language.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b0d35d00729e8_33131241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '660b4d281f12d327da88d222d386560e2e3f08d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\secondmodx\\setup\\templates\\language.tpl',
      1 => 1527589936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0d35d00729e8_33131241 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="install" action="?" method="post">

<?php if ($_smarty_tpl->tpl_vars['restarted']->value) {?>
    <br class="clear" />
    <br class="clear" />
    <p class="note"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['restarted_msg'];?>
</p>
<?php }?>

<div class="setup_navbar" style="border-top: 0;">
    <p class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['choose_language'];?>
:
        <select name="language" autofocus="autofocus">
            <?php echo $_smarty_tpl->tpl_vars['languages']->value;?>

    	</select>
    </p>

    <input type="submit" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['select'];?>
" />
</div>
</form><?php }
}
