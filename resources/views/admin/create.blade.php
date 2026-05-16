@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card border-0 shadow-lg rounded-4">

                <div class="card-header bg-primary text-white text-center rounded-top-4 p-4">

                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                         width="80"
                         class="mb-3">

                    <h2 class="fw-bold">Create New User</h2>

                    <p class="mb-0">
                        Tambahkan data user baru
                    </p>

                </div>

                <div class="card-body p-5">

                    <form action="{{ route('users.store') }}" method="POST">

                        @csrf

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Full Name
                            </label>

                            <input type="text"
                                   name="name"
                                   class="form-control rounded-3 p-3"
                                   placeholder="Masukkan nama lengkap">

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Email Address
                            </label>

                            <input type="email"
                                   name="email"
                                   class="form-control rounded-3 p-3"
                                   placeholder="Masukkan email">

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Password
                            </label>

                            <input type="password"
                                   name="password"
                                   class="form-control rounded-3 p-3"
                                   placeholder="Masukkan password">

                        </div>

                        <div class="d-grid">

                            <button type="submit"
                                    class="btn btn-primary btn-lg rounded-3">

                                + Save User

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection