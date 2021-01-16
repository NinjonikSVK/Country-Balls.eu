<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-29 19:48:28
  from '/home/users/megaparba9ecz/country-balls.eu/web/custom/panel_templates/default/editgroup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feb880cbd4da0_86978290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f983fe650bb32905a2a2f1fd43b4c44e4293a1ef' => 
    array (
      0 => '/home/users/megaparba9ecz/country-balls.eu/web/custom/panel_templates/default/editgroup.tpl',
      1 => 1609271304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5feb880cbd4da0_86978290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'groups2');
$_smarty_tpl->tpl_vars['groups2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['groups2']->value) {
$_smarty_tpl->tpl_vars['groups2']->do_else = false;
?>

  <?php echo $_smarty_tpl->tpl_vars['groups2']->value["title"];?>


<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div class="content">
        <div class="col-md-10 mr-auto ml-auto">
          <!--      Wizard container        -->
          <div class="wizard-container">
            <div class="card card-wizard" data-color="primary" id="wizardProfile">
              <form method="post">
                <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                <div class="card-header text-center">
                  <h3 class="card-title">
                    Upraviť skupinu
                  </h3>
                  <h5 class="description">Upraviť skupinu nikdy nebolo jednoduchšie!</h5>
                  <div class="wizard-navigation">
                    <div class="progress-with-circle">
                      <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
                    </div>
                    <ul>
                      <li class="nav-item">
                        <a class="nav-link active" href="#about" data-toggle="tab">
                          <i class="tim-icons icon-single-02"></i>
                          <p>Základné Informácie</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#account" data-toggle="tab">
                          <i class="tim-icons icon-settings-gear-63"></i>
                          <p>Vzhľad</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#address" data-toggle="tab">
                          <i class="tim-icons icon-delivery-fast"></i>
                          <p>Oprávnenia</p>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane show active" id="about">
                      <h5 class="info-text"> Začnime so základnými informáciami.</h5>
                      <div class="row justify-content-center mt-5">
                        <div class="col-sm-10">
                          <label>Názov Skupiny</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="tim-icons icon-single-02"></i>
                              </div>
                            </div>
                            <input type="text" name="firstname" class="form-control" placeholder="Názov skupiny" value="<?php echo $_smarty_tpl->tpl_vars['groups2']->value['title'];?>
">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="account">
                      <h5 class="info-text"> Upravte základný vzhľad skupiny.</h5>
                      <div class="row justify-content-center mt-5">
                        <div class="col-sm-10">
                          <label>Farba Skupiny</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="tim-icons icon-single-02"></i>
                              </div>
                            </div>
                            <input type="color" name="colour" class="form-control" placeholder="Názov skupiny" value="<?php echo $_smarty_tpl->tpl_vars['groups2']->value['colour'];?>
">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="address">
                      <div class="row justify-content-center">
                        <div class="col-sm-12">
                          <h5 class="info-text"> Vyberte oprávnenia, ktorými bude daná skupina disponovať. </h5>
                        </div>
                        <div class="card-body">
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="1" name="1" <?php echo $_smarty_tpl->tpl_vars['canseedashboard']->value;?>
>
                              Môže zobraziť admin panel
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="2" name="2" <?php echo $_smarty_tpl->tpl_vars['caneditpermissions']->value;?>
>
                              Môže vytvárať / upravovať skupiny a ich oprávnenia
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="3" name="3" <?php echo $_smarty_tpl->tpl_vars['cancreateadminposts']->value;?>
>
                              Môže vytvárať administrátorské príspevky
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="4" name="4" <?php echo $_smarty_tpl->tpl_vars['canapproveposts']->value;?>
>
                              Môže schvalovať uživateľské príspevky
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="5" name="5" <?php echo $_smarty_tpl->tpl_vars['canmoderateposts']->value;?>
>
                              Môže moderovať príspevky od uživateľov (celá tvorba, nie len príspevky)
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="pull-right">
                    <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Dopredu' />
                    <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd' name='submit' value='Odoslať' />
                  </div>
                  <div class="pull-left">
                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Späť' />
                  </div>
                  <div class="clearfix"></div>
                </div>
              </form>
            </div>
          </div>
          <!-- wizard container -->
        </div>
      </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
