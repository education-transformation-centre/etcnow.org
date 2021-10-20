@extends('_layouts.main')

@section('body')
<section class="flex justify-center items-center"
    style="background-image: url('assets/images/grass.png'), linear-gradient(to top right,
    #63b0dc, #a6e3ff), linear-gradient(to right top, rgb(99, 176, 220), rgb(166, 227, 255)); background-position: bottom; background-repeat: no-repeat; background-size: contain;">
    <div class="max-w-6xl py-32 px-14 mb-24 mx-auto md:flex items-center gap-10 md:gap-14">
        <div class="flex-1 w-full">
            <img class=" max-h-lg p-3" src="assets/images/logo.png" alt="Education Transformation Centre Logo"
                class="logo">
        </div>

        <ul class="flex-1 p-5 pl-8 mt-8 list-disc text-2xl md:mt-10 text-gray-700">
            <li>Growth</li>
            <li>Transformation</li>
            <li>Achievement</li>
        </ul>
    </div>
</section>
<section class="text-center bg-brown-dark text-white">
    <div class="container py-5">
        <p>
            We endeavor to create an atmosphere of “relaxed alertness” where there
            is a combination of high challenge and high expectations in a low threat
            learning community; and a state of mind that combines confidence,
            competence and intrinsic motivation (Cainelearning.com).
        </p>
    </div>
</section>
<section class="py-1 pb-16" style="background-image: url('assets/images/about.jpg');">
    <div class="container">
        <div class="">
            <h2>About</h2>
            <p>
                The Education Transformation Centre is an alternate education course,
                designed to prevent encounters with the justice system and reduce
                frequent instances of detention and suspension.
            </p>
        </div>
        <div class="">
            <h3>Services</h3>
            <p>
                ETC’s therapeutic mental health services include mental health
                assessments, person-centered service planning, therapeutic
                activities, parent consultations/psycho-educational training,
                teacher collaboration and service/program evaluation.
            </p>
            <p>
                ETC provides a therapeutic environment where students participate in psycho educational and
                counseling groups that supplement the traditional academic activities.
            </p>
            <a class="btn"
                href="https://docs.google.com/forms/d/e/1FAIpQLSeszndZgec9EjftnetdWlDE2HW6VjqX_X4O7t277JsdIE8sUg/viewform?vc=0&amp;c=0&amp;w=1&amp;flr=0">Counseling
                Application</a>
            <a class="btn"
                href="https://docs.google.com/forms/d/e/1FAIpQLSdArp8Ev_HeDlviS_4vhSz0RDfRcJnU1g0gRFqMX05ADX1Pnw/viewform?vc=0&amp;c=0&amp;w=1&amp;flr=0">Academic
                Consultation Services</a>
        </div>
        <div class="section">
            <h3>Team</h3>
            <p>
                ETC’s integrative approach includes a team of educators, clinical mental health counselors,
                qualified mental health providers, parents, and community mentors.
            </p>
        </div>
    </div>
</section>

<section class="py-10 mb-14 text-center bg-green text-white">
    <div class="container">
        <div class="">
            <h2 class="mt-0">Who We Serve</h2>
            <p>
                Charlottesville City Public Schools, Counties of Albemarle, Buckingham,
                Fluvanna, Greene, Louisa, Nelson
            </p>
            <img class="max-w-xl mx-auto mt-10 rounded-lg shadow-lg" src="assets/images/who-we-serve.jpg"
                alt="teens studying">
        </div>
    </div>
</section>

<section class="curriculum block">
    <div class="container">
        <div class="section">
            <h2>Curriculum</h2>
        </div>
        <div class="section">
            <h3>Model</h3>
            <p>
                Our integrative and alternative education model is designed to eliminate the stigma of utilizing
                mental health services. Its seamless clinical learning model fosters emotional self-efficacy while
                building essential life skills.
            </p>
        </div>

        <div class="section">
            <h3>Outcomes</h3>
            <p>
                Collaboration with host schools will facilitate a bridge for a
                student’s return full-time to the traditional setting once
                mental health goals are met or an intensive level of services
                are no longer needed.
            </p>
        </div>
        <img class="max-w-xl mx-auto mt-10 rounded-lg shadow-lg" src="assets/images/outcomes.jpg"
            alt="Group of students graduating" class="rounded small center" id="outcomes-img">
    </div>
</section>

<section class="py-10 mt-14 bg-green text-white" x-data="{ open: false }">
    <div class="container">
        <h2 class="mt-0 text-center">Testimonials</h2>
        <x-testimony name="{{ $testimonies->first()->name }}" title="{{ $testimonies->first()->title }}"
            subtitle="{{ $testimonies->first()->subtitle }}">
            {!! $testimonies->first()->getContent() !!}
        </x-testimony>

        <div class="text-center mt-5"><button class="btn-white" x-show="!open" @click="open = true">Read
                More</button></div>
        <div x-show="open">
            @foreach($testimonies as $testimony)
            <x-testimony name="{{ $testimony->name }}" title="{{ $testimony->title }}"
                subtitle="{{ $testimony->subtitle }}">
                {!! $testimony->getContent() !!}
            </x-testimony>
            @endforeach
        </div>
    </div>
</section>

@endsection