@extends("backend.admin_layout")

@section("pagetitle")
    {{$kampus->adi}}
@endsection

@section("breadcrumbs")
    <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
    <li class="breadcrumb-item active"><a href="{{route("kurum.index")}}">Kurumlar</a></li>
    <li class="breadcrumb-item active"><a href="{{route("kampus.index",$kampus->kurum->id)}}">Kampüsler</a></li>
    <li class="breadcrumb-item active">Yeni Okul Ekle</li>
@endsection

@section("cardtitle")

@endsection

@section("cardtools")

@endsection

@section("contents")

    <form action="{{route("okul.store")}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="adi" class="form-label">Okul Adı</label>
            <input type="text" class="form-control" id="adi" name="adi">
        </div>

        <input type="submit" value="Okul Ekle" class="btn btn-success">
        <input type="hidden" name="kurum_id" value="{{$kampus->kurum->id}}">
        <input type="hidden" name="kampus_id" value="{{$kampus->id}}">
    </form>

@endsection

