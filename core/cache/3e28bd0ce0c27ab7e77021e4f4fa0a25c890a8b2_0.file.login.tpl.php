<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-14 18:31:36
  from '/home/users/megaparba9ecz/country-balls.eu/web/custom/templates/default/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb02288290fb1_87690092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e28bd0ce0c27ab7e77021e4f4fa0a25c890a8b2' => 
    array (
      0 => '/home/users/megaparba9ecz/country-balls.eu/web/custom/templates/default/login.tpl',
      1 => 1605377859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb02288290fb1_87690092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- End Navbar -->
  <div class="squares square1"></div>
  <div class="squares square2"></div>
  <div class="squares square3"></div>
  <div class="squares square4"></div>
  <div class="squares square5"></div>
  <div class="squares square6"></div>
  <div class="page-header">
    <div class="page-header-image"></div>
    <div class="container">
      <div class="col-lg-5 col-md-8 mx-auto">
        <div class="card card-login">
          <form class="form" method="post">
            <div class="card-header">
              <img class="card-img" src="../..//custom/templates/default/assets/img/square-purple-1.png" alt="Card image">
              <h4 class="card-title">login</h4>
            </div>
            <div class="card-body">
        			<p>
        				<?php echo $_smarty_tpl->tpl_vars['loginerrorecho']->value;?>

        			</p>
              <div class="input-group input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="tim-icons icon-single-02"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Uživateľské meno" name="username">
              </div>
              <div class="input-group input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="tim-icons icon-lock-circle"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Heslo" name="password">
              </div>
            </div>
            <div class="card-footer text-center">
			   <button name="submit" value="submit" class="btn btn-primary btn-round btn-lg btn-block">Prihlásiť sa</button>
            </div>
            <div class="pull-left ml-3 mb-3">
              <h6>
                <a href="register" class="link footer-link">Vytvoriť účet</a>
              </h6>
            </div>
            <div class="pull-right mr-3 mb-3">
              <h6>
                <a href="reset" class="link footer-link">Zabudli ste heslo?</a>
              </h6>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
