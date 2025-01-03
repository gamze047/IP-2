@extends('welcome')
@section('altkisim')
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
                        <a class="active" href="#">Kitaplar</a>
                    </li>
                </ul>

            </div>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Kitaplar</h3>
                    <i class='bx bx-search' ></i>


                    <form method="GET" action="{{ route('kitaplar') }}">
                        <div>

                            <label for="filtre">Filtrele:</label>

                            <select id="kitap_turu" name="kitap_turu">
                                <option type="submit" value="">Tümü</option>
                                <option type="submit" value="Şiir" {{ request('kitap_turu') == 'Şiir' ? 'selected' : '' }}>Şiirler</option>
                                <option type="submit" value="Roman" {{ request('kitap_turu') == 'Roman' ? 'selected' : '' }}>Romanlar</option>
                                <option type="submit" value="Masal" {{ request('kitap_turu') == 'Masal' ? 'selected' : '' }}>Masallar</option>
                                <option type="submit" value="Hikaye" {{ request('kitap_turu') == 'Hikaye' ? 'selected' : '' }}>Hikayeler</option>
                            </select>

                        </div>
                        <button type="submit">Ara</button>

                    </form>


                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Kitap Adı</th>
                        <th>Kitap Yazarı</th>
                        <th>Yayın Evi</th>
                        <th>Yayın Yılı</th>
                        <th>Kategorisi</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($kitaplar as $kitap)

                        <tr onclick="window.location='{{ route('kitapdetay', $kitap->id) }}'" style="cursor: pointer;">
                            <td><p>{{$kitap->kitap_adi}}</p></td>

                            <td>{{$kitap->yazar}}</td>

                            <td>{{$kitap->yayin_evi}}</td>

                            <td>{{$kitap->yayin_yili->format('d.m.Y')}}</td>

                            <td>{{$kitap->kitap_turu}}</td>

                            <td>{{$kitap->kitap_durumu}}</td>


                            <td> <a href="{{route('kitapsec' ,$kitap->id)}}">Seç</a></td>

                        </tr>

                    @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </main>
@endsection
