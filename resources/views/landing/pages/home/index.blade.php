@extends('landing.layouts.app')

@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('app-assets/images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Rental dan Sewa Mobil Online Lepas Kunci dan Tanpa Sopir di RENTCAR </h1>
                        <p style="font-size: 18px;">Temukan tarif carter rental mobil dan travel murah di RENTCAR. Sewa harian mobil untuk berbagai wilayah di Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12	featured-top">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center">
                            <form action="{{ route('landing.searchRentals') }}" method="GET" class="request-form ftco-animate bg-primary">
                                @csrf
                                <h2>Pilih Jadwal</h2>
                                <div class="form-group">
                                    <label for="" class="label">Pilih Provinsi</label>
                                    <select
                                        class="form-control select2"
                                        data-toggle="select2"
                                        name="province_id"
                                    >
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Pilih Kota</label>
                                    <select
                                        class="form-control select2"
                                        data-toggle="select2"
                                        name="regency_id"
                                    >
                                    </select>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Tanggal Mulai</label>
                                        <input type="text" name="date" id="book_pick_date" class="form-control" placeholder="Date">
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Durasi</label>
                                        <input type="number" name="days" class="form-control" placeholder="6 hari">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Sopir</label>
                                    <select class="form-control text-black" name="sopir" id="">
                                        <option value="0">Tanpa Sopir</option>
                                        <option value="1">Dengan Sopir</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Cari" class="btn btn-secondary py-3 px-4">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span>
                                            </div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Choose Your Pickup Location</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span>
                                            </div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Select the Best Deal</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span>
                                            </div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Reserve Your Rental Car</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row mb-6">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-5">
                        <h4 class="heading mb-2">Mitra Rental Mobil</h4>
                        <h5 class="heading mb-2">Mitra Rental Mobil Favorit Anda</h5>
                        <p>Kami bekerja sama dengan berbagai mitra rental mobil tepercaya di seluruh dunia untuk mengantar Anda ke mana saja!</p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Mitra rental mobil</h2>
                        @foreach($rentals as $rental)
                            <table>
                                <tbody>
                                {{ $rental->name }}
                                </tbody>
                            </table>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Pelayanan</span>
                    <h2 class="mb-3">Mengapa sewa mobil di RENTCAR ?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Hemat Waktu</h3>
                            <p>Sewa mobil cukup di genggaman Anda, kapan saja dan di mana saja. Bandingkan pilihan mobil dari partner tepercaya kami dengan mudah dan temukan yang sesuai dengan kebutuhan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Servis Berkualitas Dari Partner Tepercaya</h3>
                            <p>Partner rental mobil Traveloka menyediakan servis berkualitas demi kenyamanan bepergian Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Rating Pengguna Asli</h3>
                            <p>Ucapkan selamat tinggal pada keputusan yang tidak tepat. Rating dari user lain akan membantu Anda untuk menemukan pilihan rental mobil yang paling tepat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Tambah Mudah dengan PayLater</h3>
                            <p>Booking rental mobil kapan aja tanpa perlu membayar penuh secara langsung. Gunakan limit awal mulai dari 10 juta, cicilan 1-12 bulan dan bunga rendah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-12 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h3 class="fw-bold fs-md-4 fs-lg-5 fs-xl-6">Rental Mobil Lepas Kunci</h3>
                        <hr class="mx-auto text-primary my-4" style="height:3px; width:100px;" />
                        <p class="mx-auto">Bepergian bersama keluarga atau kerabat semakin asyik jika Anda menggunakan sarana transportasi yang tepat.
                            Sewa mobil atau carter mobil dapat menjadi pilihan terbaik untuk memudahkan mobilitas Anda.
                            Untuk semakin mendukung fleksibilitas Anda saat bepergian, Traveloka kini telah menjadi aplikasi sewa mobil yang terpercaya.
                            Aplikasi rental mobil Traveloka membuat Anda dapat menikmati kenyamanan ini dengan memesan langsung layanan rental mobil yang anda butuhkan.
                            Temukan berbagai pilihan mobil terbaik, lengkap dengan tarif mobil yang dibutuhkan. Cek harga sewa mobil harian untuk segala keperluan anda.
                            Dapatkan durasi rental 24 jam dengan memesan layanan sewa mobil lepas kunci di Traveloka. Jadikan perjalanan keluarga atau bisnis anda lebih hemat dan efisien.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 ftco-animate">
            <div class="text w-100 text-center mb-md-5 pb-md-5">
                <h3 class="fw-bold fs-md-4 fs-lg-5 fs-xl-6">Rental Mobil Dengan Sopir</h3>
                <hr class="mx-auto text-primary my-4" style="height:3px; width:100px;" />
                <p class="mx-auto">Memilih kendaraan yang tepat saat ingin bepergian adalah hal wajib. Jika Anda berencana keliling keluar kota dengan keluarga atau rombongan,
                    persewaan mobil atau carter mobil di luar kota menjadi pilihan terbaik. Kini, perkembangan teknologi memudahkan Anda untuk persewaan mobil di manapun hanya dengan Traveloka App.
                    Anda dapat menemukan pilihan mobil terbaik, rental mobil terdekat dari lokasi anda yang sesuai dengan kebutuhan. Kemudahan ini akan menjadikan perjalanan Anda lebih nyaman dan hemat waktu.
                    Lihat beberapa pilihan kendaraan yang tersedia dengan sopir dibawah ini:</p>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 ftco-animate">
            <div class="text w-100 text-center">
                <h3 class="fw-bold fs-md-4 fs-lg-5 fs-xl-6">Frequently Asked Questions (FAQ)</h3>
            </div>
        </div>
    </div>

    <!-- Example Code -->

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Mengapa saya harus menyewa mobil di RENTCAR?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                <div class="accordion-body">
                    Memesan mobil sebelum perjalanan melalui RENTCAR akan mengurangi kerepotan, juga menghemat waktu dan uang Anda. Anda bisa memilih dari berbagai jenis mobil yang tersedia dari penyedia rental yang terpercaya untuk berkeliling kota.
                    Pesan mobil yang cocok dengan kebutuhan Anda di RENTCAR dan Anda akan menikmati konfirmasi langsung dengan harga terbaik.
                </div>
            </div>
        </div>
        <div class="accordion-item" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Bagaimana cara memesan rental mobil di RENTCAR ?
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Anda dapat memesan mobil dalam beberapa langkah mudah berikut:
                    Pilih kota/wilayah rental, tanggal rental, durasi rental dan waktu jemput.
                    Pilih tipe mobil dan penyedia rental.
                    Isi detail kontak atau data wisatawan jika Anda pesan untuk orang lain.
                    Isi detail rental
                    Pastikan bahwa semua detail telah diisi dengan benar, kemudian pilih metode pembayaran.
                    Setelah pembayaran Anda diverifikasi, Anda akan menerima email berisi e-voucher rental mobil Anda dari RENTACAR.
                </div>
            </div>
        </div>

        <div class="accordion-item" id="accordionExample">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Bisakah pemesanan mobil dan waktu penjemputan dilakukan dihari yang sama ?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Tentu bisa! Tapi Anda harus menyewa mobil paling lambat 12 jam sebelum waktu penjemputan. Pelajari lebih lanjut di halaman bantuan rental mobil
                </div>
            </div>
        </div>

        <div class="accordion-item" id="accordionExample">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Bagaimana saya tahu apakah saya perlu memesan paket luar kota ?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Cari tahu dengan mengikuti langkah berikut:

                    Lihat detail produk.
                    Di bagian Luar Kota, ketuk Lihat Peta Zona.
                    Periksa apakah lokasi Anda termasuk dalam area merah yang ditentukan di peta atau termasuk di dalam daftar zona.
                </div>
            </div>
        </div>

        <div class="accordion-item" id="accordionExample">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Apa saja yang termasuk dalam jasa rental dasar ?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Jasa rental dasar tanpa tambahan termasuk penggunaan mobil dalam kota hingga 12 jam per hari ATAU hingga 23:59 serta jasa sopir. Bensin, uang tol, tips dan uang makan sopir tidak termasuk.
                </div>
            </div>
        </div>

        <div class="accordion-item" id="accordionExample">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Saya tidak bisa menghubungi sopir saya, apakah yang harus dilakukan ?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Buka Pesanan dan langsung hubungi perusahaan penyewa mobil. Jika sopir Anda masih tidak bisa dihubungi, hubungi Customer Service RENTCAR.
                </div>
            </div>
        </div>

        <div class="accordion-item" id="accordionExample">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Bisakah saya reschedule pemesanan rental mobil saya ?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Sayangnya, Anda tidak bisa reschedule pemesanan rental mobil Anda. Anda harus menghubungi Customer Service kami untuk membatalkan pesanan Anda. Kemudian, buat pesanan lagi dengan tanggal yang sesuai dengan kebutuhan Anda.
                </div>
            </div>
        </div>

    </div>

    <!-- End Example Code -->
@endsection
@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Select2
            $(".select2").each(function() {
                $(this)
                    .wrap("<div class=\"position-relative\"></div>")
                    .select2({
                        placeholder: "Select value",
                        dropdownParent: $(this).parent()
                    });
            })

            loadProvince()

            function loadProvince()
            {
                $.ajax({
                    method: 'GET',
                    url: 'https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json',
                    dataType: 'JSON',
                    success: function (provinces) {
                        let html = ''

                        provinces.map(province => {
                            html += `<option value="${province.id}">${province.name}</option>`
                        })

                        $('select[name="province_id"]').html(html)

                        $('select[name="province_id"]').trigger("change")
                    }
                })
            }

            $('select[name="province_id"]').change(function() {
                $.ajax({
                    method: 'GET',
                    url: `https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${$(this).val()}.json`,
                    dataType: 'JSON',
                    success: function (provinces) {
                        let html = ''

                        provinces.map(province => {
                            html += `<option value="${province.id}">${province.name}</option>`
                        })

                        $('select[name="regency_id"]').html(html)

                        $('select[name="regency_id"]').trigger("change")
                    }
                })
            })

            $('select[name="regency_id"]').change(function() {
                $.ajax({
                    method: 'GET',
                    url: `https://www.emsifa.com/api-wilayah-indonesia/api/districts/${$(this).val()}.json`,
                    dataType: 'JSON',
                    success: function (provinces) {
                        let html = ''

                        provinces.map(province => {
                            html += `<option value="${province.id}">${province.name}</option>`
                        })

                        $('select[name="district_id"]').html(html)

                        $('select[name="district_id"]').trigger("change")
                    }
                })
            })

            $('select[name="district_id"]').change(function() {
                $.ajax({
                    method: 'GET',
                    url: `https://www.emsifa.com/api-wilayah-indonesia/api/villages/${$(this).val()}.json`,
                    dataType: 'JSON',
                    success: function (provinces) {
                        let html = ''

                        provinces.map(province => {
                            html += `<option value="${province.id}">${province.name}</option>`
                        })

                        $('select[name="village_id"]').html(html)
                    }
                })
            })
        });
    </script>
@endsection
