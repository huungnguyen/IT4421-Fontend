@extends('admin.layout')


@section('title')
    Manage Products
@endsection

@section('script')
    <script type="text/javascript" src="/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/js/angular/admin/ProductController.js"></script>
@endsection

@section('page_content')
    <div class="row" ng-controller="ProductController as controller">
        <div class="col-md-12">
            <div class="container-content">
                <div class="container-header">
                    Quản lý sản phẩm
                </div>
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <div class="block">
                        <a style="text-decoration: none; color: white" href="/admin/add-product">
                            <button type="button" class="btn btn-warning">Add a product</button>
                        </a>
                    </div>
                </div>
                {{--<div class="panel-heading">--}}
                {{--<div class="row">--}}
                {{--<div class="col-md-10">--}}
                {{--<h3 class="panel-title"></h3>--}}
                {{--</div>--}}
                {{----}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Supplier</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection