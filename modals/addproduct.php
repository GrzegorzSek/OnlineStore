<div class="addProductModal modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Dodawanie produktu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="form-group col-md-12" id="addProductMessage"></div>
      <div class="modal-body">
            <form id="addProductForm" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nazwa</label>
                    <input type="text" class="form-control" name="productName" id="productName" required>
                </div>
                <div class="form-group">
                    <label for="brand">Marka</label>
                    <input type="text" class="form-control" name="productBrand" id="productBrand" required>
                </div>
                <div class="form-group">
                    <label for="CategoryLabel">Wybierz kategorię:</label>
                    <select id="productCategory" name="productCategory" class="form-control" required>
                        <option>Wybierz kategorię</option>
                        <option value="1">Ubrania</option>
                        <option value="2">Buty</option>
                        <option value="3">Akcesoria</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="subCategoryLabel">Wybierz podkategorię:</label>
                    <select id="productSubcategory" name="productSubcategory" class="form-control" required>
                        <option>Wybierz podkategorię</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="productSize">Rozmiar</label>
                    <input type="text" class="form-control" name="productSize" id="productSize" required>
                </div>
                <div class="form-group">
                    <label for="productColour">Kolor</label>
                    <input type="text" class="form-control" name="productColour" id="productColour" required>
                </div>
                <div class="form-group">
                    <label for="productPrice">Cena</label>
                    <input type="text" class="form-control" name="productPrice" id="productPrice" required>
                </div>
                <div class="form-group">
                    <label for="productDescription">Opis</label>
                    <input type="text" class="form-control" name="productDescription" id="productDescription" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Liczba sztuk</label>
                    <input type="text" class="form-control" name="productQuantity" id="productQuantity" required>
                </div>
                <div class="form-group">
                    <label for="productImage">Wybierz zdjęcie:</label><br>
                    <input type="file" name="image" id="image" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right ml-1" id="addProductButton">Dodaj</button>
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Zamknij</button>
                    <button type="button" class="btn btn-danger float-left" id="clear">Wyczyść</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>
