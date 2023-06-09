@extends('layouts-user.app')
@section('title')
Dashboard
@endsection


@section('head')
<style>
    [v-cloak]>* {
        display: none;
    }

    [v-cloak]::before {
        content: "loading...";
    }

    table tr td {
        padding-top: 10px;
        padding-bottom: 10px;
    }
</style>


@endsection

@section('content')
<br>
<div id="app" v-cloak>
    <div class="row">
        <div class="card-body">
            <div class="alert alert-primary outline-2x" role="alert">
                <h4>Selamat Datang User</h4>
                <p class="mb-0 font-weight-normal d-none d-sm-block">
                    Dashboard User
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">-</h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-account-multiple icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Project</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">-</h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-arrange-bring-forward icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Blog Anda</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">-</h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-arrange-send-to-back icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Project Anda</h6>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

@section('pagescript')

@section('pagescript')
<script>
    let app = new Vue({
        el: '#app',
        data: {

        },
        methods: {

        }
    })
</script>
@endsection
