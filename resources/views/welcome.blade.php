@extends('layouts.app')




@section('title')
Test Irma Service  |  CHARIFA HNIGUIRA
@endsection

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Welcome IRMA Service</h3>
                </div>
                <div class="card-body">
                    @guest
                        <a href="#" class="btn btn-outline-primary">
                            Login
                        </a>
                    @endguest
                    @auth
                        <a href="#" class="btn btn-outline-primary">
                             Home
                        </a>
                    @endauth
                   

                </div>
            </div>
        </div>
    </div>
</div>
