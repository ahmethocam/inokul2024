@extends("backend.admin_layout")

@section("pagetitle")
    {{$kurum->adi}}
@endsection

@section("breadcrumbs")
    <li class="breadcrumb-item"><a href="{{route("dashboard")}}">Home</a></li>
    <li class="breadcrumb-item active"><a href="{{route("kurum.index")}}">Kurumlar</a></li>
    <li class="breadcrumb-item active">Kampüsler</li>
@endsection

@section("cardtitle")
    Kampüsler
@endsection

@section("cardtools")
    <a href="{{route("kampus.create",$kurum->id)}}" class="btn btn-sm btn-success">
        <i class="fas fa-plus mr-3.5"></i><span> Yeni Kampüs Ekle</span>
    </a>

@endsection

@section("contents")

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Kampus Adı</th>
            <th>Okullar</th>
            <th>Adminler</th>
            <th>Öğretmenler</th>
            <th>Öğrenciler</th>
        </tr>
        </thead>
        <tbody>
        @forelse($kurum->kampusler as $kampus)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$kampus->adi}}</td>
                <td><a href="{{route("okul.index",$kampus->id)}}" class="btn btn-primary btn-sm mr-2 py-2 px-3 text-bold">{{count($kampus->okullar)}}</a><a href="{{route("okul.create",$kampus->id)}}" class="btn btn-xs btn-success"><i class = "fa fa-plus"></i></a></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @empty
                <tr>
                    <th colspan="6"><i>Henüz kampüs eklenmemiş</i></th>
                </tr>
        @endforelse


        </tbody>
    </table>

@endsection

