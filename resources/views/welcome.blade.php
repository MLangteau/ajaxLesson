<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>A-TASKS!</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@if (Auth::check())--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ url('/login') }}">Login</a>--}}
                        {{--<a href="{{ url('/register') }}">Register</a>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--@endif--}}

            <div class="container">
{{--  references the global component in main.js in this next line --}}
                {{--<tasks list="{{ json_encode($tasks) }}"></tasks>       laravel knows to encode it below (same)--}}
                {{--<tasks list="{{ $tasks }}"></tasks>--}}
                <tasks list="{{ json_encode($tasks) }}"></tasks>
            </div>
        {{--</div>--}}

        <template id="tasks-template">
            <h1>My Tasks</h1>
            <ul class="list-group">
                {{--@foreach($tasks as $task)--}}
                {{--use v-for="task in tasks" instead  --}}
                    {{--<li class="list-group-item">--}}
                    <li class="list-group-item" v-for="task in list">
                        {{--{{ $task->body }}--}}
                        @{{ task.body }}
                        {{-- laravel uses double curlies as well, so need @, so as not to parse in laravel --}}
                    </li>
                {{--@endforeach--}}
            </ul>
        </template>

        <script
                src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.8/vue.js"></script>

        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.4/vue-resource.es2015.js"></script>--}}
        <script src="/js/main.js"></script>

    </body>
</html>
