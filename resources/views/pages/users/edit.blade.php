@extends('layouts.app')

@section('title', 'Edit User')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Advanced Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Users</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Users</h2>

                        <div class="card">
                            <form action="{{ route('user.update', $user) }}" method="POST" >
                                @csrf
                                @method('PUT')
                            <div class="card-header">
                                <h4>Input Text</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text"
                                        class="form-control @error('name')
                                            is-invalid
                                        @enderror" name="name" value="{{ $user->name }}" >
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label>email</label>
                                    <input type="email"
                                    class="form-control @error('email')
                                        is-invalid
                                    @enderror" name="email" value="{{ $user->email }}" >
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                        <input type="password"
                                            class="form-control  @error('password')
                                                is-invalid
                                            @enderror" name="password">
                                    </div>
                                   @error('password')
                                       <div class="invalid-feeback">
                                        {{ $message }}
                                       </div>
                                   @enderror
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="number" name="phone"  class="form-control" placeholder="+62"  value="{{ $user->phone }}" >
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Roles</label>
                                    <div class="selectgroup w-100" >
                                        <label class="selectgroup-item" >
                                            <input type="radio" name="roles" value="ADMIN"  class="selectgroup-input" @if ($user->roles == 'ADMIN') checked @endif >
                                            <span class="selectgroup-button" >Admin</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="roles" value="STAFF"  class="selectgroup-input" @if ($user->roles == 'STAFF') checked @endif  >
                                            <span class="selectgroup-button" >Staff</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="roles" value="USER"  class="selectgroup-input"  @if ($user->roles == 'USER') checked @endif >
                                            <span class="selectgroup-button" >User</span>
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div  class="card-footer text-right " >
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
