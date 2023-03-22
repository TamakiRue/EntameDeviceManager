@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <h1>コントローラーからdbの値を取得してみた</h1>
                    <p>id:{{$id}}さん</p>
                    <p>名前:{{$name}}さん</p>
                    <p>借りている端末の台数:{{$rented_device_num}}台</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
