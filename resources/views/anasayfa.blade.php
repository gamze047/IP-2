
@extends('welcome')
@section('altkisim')



    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Anasayfa</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Anasayfa</a>
                    </li>
                </ul>
            </div>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-group' ></i>
                <span class="text">
						<h3>{{$uye_sayisi}}</h3>
						<p>Üye Sayısı</p>
					</span>
            </li>
            <li>
                <i class='bx' ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                    </svg></i>
                <span class="text">
						<h3>  {{$kitap_sayisi}} </h3>
						<p>Kitap Sayısı</p>
					</span>
            </li>

            <li>
                <i class='bx' ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"/>
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                    </svg></i>
                <span class="text">
						<h3>{{$odunc}}</h3>
						<p>Ödünç Alınan Kitap Sayısı</p>
					</span>
            </li>
        </ul>


        <!---SON İŞLEMLER KISMI ---->
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
                        <th>Kaydedilme Tarihi</th>
                        <th>Mail</th>
                        <th>Yetki</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($uyeler as $uye)
                    <tr>
                        <td>
                            <img src="{{ asset('resimler/woman.png')}}">
                            <p>{{$uye->ad}}</p>
                        </td>
                        <td>{{$uye->created_at->format('d.m.Y')}}</td>
                        <td> {{$uye->mail}} </td>
                        <td>{{$uye->yetki->yetki}}</td>

                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>


            <!---SON İŞLEMLERDE EKLEME KISMI---->


            <!-----SON İŞLEMLER SONU---->



            <!---ETKİNLİKLER KISMI---->

            <div class="table-data">
                <div class="order">
                    <div class="head">
                    <h3>Bu Günün Etkinlikleri</h3>
                </div>


                <table>
                    <thead>
                    <tr>
                        <th>Etkinlik Adı</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($etkinliksuan as $etkinlik)
                        <tr>

                            <td>{{ $etkinlik->etkinlik_adi }}</td>

                        </tr>
                    @endforeach
                    </tbody>

                </table>

</div>



            </div>
        </div>
    </main>
    <!-- MAIN -->

<!-- CONTENT -->
@endsection
