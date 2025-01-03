@extends('welcome')
@section('altkisim')


    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Etkinlik</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Etkinlik Ekle</a>
                    </li>
                </ul>
            </div>
            <a href="{{route('etkinlikekle')}}" class="btn-download">
                <i class='bx bxs-cloud-download' ></i>
                <span class="text">Etkinlik Ekle</span>
            </a>
        </div>


        <div class="container">

            <form action="{{ route('etkinlikupdate',$etkinlik->id) }}" method="POST">
                @csrf

                @method('PUT')

                <h3>Etkinlik Düzenle</h3>

                <fieldset>
                    <label for="etkinlik_adi">Etkinlik Adı</label>
                    <input id="etkinlik_adi" name="etkinlik_adi" type="text"  value="{{$etkinlik->etkinlik_adi}}" required >
                </fieldset>

                <fieldset>
                    <label for="etkinlik_icerigi">Etkinlik İçeriği</label>
                    <input id="etkinlik_icerigi" name="etkinlik_icerigi" type="text"  value="{{$etkinlik->etkinlik_icerigi}}" required>
                </fieldset>

                <fieldset>
                    <label for="etkinlik_yeri">Etkinlik Yeri</label>
                    <input id="etkinlik_yeri" name="etkinlik_yeri" type="text"  value="{{$etkinlik->etkinlik_yeri}}" required>
                </fieldset>

                <fieldset>
                    <label for="etkinlige_katilacaklar">Etkinliğe Katılacak Üyeler</label>
                    <input id="etkinlige_katilacaklar" name="etkinlige_katilacaklar" type="text"   required>
                </fieldset>

                <fieldset>
                    <label for="etkinligi_yonetenler">Etkinliği Yönetecek Üyeler</label>
                    <input id="etkinligi_yonetenler" name="etkinligi_yonetenler" type="text"   required>
                </fieldset>

                <fieldset>
                    <label for="etkinlik_tarihi">Etkinlik Tarihi</label>
                    <input id="etkinlik_tarihi" name="etkinlik_tarihi" type="date"  value="{{$etkinlik->etkinlik_tarihi}}" required>
                </fieldset>

                <fieldset>
                    <label for="etkinlik_durum">Etkinlik Durum</label>
                    <select id="etkinlik_durum" name="etkinlik_durum" type="text"  tabindex="7" required>
                        <option class="status completed" value="Yapılıyor">Yapılıyor</option>
                        <option value="Yapılacak" >Yapılacak</option>
                        <option value="Yapıldı" >Yapıldı</option>
                    </select>
                </fieldset>

                <fieldset>
                    <button type="submit"  >Düzenle</button>
                </fieldset>
            </form>

        </div>


    </main>

@endsection
