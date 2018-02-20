@extends('layouts.app')

@section('content')
{{ csrf_field() }}
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                     You are logged in! welcome in kuritter!!!!
                    
                    <div class="tweet">
                     <a href="/tweet">tweet</a>
                    </div>

                    <div class="user_list">
                    <a href="/user">use_list</a>
                    </div>
                    <div class="timeline">
                    <a href="/timeline">time_line</a>
                    <div class="my_account">
                    <a href="/my_account">my_account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





