@if(isset($articles) && is_object($articles))
<div class="row">
    <div class="col-md-4 block">
        <h2>Category</h2>
        <div class="row" style="margin-top: 5px; margin-bottom: 5px;">
            <div class="col-lg-12">
                <a style="width: 130px;" href="{{ route('allcategory') }}" class="btn btn-primary">
                    All categories
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <button style="width: 100px;" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Business
                </button>
                <!-- Меню -->
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
                <button style="width: 100px;" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sport
                </button>
                <!-- Меню -->
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
                <button style="width: 100px;" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Music
                </button>
                <!-- Меню -->
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
        <h2>News
            @if($id == 1) about Business  @endif
            @if($id == 2) about Sport  @endif
            @if($id == 3) about Music  @endif
        </h2>
            @foreach($articles as $k => $article)
                @if($k == 0 || $k%3 == 0)
                    <div class="row">
                @endif
                    <div class="col-sm-4">
                        <div class="panel">
                            <h4>{{ $article->title }}</h4>
                            <img src="http://placehold.it/800x400">
                            <p>{{ $article->text }}</p>
                        </div>
                    </div>
                        @if(($k + 1)%3 == 0)
                    </div>
                        @endif
            @endforeach
    </div>
@endif
