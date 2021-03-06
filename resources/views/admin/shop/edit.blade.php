@extends('admin.base')

@section('content')
    <div class="layui-card">
        <div class="layui-card-header layuiadmin-card-header-auto">
            <h2>更新门店</h2>
        </div>
        <div class="layui-card-body">
            <form class="layui-form" action="{{route('admin.shop.update',['id'=>$shop->id])}}" method="post">
                {{ method_field('put') }}
                @include('admin.shop._form')
            </form>
        </div>
    </div>
@endsection

@section('script')
    @include('admin.article._js')
@endsection
