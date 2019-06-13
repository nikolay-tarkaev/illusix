@extends('layouts.adminlte')
@section('title')
Добавить рецепт
@stop
@section('addbutton')
    &nbsp;
@stop
@section('content')
<br />
<form>
    <div class="form-group row">
        <label for="inputRecipeName" class="col-md-2 col-md-offset-1 col-form-label">Название</label>
        <div class="col-md-8 col-lg-6">
            <input type="text" class="form-control" id="inputRecipeName" placeholder="Название">
        </div>
    </div>
    <div class="form-group row">
        <label for="textareaRecipeDescription" class="col-md-2 col-md-offset-1 col-form-label">Описание</label>
        <div class="col-md-8 col-lg-6">
            <textarea class="form-control" id="textareaRecipeDescription" placeholder="Описание" style="height: 200px;"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4 col-md-offset-1">
            Ингредиент
        </div>
        <div class="col-md-4">
            Количество
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-5 col-lg-4 col-md-offset-1">
            <select class="form-control" id="selectIngredient">
                <option>- Не выбрано -</option>
            </select>
        </div>
        <div class="col-md-5 col-lg-4">
            <input type="text" class="form-control" id="inputIngredientCount" placeholder="Количество">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-6 col-md-5 col-lg-4 col-md-offset-1">
            <button type="submit" class="btn btn-default">Добавить</button>
        </div>
        <div class="col-xs-6 col-md-5 col-lg-4 text-right">
            <button type="submit" class="btn btn-default">Создать новый ингредиент</button>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-12 col-md-11 col-lg-9 text-right">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </div>
</form>
@stop