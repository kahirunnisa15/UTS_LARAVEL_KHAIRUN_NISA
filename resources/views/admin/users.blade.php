@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold">
                User Addministration
            </h2>

            <p class="text-muted">
                Kelola data users dengan mudah
            </p>

        </div>

        <a href="/users/create"
           class="btn btn-primary rounded-3 px-4 shadow-sm">

            + Tambah User

        </a>

    </div>

    <div class="card border-0 shadow-lg rounded-4">

        <div class="card-body p-4">

            <table class="table align-middle table-hover">

                <thead class="table-light">

                    <tr>

                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>1</td>

                        <td>

                            <div class="d-flex align-items-center">

                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                     width="45"
                                     height="45"
                                     class="rounded-circle me-3">

                                <div>

                                    <div class="fw-semibold">
                                        Admin
                                    </div>

                                    <small class="text-muted">
                                        Super User
                                    </small>

                                </div>

                            </div>

                        </td>

                        <td>
                            admin@gmail.com
                        </td>

                        <td>

                            <span class="badge bg-success px-3 py-2">
                                Active
                            </span>

                        </td>

                        <td>

                            <a href="#"
                               class="btn btn-warning btn-sm rounded-3">

                                Edit

                            </a>

                            <a href="#"
                               class="btn btn-danger btn-sm rounded-3">

                                Delete

                            </a>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection