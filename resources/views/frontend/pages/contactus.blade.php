@extends('frontend.layouts.app')


@section('content')
<div class="jumbotron jumbotron-fluid bg-image">
    <div class="container py-5">
      <h1 class="display-4 text-center text-white">Contact Us</h1>
    </div>
  </div>

  <div class="container mb-5">
      <div class="row">
          <div class="col-md-7">
              <form action="" method="post">
                 <div class="form-group">
                      <label for="">Nama Depan</label>
                      <input type="text" class="form-control" placeholder="Masukan Nama Depan">
                 </div>

                 <div class="form-group">
                    <label for="">Nama Belakang</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Belakang">
                </div>

                <div class="form-group">
                    <label for="">Nama Perusahaan</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Perusahaan">
                </div>

                <div class="form-group">
                    <label for="">Industri</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Industri">
                </div>

                <div class="form-group">
                    <label for="">Nomor Telepon</label>
                    <input type="text" class="form-control" placeholder="Masukan Nomor Telepon">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Masukan Email">
                </div>

                <div class="form-group">
                    <label for="">Nama Belakang</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">Kirim Pesan</button>
                </div>
              </form>
          </div>
          <div class="col-md-5">
                <div class="container">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th>Telepon</td>
                                <th>:</th>
                                <td>0819449999994</td>
                            </tr>
                            <tr>
                                <th>Email:</td>
                                <th>:</th>
                                <td>admin@bisnisinternet.biz</td>
                            </tr>
                            <tr>
                                <th>Alamat</td>
                                <th>:</th>
                                <td> Bekasi, Jakarta, Indonesia</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
          </div>
      </div>
  </div>
@endsection
