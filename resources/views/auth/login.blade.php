@extends('app')

@section('content')
            <div class="center-sign">
                <a href="/" class="logo pull-left">
                    <img src="{{ asset('img/smkn2.png') }}" height="70" />
                </a>

                <div class="panel panel-sign">
                    @if(session()->has('gagal-create'))
                    <div class="row-md-5">
                        <div class="alert alert-danger"> 
                            <center>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                &times;
                                </button>
                                <strong>Gagal</strong>
                                {{ session()->get('gagal-login') }}
                            </center>
                        </div>
                    </div>
                    @endif
                    <div class="panel-title-sign mt-xl text-right">
                        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i>Log In</h2>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group mb-lg">
                                <label>Alamat E-mail</label>
                                <div class="input-group input-group-icon">
                                    <input name="email" type="email" class="form-control input-lg" />
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <div class="clearfix">
                                    <label class="pull-left">Kata Sandi</label>
                                </div>
                                <div class="input-group input-group-icon">
                                    <input name="password" type="password" class="form-control input-lg" />
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="checkbox-custom checkbox-default">
                                        <input id="RememberMe" name="rememberme" type="checkbox"/>
                                        <label for="RememberMe">Ingat saya</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <button type="submit" class="btn btn-primary hidden-xs">Masuk</button>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Masuk</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. Andrey Maulana</p>
            </div>
@endsection