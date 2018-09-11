@extends('layouts.app')

@section('content')

      @include('admin.includes.errors')

      <div class="panel panel-default">
            <div class="panel-heading">
                  Créer une nouvelle catégorie
            </div>

            <div class="panel-body">
                  <form action="{{ route('category.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="name">Nom</label>
                              <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                              <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                          Créer la catégorie
                                    </button>
                              </div>
                        </div>
                  </form>
            </div>
      </div>
@stop