@extends("backend.admin_layout")

@section("pagetitle")
    KURUMLAR
@endsection

@section("breadcrumbs")
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Kurumlar</li>
@endsection

@section("cardtitle")
    Kurumlar
@endsection

@section("cardtools")
    <a href="{{route("kurum.create")}}" class="btn btn-sm btn-success">
        <i class="fas fa-plus mr-3.5"></i><span> Yeni Kurum Ekle</span>
    </a>

@endsection

@section("contents")

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Kurum Adı</th>
            <th>Kamu/Özel</th>
            <th>Kampusler </th>
            <th>Okullar</th>
            <th>Adminler</th>
            <th>Öğretmenler</th>
            <th>Öğrenciler</th>

        </tr>
        </thead>
        <tbody>
        @foreach($kurumlar as $kurum)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$kurum->adi}}</td>
                <td>{{$kurum->kamu ? "Kamu":"Özel"}}</td>
                <td><a href="{{route("kampus.index",$kurum->id)}}" class="btn btn-primary btn-sm mr-2 py-2 px-3 text-bold">{{count($kurum->kampusler)}}</a><a href="{{route("kampus.create",$kurum->id)}}" class="btn btn-xs btn-success"><i class = "fa fa-plus"></i></a></td>
                <td>{{count($kurum->okullar)}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endforeach


        </tbody>
    </table>

@endsection

