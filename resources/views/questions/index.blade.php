@extends('welcome')

@section('body')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">All Questions</div>
                <br>
                <div class="card-body">
                    @foreach($questions as $question)

                    <div class="media">
                        <div class="media-body">
                            <a style=" color: #2D2B79;" href="{{$question->url}}">
                                <h3 class="mt-0">{{$question->title}}</h3>
                            </a>
                                <p style="font-size: 15px;">
                                    Asked By <a style="color: blue;" href="{{$question->user->url}}">{{$question->user->name}}</a>
                                    <small class="text-muted">
                                        {{$question->create_date}}
                                    </small>
                                </p>
                            {{str_limit($question->body,250)}}
                        </div>
                    </div>
                    <hr>
                    <hr>

                    @endforeach
                   <!--  <div class="pagination justify-content-center">{{$questions->links()}}</center> -->
                    {{$questions->links()}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection