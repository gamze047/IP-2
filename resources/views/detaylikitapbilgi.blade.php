@extends('welcome')
@section('altkisim')

    <link rel="stylesheet" href="{{ asset('uye.css') }}">
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <script src='https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>

    <main>
        <div class="head-title">
            <a href="{{route('kitaplar')}}" class="btn-download" style="font-size: 20px;">
                &times;
            </a>
        </div>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container bootstrap snippets bootdey">
            <div class="row">

                <div class="profile-nav col-md-3">
                    <div class="panel">
                        <div class="user-heading round">
                            <a href="#">
                                <img src="{{asset('resimler/book.png')}}" >
                            </a>
                            <h1>{{$kitap->kitap_adi}}</h1>
                            <p>{{$kitap->kategoriler->kategori_adi}}</p>
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
                            <h1>Kitap Bilgileri</h1>
                            <div class="row">
                                <div class="bio-row">
                                    <p><span>Kitap Adı </span>: {{$kitap->kitap_adi}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Yazarı </span>: {{$kitap->yazar}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Yayın Yılı </span>: {{$kitap->yayin_yili->format('d.m.Y')}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Türü</span>: {{$kitap->kategoriler->kategori_adi}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Kayıt Tarihi</span>: {{$kitap->created_at->format('d.m.Y')}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Durum </span>: {{$kitap->kitap_adi}}</p>
                                </div>
                                <div class="bio-alt">
                                    <p><span>Kitap Açıklaması</span>{{$kitap->kitap_aciklama}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div>


                        </div>
                    </div>
                </div>
            </div>

    </main>
@endsection
