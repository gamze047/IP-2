@extends('welcome')
@section('altkisim')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <main>
        <div class="head-title">
            <div class="left">
                <h1>Kitap Ver</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Liste</a>
                    </li>

                </ul>

            </div>
            <a href="{{route('kitapver')}}" class="btn-download">
                <span class="text">Kitap Ver</span>
            </a>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Ödünç Kitaplar</h3>
                    <i class='bx bx-search' ></i>


               <!----     <form method="GET" action="{{ route('odunc') }}">
                        <div>

                            <label for="filtre">Filtrele:</label>

                            <select id="durum" name="durum">
                                <option value="">Tümü</option>
                                <option value="0" {{request('durum') == 0 }}>Verilmemiş</option>
                                <option value="1" {{request('durum') == 1 }}>Verilenler</option>

                            </select>

                        </div>
                        <button type="submit">Ara</button>

                    </form>
---->

                </div>

                <table>
                    <thead>
                    <tr>
                        <th>Üye No</th>
                        <th>Ad Soyad</th>
                        <th>Kitap Adı</th>
                        <th>Ödünç Alınma Tarihi</th>
                        <th>Geri Verileceği Tarih</th>
                        <th>Kalan Süre</th>
                        <th>Verilme Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>


                    <tbody>

                    @foreach($order as $or)

                        <tr onclick="window.location='#'" style="cursor: pointer;">

                             <td><p>{{$or->uye_id}}</p></td>
                            <td><p>{{$or->uyeler->ad}}  {{$or->uyeler->soyad}}</p></td>
                            <td><p>{{$or->kitaplar->kitap_adi}}</p></td>
                            <td><p>{{$or->odunc_alinma_tarihi->format('d.m.Y')}}</p></td>
                            <td><p>{{$or->odunc_verilecek_tarih->format('d.m.Y')}}</p></td>
                            <td><p>{{ $or->odunc_alinma_tarihi->diffInDays($or->odunc_verilecek_tarih)}}</p></td>
                            <td><p>{{$or->geri_verme_tarihi ? $or->geri_verme_tarihi->format('d.m.Y') : ' - '}}</p></td>
                            <td><a href="{{route('delete' , $or->id)}}">Sil</a> </td>
                            <td><a href="{{route('oduncduzenle' , $or->id)}}">Düzenle</a> </td>
                            <td><a href="{{route('verildi' , $or->id)}}">Verildi</a> </td>
                        </tr>
                    @endforeach


                    </tbody>

                </table>

            </div>

        </div>
    </main>
@endsection
