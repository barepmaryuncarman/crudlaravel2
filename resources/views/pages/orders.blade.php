@extends("layouts.adminlte")

@section('icon_aplikasi')
SIM
@endsection

@section('nama_aplikasi')
Sistem MLM
@endsection

@section('username')
Username
@endsection

@section('side-menu')
<li><a href="/products"><i class="fa fa-cubes text-yellow"></i> <span>Products</span></a></li>
<li><a href="/employees"><i class="fa fa-users text-yellow"></i> <span>Employees</span></a></li>
<li><a href="/customers"><i class="fa fa-users text-yellow"></i> <span>Customers</span></a></li>
<li><a href="/offices"><i class="fa fa-building-o text-yellow"></i> <span>Offices</span></a></li>
<li class="active"><a href="/orders"><i class="fa fa-list text-yellow"></i> <span>Orders</span></a></li>
@endsection

@section('content')
123456789
@endsection
