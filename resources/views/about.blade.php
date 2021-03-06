@extends('layout')

@section('content')
<link rel="stylesheet" href="aset/css/style.css">
<div class="site-section bg-light" id="about-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3"></h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="contact-map">
                    <div class="gmap_canvas">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.423187399743!2d104.75844931428426!3d-2.979964540657837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b756540925d49%3A0x75ef683ab7b721d7!2sSmart+Integrated+System!5e0!3m2!1sid!2sid!4v1563786338387!5m2!1sid!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                </div>
            </div>

            <div class="col-lg-4 ml-auto">
                <h3 class="text-black mb-4">Menerima Bimbingan</h3>
                <p class="mb-2">1. SMP</p>
                <p class="mb-2">2. SMA MIPA dan MIPS</p>
                <p class="mb-2">3. SMP/SMA Olimpiade Komputer)</p><br>
                <h3 class="text-black mb-4">Fasilitas</h3>
                <p class="mb-2">1. Free Wifi</p>
                <p class="mb-2">2. Kelas FUll AC</p>
                <p class="mb-2">3. Pengajar Orofesional (Lulusan S1 & S2)</p>
                <p class="mb-2">4. Berpengalaman dan Kompeten</p>
                <p class="mb-2">5. Konsultasi PR dan Ulangan</p>
        </div>
    </div>
</div>
@endsection