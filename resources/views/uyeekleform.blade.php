@extends('welcome')
@section('altkisim')


<link rel="stylesheet" href="{{ asset('form.css') }}" >

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">


            <main>
                <div class="main-block">

                    <a href="{{route('kitaplar')}}" class="kapatma" style="font-size: 70px; color: whitesmoke ; margin-left: 20px">&times;</a>

                    <div class="left-part">
                        <img id="resim" src="{{asset('resimler/uyekitap.png')}}" style="width: 450px; height: 500px; margin-left: 20px ;margin-top: 60px ;">
                    </div>


                    <form id="contact" action="{{route('submit')}}" method="POST">
                        <h1>Üye Kayıt Formu</h1>
                        <div class="info">

                            @csrf

                                <label for="ad">Ad</label>
                                <input id="ad" name="ad" type="text"   required >


                                <label for="soyad">Soyad</label>
                                <input id="soyad" name="soyad" type="text"   required>


                                <label for="sehir">Şehir</label>
                                <input id="sehir" name="sehir" type="text"   required>


                                <label for="dogum_yili">Doğum Günü</label>
                                <input id="dogum_yili" name="dogum_yili" type="date"   required>


                                <label for="mail">Mail</label>
                                <input id="mail" name="mail" type="email"   required>


                                <label for="telefon">Telefon</label>
                                <input id="telefon" name="telefon" type="text"   required>


                                <label for="yetki_id">Yetki</label>
                                <select id="yetki_id" name="yetki_id" required>
                                    <option value="1">Üye</option>
                                    <option value="2">Kitap Düzenleme</option>
                                    <option value="3">Görevli</option>
                                    <option value="4">Başkan</option>
                                </select>

                             <br>
                            <br>
                            <br>
                        </div>
                        <button type="submit" >Ekle</button>
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
                    color: #5b9ba1;
                    font-family: "Oswald", sans-serif;
                    font-size: 35px;
                }
                p {
                    margin: 0 0 5px;
                }
                .main-block {
                    display: flex;
                    min-height: 103vh;
                    background: #5b9ba1;
                }

                label{
                    font-family: "Oswald", sans-serif;
                    font-size: 16px;
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
                    background:  #5b9ba1;
                    font-size: 20px;
                    font-weight: 400;
                    color: #fff;
                }
                button:hover {
                    background: #33676e;
                }
                @media (min-width: 568px) {
                    .main-block {
                        flex-direction: row;
                    }
                    .left-part, form {
                        width: 50%;
                    }

                }
            </style>





@endsection
