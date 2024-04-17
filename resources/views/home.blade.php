@extends('layout')

@section('title') Главная @endsection

@section('main_content')
    <main class="container read ">
        <div class="bg-secondary p-5 rounded mt-3 ">
            <h1>Главная страница</h1>
            <p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>
            <a class="btn btn-lg btn-warning" href="/docs/5.3/components/navbar/" role="button">Отзывы »</a>
        </div>
    </main>
    <div class="row">
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <h2 class="fw-normal">Heading</h2>
            <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.
                Some representative placeholder content for the three columns of text below the carousel. This is the first column.
            </p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <h2 class="fw-normal">Heading</h2>
            <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.
                Some representative placeholder content for the three columns of text below the carousel. This is the first column.
            </p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <h2 class="fw-normal">Heading</h2>
            <p>And lastly this, the third column of representative placeholder content.
                Some representative placeholder content for the three columns of text below the carousel. This is the first column.
            </p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
    </div>
@endsection
