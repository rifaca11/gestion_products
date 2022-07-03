@extends('layouts.app')




@section('title')
Test Irma Service  |  Home
@endsection

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="p-2">Home</h3>
                </div>
                <div class="card-body">
                   <form method="post" action="{{route('logout')}}">
                    @csrf
                        <button type="submit" class="btn btn-outline-primary">
                            Logout
                        </button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
