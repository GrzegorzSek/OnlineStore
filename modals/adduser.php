<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUser" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nowy użytkownik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="form-group col-md-12" id="messageAddUser"></div>
                    <div class="form-group col-md-6">
                        <label for="name">Imię</label>
                        <input type="text" class="form-control" id="addName" placeholder="Imię" required>           
                    </div>
                    <div class="form-group col-md-6">
                        <label for="surname">Nazwisko</label>
                        <input type="text" class="form-control" id="addSurname" placeholder="nazwisko" required>                       
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="addEmail" placeholder="email" required>    
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Hasło</label>
                        <input type="password" class="form-control" id="addPassword" placeholder="hasło" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phonenumber">Numer telefonu</label>
                    <input type="tel" class="form-control" id="addPhonenumber" placeholder="numer telefonu" maxlength="9" required>
                </div>
                <div class="form-group">
                    <label for="address">Adres</label>
                    <input type="text" class="form-control" id="addAddress" placeholder="Adres" required>
                </div>
                <div class="form-group">
                    <label for="address2">Adres 2</label>
                    <input type="text" class="form-control" id="addAddress2" placeholder="Adres 2" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="city">Miasto</label>
                        <input type="text" class="form-control" id="addCity" placeholder="Miasto" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="zipCode">kod pocztowy</label>
                        <input type="text" class="form-control" id="addZipCode" placeholder="00-000" maxlength="6" pattern="[0-9]{2}[-]{1}[0-9]{3}" title="Wprowadź kod pocztowy w formacie 00-000" required>
                    </div>
                </div>
                <label for="voivodeship">Województwo</label>
                <div class="form-group">
                    <select id="addVoivodeship" class="form-control" required>
                        <option>dolnośląskie</option>
                        <option>kujawsko-pomorskie</option>
                        <option>lubelskie</option>
                        <option>lubuskie</option>
                        <option>łódzkie</option>
                        <option>małopolskie</option>
                        <option>mazowieckie</option>
                        <option>opolskie</option>
                        <option>podkarpackie</option>
                        <option>podlaskie</option>
                        <option>pomorskie</option>
                        <option>śląskie</option>
                        <option>świętokrzyskie</option>
                        <option>warmińsko-mazurskie</option>
                        <option>wielkopolskie</option>
                        <option>zachodniopomorskie</option>
                    </select>
                </div>
                <div class="row float-right pr-3">
                    <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Zamknij</button>
                    <button type="button" class="btn btn-success" id="butsave">Dodaj</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>