<a class="float-end">
    <div class="dropdown">
        <button class="btn three-dot dropbtn" onclick="myFunction()"></button>
        <div id="myDropdown" class="dropdown-content">
            <a href="{{url('/settings/'.$optionVal)}}">
                <img src="{{asset('assets/img/ayaraDonBtn.svg')}}" width="20px" height="20px" style="margin-right: 27px;">
                Ayarlar
            </a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="{{asset('assets/img/sifirla.svg')}}" width="20px" height="20px" style="margin-right: 27px;">
                Sıfırla
            </a>
            <a href="{{url('/about/'.$optionVal)}}">
                <img src="{{asset('assets/img/hakkindayaDonBtn.svg')}}" width="20px" height="20px" style="margin-right: 27px;">
                Hakkında
            </a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <img width="20" height="20" src="{{asset('assets/img/cikisBtn.svg')}}" alt="" style="margin-right: 27px;">
                Çıkış
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </div>
    </div>
</a>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Seçimi Sıfırla</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Seçim ekranına dönmek istediğinize emin misiniz?<br>
                Eğer evet'e tıklarsanız tüm notlarınız silinecektir !!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hayır</button>
                <a href="{{url('/resetOption')}}">
                    <button type="button" class="btn btn-primary">Evet</button>
                </a>
            </div>
        </div>
    </div>
</div>

