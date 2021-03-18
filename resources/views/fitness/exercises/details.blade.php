<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>About Us</title>

        @include('includes/style')
    </head>
    <style>
        .card-img {
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .card-title {
            margin-bottom: 0.3rem;
        }

        .cat {
            display: inline-block;
            margin-bottom: 1rem;
        }

        .fa-users {
            margin-left: 1rem;
        }

        .card-footer {
            font-size: 0.8rem;
        }
        #btn {
            background-color: #1abc9c;
            color: white;
        }
        #btn:hover {
            background: orange;
        }
        .btn-card {
            background-color: #1abc9c;
            color: #fff;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            padding: 0.84rem 2.14rem;
            font-size: 0.81rem;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            margin: 0;
            border: 0;
            -webkit-border-radius: 0.125rem;
            border-radius: 0.125rem;
            cursor: pointer;
            text-transform: uppercase;
            white-space: normal;
            word-wrap: break-word;
            color: #fff;
        }
        .btn-card:hover {
            background: orange;
        }
        a.btn-card {
            text-decoration: none;
            color: #fff;
        }
        #btn {
            background-color: #1abc9c;
            color: white;
        }
        #btn:hover {
            background: orange;
        }
    </style>
    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/health6.jpg') }}'); height: 510px; object-fit: cover;">
            <div class="container">
                <h1 class="display-3 text-center white">HEALTHY</h1>
            </div>
        </div>

        <div class="container" style="padding: 45px;">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($exercises->example as $example ) @if($loop->first)

                    <h1 class="mt-4">{{ $example->title }}</h1>

                    <p class="lead">
                        by
                        <a href="#">Liam Airght</a>
                    </p>

                    <hr />

                    <p>Posted on {{ Carbon\Carbon::parse($example->created_at)->format('d F Y') }}</p>

                    <hr />

                    <img class="img-fluid rounded" src="{{ asset('store/'.$example->image) }}" style="width: 900px; object-fit: cover;" alt="" />

                    <hr />

                    <p>{{ $example->description }}</p>
                    @else
                    <h1 class="mt-4">{{ $example->title }}</h1>

                    <hr />

                    <img class="img-fluid rounded" src="{{ asset('store/'.$example->image) }}" style="width: 900px; object-fit: cover;" alt="" />

                    <hr />

                    <p>{{ $example->description }}</p>
                    @endif @endforeach
                    <blockquote class="blockquote">
                        <p class="mb-0">Social Media Sport</p>
                    </blockquote>

                    <div class="media mb-4"></div>
                </div>

                <div class="col-md-4 p-4">
                    <p>Related post</p>
                    @foreach ($otherExercises as $otherExercises )

                    <div class="card my-4">
                        <img class="card-img" src="{{ asset('store/'.$otherExercises->example->first()->image) }}" alt="Bologna" style="width: 310px; height: 130px; object-fit: cover;" />
                        <div class="card-body">
                            {{ \Illuminate\Support\Str::limit($otherExercises->example->first()->description, 30)}}
                        </div>
                        <a href="{{ url('exercises/details/'.$otherExercises->id) }}" class="btn btn-light btn-sm col-12" id="btn">Read</a>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>

        @include('includes/footer')
    </body>
</html>
@if (count($errors) > 0)
<script type="text/javascript">
    $(document).ready(function () {
        $("#ModalLoginForm").modal("show");
    });
</script>
@endif
