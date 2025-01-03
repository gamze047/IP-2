@extends('welcome')
@section('altkisim')



<main>
    <div class="head-title">
        <div class="left">
            <h1>Üyeler</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Liste</a>
                </li>

            </ul>

        </div>
        <a href="{{route('uyeekle')}}" class="btn-download">
            <span class="text">Üye Ekle</span>
        </a>
        </div>


<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Son İşlemler</h3>
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
                <th>İşlemler</th>

            </tr>
            </thead>

            <tbody>
            @foreach($yetki as $uyeler)
                <tr  onclick="window.location='{{ route('uyedetay', $uyeler->id) }}'" style="cursor: pointer;">

                    <td><img src="{{$uyeler->yetki->yetki_resmi}}" alt="">
                        <p>{{$uyeler->ad}}  {{$uyeler->soyad}}</p></td>

                    <td>{{$uyeler->mail}}</td>

                    <td>{{$uyeler->yetki->yetki}}</td>

                    <td>{{$uyeler->created_at->format('d.m.Y')}}</td>

                    <td><a href="{{ route('delete', $uyeler->id) }}" >Sil</a></td>
                    <td> <a href="{{route('duzenle' ,$uyeler->id)}}">Düzenle</a></td>

                </tr>

            @endforeach
            </tbody>

        </table>
    </div>
</div>
</main>


@endsection
