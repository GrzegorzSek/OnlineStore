<div class="modal fade" id="forgottenPassword" tabindex="-1" role="dialog" aria-labelledby="forgottenPassword" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Przypomnij hasło</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-login">
          <div class="form-row">
            <div class="form-group col-12">
                <label for="email">Adres e-mail</label><br>
                <input type="email" name="email" placeholder="email" class="form-control" id="remindEmail" required/>
            </div>
            <div class="form-group col-12 text-right">
                <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#signIn">Cofnij</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                <button type="button" name="sendMailPass" class="btn btn-primary" id="sendMailPass">wyślij</buton>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
