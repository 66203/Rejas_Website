<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route("home")}}">Home</a>
                    </li>
                </ul>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li class="dropdown-item">
                            <div class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();" role="button">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- cart -->
    <div class="container my-4">
        <h1 class="my-2">Orders</h1>
        <ol class="list-group list-group-numbered">
            @foreach ($orders as $order)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Order #: {{$order->id}}</div>
                        <div>
                            <p><span>Total_Price: </span>{{$order->total_price}}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mx-2">
                        <p><span>Status: </span>{{$order->status}}</p>
                    </div>
                </li>
            @endforeach
        </ol>
        <h1 class="my-2">Cart</h1>
        <ol class="list-group list-group-numbered">
            @foreach ($cartItems as $item)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="ms-2 me-auto">
                        <img src="{{asset("storage/" . $item->fragrance->image)}}" alt="" width="30px" height="30px"
                            srcset="">

                        <div class="fw-bold">{{$item->fragrance->fragrance_name}}</div>
                        <div>
                            <p><span>Price: </span>{{$item->fragrance->price}}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mx-2">
                        <form action="{{route('cart.destroy.item', $item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fa-solid fa-xmark"></i></button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ol>
        <ol class="list-group">
            <li class="list-group-item">
                <div class="d-flex justify-content-end align-items-center">
                    <p><span class="fw-bold">Total price: </span>{{$totalPrice}}</p>
                </div>
            </li>
        </ol>
        <div class="d-flex justify-content-end align-items-center my-3">
            <form action="{{ route('placeorder') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Place Order</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </div>
</body>


</html>