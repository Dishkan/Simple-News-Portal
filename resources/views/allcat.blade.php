@if(isset($menu) && is_object($menu))
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 block">
            <h1>All Categories</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 block">
            <div class="row" style="margin-top: 5px; margin-bottom: 5px;">
                <div class="col-lg-12">
                    <a style="width: 130px;" href="{{ route('home') }}" class="btn btn-primary">
                        Back
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="dropdown-menu">
                        <ul>
                            @foreach($menu as $men)
                                @if($men->category_id == 1)
                                    <li>
                                        <a class="dropdown-item" href="{{ route($men->title) }}">{{ $men->title }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 5px;">
                <div class="col-lg-12">
                    <div class="dropdown-menu">
                        <ul>
                            @foreach($menu as $men)
                                @if($men->category_id == 2)
                                    <li>
                                        <a class="dropdown-item" href="{{ route($men->title) }}">{{ $men->title }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 5px; margin-bottom: 5px;">
                <div class="col-lg-12">
                    <div class="dropdown-menu">
                        <ul>
                            @foreach($menu as $men)
                                @if($men->category_id == 3)
                                    <li>
                                        <a class="dropdown-item" href="{{ route($men->title) }}">{{ $men->title }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 block">
            <h2>List</h2>
            <ul>
                @foreach($menu as $men)

                    <li>
                        <a class="dropdown-item" href="{{ route($men->title) }}">{{ $men->title }}</a>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
@endif
