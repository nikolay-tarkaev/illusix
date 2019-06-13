<div class="modal fade" id="createIngredientModal" tabindex="-1" role="dialog" aria-labelledby="createIngredientModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="createIngredientModalLabel">Создать ингредиент</h4>
        </div>
        <div class="modal-body">
            <div class="alert alert-danger hidden" id="createIngredientModalResult">&nbsp;</div>
            <div class="form-group row">
                <label for="inputIngredientName" class="col-sm-3 col-form-label">Название</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputIngredientName" placeholder="Название">
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
          <button type="button" class="btn btn-primary" id="createIngredientModalSubmit">Создать</button>
        </div>
      </div>
    </div>
</div>