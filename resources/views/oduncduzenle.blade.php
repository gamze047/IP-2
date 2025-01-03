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
            <a href="{{route('kitapekle')}}" class="btn-download">
                <span class="text">Kitap Ver</span>
            </a>
        </div>





        <!---
                                <script>
                                    document.getElementById("secildi").addEventListener("click", function () {
                                        fetch('/uyesecildi/{id}') // Backend'den veri al
                                            .then(response => response.json())
                                            .then(data => {
                                                // Gelen veriyi HTML'ye yerleştir
                                                document.getElementById("ad").textContent = data.name;
                                            })
                                            .catch(error => {
                                                console.error("Hata:", error);
                                                document.getElementById("ad").textContent = "Hata oluştu.";
                                            });
                                    });
                                </script>

        --->


        <form action="{{route('update' , $or->id)}}" method="POST">

            @method('PUT')
            @csrf

            <button >
                <a href="{{route('uyelistele')}}" >
                    Üye Seç
                </a>
            </button>

            <fieldset>
                <label for="uye_id">ÜYE İD</label>
                <input id="uye_id" name="uye_id" type="text" value="{{$or->uye_id}}"  >
            </fieldset>

            <button >
                <a href="{{route('kitaplistele')}}" >
                    Kitap Seç
                </a>
            </button>

            <fieldset>
                <label for="kitap_id">kitap</label>
                <input id="kitap_id" name="kitap_id" type="text"  value="{{$or->kitap_id}}" >
            </fieldset>

            <fieldset>
                <label for="odunc_alinma_tarihi">Kitap İD</label>
                <input id="odunc_alinma_tarihi" name="odunc_alinma_tarihi" type="date"  value="{{$or->odunc_alinma_tarihi}}" >
            </fieldset>



            <fieldset>
                <label for="odunc_verilecek_tarih">Kitap İD</label>
                <input id="odunc_verilecek_tarih" name="odunc_verilecek_tarih" type="date"  value="{{$or->odunc_verilecek_tarih}}" >
            </fieldset>


            <button type="submit"  name="submit" >Submit</button>

        </form>


    </main>
@endsection
