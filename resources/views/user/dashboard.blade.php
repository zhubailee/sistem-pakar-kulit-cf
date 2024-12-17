@extends('layouts.user.app')
@section('title','My dashboard')
@section('pagetitle','My Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-3" data-bs-toggle="modal" data-bs-target="#profile">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                <i class="fas fa-user-alt"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category" data-bs-toggle="tooltip" title="tekan untuk melihat profil">My Profile</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3" data-bs-toggle="modal" data-bs-target="#change">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-danger bubble-shadow-small">
                                <i class="fas fa-key"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category" data-bs-toggle="tooltip" title="tekan untuk mengganti password">Ganti Password</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="change" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('change',Auth::user()->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="password_lama" class="col-md-4 col-form-label text-md-right">
                                <strong>Password lama</strong>
                            </label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="password_lama" name="password_lama" value="{{ old('password_lama') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password_baru" class="col-md-4 col-form-label text-md-right">
                                <strong>Password baru</strong>
                            </label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="password_baru" name="password_baru" value="{{ old('password_baru') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="konfirmasi_password_baru" class="col-md-4 col-form-label text-md-right">
                                <strong>Konfirmasi Password</strong>
                            </label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="konfirmasi_password_baru" name="konfirmasi_password_baru" value="{{ old('konfirmasi_password_baru') }}">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
