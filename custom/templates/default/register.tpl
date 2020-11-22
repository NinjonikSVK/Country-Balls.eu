{include file="header.tpl"}
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

                  {foreach from=$loginerrorecho item=$loginerrorecho2}
                    {$loginerrorecho2}
        					{/foreach}

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
{include file="footer.tpl"}
