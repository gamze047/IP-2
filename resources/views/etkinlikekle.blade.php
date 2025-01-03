@extends('welcome')
@section('altkisim')

    <link rel="stylesheet" href="{{ asset('form.css') }}" >


            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">


            <main>
                <div class="main-block">

                    <a href="{{route('etkinlikler')}}" class="kapatma" style="font-size: 70px; color: whitesmoke ; margin-left: 20px">&times;</a>

                    <div class="left-part">
                        <img id="resim" src="{{asset('resimler/etkinlikkitap.png')}}" style="width: 450px; height: 500px; margin-left: 20px ;">
                    </div>

                    <form id="contact" action="{{route('etkinlikform')}}" method="POST">
                        @csrf
                        <h1>Etkinlik Ekle</h1>
                        <div class="info">


                                    <label for="etkinlik_adi">Etkinlik Adı</label>
                                    <input id="etkinlik_adi" name="etkinlik_adi" type="text"   required >

                                    <label for="etkinlik_icerigi">Etkinlik İçeriği</label>
                                    <input id="etkinlik_icerigi" name="etkinlik_icerigi" type="text"   required>


                                    <label for="etkinlik_yeri">Etkinlik Yeri</label>
                                    <input id="etkinlik_yeri" name="etkinlik_yeri" type="text"  required>


                                    <label for="etkinlige_katilacaklar">Etkinliğe Katılacak Üyeler</label>
                                    <input id="etkinlige_katilacaklar" name="etkinlige_katilacaklar" type="text"  required>


                                    <label for="etkinligi_yonetenler">Etkinliği Yönetecek Üyeler</label>
                                    <input id="etkinligi_yonetenler" name="etkinligi_yonetenler" type="text"   required>


                                    <label for="etkinlik_tarihi">Etkinlik Tarihi</label>
                                    <input id="etkinlik_tarihi" name="etkinlik_tarihi" type="date"   required>


                                    <label for="etkinlik_durum">Etkinlik Durum</label>
                                    <select id="etkinlik_durum" name="etkinlik_durum" type="text"   required>
                                        <option value="Yapılıyor" >Yapılıyor</option>
                                        <option value="Yapılacak" >Yapılacak</option>
                                        <option value="Yapıldı" >Yapıldı</option>
                                    </select>
                             </div>
<br>
                        <br>
                              <button type="submit" >Etkinlik Ekle</button>
                    </form>

                </div>

            </main>


            <style>

                @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Signika+Negative:wght@300..700&display=swap');

                html, body {
                    min-height: 100%;
                    padding: 0;
                    margin: 0;
                    font-family: "Oswald", sans-serif;
                    font-size: 14px;
                    color: #7e7c7c;
                    font-optical-sizing: auto;
                    font-style: normal;
                }


                .main-block .left-part{
                    margin-top: 50px;
                }

                h1 {
                    margin: 0 0 20px;
                    font-weight: 400;
                    color:  #8969ff;
                    font-family: "Oswald", sans-serif;
                    font-size: 30px;
                }
                p {
                    margin: 0 0 5px;
                }
                .main-block {
                    display: flex;
                    min-height: 100vh;
                    background: #8969ff;
                }

                label{
                    font-family: "Oswald", sans-serif;
                    font-size: 20px;
                }

                form {
                    padding: 25px;
                    margin: 25px;
                    box-shadow: 0 2px 5px #f5f5f5;
                    background: #f5f5f5;
                }

                select {
                    background-color: #ffffff;
                    border: 2px solid #9f9e9e;
                    border-radius: 5px;
                    padding: 5px;
                    font-size: 16px;
                    color: #7e7c7c;
                    width: 200px;
                }


                input, textarea {
                    width: calc(100% - 18px);
                    padding: 8px;
                    margin-bottom: 20px;
                    border: 1px solid #9f9e9e;
                    outline: none;
                }
                input::placeholder {
                    color: #666;
                }
                button {
                    width: 100%;
                    padding: 10px;
                    border: none;
                    background:  #8969ff;
                    font-size: 20px;
                    font-weight: 400;
                    color: #fff;
                }
                button:hover {
                    background: #562cfc;
                }
                @media (min-width: 568px) {
                    .main-block {
                        flex-direction: row;
                    }
                    .left-part, form {
                        width: 50%;
                    }
                    .fa-envelope {
                        margin-top: 0;
                        margin-left: 20%;
                    }
                    .fa-at {
                        margin-top: -10%;
                        margin-left: 65%;
                    }
                    .fa-mail-bulk {
                        margin-top: 2%;
                        margin-left: 28%;
                    }
                }
            </style>



        @endsection








