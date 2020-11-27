<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUser" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edycja użytkownika</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="form-group col-md-12" id="messageEditUser"></div>
                    <div class="form-group col-md-6">
                        <label for="name">Imię</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="surname">Nazwisko</label>
                        <input type="text" class="form-control" id="surname" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Hasło</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phonenumber">Numer telefonu</label>
                    <input type="tel" class="form-control" id="phonenumber" maxlength="9" required>
                </div>
                <div class="form-group">
                    <label for="address">Adres</label>
                    <input type="text" class="form-control" id="address" required>
                </div>
                <div class="form-group">
                    <label for="address2">Adres 2</label>
                    <input type="text" class="form-control" id="address2" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="city">Miasto</label>
                        <input type="text" class="form-control" id="city" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="zipCode">kod pocztowy</label>
                        <input type="text" class="form-control" id="zipCode" pattern="[0-9]{2}[-]{1}[0-9]{3}" title="Wprowadź kod pocztowy w formacie 00-000" required>
                    </div>
                </div>
                <label for="voivodeship">Województwo</label>
                <div class="form-group">
                    <input type="text" class="form-control" id="voivodeship" required>
                </div>
                <input type="hidden" id="userId" class="form-control">
                <div class="row float-right pr-3">
                    <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Zamknij</button>
                    <button type="button" class="btn btn-primary" id="update">Zaktualizuj</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>