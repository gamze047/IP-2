@extends('welcome')
@section('altkisim')

    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Kitaplar</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Düzenle</a>
                    </li>
                </ul>

            </div>
            <a href="{{route('kitapekle')}}" class="btn-download">
                <span class="text">Kitap Ekle</span>
            </a>
        </div>

        <div class="container">
            <form action="{{ route('kitapedit', $kitap->id) }}" method="POST">
                @csrf
                @method('PUT')

                <h3>Kitap Düzenle
                </h3>

                <fieldset>
                    <label for="kitap_adi">Kitap Adı</label>
                    <input id="kitap_adi" name="kitap_adi" type="text"  value="{{$kitap->kitap_adi}}" required>
                </fieldset>

                <fieldset>
                    <label for="yazar">Yazarı</label>
                    <input id="yazar" name="yazar" type="text"  value="{{$kitap->yazar}}" required>
                </fieldset>

                <fieldset>
                    <label for="yayin_evi">Yayın Evi</label>
                    <input id="yayin_evi" name="yayin_evi" type="text"  value="{{$kitap->yayin_evi}}" required>
                </fieldset>

                <fieldset>
                    <label for="yayin_yili">Yayın Yılı</label>
                    <input id="yayin_yili" name="yayin_yili" type="date"  value="{{$kitap->yayin_yili->format('d.m.Y')}}" required>
                </fieldset>

                <fieldset>
                    <label for="kitap_turu">Kategorisi</label>
                    <input id="kitap_turu" name="kitap_turu" type="text"  value="{{$kitap->kitap_turu}}" required>
                </fieldset>

                <fieldset>
                    <label for="kitap_durumu">Durum</label>
                    <input id="kitap_durumu" name="kitap_durumu" type="text" value="{{$kitap->kitap_turu}}" required>
                </fieldset>

                <fieldset>
                    <button type="submit">Güncelle</button>
                </fieldset>
            </form>
        </div>


    </main>


@endsection
