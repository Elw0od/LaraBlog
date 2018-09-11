@extends('layouts.app')

@section('content')

      <div class="panel panel-default">
            <div class="panel-heading">
                  Catégories
            </div>
            <div class="panel-body">
                  <table class="table table-hover">
                        <thead>
                              <th>
                                    Catégorie
                              </th>
                              <th>
                                    Edition
                              </th>
                              <th>
                                    Suppression
                              </th>
                        </thead>

                        <tbody>
                              @if($categories->count() > 0)
                                    @foreach($categories as $category)
                                          <tr>
                                                <td>
                                                      {{ $category->name }}
                                                </td>
                                                <td>
                                                      <a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-xs btn-info">
                                                            Editer
                                                      </a>
                                                </td>

                                                <td>
                                                      <a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-xs btn-danger">
                                                            Supprimer
                                                      </a>
                                                </td>
                                          </tr>
                                    @endforeach
                              @else
                                     <tr>
                                          <th colspan="5" class="text-center">Aucunes catégories</th>
                                    </tr>
                              @endif
                        </tbody>
                  </table>
            </div>
      </div>

@stop