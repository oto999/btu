<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @push('styles')
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @endpush

    @push('scripts')
        <script src="{{ asset('js/main.js') }}"></script>
    @endpush
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </div>
</nav>

@section('content')
    <div class="row">
        @foreach($quizzes as $quiz)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('photos/' . $quiz['photo']) }}" class="card-img-top" alt="{{ $quiz['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $quiz['name'] }}</h5>
                        <p class="card-text">
                            Status: <span class="{{ $quiz['status'] === 'completed' ? 'text-success' : 'text-warning' }}">{{ $quiz['status'] }}</span>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection


<div class="container mt-4">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
<footer class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Subscribe to our Newsletter</h4>
                <form method="POST" action="{{ route('subscribe') }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</footer>
</html>
