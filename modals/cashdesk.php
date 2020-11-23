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
                <!-- <div class="col-12 mt-3">
                    <p class="float-right">Kwota do zapłaty: <?php //echo number_format($amountToPay, 2); ?> zł</p>
                </div> -->
        <?php 
              $SESSION = $_SESSION['userid'];

              $sql = "SELECT * FROM user WHERE id='".$SESSION."'";
              $result = mysqli_query($link, $sql);
              $row = mysqli_fetch_array($result);
        ?>
        <form class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="shippingMethodLabel">Wybierz sposób wysyłki:</label>
                    <select id="shippingMethod" class="form-control" required>
                        <option value="Odbiór osobisty">Odbiór osobisty: 0zł</option>
                        <option value="Poczta">Poczta: 10zł (3-5 dni)</option>
                        <option value="Kurier">Kurier: 15zł (1-2 dni)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="phonenumber">Numer telefonu</label>
                    <input type="text" class="form-control" id="phonenumber" value="<?php echo $row['phonenumber']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="address">Adres</label>
                    <input type="text" class="form-control" id="address" value="<?php echo $row['address']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="address2">Adres 2</label>
                    <input type="text" class="form-control" id="address2" value="<?php echo $row['address2']; ?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="city">Miasto</label>
                        <input type="text" class="form-control" id="city" value="<?php echo $row['city']; ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="zipCode">kod pocztowy</label>
                        <input type="text" class="form-control" id="zipCode" value="<?php echo $row['zipCode']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="voivodeship">Województwo</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="voivodeship" value="<?php echo $row['voivodeship']; ?>" required>
                    </div>
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cofnij</button>
        <button type="button" class="btn btn-success" id="finlizeShopping">Kupuję!</button>
      </div>
    </div>
  </div>
</div>
