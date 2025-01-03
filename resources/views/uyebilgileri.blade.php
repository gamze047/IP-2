@extends('welcome')
@section('altkisim')

    <link rel="stylesheet" href="{{ asset('uye.css') }}">
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <script src='https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>

    <main>
            <div class="head-title">
                <a href="{{route('uyeler')}}" class="kapatma"
                   style="font-size: 50px; color: #dcc217; margin-left: 20px ; text-decoration: none">&times;</a>
            </div>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdey">
    <div class="row">

        <div class="profile-nav col-md-3">
            <div class="panel">
                <div class="user-heading round">
                    <a href="#">
                        <img src="{{ $uye->yetki->yetki_resmi}}" alt="">
                    </a>
                    <h1>{{$uye->ad}}</h1>
                    <p>{{$uye->mail}}</p>
                </div>

            </div>
        </div>


        <div class="profile-info col-md-9">
            <div class="panel">

            </div>
            <div class="panel">
                <div class="bio-graph-heading">

                </div>
                <div class="panel-body bio-graph-info">
                    <h1>Üye Bilgileri</h1>
                    <div class="row">
                        <div class="bio-row">
                            <p><span>Adı </span>: {{$uye->ad}}</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Soyadı </span>: {{$uye->soyad}}</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Şehir </span>: {{$uye->sehir}}</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Doğum Günü</span>: {{$uye->dogum_yili->format('d.m.Y')}}</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Kayıt Tarihi</span>: {{$uye->created_at->format('d.m.Y')}}</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Mail </span>: {{$uye->mail}}</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Telefon </span>: {{$uye->telefon}}</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Yetki </span>: {{$uye->yetki->yetki}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-chart">
                                </div>
                                <div class="bio-desk">
                                    <h4 class="red">Okuduğu Kitap Listesi</h4>


                                    <ol type="1">
                                        @foreach($oduncler as $kitap)
                                        <li>{{$kitap->durum == 1 ? $kitap->kitaplar->kitap_adi : ''}}</li>
                                        @endforeach
                                    </ol>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </main>
@endsection
