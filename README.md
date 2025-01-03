# Kütüphane Kulübü Yönetim Sistemi
- Bu proje basit bir kütüphane kulübünün kitap verilmesini alınmasını , üyeleri ve etkinlikleri yönetmesini sağlamayı amaçlar.

## Özellikler
- Anasayfa: Bu kısımda en son eklenen üyelerin listesini , o güne ait etkinlikleri , toplam ; üye,kitap,ödünç alınan kitap sayısını görebilirsiniz.
- Kitap Ver: Sadece var olan üyelere mevcut kitapları ödünç verebilirsiniz. Bu kısımda üyeler tarafından alınan kitaplar listelenir ve bir tabloda gösterilir. 
- Kitaplar: Yeni kitap ekleyebilir ve bu kitapları listeleyebilirsiniz. Listelenen kitapların üstüne tıkladığınızda ayrıntılı kitap bilgisi görünecektir.
- Etkinlikler: Yeni etkinlikler ekleyip bu etkinlikleri listeleyebilirsiniz.
- Üyeler : Üyelere yetkiler tanımlayarak yeni üyeler oluşturabilirsiniz. Listelenen üyelerin üstüne tıkladığınızda ayrıntılı üye bilgileri görünecektir.

## Kullanım

### Yan Navbar
- Navbarda 5 kategori var. Özellikler kısmında hepsini belirttim. Bu kategorilerin üstüne tıklayarak ilgili sayfaya gidebilirsiniz.
 ![Navbar](https://github.com/user-attachments/assets/12b468f4-ee6f-43e2-a8b4-8580ed361bdf)
-----

## Kitap Ver Kısmı
- Navbardaki "Kitap Ver" kısmına geldiğinizde karşınıza şöyle boş bir liste çıkacaktır. Ekrandaki "Kitap Ver" butonuna bastığınızda sizi kitap verme formuna gönderecektir.
 ![kitap ver kısmı](https://github.com/user-attachments/assets/2dd77009-280a-473a-b118-78df9b4436ed)


- Kitap Verme Formunda sadece var olan üye id'leri ve var olan kitap id'leri ile bir üyeye kitap atayabilirsiniz.(olmayan bir kitabı olmayan bir üyeye atama şansınız yok tabi).
 ![kitap verme formu ](https://github.com/user-attachments/assets/db6848ee-c4e6-44f4-a639-030569e486c0)

- Formu doğru şekilde doldurduktan sonra formu gönderdiğinizde sizi otomatik olarak Kitap Ver sayfasına geri gönderecektir. Bu listede verilen kitap ve alan üye ile ilgili basitçe bilgi içeren liste oluşur.
- Bu listede ayriyetten kitabın geri verilmesi için kalan süreyi de görebilirsiniz.
- #### İşlemler kısmında eğer Verildi seçeneğine tıklarsanız :
 1. Kitabın durumu kitaplar kısmında "Mevcut" olarak değşir.
 2. Kitabı alan üyenin detaylı bilgisine gititğinizde Üyenin okuduğu kitaplar listesine eklenir.
 3. Bir daha verildi seçeneğine tıklasanız da ilk tıkladığınız gün bilgisi kalır.
    
  ![image](https://github.com/user-attachments/assets/72b14839-98d9-475f-9167-604c7bb7338b)


## Kitaplar  Kısmı 
- Bu kısıma girildiğinde karşımıza ilk olarak boş bir kitap listesi çıkar.
- Filtreleme seçeneği ile listelenen kitapları türlerine göre filtreleyebilirsiniz.
![image](https://github.com/user-attachments/assets/2fa49c6f-fbc8-4746-b3d8-21ee6b6212f3)

- Kitap Ekle dediğimizde karşımıza kitap eklememiz için bir form çıkacaktır.
- Forma kitap bilgilerini girdikten ve formu gönderdikten sonra otomatik olarak kitaplar sayfasını bizi yönlendirecektir. Burada eklediğimiz kitap listede görünür.
![image](https://github.com/user-attachments/assets/26a66d44-0c4a-4d3b-88f1-12077b0b2989)

- Burada Kitabın genel bilgileri listelenecektir. Kitabın üstüne tıkladığınızda kitabın tüm bilgilerini görebilirsiniz.
  ![image](https://github.com/user-attachments/assets/fd91b15d-7991-47f3-9504-2b145143d596)

- Burada kitabın tüm bilgileri bulunmaktadadır.
 ![image](https://github.com/user-attachments/assets/1944d394-107b-4f53-9834-56465dfa5991)


## Etkinlikler Kısmı
- Yine diğerlerinde de olduğu gibi aynı listeleme sayfası görüntülenecektir
- Etkinlik Ekle dediğimizde karşımıza bir etkinlik ekleme formu çıkacaktır.
- Formu doldurup gönderdikten sonra etkinliklerin sayfasında listelenecektir.
  ![image](https://github.com/user-attachments/assets/e7726b54-7fdc-40b4-b237-299303a76198)

- Listede etkinliğin durumuna göre "Yapılıyor" , "Yapılacak" ve "Yapıldı" bilgileri duruma göre renk alır.
  ![image](https://github.com/user-attachments/assets/99448979-82d8-4a27-b9fb-284b7a2eac1e)


## Üyeler Kısmı
- Üyelerin listelendiği bir anasayfa görünür. 
- Üye Ekle dediğimizde üye ekleme formu karşımıza çıkacaktır. Bu formu doldurduğumzuda bizi anasayfaya yönlendirir ve üye bilgisini listeler.
 ![image](https://github.com/user-attachments/assets/137bbf27-4e33-4826-b5e7-2f5a5d622b91)

- Listelemede görünen profil fotoğrafı "Yetkiler" tablosundan çekilmektededir. Bu tabloda belirlenen yetkiye göre fotoğraf gelir. 
![image](https://github.com/user-attachments/assets/123b4e2f-2a0e-488e-b8b1-69b35acaa3e0)

- Üyenin detaylı bilgisi de şu şekilde görünecektir.
- Üye eğer kitap almış ve sonra vermişse okuduğu kitaplar listesinde listelenir.
![image](https://github.com/user-attachments/assets/897dc2d3-74f1-40e7-a792-ff9dd216dcf6)


-----

### Geliştirilebilir Yönleri
- Üyelerin detaylı bilgileri daha ayrıntılı olabilirdi.(Okuduğu kitaplar kısmı açılıp kapanabilen bir liste olarak görünebilir, katıldığı etkinlikler listelenebilir),
- Kitabı zamanında ödünç vermeyen üye için belirli bir sınırlama getirilebilirdi.
- Etkinliklerin detaylı bilgisi kısmı eksikti.
- Anasayfada hızlı işlemler yoktu.
- Herhangi bir arama yapma özelliği bulunmuyor bu da çok veri girişinde istenilen veriyi bulmakta zorluk yaratacaktır.



 

  

