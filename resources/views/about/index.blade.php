@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">About Us</h2>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h3 class="text-primary">Our Mission</h3>
                        <p class="lead">{{ $mission }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-primary">Our Vision</h3>
                        <p class="lead">{{ $vision }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-primary">About MHS</h3>
                        <p class="lead">{{ $about }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 