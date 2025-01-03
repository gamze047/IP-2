@extends('welcome')
@section('altkisim')


    <stylesheet></stylesheet>
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Üyeler</a>
                    </li>
                </ul>

            </div>
            <a href="{{route('uyelistele')}}" class="btn-download" style="font-size: 20px;">
                &times;
            </a>
        </div>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Üye Seç</h3>
                    <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Üyeler</th>
                        <th>Mail</th>
                        <th>Yetki</th>
                        <th>Kaydedilme Tarihi</th>
                        <th>Durum</th>
                        <th>İşlemler</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($uyeler as $uye)
                        <tr  onclick="window.location='{{ route('uyedetay', $uye->id) }}'" style="cursor: pointer;">
                            <td>
                                <img src="{{ asset('resimler/woman.png')}}">
                                <p>{{$uye->ad}}  {{$uye->soyad}}</p>
                            </td>
                            <td>{{$uye->mail}}</td>
                            <td>{{$uye->yetki}}</td>
                            <td>{{$uye->created_at->format('Y-m-d')}}</td>
                            <td><span class="status completed">Completed</span></td>
                            <td> <a href="{{route('uyesecildi' ,$uye->id)}}">Seç</a></td>

                        </tr>

                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </main>


@endsection
