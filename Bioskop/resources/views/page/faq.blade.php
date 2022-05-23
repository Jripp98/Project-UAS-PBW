@extends('navbar')

    @section('content')
    <img src="{{ url('img/bg.png')}}"/>
    <div class="container">
        <div class="v141_3744">
            <div class="v27_2530"></div>
                <span class="v27_2532">Pertanyaan Yang Sering Diajukan  Frequently Asked Questions</span>
                    <span class="v27_2534">APA ITU J2 MOVIES ?</span>
                        <span class="v27_2536" style="font: size 50%;">Adalah sebuah website penyedia jasa hiburan streaming film online yang mana berisikan konten-konten film dari hasil pencarian yang ada di internet . Kami tidak menyimpan atau melakukan cache terhadap file film tersebut dalam server kami, kami hanya menautkan. Kami sangat menyarankan Anda untuk mendukung pemilik karya cipta dengan cara membeli media secara legal agar pemilik hak cipta dapat terus berkarya.</span>
                    <span class="v27_2538">FILM TIDAK DAPAT DIPUTAR ?</span>
                 <span class="v27_2540">Ada beberapa kemungkinan jika film tidak dapat diputar, diantaranya :</span>
             <span class="v27_2542">Koneksi internet anda kurang memadai untuk streaming. Coba anda refresh halaman streaming tersebut atau coba memainkan film dari lokal anda dengan cara mendownload film terlebih dahulu.
                                    Browser anda tidak mendukung untuk menampilkan video player HTML5. Kami sarankan gunakan browser Firefox atau Chrome dengan versi yang terbaru.
                                    Film sudah terhapus oleh provider penyimpan film. Seperti yang diketahui, film tersebut tidak disimpan di dalam server kami sendiri. Melainkan disimpan dari provider link tersebut masing-masing.</span>
            <span class="v27_2544">BAGAIMANA CARA MELAPORKAN FILM YANG ERROR ?</span>
                <span class="v27_2546">Sistem kami akan mendeteksi secara otomatis apabila film tersebut tidak dapat diputar atau error.</span>
      </div>
        </div>   
     </div>
    </div>
</div>
<!-- Css faq-->
<style>
    body {
    font-size: 14px;
}

.v27_1404 {
    width: 100%;
    height: 1117px;
    background: linear-gradient(rgba(255, 255, 255, 0), rgba(14, 92, 173, 1));
    opacity: 1;
    position: relative;
    top: 0px;
    left: 0px;
    overflow: hidden;
}

.v141_3743 {
    width: 150%;
    height: 83px;
    background: rgb(7, 4, 104);
    opacity: 1;
    position: absolute;
    top: 5px;
    left: 0px;
    overflow: hidden;
}

.search {
    width: 369px;
    height: 36px;
    background: rgba(107, 110, 179, 0.9800000190734863);
    opacity: 1;
    position: absolute;
    top: 23px;
    left: 560px;
    overflow: hidden;
}

.v27_1450 {
    width: 57px;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 40px;
    left: 1345px;
    font-family: Rockwell;
    font-weight: Regular;
    font-size: 14px;
    opacity: 1;
    text-align: left;
}

.v27_1451 {
    width: 57px;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 42px;
    left: 1453px;
    font-family: Rockwell;
    font-weight: Regular;
    font-size: 14px;
    opacity: 1;
    text-align: left;
}

.v27_1449 {
    width: 57px;
    color: rgba(255, 254, 254, 1);
    position: absolute;
    top: 40px;
    left: 1256px;
    font-family: Rockwell;
    font-weight: Regular;
    font-size: 14px;
    opacity: 1;
    text-align: left;
}

.v27_1425 {
    width: 365px;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 0px;
    left: 83px;
    font-family: Potta One;
    font-weight: Regular;
    font-size: 70px;
    opacity: 1;
    text-align: left;
}

.v141_3744 {
    width: 75%;
    height: 757px;
    background: rgba(255, 255, 255, 1);
    opacity: 1;
    position: absolute;
    top: 163px;
    left: 201px;
    overflow: hidden;
}

.v27_2530 {
    width: 100%;
    height: 757px;
    background: rgba(222, 225, 229, 1);
    opacity: 1;
    position: relative;
    top: 0px;
    left: 0px;
    overflow: hidden;
}

.v27_2532 {
    width: 979px;
    color: rgba(0, 0, 0, 1);
    position: absolute;
    top: 33px;
    left: 16px;
    font-family: Rockwell;
    font-weight: Bold;
    font-size: 30px;
    opacity: 1;
    text-align: left;
}

.v27_2534 {
    width: 314px;
    color: rgb(0, 0, 0);
    position: absolute;
    top: 111px;
    left: 16px;
    font-family: Rockwell;
    font-weight: Bold;
    font-size: 30px;
    opacity: 1;
    text-align: left;
}

.v27_2536 {
    width: 100%;
    color: rgba(0, 0, 0, 1);
    position: absolute;
    top: 176px;
    left: 16px;
    font-family: Rockwell;
    font-weight: Regular;
    font-size: 24px;
    opacity: 1;
    text-align: left;
}

.v27_2538 {
    width: 470px;
    color: rgba(0, 0, 0, 1);
    position: absolute;
    top: 314px;
    left: 16px;
    font-family: Rockwell;
    font-weight: Bold;
    font-size: 30px;
    opacity: 1;
    text-align: left;
}

.v27_2540 {
    width: 780px;
    color: rgba(0, 0, 0, 1);
    position: absolute;
    top: 364px;
    left: 16px;
    font-family: Rockwell;
    font-weight: Regular;
    font-size: 24px;
    opacity: 1;
    text-align: left;
}

.v27_2542 {
    width: 100%;
    color: rgba(0, 0, 0, 1);
    position: absolute;
    top: 421px;
    left: 5px;
    font-family: Rockwell;
    font-weight: Regular;
    font-size: 24px;
    opacity: 1;
    text-align: left;
}

.v27_2544 {
    width: 853px;
    color: rgba(0, 0, 0, 1);
    position: absolute;
    top: 613px;
    left: 5px;
    font-family: Rockwell;
    font-weight: Bold;
    font-size: 30px;
    opacity: 1;
    text-align: left;
}

.v27_2546 {
    width: 100%;
    color: rgba(0, 0, 0, 1);
    position: absolute;
    top: 674px;
    left: 0px;
    font-family: Rockwell;
    font-weight: Regular;
    font-size: 24px;
    opacity: 1;
    text-align: left;
}
</style>
          @endsection                  
                                     