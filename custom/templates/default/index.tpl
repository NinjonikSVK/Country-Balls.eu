{include file="header.tpl"}
<div class="wrapper">
    <div class="page-header page-header-small header-filter">
      <div class="page-header-image" data-parallax="true" style="background-image: url('../../custom/templates/default/assets/img/ruvim-noga.jpg');">
      </div>
      <div class="content-center">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto text-center">
            <h1 class="title">
			ASR
			
			</h1>
            <a href="#button" class="btn btn-primary btn-round  btn-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#button" class="btn btn-primary btn-round  btn-icon">
              <i class="fab fa-instagram"></i>
            </a>
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
                    <span>{$imgtop2["added"]}</span>
                  </div>
                  <div class="stats stats-right">
                    <i class="tim-icons icon-watch-time"></i> {$imgtop2["date"]|date_format}
                  </div>
                </div>
              </div>
            </div>
          </div>
					{/foreach}
		  
          <div class="col-lg-4 col-md-6">
            <div class="card card-blog card-plain">
              <div class="card-image">
                <a href="javascript:;">
                  <img class="img rounded" src="../../custom/templates/default/assets/img/noah-wetering.jpg">
                </a>
              </div>
              <div class="card-body">
                <h6 class="category text-info">Animals</h6>
                <h4 class="card-title">
                  <a href="javascript:;">Shark Week: How to Watch It Like a Scientist</a>
                </h4>
                <p class="card-description">
                  Just when you thought it was safe to turn on your television, the Discovery Channel's "Shark Week"...
                </p>
                <div class="card-footer">
                  <div class="author">
                    <img src="../../custom/templates/default/assets/img/johana.jpg" alt="..." class="avatar img-raised">
                    <span>Johanna Zmud</span>
                  </div>
                  <div class="stats stats-right">
                    <i class="tim-icons icon-watch-time"></i> 5 min read
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-blog card-plain">
              <div class="card-image">
                <a href="javascript:;">
                  <img class="img rounded" src="../../custom/templates/default/assets/img/mark-harrison.jpg">
                </a>
              </div>
              <div class="card-body">
                <h6 class="category text-warning">Cars</h6>
                <h4 class="card-title">
                  <a href="javascript:;">Who's Afraid of the Self-Driving Car?</a>
                </h4>
                <p class="card-description">
                  It's been 60 years since the cover of Popular Mechanics magazine gave us the promise of flying cars...
                </p>
                <div class="card-footer">
                  <div class="author">
                    <img src="../../custom/templates/default/assets/img/christian.jpg" alt="..." class="avatar img-raised">
                    <span>Marc Oliver</span>
                  </div>
                  <div class="stats stats-right">
                    <i class="tim-icons icon-heart-2"></i> 2.4K
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-plain card-blog">
              <div class="card-image">
                <a href="javascript:;">
                  <img class="img rounded img-raised" src="../../custom/templates/default/assets/img/pawel-nolbert.jpg" />
                </a>
              </div>
              <div class="card-body">
                <h6 class="category text-info">Enterprise</h6>
                <h4 class="card-title">
                  <a href="javascript:;">Autodesk looks to future of 3D printing with Project Escher</a>
                </h4>
                <p class="card-description">
                  Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                  <a href="javascript:;"> Read More </a>
                  <div class="author">
                    <img src="../../custom/templates/default/assets/img/olivia.jpg" alt="..." class="avatar img-raised">
                    <span>Anna Spark</span>
                  </div>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-plain card-blog">
              <div class="card-image">
                <a href="javascript:;">
                  <img class="img rounded img-raised" src="../../custom/templates/default/assets/img/serge-kutuzov.jpg" />
                </a>
              </div>
              <div class="card-body">
                <h6 class="category text-success">
                  Startups
                </h6>
                <h4 class="card-title">
                  <a href="javascript:;">Lyft launching cross-platform service this week</a>
                </h4>
                <p class="card-description">
                  Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                  <a href="javascript:;"> Read More </a>
                  <div class="author">
                    <img src="../../custom/templates/default/assets/img/michael.jpg" alt="..." class="avatar img-raised">
                    <span>John Black</span>
                  </div>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-plain card-blog">
              <div class="card-image">
                <a href="javascript:;">
                  <img class="img rounded img-raised" src="../../custom/templates/default/assets/img/1234.png" />
                </a>
              </div>
              <div class="card-body">
                <h6 class="category text-danger">
                  <i class="now-ui-icons media-2_sound-wave"></i> Enterprise
                </h6>
                <h4 class="card-title">
                  <a href="javascript:;">6 insights into the French Fashion landscape</a>
                </h4>
                <p class="card-description">
                  Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                  <a href="javascript:;"> Read More </a>
                  <div class="author">
                    <img src="../../custom/templates/default/assets/img/james.jpg" alt="..." class="avatar img-raised">
                    <span>James Newman</span>
                  </div>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
              <h2 class="title ml-1">Trending now</h2>
              <br/>
              <div class="card card-blog card-plain blog-horizontal">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card-image">
                      <a href="javascript:;">
                        <img class="img rounded" src="../../custom/templates/default/assets/img/trae-gould.jpg" />
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="card-body">
                      <h3 class="card-title">
                        <a href="javascript:;">MateLabs mixes machine learning with IFTTT</a>
                      </h3>
                      <p class="card-description">
                        If you’ve ever wanted to train a machine learning model and integrate it with IFTTT, you now can with a new offering from MateLabs. MateVerse, a platform where novices can spin out machine...If you’ve ever wanted to train a machine learning model and integrate it with IFTTT, you now can with a new offering from MateLabs. MateVerse, a platform where novices can spin out machine...
                        <a href="javascript:;"> Read More </a>
                      </p>
                      <div class="author">
                        <img src="../../custom/templates/default/assets/img/james.jpg" alt="..." class="avatar img-raised">
                        <div class="text">
                          <span class="name">Tom Hanks</span>
                          <div class="meta">Drawn on 23 Jan</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card card-blog card-plain blog-horizontal">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card-image">
                      <a href="javascript:;">
                        <img class="img rounded" src="../../custom/templates/default/assets/img/mark-harrison.jpg" />
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="card-body">
                      <h3 class="card-title">
                        <a href="javascript:;">US venture investment ticks up in Q2 2017</a>
                      </h3>
                      <p class="card-description">
                        Venture investment in U.S. startups rose sequentially in the second quarter of 2017, boosted by large, late-stage financings and a few outsized early-stage rounds in tech and healthcare..enture investment in U.S. startups rose sequentially in the second quarter of 2017, boosted by large, late-stage financings and a few outsized early-stage rounds in tech and healthcare..
                        <a href="javascript:;"> Read More </a>
                      </p>
                      <div class="author">
                        <img src="../../custom/templates/default/assets/img/michael.jpg" alt="..." class="avatar img-raised">
                        <div class="text">
                          <span class="name">Tom Hanks</span>
                          <div class="meta">Drawn on 23 Jan</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section blogs-4">
        <div class="container-fluid">
          <h1 class="title text-center">Stay tuned with our fresh stories</h1>
          <br/>
          <div class="row">
            <div class="col-lg-3">
              <div class="card card-blog card-background" data-animation="zooming">
                <div class="full-background" style="background-image: url('../../custom/templates/default/assets/img/viktor-forgacs.jpg')"></div>
                <div class="card-body">
                  <div class="content-bottom">
                    <h6 class="card-category">Climate Change</h6>
                    <a href="javascript:;">
                      <h3 class="card-title">Stellar Partnership</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-blog card-background" data-animation="zooming">
                <div class="full-background" style="background-image: url('../../custom/templates/default/assets/img/rezaul-karim.jpg')"></div>
                <div class="card-body">
                  <div class="content-bottom">
                    <h6 class="card-category">Save the World</h6>
                    <a href="javascript:;">
                      <h3 class="card-title">Digital Currency</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-blog card-background" data-animation="zooming">
                <div class="full-background" style="background-image: url('../../custom/templates/default/assets/img/pawel-nolbert.jpg')"></div>
                <div class="card-body">
                  <div class="content-bottom">
                    <h6 class="card-category">Applications Companies</h6>
                    <a href="javascript:;">
                      <h3 class="card-title">Blockchain Explained</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-blog card-background" data-animation="zooming">
                <div class="full-background" style="background-image: url('../../custom/templates/default/assets/img/mark-finn.jpg')"></div>
                <div class="card-body">
                  <div class="content-bottom">
                    <h6 class="card-category">RFID microchips</h6>
                    <a href="javascript:;">
                      <h3 class="card-title">A Robot is Your Co-Worker</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section team-4">
        <div class="container">
          <h2 class="title text-center">Our authors</h2>
          <br/>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-image">
                  <h4 class="title">Mark Johnson</h4>
                  <div class="dropdown">
                    <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown" aria-expanded="false">
                      <i class="tim-icons icon-settings-gear-63"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                      <a class="dropdown-item" href="javascript:;">Edit Profile</a>
                      <a class="dropdown-item" href="javascript:;">Settings</a>
                      <a class="dropdown-item" href="javascript:;">Log out</a>
                    </div>
                  </div>
                  <a href="javascript:;">
                    <img class="img img-raised rounded" src="../../custom/templates/default/assets/img/mike.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <hr class="line-primary">
                  <h3 class="job-title">UX Designer</h3>
                  <div class="table-responsive">
                    <table class="table tablesorter " id="plain-table">
                      <tbody>
                        <tr>
                          <td class="text-left">
                            <i class="tim-icons icon-atom"></i> Skills
                          </td>
                          <td class="text-right">
                            UI, UX, Creativity
                          </td>
                        </tr>
                        <tr>
                          <td class="text-left">
                            <i class="tim-icons icon-user-run"></i> Hobbies
                          </td>
                          <td class="text-right">
                            Photography
                          </td>
                        </tr>
                        <tr>
                          <td class="text-left">
                            <i class="tim-icons icon-chart-bar-32"></i> Level
                          </td>
                          <td class="text-right">
                            • • •
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-image">
                  <h4 class="title">Dylan Wyatt</h4>
                  <div class="dropdown">
                    <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown" aria-expanded="false">
                      <i class="tim-icons icon-settings-gear-63"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                      <a class="dropdown-item" href="javascript:;">Edit Profile</a>
                      <a class="dropdown-item" href="javascript:;">Settings</a>
                      <a class="dropdown-item" href="javascript:;">Log out</a>
                    </div>
                  </div>
                  <a href="javascript:;">
                    <img class="img img-raised rounded" src="../../custom/templates/default/assets/img/christian.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <hr class="line-primary">
                  <h3 class="job-title">Team Lead</h3>
                  <div class="table-responsive">
                    <table class="table tablesorter " id="plain-table">
                      <tbody>
                        <tr>
                          <td class="text-left">
                            <i class="tim-icons icon-atom"></i> Skills
                          </td>
                          <td class="text-right">
                            Leadership
                          </td>
                        </tr>
                        <tr>
                          <td class="text-left">
                            <i class="tim-icons icon-user-run"></i> Hobbies
                          </td>
                          <td class="text-right">
                            Skiing, Chess
                          </td>
                        </tr>
                        <tr>
                          <td class="text-left">
                            <i class="tim-icons icon-chart-bar-32"></i> Level
                          </td>
                          <td class="text-right">
                            • • • • •
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-image">
                  <h4 class="title">Mila Skylar</h4>
                  <div class="dropdown">
                    <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown" aria-expanded="false">
                      <i class="tim-icons icon-settings-gear-63"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                      <a class="dropdown-item" href="javascript:;">Edit Profile</a>
                      <a class="dropdown-item" href="javascript:;">Settings</a>
                      <a class="dropdown-item" href="javascript:;">Log out</a>
                    </div>
                  </div>
                  <a href="javascript:;">
                    <img class="img img-raised rounded" src="../../custom/templates/default/assets/img/johana.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <hr class="line-primary">
                  <h3 class="job-title">Content writer</h3>
                  <div class="table-responsive">
                    <table class="table tablesorter " id="plain-table">
                      <tbody>
                        <tr>
                          <td class="text-left">
                            <i class="tim-icons icon-atom"></i> Skills
                          </td>
                          <td class="text-right">
                            Communication
                          </td>
                        </tr>
                        <tr>
                          <td class="text-left">
                            <i class="tim-icons icon-user-run"></i> Hobbies
                          </td>
                          <td class="text-right">
                            Reading, Writing
                          </td>
                        </tr>
                        <tr>
                          <td class="text-left">
                            <i class="tim-icons icon-chart-bar-32"></i> Level
                          </td>
                          <td class="text-right">
                            • • • •
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="title text-center">
        <h3>Show us some love</h3>
      </div>
      <div class="social-line social-line-big-icons">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <a href="javascript:;" class="btn btn-icon btn-simple btn-twitter btn-footer">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
            <div class="col-md-2">
              <a href="javascript:;" class="btn btn-icon btn-simple btn-facebook btn-footer">
                <i class="fab fa-facebook-square"></i>
              </a>
            </div>
            <div class="col-md-2">
              <a href="javascript:;" class="btn btn-icon btn-simple btn-google btn-footer">
                <i class="fab fa-google-plus"></i>
              </a>
            </div>
            <div class="col-md-2">
              <a href="javascript:;" class="btn btn-icon btn-simple btn-dribbble btn-footer">
                <i class="fab fa-dribbble"></i>
              </a>
            </div>
            <div class="col-md-2">
              <a href="javascript:;" class="btn btn-icon btn-simple btn-youtube btn-footer">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
            <div class="col-md-2">
              <a href="javascript:;" class="btn btn-icon btn-simple btn-instagram btn-footer">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="subscribe-line">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-10 ml-auto mr-auto">
              <div class="text-center">
                <h4 class="title">Subscribe to our Newsletter</h4>
                <p class="description">
                  Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                </p>
              </div>
              <div class="card card-raised card-form-horizontal">
                <div class="card-body">
                  <form method="" action="#">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="tim-icons icon-email-85"></i></span>
                          </div>
                          <input type="email" class="form-control" placeholder="Your Email...">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <button type="button" class="btn btn-primary btn-block">Subscribe</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
{include file="footer.tpl"}
