@extends('backend.layout.template')

@section('adminbodycontent')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage All brands</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('brands.manage')}}">Dashboad</a></li>
                        <li class="breadcrumb-item active">Manage Brands </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    {{-- card start --}}
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">All Brands List</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">

                            <table class="table">
                                <thead class="bg-primary">
                                    <tr>
                                        <th scope="col">#SI</th>
                                        <th scope="col">Brands name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=1;
                                    @endphp
                                    @foreach ($brands as $brand)
                                    <tr>
                                        <th scope="row">{{$i}}</th>
                                        <td>{{$brand->name}}</td>
                                        <td>{{$brand->des}}</td>
                                        <td>
                                            @if ($brand->image == NULL)
                                            No image found
                                            @else
                                            <img src="{{ asset('backend/img/brands/' . $brand->image) }}">
                                            @endif

                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('brand.edit', $brand->id )}}"
                                                    class="btn btn-success btn-sm">Update</a>
                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @php
                                    $i++;
                                    @endphp
                                    @endforeach

                                </tbody>
                            </table>


                        </div>

                    </div>
                    {{-- card end --}}
                </div>
            </div>
        </div>
    </div>

</div>

@endsection