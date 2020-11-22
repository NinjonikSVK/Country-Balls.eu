<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-14 18:36:12
  from '/home/users/megaparba9ecz/country-balls.eu/web/custom/templates/default/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb0239c429805_91090488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45298688166ac1dae4ffc311cfb09cc2cbb05b81' => 
    array (
      0 => '/home/users/megaparba9ecz/country-balls.eu/web/custom/templates/default/register.tpl',
      1 => 1605378969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb0239c429805_91090488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header">
      <div class="page-header-image"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-12 mx-auto">
            <div id="square7" class="square square-7"></div>
            <div id="square8" class="square square-8"></div>
            <div class="card card-register">
              <div class="card-header">
                <img class="card-img" src="../../custom/templates/default/assets/img/square1.png" alt="Card image">
                <h4 class="card-title">register</h4>
              </div>
              <div class="card-body">
                <form class="form" method="post">
        				<p>

                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['loginerrorecho']->value, 'loginerrorecho2');
$_smarty_tpl->tpl_vars['loginerrorecho2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loginerrorecho2']->value) {
$_smarty_tpl->tpl_vars['loginerrorecho2']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['loginerrorecho2']->value;?>

        					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        				</p>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tim-icons icon-single-02"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Uživateľské meno" name="username">
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tim-icons icon-email-85"></i>
                      </div>
                    </div>
                    <input type="email" placeholder="Email" class="form-control" name="email">
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tim-icons icon-lock-circle"></i>
                      </div>
                    </div>
                    <input type="password" class="form-control" placeholder="Heslo" name="password">
                  </div>
				  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tim-icons icon-lock-circle"></i>
                      </div>
                    </div>
                    <input type="password" class="form-control" placeholder="Heslo znovu" name="passwordConfirm">
                  </div>
                  <div class="form-check text-left">
                    <label class="form-check-label">
                      Registráciou súhlasite s
                      <a href="tos.php">ToS</a>.
                    </label>
                  </div>
              </div>
              <div class="card-footer">
                <button name="submit" value="submit" class="btn btn-primary btn-info">Odoslať</button>
              </div>
			  </form>
            </div>
          </div>
        </div>
      </div>
      <div class="register-bg"></div>
      <div id="square1" class="square square-1"></div>
      <div id="square2" class="square square-2"></div>
      <div id="square3" class="square square-3"></div>
      <div id="square4" class="square square-4"></div>
      <div id="square5" class="square square-5"></div>
      <div id="square6" class="square square-6"></div>
    </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
