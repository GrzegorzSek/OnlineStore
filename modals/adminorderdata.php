<div class="modal fade" id="updateOrder" tabindex="-1" role="dialog" aria-labelledby="updateOrder" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="allGood"><p>Zamówienie zostało zaktualizowane!</p></div>
        <div class="somethingWentWrong"><p>Coś poszło nie tak!</p></div>
        <div class="almostGood"><p>Uzupełnij wszystkie pola!</p></div>
        <h5 class="modal-title">Dane zamówienia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="orderData needs-validation" novalidate></form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
        <button type="button" class="btn btn-success" data-role="saveUpdatedOrderData" id="saveUpdatedOrderData">Zapisz</button>
      </div>
    </div>
  </div>
</div>
