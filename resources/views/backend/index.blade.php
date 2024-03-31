@extends("backend.admin_layout")

@section("pagetitle")
    İlk Sayfam
@endsection

@section("breadcrumbs")
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">İlkSayfam</li>
@endsection

@section("cardtitle")
    İlk Kartım
@endsection

@section("cardtools")
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
    </button>
@endsection

@section("contents")



@endsection

