@extends('layouts.admin')

@section('title')
    <title>List message</title>
@endsection
@section('js')
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@10.js')}}"></script>
    <script src="{{asset('admins/product/list.js')}}"></script>
@endsection
@section('content')

    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Khách hàng</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Ngày</th>
                                <th scope="col">Tình trạng</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($messages as $mess)
                                <tr>
                                    <th scope="row">{{$mess->id}}</th>
                                    <td>{{$mess->name}}</td>
                                    <td>{{$mess->email}}</td>
                                    <td>{{ $mess->content }}</td>
                                    <td>{{ $mess->created_at }}</td>
                                    <td>@if($mess->STATUS==0) Chưa trả lời
                                        @else Đã trả lời
                                        @endif</td>

                                    <td>
                                        <a href=""
                                           class="btn btn-default">Trả lời</a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

