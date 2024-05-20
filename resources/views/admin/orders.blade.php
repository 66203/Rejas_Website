@extends('admin.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Orders</h4>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            @forelse($ordersByUser as $userId => $orders)
                                @php
                                    $user = $orders[0]->user;
                                @endphp
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            Name: {{$user->name}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            @foreach($orders as $order)
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p class="text-dark">Order ID: {{ $order->id }}</p>
                                                    <p class="text-dark">Total Price: ${{ $order->total_price }}</p>
                                                    <p class="text-dark">Status: {{ $order->status }}</p>
                                                </div>
                                                <div>
                                                    <div><p class="text-dark">Change status</p></div>
                                                    <form method="POST" action="{{ route('order.status.update', $order) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-outline-primary" name="status" value="pending">Set Pending</button>
                                                        <button type="submit" class="btn btn-outline-info" name="status" value="shipping">Set Shipping</button>
                                                        <button type="submit"  class="btn btn-outline-success" name="status" value="delivered">Set Delivered</button>
                                                    </form>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>No orders found.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
    </footer>
    <!-- partial -->
</div>
@endsection