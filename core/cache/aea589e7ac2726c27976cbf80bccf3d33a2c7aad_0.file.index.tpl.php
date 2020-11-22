<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-22 16:08:58
  from '/home/users/megaparba9ecz/country-balls.eu/web/custom/templates/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fba8d1a965023_55706154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aea589e7ac2726c27976cbf80bccf3d33a2c7aad' => 
    array (
      0 => '/home/users/megaparba9ecz/country-balls.eu/web/custom/templates/default/index.tpl',
      1 => 1606061338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fba8d1a965023_55706154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/users/megaparba9ecz/country-balls.eu/web/core/libs/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="wrapper">
    <div class="page-header page-header-small header-filter">
      <div class="page-header-image" data-parallax="true" style="background-image: url('../../custom/templates/default/assets/img/cbbg.jpeg');">
      </div>
      <div class="content-center">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto text-center">
            <h1 class="title">
				Najlepšie hodnotené countrybally
			</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="main main-raised">
      <div class="container">
        <div class="row">
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imgtop']->value, 'imgtop2');
$_smarty_tpl->tpl_vars['imgtop2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['imgtop2']->value) {
$_smarty_tpl->tpl_vars['imgtop2']->do_else = false;
?>
		<div class="col-lg-4 col-md-6">
            <div class="card card-blog card-plain">
              <div class="card-image">
                <a href="javascript:;">
                  <img class="img rounded" src="../../uploads/<?php echo $_smarty_tpl->tpl_vars['imgtop2']->value["fileName"];?>
">
                </a>
              </div>
              <div class="card-body">
                <h6 class="category text-primary"><?php echo $_smarty_tpl->tpl_vars['imgtop2']->value["label"];?>
</h6>
                <h4 class="card-title">
                  <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['imgtop2']->value["title"];?>
</a>
                </h4>
                <p class="card-description">
                 <?php echo $_smarty_tpl->tpl_vars['imgtop2']->value["desc"];?>

                </p>
                <div class="card-footer">
                  <div class="author">
                    <img src="../../custom/templates/default/assets/img/p10.jpg" alt="..." class="avatar img-raised">
                    <span><?php echo $_smarty_tpl->tpl_vars['imgtop2']->value["added"];?>
</span>
                  </div>
                  <div class="stats stats-right">
                    <i class="tim-icons icon-watch-time"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['imgtop2']->value["date"]);?>

                  </div>
				  <h4 align="right">
					<?php echo $_smarty_tpl->tpl_vars['imgtop2']->value["review"];?>
 <a href="actions?action=likent&type=like&id=<?php echo $_smarty_tpl->tpl_vars['imgtop2']->value['id'];?>
"><i class="far fa-thumbs-up"></i></a> <a href="actions?action=likent&type=unlike&id=<?php echo $_smarty_tpl->tpl_vars['imgtop2']->value['id'];?>
"><i class="fas fa-thumbs-down"></i></a>
					</h4>
                </div>
              </div>
            </div>
          </div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
