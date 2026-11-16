@extends('layouts.app')

@section('title', 'Home | My Portfolio')

@section('content')

     
        @include('components.navbar')

        <!--  Hero Section -->

        <section id="home" class="hero-section">

            <div class="container">
                <div class="row align-items-center">

                    <!-- Left Content -->
                    <div class="col-lg-6">
                        <p class="hero-subtitle">HELLO, I'M</p>

                        <h1 class="hero-title">
                            Abu Bakar Miaji
                        </h1>

                        <h3 class="hero-designation">
                            Software Developer
                        </h3>

                        <p class="hero-description">
                            I am a passionate software developer interested in
                            building modern, responsive and user-friendly web applications.
                        </p>

                        <div class="hero-buttons">

                            <a href="#projects" class="btn btn-primary">
                                View My Projects
                            </a>

                            <a href="#contact" class="btn btn-danger">
                                Contact Me
                            </a>

                        </div>

                    </div>

                    <!-- Right Image -->
                    <div class="col-lg-6">

                        <div class="hero-image text-center">

                            <img src="{{ asset('images/19629.png') }}"
                                alt="Abu Bakar Miaji"
                                class="img-fluid rounded-circle">

                        </div>

                    </div>

                </div>
            </div>

        </section>

        <hr>

    <div class="">

        <div class="text-center">
            <h1 class=" text-red-500 ">
                Welcome to My Portfolio
            </h1>

            <p class="text-gray-300 mt-4 text-xl">
                I am a Software Developer
            </p>

            <button class="btn btn-primary">
                View My Projects
            </button>

            <button class=" btn btn-danger mt-6">
                View My Projects
            </button>
        </div>

    </div>

@endsection