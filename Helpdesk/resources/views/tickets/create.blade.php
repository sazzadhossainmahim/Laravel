@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
           @if (session('status'))
            <div class="alert alert-success" role="alert">

            </div>
           @endif
           
        </div>
    </div>
</div>
