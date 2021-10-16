@extends('_layouts.main')

@section('body')
<section class="md:h-screen flex justify-center items-center"
    style="background-image: url('assets/images/grass.png'), linear-gradient(to top right,
    #63b0dc, #a6e3ff), linear-gradient(to right top, rgb(99, 176, 220), rgb(166, 227, 255)); background-position: bottom; background-repeat: no-repeat; background-size: contain;">
    <div class="max-w-6xl p-14 mb-24 mx-auto md:flex flex-wrap items-center gap-10 md:gap-24">
        <img class="flex-1 w-full max-h-lg p-3" src="assets/images/logo.png" alt="Education Transformation Centre Logo"
            class="logo">

        <ul class="flex-1 p-5 pl-8 list-disc text-xl md:mt-10 text-gray-700">
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

<section class="">
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

<section class="py-10 my-14 text-center bg-green text-white">
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

<section class="py-10 mt-14 bg-green text-white">
    <div class="container">
        <h2 class="mt-0 text-center">Testimonials</h2>
        <figure role="group">
            <div>
                <p>
                    I would like to share my experience working with Education Transformation Centre (ETC).
                    First I would like to say, the staff was very supportive of the child. They are very great
                    with making sure the kids get an education. They also go above and beyond, if the student
                    needs more assistance, Dr. Carr will get the student tutors for more one on one.
                </p>
                <p>
                    Education Transformation Centre makes sure the students achieve their goals that will get
                    the student back into the regular school setting and for adulthood. My daughter used to be
                    upset that she had to go through the program. After she got the understanding of the
                    program, she starting accepting the things she had to do was only going to make her become
                    successful in life. ETC will continued to follow the student till graduation.
                </p>
                <p>
                    So, my message to students and parents is ETC is a great program, I highly recommend it. My
                    daughter was struggling in math, ETC made her struggle come to ease. My daughter will be a
                    graduate with her class of 2021.
                </p>
            </div>
            <figcaption class="text-center">
                <div class="text-lg font-bold">Adrainne Johnson</div>
                <div class="text-lg">Parent, AHS</div>
            </figcaption>
        </figure>
        <div class="text-center mt-5"><button class="btn-white grow center-text" id="more-testimonials-btn"
                type="btn-white">Read More</button></div>
        <div class="hidden" id="more-testimonials">
            <figure class="item" role="group">
                <div class="quote">
                    <p>
                        Dr. Carr was a steadfast presence in my client’s&nbsp;life which I feel helped her to
                        see more positive possibilities for her future.&nbsp;Dr. Carr provided my
                        client&nbsp;with individualized and focused support that she needed during a challenging
                        time in her life. This extra support helped to&nbsp;scaffold my client’s&nbsp;sense of
                        what a&nbsp;trustworthy&nbsp;relationship&nbsp;looks and feels like.&nbsp;
                    </p>
                    <p>
                        I believe that putting in the extra time and effort often help children/students to feel
                        that they really do matter and that their life is meaningful and worthwhile. Being a
                        constant, honest and present adult, helps to create trust in the
                        relationship&nbsp;between adult and child. Young people&nbsp;need to learn what a safe
                        and trusting relationship and I was able to witness Dr. Carr be that person for my
                        client.&nbsp; Dr. Carr's guidance through the positive seeds planted by the Education
                        Transformation Centre, will have lasting effects on my client's&nbsp;life,
                        whether&nbsp;she sees/feels it now or in her future.
                    </p>
                    <p>
                        All the best Dr. Carr and I hope to work with you again very soon. I love what you are
                        doing!
                    </p>
                </div>
                <figcaption>
                    <span class="author">Shelley Faulkner M.A., Ed.S.&nbsp;</span>
                    <span class="position">Trauma Counselor<br>ReadyKids</span>
                </figcaption>
            </figure>
            <figure class="item" role="group">
                <div class="quote">
                    <p>
                        I was impressed by the encouragement and support that was given to our grandson during
                        the short time that he was enrolled there. He did not complete due to COVID-19. I felt
                        that ETC was a good fit for him at that time because he was struggling in school. The
                        ETC allowed him to work on his academics in a smaller setting as well as work on his
                        behavior modification.
                    </p>
                    <p>
                        I believe that the ETC will give students who just don’t fit in the mainstream school, a
                        head start on their road to a successful educational experience.
                    </p>
                    <p>
                        Dr. Carr was always professional, informative and guided us through the enrollment
                        process. She also followed up on his progress after the COVID shutdown. She continued to
                        encourage him to be the best that he could be.
                    </p>
                    <p>
                        I recommend that if your child is having difficulties in school and need one on one
                        attention, take the time to check out what the Educational Transformation Centre can
                        offer.
                    </p>
                </div>
                <figcaption>
                    <span class="author">Deborah Parker</span>
                </figcaption>
            </figure>
        </div>
    </div>
</section>

@endsection