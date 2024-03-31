@extends("backend.admin_layout")

@section("pagetitle")
{{$kampus->adi}}
@endsection

@section("breadcrumbs")
    <li class="breadcrumb-item"><a href="{{route("dashboard")}}">Home</a></li>
    <li class="breadcrumb-item active"><a href="{{route("kurum.index")}}">Kurumlar</a></li>
    <li class="breadcrumb-item active"><a href="{{route("kampus.index",$kampus->kurum->id)}}">Kampüsler</a></li>
    <li class="breadcrumb-item active">Okullar</li>
@endsection

@section("cardtitle")
    Okullar
@endsection

@section("cardtools")
    <a href="{{route("okul.create",$kampus->id)}}" class="btn btn-sm btn-success">
        <i class="fas fa-plus mr-3.5"></i><span> Yeni Okul Ekle</span>
    </a>

@endsection

@section("contents")

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Okul Adı</th>
            <th>Sınıflar</th>
            <th>Öğrenciler</th>
            <th>Öğretmenler</th>
        </tr>
        </thead>
        <tbody>
        @forelse($kampus->okullar as $okul)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$okul->adi}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @empty
                <tr>
                    <th colspan="6"><i>Henüz okul eklenmemiş</i></th>
                </tr>
        @endforelse


        </tbody>
    </table>

@endsection

