@extends('welcome')
@section('altkisim')


    <main>
        <div class="head-title">
            <div class="left">
                <h1>Etkinlikler</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Liste</a>
                    </li>

                </ul>
            </div>
            <a href="{{route('etkinlikekle')}}" class="btn-download">
                <span class="text">Etkinlik Ekle</span>
            </a>
        </div>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Etkinlikler</h3>
                    <i class='bx bx-search' ></i>
                </div>


                <table class="etkinlikler">
                    <thead>
                    <tr>
                        <th>Etkinlik Adı</th>
                        <th>Etkinlik İçeriği</th>
                        <th>Etkinlik Yeri</th>
                        <th>Etkinlik Tarihi</th>
                        <th>Etkinlik Durumu</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($etkinlikler as $etkinlik)
                        <tr>
                            <td><p>{{$etkinlik->etkinlik_adi}}</p></td>

                            <td>{{$etkinlik->etkinlik_icerigi}}</td>

                            <td>{{$etkinlik->etkinlik_yeri}}</td>

                            <td>{{$etkinlik->etkinlik_tarihi->format('d.m.Y')}}</td>

                                @php
                                    $class = '';

                                @endphp

                                @switch($etkinlik->etkinlik_durum)
                                    @case("Yapılıyor")
                                        @php $class = 'yapılıyor'; @endphp
                                        @break

                                    @case("Yapılacak")
                                        @php $class = 'yapılacak'; @endphp
                                        @break

                                    @default
                                        @php $class = 'yapıldı'; @endphp

                                @endswitch

                            <td class={{$class}}>{{$etkinlik->etkinlik_durum}} </td>

                            <td>
                                <a href="{{ route('etkinlikdelete', $etkinlik->id) }}" >
                                    Sil
                                </a>
                            </td>

                            <td> <a href="{{route('etkinlikedit' ,$etkinlik->id)}}">Düzenle</a></td>


                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </main>

@endsection
