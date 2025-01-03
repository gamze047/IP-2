/*
import '../scss/app.scss';
$('.form').find('input, textarea').on('keyup blur focus', function (e) {

    var $this = $(this),
        label = $this.prev('label');

    if (e.type === 'keyup') {
        if ($this.val() === '') {
            label.removeClass('active highlight');
        } else {
            label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
        if( $this.val() === '' ) {
            label.removeClass('active highlight');
        } else {
            label.removeClass('highlight');
        }
    } else if (e.type === 'focus') {

        if( $this.val() === '' ) {
            label.removeClass('highlight');
        }
        else if( $this.val() !== '' ) {
            label.addClass('highlight');
        }
    }

});

$('.tab a').on('click', function (e) {

    e.preventDefault();

    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');

    target = $(this).attr('href');

    $('.tab-content > div').not(target).hide();

    $(target).fadeIn(600);

});

/*

const uyeEkleBtn = document.getElementById('uyeEkleBtn');
const uyeFormu = document.getElementById('uyeFormu');
const formKapatBtn = document.getElementById('btn-download');

uyeEkleBtn.addEventListener('click', () => {
    uyeFormu.style.display = 'block'; // Formu göster
});

formKapatBtn.addEventListener('click', () => {
    uyeFormu.style.display = 'none'; // Formu gizle
});
/*
document.getElementById('uyeForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Sayfa yenilenmesini engelle

    const formData = new FormData(this);

    fetch("{{ route('uyeler.store') }}", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Üye başarıyla eklendi!');
                location.reload(); // Sayfayı yenile veya tabloyu güncelle
            } else {
                alert('Bir hata oluştu!');
            }
        })
        .catch(error => console.error('Error:', error));
});
*/
