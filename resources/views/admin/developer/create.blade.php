@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-light">Tambah Data Type</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/develop/add" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control noscroll" id="email" name="email" value="{{ old('email') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control noscroll" id="password" name="password" value="{{ old('password') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control noscroll" id="company" name="company" value="{{ old('company') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control noscroll" id="address" name="address" value="{{ old('address') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="owner" class="form-label">Owner</label>
                                <input type="text" class="form-control noscroll" id="owner" name="owner" value="{{ old('owner') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="license" class="form-label">License</label>
                                <input type="text" class="form-control noscroll" id="license" name="license" value="{{ old('license') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="phone_number" class="form-label">Phone number</label>
                                <input type="tel" class="form-control noscroll" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
                            </div>
                            <br>
                            
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/admin/develop/data">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
