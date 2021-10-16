@extends('_layouts.main')

@section('body')
<section class="hero"
    style="background-image: url('assets/images/grass.png'), linear-gradient(to top right,
    #63b0dc, #a6e3ff), linear-gradient(to right top, rgb(99, 176, 220), rgb(166, 227, 255)); background-position: bottom; background-repeat: no-repeat; background-size: contain;">
    <div class="container flex flex-wrap p-14 items-center gap-10 md:gap-24">
        <img class="h-auto w-full max-w-lg" src="assets/images/logo.png" alt="Education Transformation Centre Logo"
            class="logo">


        <ul class="p-5 pl-5 list-disc text-lg text-gray-800">
            <li>Growth</li>
            <li>Transformation</li>
            <li>Achievement</li>
        </ul>
    </div>
</section>
<section class="mission block center-text">
    <div class="container">
        <div class="section">
            <p>
                We endeavor to create an atmosphere of “relaxed alertness” where there
                is a combination of high challenge and high expectations in a low threat
                learning community; and a state of mind that combines confidence,
                competence and intrinsic motivation (Cainelearning.com).
            </p>
        </div>
    </div>
</section>

<section class="about block">
    <div class="container">
        <div class="section">
            <h2>About</h2>
            <p>
                The Education Transformation Centre is an alternate education course,
                designed to prevent encounters with the justice system and reduce
                frequent instances of detention and suspension.
            </p>
        </div>
        <div class="section">
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
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeszndZgec9EjftnetdWlDE2HW6VjqX_X4O7t277JsdIE8sUg/viewform?vc=0&amp;c=0&amp;w=1&amp;flr=0"
                class="btn grow center-text">Counseling Application</a>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdArp8Ev_HeDlviS_4vhSz0RDfRcJnU1g0gRFqMX05ADX1Pnw/viewform?vc=0&amp;c=0&amp;w=1&amp;flr=0"
                class="btn grow center-text">Academic Consultation Services</a>
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

<section class="serve block center-text large-spacing">
    <div class="container">
        <div class="section">
            <h2>Who We Serve</h2>
            <p>
                Charlottesville City Public Schools, Counties of Albemarle, Buckingham,
                Fluvanna, Greene, Louisa, Nelson
            </p>
            <img src="static/assets/who-we-serve@1x.jpg" alt="teens studying" class="rounded small center">
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
        <img src="static/assets/outcomes-bg@1x.jpg" alt="Group of students graduating" class="rounded small center"
            id="outcomes-img">
    </div>
</section>

<section class="testimonial">
    <div class="container">
        <h2 class="center-text">Testimonials</h2>
        <div class="center-text"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
        <div class="row">
            <figure class="item" role="group">
                <div class="quote">
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
                <figcaption>
                    <span class="author">Adrainne Johnson</span>
                    <span class="position">Parent, AHS</span>
                </figcaption>
            </figure>
            <div class="center-text"><button class="btn-white grow center-text" id="more-testimonials-btn"
                    type="button">Read More</button></div>
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
    </div>
</section>

@endsection