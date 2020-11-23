<div class="modal fade" id="displayOrderContent" tabindex="-1" role="dialog" aria-labelledby="displayOrderContent" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Zawartość zamówienia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="form-group col-md-12" id="messageCashDesk"></div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nazwa</th>
                                <th scope="col">Marka</th>
                                <th scope="col">Kwota</th>
                                <th scope="col">Liczba sztuk</th>
                                <th scope="col">Zdjęcie</th>
                            </tr>
                        </thead>
                        <tbody class="fetched-data" id="orderContentTable"></tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Zamknij</button>
      </div>
    </div>
  </div>
</div>
