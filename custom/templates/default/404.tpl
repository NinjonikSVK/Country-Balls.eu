{include file="header.tpl"}
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
	<script type="text/javascript">

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

</script>
<meta http-equiv="refresh" content="5;url=index" />
{include file="footer.tpl"}