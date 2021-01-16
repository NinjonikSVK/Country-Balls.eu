{include file="header.tpl"}
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
		  {foreach from=$imgtop item=$imgtop2}
		<div class="col-lg-4 col-md-6">
            <div class="card card-blog card-plain">
              <div class="card-image">
                <a href="javascript:;">
                  <img class="img rounded" src="../../uploads/{$imgtop2["fileName"]}">
                </a>
              </div>
              <div class="card-body">
                <h6 class="category text-primary">{$imgtop2["label"]}</h6>
                <h4 class="card-title">
                  <a href="javascript:;">{$imgtop2["title"]}</a>
                </h4>
                <p class="card-description">
                 {$imgtop2["desc"]}
                </p>
                <div class="card-footer">
                  <div class="author">
                    <img src="../../custom/templates/default/assets/img/p10.jpg" alt="..." class="avatar img-raised">
                    <span>{$imgtop2["username"]}</span>
                  </div>
                  <div class="stats stats-right">
                    <i class="tim-icons icon-watch-time"></i> {$imgtop2["date"]|date_format}
                  </div>
				  <h4 align="right">
					{$imgtop2["review"]} <a href="actions?action=likent&type=like&id={$imgtop2['id']}"><i class="far fa-thumbs-up"></i></a> <a href="actions?action=likent&type=unlike&id={$imgtop2['id']}"><i class="fas fa-thumbs-down"></i></a>
					</h4>
                </div>
              </div>
            </div>
          </div>
					{/foreach}
        </div>
      </div>
    </div>
{include file="footer.tpl"}
