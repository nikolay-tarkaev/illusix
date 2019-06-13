@extends('layouts.adminlte')
@section('title')
Ингредиенты
@stop
@section('modals')
    @include('createingredientmodal')
@stop
@section('addbutton')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createIngredientModal">
        Создать ингредиент
    </button>
@stop
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Меню</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ingredients as $ingredient)
        <tr>
            <td>
                {{ $ingredient['id'] }}
            </td>
            <td>
                {{ $ingredient['name'] }}
            </td>
            <td>
            <a href="/ingredients/edit?id={{ $ingredient['id'] }}">Редактировать</a>&nbsp;|&nbsp;
            <a href="/ingredients/delete?id={{ $ingredient['id'] }}">Удалить</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop