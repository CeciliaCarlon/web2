<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 19:47:07
  from 'C:\xampp\htdocs\TPE\templates\filtro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7dff1bef7a93_88075567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbdabc26c8875d03b00ff0f28501131f2d2e6c32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\filtro.tpl',
      1 => 1602033408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7dff1bef7a93_88075567 (Smarty_Internal_Template $_smarty_tpl) {
?><aside>
    <div>
        <p>Filtrar por genero:</p>
        <select name="select_genero">
            <option type="submit" value=""><a href="tabla">Todas</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                <option type="submit" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><a href="filtrar/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->tipo;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
</aside><?php }
}
