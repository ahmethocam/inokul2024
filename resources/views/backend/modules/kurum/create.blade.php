@extends("backend.admin_layout")

@section("pagetitle")
    İlk Sayfam
@endsection

@section("breadcrumbs")
    <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
    <li class="breadcrumb-item active"><a href="{{route("kurum.index")}}">Kurumlar</a></li>
    <li class="breadcrumb-item active">Yeni Kurum Ekle</li>
@endsection

@section("cardtitle")

@endsection

@section("cardtools")
    <a href="{{route("kurum.create")}}" class="btn btn-sm btn-success">
        <i class="fas fa-plus mr-3.5"></i><span> Yeni Kurum Ekle</span>
    </a>

@endsection

@section("contents")

    <form action="{{route("kurum.store")}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="adi" class="form-label">Kurum Adı</label>
            <input type="text" class="form-control" id="adi" name="adi">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="kamu" value = "1" name="kamu" checked>
            <label class="form-check-label" for="kamu">
                Kamu Kuruluşu
            </label>
        </div>
        <input type="submit" value="Kurum Ekle" class="btn btn-success">

    </form>

@endsection

