<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="signUp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signUp">Rejestracja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="form-group col-md-12" id="messageSignUp"></div>
                    <div class="form-group col-md-6">
                        <label for="name">Imię</label>
                        <input type="text" class="form-control" id="name" placeholder="Imię" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="surname">Nazwisko</label>
                        <input type="text" class="form-control" id="surname" placeholder="nazwisko" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="emailSignUp" placeholder="email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Hasło</label>
                        <input type="password" class="form-control" id="password" placeholder="hasło" required>
                        <div class="valid-feedback">
                            Jest OK!
                        </div>
                        <div class="invalid-feedback">
                            podaj właściwe dane!
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phonenumber">Numer telefonu</label>
                    <input type="tel" class="form-control" id="phonenumber" placeholder="numer telefonu" maxlength="9" required>
                </div>
                <div class="form-group">
                    <label for="address">Adres</label>
                    <input type="text" class="form-control" id="address" placeholder="Adres" required>
                </div>
                <div class="form-group">
                    <label for="address2">Adres 2</label>
                    <input type="text" class="form-control" id="address2" placeholder="Adres 2" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="city">Miasto</label>
                        <input type="text" class="form-control" id="city" placeholder="Miasto" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="zipCode">kod pocztowy</label>
                        <input type="text" class="form-control" id="zipCode" placeholder="00-000" pattern="[0-9]{2}[-]{1}[0-9]{3}" title="Wprowadź kod pocztowy w formacie 00-000" required>
                    </div>
                </div>
                <label for="voivodeship">Województwo</label>
                <div class="form-group">
                    <select id="inputVoivodeship" class="form-control" required>
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
                    <button type="button" class="btn btn-primary" id="butsave">Zarejestruj</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>