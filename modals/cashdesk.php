<div class="modal fade" id="cashDeskModal" tabindex="-1" role="dialog" aria-labelledby="cashDeskModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Finalizacja </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="form-group col-md-12" id="messageCashDesk"></div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Wybierz sposób wysyłki:</p>
                    <select id="shippingMethod" class="form-control" required>
                        <option value="Odbiór osobisty">Odbiór osobisty: 0zł</option>
                        <option value="Poczta">Poczta: 10zł (3-5 dni)</option>
                        <option value="Kurier">Kurier: 15zł (1-2 dni)</option>
                    </select>
                </div>
                <div class="col-12 mt-3">
                    <p class="float-right">Kwota do zapłaty: <?php echo number_format($amountToPay, 2); ?> zł</p>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cofnij</button>
        <button type="button" class="btn btn-success" id="finlizeShopping">Kupuję!</button>
      </div>
    </div>
  </div>
</div>
