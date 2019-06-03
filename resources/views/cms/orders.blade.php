@extends('cms.cms_master')
@section('main_cms_content')

<div class="mt-3 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">View Orders</h1>
</div> 

<div class="row">
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Total</th>
                    <th>Details</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $item)
                <tr>
                <td>{{$item->name}}</td>
                <td>${{$item->total}}</td>
                <td>
                    <ul>
                        @foreach(unserialize($item->data) as $order)
                    <li>{{$order['name']}}, item price: ${{$order['price']}}, Quantity: {{$order['quantity']}}</li>
                        @endforeach
                    </ul>
                </td>
                <th>{{date('d/m/Y', strtotime($item->created_at))}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection