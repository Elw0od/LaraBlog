@extends('layouts.app')

@section('content')

      @include('admin.includes.errors')

      <div class="panel panel-default">
            <div class="panel-heading">
                  Paramètre de l'article
            </div>

            <div class="panel-body">
                  <form action="{{ route('settings.update') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="name">Nom du site</label>
                              <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
                        </div>

                        <div class="form-group">
                              <label for="name">Adresse</label>
                              <input type="text" name="address" class="form-control" value="{{ $settings->address }}">
                        </div>

                        <div class="form-group">
                              <label for="name">Numéros de téléphone</label>
                              <input type="text" name="contact_number" class="form-control" value="{{ $settings->contact_number }}">
                        </div>

                        <div class="form-group">
                              <label for="name">Email</label>
                              <input type="text" name="contact_email" class="form-control" value="{{ $settings->contact_email }}">
                        </div>


                        <div class="form-group">
                              <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                          Mettre à jour les paramètres du site
                                    </button>
                              </div>
                        </div>
                  </form>
            </div>
      </div>
@stop