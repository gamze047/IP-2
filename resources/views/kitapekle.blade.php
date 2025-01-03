@extends('welcome')
@section('altkisim')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">


        <main>
    <div class="main-block">

            <a href="{{route('kitaplar')}}" class="kapatma" style="font-size: 70px; color: whitesmoke ; margin-left: 20px">&times;</a>

        <div class="left-part">
           <img id="resim" src="{{asset('resimler/kitap.png')}}" style="width: 450px; height: 600px; margin-left: 20px ;">
        </div>


        <form method="POST" action="{{route('kitapform')}}"  >
            <h1>Kitap Ekle</h1>
            <div class="info">

                @csrf
                    <label for="kitap_adi">
                        Kitap Adı</label>
                    <input id="kitap_adi" name="kitap_adi" type="text"   required >


                    <label for="yazar">
                        Yazarı</label>
                    <input id="yazar" name="yazar" type="text"  required>

                <label for="yayin_yili">
                    Yayın Yılı</label>
                <input id="yayin_yili" name="yayin_yili" type="date"   required>

                    <label for="yayin_evi">
                        Yayın Evi</label>
                    <input id="yayin_evi" name="yayin_evi" type="text"  required>


                    <label for="kitap_aciklama">
                        Açıklaması</label>
                    <div>
                        <textarea id="kitap_aciklama" name="kitap_aciklama" rows="4"></textarea>
                    </div>


                    <label for="kitap_turu">
                        Kitabın Türü
                        <select id="kitap_turu" name="kitap_turu" class="m-t-xs">
                            @foreach($kitap as $kit)
                            <option value="{{$kit->id}}" >{{$kit->kategori_adi}}</option>
                            @endforeach
                        </select>
                    </label>
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
                color: #ff744b;
                font-family: "Oswald", sans-serif;
                font-size: 35px;
            }
            p {
                margin: 0 0 5px;
            }
            .main-block {
                display: flex;
                min-height: 100vh;
                background: #ff744b;
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
                background: #ff744b;
                font-size: 20px;
                font-weight: 400;
                color: #fff;
            }
            button:hover {
                background: #f59174;
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
