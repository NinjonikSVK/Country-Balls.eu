{include file="header.tpl"}
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="tools float-right">
                  <div class="dropdown">
                    <button type="button" class="btn btn-default dropdown-toggle btn-link btn-icon" data-toggle="dropdown">
                      <i class="tim-icons icon-settings-gear-63"></i>
                    </button>
                    <a href="creategroup">Vytvoriť skupinu</a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Niečo</a>
                    </div>
                  </div>
                </div>
                <h4 class="card-title">Skupiny</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          Názov
                        </th>
                        <th>
                          Farba
                        </th>
                        <th>
                          Akcie
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      {foreach from=$groups item=$groups2}
                      <tr>
                        <td>
                          {$groups2["id"]}
                        </td>
                        <td>
                          {$groups2["title"]}
                        </td>
                        <td>
                          {$groups2["colour"]}
                        </td>
                        <td>
                          <a href="editgroup?id={$groups2['id']}"><button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon " data-original-title="Tooltip on top" title="Upraviť">
                            <i class="tim-icons icon-pencil"></i>
                          </button></a>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm " data-original-title="Tooltip on top" title="Zmazať">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      {/foreach}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
{include file="footer.tpl"}
