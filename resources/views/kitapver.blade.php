@extends('welcome')
@section('altkisim')

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">


            <main>
                <div class="main-block">

                    <a href="{{route('kitaplar')}}" class="kapatma" style="font-size: 70px; color: whitesmoke ; margin-left: 20px">&times;</a>

                    <div class="left-part">
                        <img id="resim" src="{{asset('resimler/gemikitap.png')}}" style="width: 450px; height: 500px; margin-left: 20px ;">
                    </div>

                    <form action="{{route('oduncverildi')}}" method="POST">
                        @csrf

                        <h1>Kitap Ver</h1>
                        <div class="info">

                           <!--- <button >
                                <a href="{{route('uyelistele')}}" >
                                    Üye Seç
                                </a>
                            </button>

                              <button >
                                <a href="{{route('kitaplistele')}}" >
                                    Kitap Seç
                                </a>
                            </button>
                            --->

                                <label for="uye_id">Üye Numarası</label>
                                <input id="uye_id" name="uye_id" type="text" >

                                <label for="kitap_id">Kitap Numarası</label>
                                <input id="kitap_id" name="kitap_id" type="text" >


                                <label for="odunc_alinma_tarihi">Ödünç Alınma Tarihi</label>
                                <input id="odunc_alinma_tarihi" name="odunc_alinma_tarihi" type="date" >


                                <label for="odunc_verilecek_tarih">Ödünç Verilecek Tarih</label>
                                <input id="odunc_verilecek_tarih" name="odunc_verilecek_tarih" type="date" >


                        </div>
                        <button type="submit" >Kitap Ver</button>
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
                    color: #6ea3ff;
                    font-family: "Oswald", sans-serif;
                    font-size: 35px;
                }
                p {
                    margin: 0 0 5px;
                }
                .main-block {
                    display: flex;
                    min-height: 100vh;
                    background: #6ea3ff;
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
                    background: #6ea3ff;
                    font-size: 20px;
                    font-weight: 400;
                    color: #fff;
                }
                button:hover {
                    background: #89b7ff;
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
