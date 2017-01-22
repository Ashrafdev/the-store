@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Roles
                </header>
                <div class="panel-body">
                    @include('flatlab-templates::common.errors')
                    <div class="row" style="padding-left: 20px">
                       @include('roles.show_fields')
                        <a href="{!! route('roles.index') !!}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
