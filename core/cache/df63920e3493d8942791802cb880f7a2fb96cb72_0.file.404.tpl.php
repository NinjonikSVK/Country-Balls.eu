<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-22 16:22:26
  from '/home/users/megaparba9ecz/country-balls.eu/web/custom/templates/default/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fba904252c4e5_86523852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df63920e3493d8942791802cb880f7a2fb96cb72' => 
    array (
      0 => '/home/users/megaparba9ecz/country-balls.eu/web/custom/templates/default/404.tpl',
      1 => 1606062145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fba904252c4e5_86523852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="wrapper">
    <div class="page-header error-page header-filter">
      <div class="page-header-image" style="background-image: url('../../custom/templates/default/assets/img/braden-collum.jpg');"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="title">404</h1>
            <h2 class="description">Stránka nebola nájdená :(</h2>
            <h4 class="description">Keďže sa jedná o demo, tak všetky stránky ešte nie sú naprogramované.</h4>
			<h4 class="description">Budete automaticky presmerovaní na domovskú stránku za <span id="count">5</span> sekúnd...</h4>
          </div>
        </div>
      </div>
    </div>
	<?php echo '<script'; ?>
 type="text/javascript">

window.onload = function(){

(function(){
  var counter = 5;

  setInterval(function() {
    counter--;
    if (counter >= 0) {
      span = document.getElementById("count");
      span.innerHTML = counter;
    }
    // Display 'counter' wherever you want to display it.
    if (counter === 0) {
    //    alert('this is where it happens');
        clearInterval(counter);
    }

  }, 1000);

})();

}

<?php echo '</script'; ?>
>
<meta http-equiv="refresh" content="5;url=index" />
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
