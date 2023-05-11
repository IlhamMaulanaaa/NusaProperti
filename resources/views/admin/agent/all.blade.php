@extends('admin.layout.main')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title fs-2 text-primary">
                    {{ $tables }}
                </h2>
                <div class="col-md-10">
                    <a agent="button" class="btn btn-primary" href="create">Tambah Data Baru</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table mb-2 ">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Location</th>
                            <th scope="col">Ktp</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($agents->count())
                            @foreach ($agents as $agent)
                                <tr align="center">
                                    <td class=""><?= $loop->iteration ?></td>
                                    {{-- <td class=""><?= $agent->id ?></td> --}}
                                    <td class="text-start"><?= $agent->email ?></td>
                                    <td class="text-start"><?= $agent->password ?></td>
                                    <td class="text-start"><?= $agent->name ?></td>
                                    <td class="text-start"><?= $agent->address ?></td>
                                    <td class="text-start"><?= $agent->location ?></td>
                                    <td class="text-start"><?= $agent->ktp ?></td>
                                    <td class="text-start"><?= $agent->phone_number ?></td>
                                    <td class="text-start">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="show/{{ $agent->id }}">Detail Data</a>
                                        <a type="button" class="btn btn-outline-primary"
                                            href="edit/{{ $agent->id }}">Edit Data</a>
                                        <form action="delete/{{ $agent->id }}" method="get" class="d-inline">
                                            @csrf
                                            <button class="btn btn-outline-danger"
                                                onclick="return  confirm('Apakah Anda Yakin')">Delete Data</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @elseif ($agents->count())
                                    <div class="form-group">
                                        <a agent="button" class="btn btn-warning" href="/admin/agent/all">Back</a>
                                    </div> --}}
                        @else
                            <tr>
                                <td colspan="100" align="center">Data Tidak Ditemukan</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection