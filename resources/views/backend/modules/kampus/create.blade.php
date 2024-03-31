@extends("backend.admin_layout")

@section("pagetitle")
    Kampüsler
@endsection

@section("breadcrumbs")
    <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
    <li class="breadcrumb-item active"><a href="{{route("kurum.index")}}">Kurumlar</a></li>
    <li class="breadcrumb-item active">Yeni Kampüs Ekle</li>
@endsection

@section("cardtitle")

@endsection

@section("cardtools")
    {{$kurum->adi}}
@endsection

@section("contents")

    <form action="{{route("kampus.store")}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="adi" class="form-label">Kampüs Adı</label>
            <input type="text" class="form-control" id="adi" name="adi">
        </div>

        <input type="submit" value="Kampüs Ekle" class="btn btn-success">
        <input type="hidden" name="kurum_id" value="{{$kurum->id}}">
    </form>

@endsection

