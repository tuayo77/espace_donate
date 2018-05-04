@extends('layouts.app')

@section('content')
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

                       <div class="content">
                <div class="title m-b-md">
                   <a href="https://www.paypal.me/tuayoborel" target="_blank" class="btn btn-link btn-lg">  faire un don
                 </a> 
                </div>

                <div class="links">
                
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
