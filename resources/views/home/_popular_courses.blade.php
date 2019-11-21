@inject('repository', "App\Repositories\CourseRepositoryInterface")

<h2>Popular Course</h2>

<div class="row">
    @foreach($repository->popular() as $item)
        @include('courses._card')
    @endforeach
</div>

@push('head')
    <link rel="stylesheet" href="{{ secure_asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href={{ secure_asset('css/fontawesome-stars.css') }}>
@endpush

@push('end')
    <script src={{ secure_asset('js/jquery.barrating.min.js') }}></script>

    <script type="text/javascript">
        $(function() {
            $('.rating').barrating({
                theme: 'fontawesome-stars'
            });
        });
    </script>

@endpush
