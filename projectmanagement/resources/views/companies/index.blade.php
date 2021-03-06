@extends('layouts.app')


@section('content')
    <div class="panel panel-default col-md-6 col-lg-6">
        <div class="panel-heading">
            <h3 class="panel-title">Companies</h3>
        </div>
        <div class="panel-body">

            <ul class="list-group">
                @foreach($companies as $company)
                <li class="list-group-item"><a href="/companies/{{ $company->id }}">{{$company->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection