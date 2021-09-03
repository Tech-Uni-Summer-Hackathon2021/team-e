@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <link href="css/mypage.css" rel="stylesheet">
                      <header class="page-header">
                      <h1><a href="home"><img class="logo" src="/img/logo.png"></a></h1>
                        <nav>
                          <ul class="main-nav">
                              <li><a href="problem">問題一覧</a></li>
                              <li><a href="profile">成績</a></li>

                          </ul>
                         </nav>
                      </header>
                      <body>
                      <?php
                      $name = Auth::user()->name;
                      $email = Auth::user()->email;
                       ?>
                       <div class="body-set">
                        <div class="body-left">
                          <ul>
                            <li>ユーザー名 :</li>
                            <li>メールアドレス :</li>
                            <li>パスワード :</li>
                          </ul>
                        </div>
                        <div class="body-right">
                          <ul>
                            <li><?= $name ?></li>
                            <li><?= $email ?></li>
                            <li>********</li>
                          </ul>
                        </div>
                      </div>

                      </body>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
