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

                                <form action="{{ route('uyeupdate', $uye->id) }}" method="POST">

                                    @csrf
                                    @method('PUT')

                                    <div class="bio-row">
                                        <p><span>Adı</span>: <input id="ad" name="ad" type="text" value="{{ $uye->ad }}" ></p>
                                    </div>

                                    <div class="bio-row">
                                        <p><span>Soyadı </span>: <input id="soyad" name="soyad" type="text" value="{{ $uye->soyad }}" ></p>
                                    </div>

                                    <div class="bio-row">
                                        <p><span>Şehir </span>: <input id="sehir" name="sehir" type="text" value="{{ $uye->sehir }}" ></p>
                                    </div>

                                    <div class="bio-row">
                                        <p><span>Doğum Günü</span>: <input id="sehir" name="sehir" type="text" value="{{$uye->dogum_yili->format('d.m.Y')}}" ></p>
                                    </div>

                                    <div class="bio-row">
                                        <p><span>Mail </span>: <input id="sehir" name="sehir" type="text" value="{{$uye->mail}}" ></p>
                                    </div>

                                    <div class="bio-row">
                                        <p><span>Telefon </span>: <input id="sehir" name="sehir" type="text" value="{{$uye->telefon}}" ></p>
                                    </div>

                                    <div class="bio-row">
                                        <p><span>Yetki </span>:
                                            <select id="yetki" name="yetki" >
                                                <option value="1" {{ $uye->yetki == '1' ? 'selected' : '' }}>Üye</option>
                                                <option value="2" {{ $uye->yetki == '2' ? 'selected' : '' }}>Kitap Düzenleme</option>
                                                <option value="3" {{ $uye->yetki == '3' ? 'selected' : '' }}>Görevli</option>
                                                <option value="4" {{ $uye->yetki == '4' ? 'selected' : '' }}>Başkan</option>
                                            </select>
                                        </p>
                                    </div>

                                    <button type="submit"  name="submit" >Submit</button>

                                </form>

                                </div>
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>

        </main>
    @endsection


