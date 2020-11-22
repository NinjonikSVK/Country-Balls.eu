<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-22 16:12:32
  from '/home/users/megaparba9ecz/country-balls.eu/web/custom/templates/default/addimg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fba8df07f38d9_04621407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7307478c0f6d073553bee4acc4422d5c5a44949a' => 
    array (
      0 => '/home/users/megaparba9ecz/country-balls.eu/web/custom/templates/default/addimg.tpl',
      1 => 1606061550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fba8df07f38d9_04621407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="wrapper">

    <div class="section">
      <div class="team-1">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h2 class="title">Pridať CountryBall</h2>
              <!--<h4 class="description">Nie všetky súbory sa musia automaticky stiahnuť - niektoré sa vám zobrazia v prehliadači (napr. .mp3 .mp4 .png)</h4>-->
            </div>
          </div>
      </div>
    </div>
			<form enctype="multipart/form-data" action="" method="post" id="contact-form">
			<div id="file-uploader">
				  <div class="container" align="center">
					<div class="row">
					  <div class="col-md-8 ml-auto mr-auto text-center">
						<div class="fileinput fileinput-new text-center" data-provides="fileinput">
						  <div class="fileinput-new thumbnail">
							<img src="assets/img/image_placeholder.jpg" alt="...">
						  </div>
						  <div class="fileinput-preview fileinput-exists thumbnail"></div>
						  <div>
							<span class="btn btn-rose btn-round btn-file">
							  <span class="fileinput-new">Vybrať súbor</span>
							  <span class="fileinput-exists">Zmeniť</span>
							  <input type="file" name="file" id="file" />
							</span>
							<a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Vymazať</a>
						  </div>
						  .png .jpeg .jpg .gif
						</div>
						<div class="row mt-5 mb-4 pt-5">
				  <div class="col-md-8 ml-auto mr-auto text-center mt-5">
					<h1 class="title">Nezabudnite na
					  <b>popis</b>
					</h1>
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-10 mx-auto ">
					  <div class="card-body">
						<div class="row">
						  <div class="col-md-6">
							<label>Názov</label>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text"><i class="tim-icons icon-single-02"></i></span>
							  </div>
							  <input type="text" class="form-control" placeholder="Maximálne 25 znakov" aria-label="First Name..." maxlength="25" name="title">
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
							  <label>Štítok</label>
							  <div class="input-group">
								<div class="input-group-prepend">
								  <span class="input-group-text"><i class="tim-icons icon-caps-small"></i></span>
								</div>
								<input type="text" class="form-control" placeholder="V deme nefunkčné" aria-label="Last Name..." disabled>
							  </div>
							</div>
						  </div>
						</div>
						<div class="form-group">
						  <label>Popis</label>
						  <textarea name="desc" class="form-control" id="message" rows="6"></textarea>
						</div>
						<div class="row">
						  <div class="col-md-6 ml-auto">
							<button type="submit" name="submit" class="btn btn-primary btn-round pull-right">Odoslať</button>
						  </div>
						</div>
					  </div>
				  </div>
				</div>
              </div>
            </div>
          </div>
        </div>
	</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
