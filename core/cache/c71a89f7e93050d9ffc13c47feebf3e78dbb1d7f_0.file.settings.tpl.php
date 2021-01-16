<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-16 08:09:05
  from '/home/users/megaparba9ecz/country-balls.eu/web/custom/templates/default/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60029f2181c872_37887952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c71a89f7e93050d9ffc13c47feebf3e78dbb1d7f' => 
    array (
      0 => '/home/users/megaparba9ecz/country-balls.eu/web/custom/templates/default/settings.tpl',
      1 => 1610784018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60029f2181c872_37887952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row2s']->value, 'rowsmarty2');
$_smarty_tpl->tpl_vars['rowsmarty2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rowsmarty2']->value) {
$_smarty_tpl->tpl_vars['rowsmarty2']->do_else = false;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <div class="wrapper">
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="section">
              <!-- User Information -->
              <section class="text-center">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail img-circle img-raised">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['avataruser']->value;?>
" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-circle img-raised"></div>
                  <div>
                    <span class="btn btn-raised btn-round btn-default btn-file">
                      <span class="fileinput-new">Add Photo</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="...">
                    </span>
                    <br>
                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists btn-simple" data-dismiss="fileinput"><i class="tim-icons icon-simple-remove"></i> Remove</a>
                  </div>
                </div>
                <h3 class="title">Charlie Bailey</h3>
              </section>
              <!-- User Information -->
              <!-- Profile Sidebar -->
              <section>
                <br>
                <ul class="nav flex-column" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist">
                      <i class="tim-icons icon-single-02"></i> General
                    </a>
                  </li>
                  <hr class="line-primary">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                      <i class="tim-icons icon-credit-card"></i> Billing
                    </a>
                  </li>
                  <hr class="line-primary">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link3" role="tablist">
                      <i class="tim-icons icon-lock-circle"></i> Security
                    </a>
                  </li>
                  <hr class="line-primary">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link4" role="tablist">
                      <i class="tim-icons icon-volume-98"></i> Notifications
                    </a>
                  </li>
                </ul>
              </section>
              <!-- End Profile Sidebar -->
              <!-- Profile Completion -->
              <br>
              <br>
              <br>
              <section>
                <div class="progress-container progress-primary">
                  <span class="progress-badge">Profile Completion</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      <span class="progress-value">60%</span>
                    </div>
                  </div>
                </div>
              </section>
              <!-- End Profile Completion -->
            </div>
          </div>
          <div class="col-md-8 ml-auto">
            <div class="section">
              <form method="post">
              <div class="tab-content">
                <div class="tab-pane active" id="link1">
                  <div>
                    <header>
                      <h2 class="text-uppercase">General information</h2>
                    </header>
                    <hr class="line-primary">
                    <br>
                    <div class="row">
                      <div class="col-md-3 align-self-center">
                        <label class="labels" for="#username">Username</label>
                      </div>
                      <div class="col-md-9 align-self-center">
                        <div class="form-group">
                          <input id="username" name="username" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['rowsmarty2']->value['username'];?>
" required="required">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 align-self-center">
                        <label class="labels" for="#firstName">First Name</label>
                      </div>
                      <div class="col-md-9 align-self-center">
                        <div class="form-group">
                          <input id="firstName" name="firstName" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['rowsmarty2']->value['first_name'];?>
" required="required">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 align-self-center">
                        <label class="labels" for="#lastName">Last Name</label>
                      </div>
                      <div class="col-md-9 align-self-center">
                        <div class="form-group">
                          <input id="lastName" name="lastName" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['rowsmarty2']->value['last_name'];?>
" required="required">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 align-self-center">
                        <label class="labels">I’m</label>
                      </div>
                      <div class="col-md-4 align-self-center">
                        <div class="form-group">
                          <select class="selectpicker" data-size="7" data-style="btn btn-primary" title="Single Select">
                            <option disabled selected>Gender</option>
                            <option value="2">Male</option>
                            <option value="3">Female</option>
                            <?php echo $_smarty_tpl->tpl_vars['rowsmarty2']->value['gender'];?>

                          </select>
                        </div>
                      </div>
                    </div>
                    <!--
                    <div class="row">
                      <div class="col-md-3 align-self-center">
                        <label class="labels">Birth Date</label>
                      </div>
                      <div class="col-md-9 align-self-center">
                        <div class="row">
                          <div class="col-md-4 align-self-center">
                            <div class="form-group">
                              <select class="selectpicker" data-size="7" data-style="btn btn-primary" title="Single Select">
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option selected="selected">April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <select class="selectpicker" data-size="7" data-style="btn btn-primary" title="Single Select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option selected="selected">11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <select class="selectpicker" data-size="7" data-style="btn btn-primary" title="Single Select">
                                <option>1986</option>
                                <option>1987</option>
                                <option>1988</option>
                                <option selected="selected">1989</option>
                                <option>1990</option>
                                <option>1991</option>
                                <option>1992</option>
                                <option>1993</option>
                                <option>1994</option>
                                <option>1995</option>
                                <option>1996</option>
                                <option>1997</option>
                                <option>1998</option>
                                <option>1999</option>
                                <option>2000</option>
                                <option>2001</option>
                                <option>2002</option>
                                <option>2003</option>
                                <option>2004</option>
                                <option>2005</option>
                                <option>2006</option>
                                <option>2007</option>
                                <option>2008</option>
                                <option>2009</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>-->
                    <div class="row">
                      <div class="col-md-3 align-self-center">
                        <label class="labels" for="#email">Email</label>
                      </div>
                      <div class="col-md-9 align-self-center">
                        <div class="form-group">
                          <input id="email" name="email" class="form-control" type="email" value="<?php echo $_smarty_tpl->tpl_vars['rowsmarty2']->value['email'];?>
" required="required">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 align-self-center">
                        <label class="labels" for="#location">Your Location</label>
                      </div>
                      <div class="col-md-9 align-self-center">
                        <div class="form-group">
                          <input id="location" name="location" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['rowsmarty2']->value['location'];?>
" required="required">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 align-self-center">
                        <label class="labels" for="#phone">Phone Number</label>
                      </div>
                      <div class="col-md-4 align-self-center">
                        <div class="form-group">
                          <input id="phone" name="phone" class="form-control" type="tel" value="<?php echo $_smarty_tpl->tpl_vars['rowsmarty2']->value['phone_number'];?>
" required="required">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 align-self-center">
                        <label class="labels">Language</label>
                      </div>
                      <div class="col-md-4 align-self-center">
                        <div class="form-group">
                          <select class="selectpicker" data-size="7" data-style="btn btn-primary" title="Single Select">
                            <option selected>English</option>
                            <option value="2">French</option>
                            <option value="3">Spanish</option>
                            <option value="4">Deutsche</option>
                            <option value="4">Russian</option>
                            <?php echo $_smarty_tpl->tpl_vars['rowsmarty2']->value['lang'];?>

                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 align-self-center">
                        <label class="labels">Description</label>
                      </div>
                      <div class="col-md-9 align-self-center">
                         <textarea class="form-control" name="descr" rows="4" cols="80" placeholder="You can write your text here..."><?php echo $_smarty_tpl->tpl_vars['rowsmarty2']->value['descr'];?>
</textarea>
                      </div>
                    </div>
                    <p></p>
                    <div class="row">
                      <div class="col-md-3 align-self-center">
                        <label class="labels">Skills</label>
                      </div>
                      <div class="col-md-9 align-self-center">
                         <textarea class="form-control" name="skills" rows="4" cols="80" placeholder="You can write your text here..."><?php echo $_smarty_tpl->tpl_vars['rowsmarty2']->value['skills'];?>
</textarea>
                      </div>
                    </div>
                    <div class="row mt-4">
                      <div class="col-md-6">
                        <button class="btn btn-primary" type="submit" name="submit">Save Changes</button>
                        <button class="btn btn-primary btn-simple" type="reset" onClick="window.location.reload();">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!-- END OF FORM 1 -> General (Settings)  -->
                <div class="tab-pane" id="link2">
                  <header>
                    <h2 class="text-uppercase">Billing method</h2>
                  </header>
                  <hr class="line-primary">
                  <br>
                  <table class="table align-items-center">
                    <thead>
                      <tr>
                        <th scope="col">Card Type</th>
                        <th scope="col">Card Number</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          <img alt="Image" src="../../custom/templates/default/assets/img/visas.png" class="avatar">
                        </th>
                        <td>
                          <span class="d-block">•••• •••• •••• 8372</span>
                          <small class="text-muted">Exp: 06/22</small>
                        </td>
                        <td class="text-center">
                          <div class="form-check form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="Radios" value="option2" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <button type="submit" class="btn btn-danger btn-sm btn-simple">
                            <i class="tim-icons icon-simple-remove"></i> Remove card
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <img alt="Image" src="../../custom/templates/default/assets/img/mastercard.png" class="avatar">
                        </th>
                        <td>
                          <span class="d-block">•••• •••• •••• 1225</span>
                          <small class="text-muted">Exp: 07/21</small>
                        </td>
                        <td class="text-center">
                          <div class="form-check form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="Radios" value="option1">
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <button type="submit" class="btn btn-danger btn-sm btn-simple">
                            <i class="tim-icons icon-simple-remove"></i> Remove card
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <button class="btn btn-primary btn-sm">
                    <i class="tim-icons icon-simple-add"></i> Add card
                  </button>
                </div>
                <div class="tab-pane" id="link3">
                  <div class="g-pos-rel h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-30--md">
                    <header>
                      <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Security Questions</h2>
                    </header>
                    <hr class="line-primary">
                    <form>
                      <div class="row">
                        <div class="col-md-6">
                          <label>Security Question</label>
                          <div class="form-group">
                            <select class="selectpicker" data-size="7" data-style="btn btn-primary" title="Single Select">
                              <option disabled selected>Your Question</option>
                              <option value="2">Question 1</option>
                              <option value="3">Question 2</option>
                              <option value="4">Question 3</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label>Your Answer</label>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Enter your answer">
                          </div>
                        </div>
                      </div>
                      <br>
                      <br>
                      <header>
                        <h2 class="text-uppercase">Security Settings</h2>
                      </header>
                      <hr class="line-primary">
                      <div class="form-group d-flex align-items-center justify-content-between">
                        <span>Notify me via email when logging in</span>
                        <input type="checkbox" name="checkbox" class="bootstrap-switch" checked data-on-label="ON" data-off-label="OFF" />
                      </div>
                      <div class="form-group d-flex align-items-center justify-content-between">
                        <span>Send SMS confirmation for all online payments</span>
                        <input type="checkbox" name="checkbox" class="bootstrap-switch" checked data-on-label="ON" data-off-label="OFF" />
                      </div>
                      <div class="form-group d-flex align-items-center justify-content-between">
                        <span>Check which devices accessed your account</span>
                        <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF" />
                      </div>
                      <div class="form-group d-flex align-items-center justify-content-between">
                        <span>Find My Device, make sure your device can be found if it gets lost</span>
                        <input type="checkbox" name="checkbox" class="bootstrap-switch" checked data-on-label="ON" data-off-label="OFF" />
                      </div>
                      <div class="form-group d-flex align-items-center justify-content-between">
                        <span>Lock your device with a PIN, pattern, or password</span>
                        <input type="checkbox" name="checkbox" class="bootstrap-switch" checked data-on-label="ON" data-off-label="OFF" />
                      </div>
                      <div class="form-group d-flex align-items-center justify-content-between">
                        <span>Manage what apps have access to app-usage data on your device</span>
                        <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF" />
                      </div>
                      <div class="row mt-5 justify-content-end">
                        <div class="col-md-4 ml-auto">
                          <button class="btn btn-primary btn-sm btn-simple" type="reset">Cancel</button>
                          <button class="btn btn-primary btn-sm" type="button">Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="tab-pane" id="link4">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <div class="alert alert-primary text-small" role="alert">
                          <i class="icon-shield"></i>
                          <span>
                            We will never distribute your email address to third parties. Read about email communication in our privacy policy.
                          </span>
                        </div>
                      </div>
                      <!--end of col-->
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-12">
                        <form>
                          <h5 class="mb-4">Notification Preferences</h5>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                              Someone mentions me
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                              Someone follows me
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-sign"></span>
                              Someone shares my activty
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-sign"></span>
                              Someone messages me
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-sign"></span>
                              Someone adds me to a project
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-sign"></span>
                              Sales and promotions
                            </label>
                          </div>
                          <button type="submit" class="btn btn-primary btn-sm mt-4">Update preferences</button>
                        </form>
                      </div>
                      <!--end of col-->
                    </div>
                    <!--end of row-->
                    <hr>
                    <div class="row">
                      <div class="col-12">
                        <form>
                          <h5>Notification Frequency</h5>
                          <div class="form-check form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleF" value="option1">
                              <span class="form-check-sign"></span>
                              Daily
                            </label>
                          </div>
                          <div class="form-check form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleF" value="option2" checked>
                              <span class="form-check-sign"></span>
                              Weekly
                            </label>
                          </div>
                          <div class="form-check form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleF" value="option3">
                              <span class="form-check-sign"></span>
                              Monthly
                            </label>
                          </div>
                          <div class="form-check form-check-radio">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleF" value="option4">
                              <span class="form-check-sign"></span>
                              Never
                            </label>
                          </div>
                          <button type="submit" class="btn btn-primary btn-sm mt-4">Update</button>
                        </form>
                      </div>
                      <!--end of col-->
                    </div>
                    <!--end of row-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
