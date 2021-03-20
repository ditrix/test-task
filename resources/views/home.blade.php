@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row"> 
                        <div class="col-8"> 
                            {{ __('список анкет пользователя')}} {{ Auth::user()->id }}
                        </div>
                        <div class="col-2">
                            <button class="btn btn-sm btn-outline-success me-2" type="button">добавить</button>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-sm btn-outline-danger" type="button">удалить</button>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    @if (session('status'))

                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div id="app">todovue</div>
</div>
@endsection
