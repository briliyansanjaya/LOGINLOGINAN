@extends('layouts.main')

@section('container')
<div class="waw d-flex justify-content-center min-vh-100">
    <div class="container-fluid my-3">
        <div class="d-flex">
            <input type="text" class="form-control" placeholder="Search agents">
            <button class="btn btn-secondary" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <div class="row">
        @if($agents->isNotEmpty())
            @foreach ($agents as $agent)
                <div class="container col-lg-3 my-3 ">
                    <div class="card" style="background-color: 7399BF">
                        <img src="{{ $agent->agent_pict }}" class="card-img-top mt-3" style="float: center; height: 300px;object-fit: contain;" alt="{{ $agent->agent_name }}">

                        <div class="card-body" style = "height: auto">
                            <h4 class="fw-normal text-center text-bold">{{ $agent->agent_name }}</h4>
                            <p class="card-text fw-bold mt-3" style = "margin-top: -5px;">{{ Str ::limit($agent->agent_desc, 180)}}</p>
                        </div>
                        @auth
                            <a href="/edit/{{ $agent->agent_id }}">
                                <div class="d-grid gap-2 col-6 mx-auto mb-2">
                                    <button class="btn btn-secondary" type="button">Edit</button>
                                </div>
                            </a>
                            <a href="/delete/{{ $agent->agent_id }}">
                                <div class="d-grid gap-2 col-6 mx-auto mb-2">
                                    <button class="btn btn-danger   " type="button">Delete</button>
                                </div>
                            </a>
                        @endauth
                    </div>
                </div>
            @endforeach
        @else
            <table class="text-white text-center vh-100">
                <td class="align-middle"><h4>Tidak ada Agent!</h4></td>
            </table>
        @endif

        </div>
    </div>
</div>
@endsection

<style>
    .waw{
        background-color: #0F141A;
    }
</style>
