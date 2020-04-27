@extends('layout.app')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Master Produk</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-danger">
              <span class="close"> close </span>
          </button>
        </div>
      </div>
      <div class="container">
      <form class="form-Add" action="simpan" method="post" >
      @csrf
        <h5 class="h6 mb-3 font-normal border-bottom">BUAT MASTER ADDITIONAL OPTIONS</h5>
        <label for="id">ID Additional Option</label>
        <input type="text" id="id" name="id_additional" class="form-control" placeholder="ID Additional option" required autofocus>
        <label for="NamaProduk">Nama Produk Additional Option</label>
        <input type="text" id="NamaProduk" name="nama_produk" class="form-control" placeholder="Nama Produk Additional Options" required>
        <label for="hpp">Harga Pokok Produksi</label>
        <input type="text" id="hpp" name="harga_pokok" class="form-control" placeholder="Rp." required>
        <label for="hargajual">Harga Jual</label>
        <input type="text" id="hargajual" name="harga_jual" class="form-control" placeholder="Rp." required><br>
          <button type="submit"  class="btn-toolbar mb-2 mb-md-0btn btn-md btn-primary px-3">
              <span> SIMPAN </span>
          </button><br>
      </form>
      </div>

      <div class="produk">
        <h5>DATA MASTER ADDITIONAL OPTION</h5>
        @if(!empty($produk_list))
          <table class="table">
            <thead>
              <tr>
                <th>ID Additional Options</th>
                <th>Nama Produk</th>
                <th>Harga Pokok Produksi</th>
                <th>Harga Jual</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($produk_list as $pro): ?>
              <tr>
                <td>{{$pro->id_additional}}</td>
                <td>{{$pro->nama_produk}}</td>
                <td>{{$pro->harga_pokok}}</td>
                <td>{{$pro->harga_jual}}</td>
                <td><a class="btn btn-info" href="produk.detail<?php $pro->id ?>">Detail</a></td>
                <td><a class="btn btn-primary" href="produk.edit,<?php $pro->id ?>">Edit</a></td>
                <td>
                  <form action="produk.destroy<?php $pro->id ?>" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          @else
          <p>Data Tidak Tersedia!.</p>
          @endif
      </div>
  </div>

@endsection