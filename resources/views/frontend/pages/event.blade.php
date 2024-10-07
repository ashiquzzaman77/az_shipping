<!doctype html>
<html lang="en">

<head>
    <title>Project Submission Event || NGen IT Training</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playwrite+DE+Grund:wght@100..400&display=swap'); */
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playwrite+DE+Grund:wght@100..400&family=Sora:wght@100..800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap');

        html {
            scroll-behavior: smooth;
        }

        body::-webkit-scrollbar {
            width: 0.3em;
        }

        body::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        body::-webkit-scrollbar-thumb {
            background-color: #a12083;
            outline: 0px solid slategrey;
        }

        .image-container {
            position: relative;
            width: 100%;
        }

        .image-container img {
            width: 100%;
            height: 800px;
            object-fit: cover;
        }

        .overlay {
            background: linear-gradient(to right,
                    rgba(61, 6, 109, 0.8),
                    rgba(186, 52, 166, 0.829));
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .text-container {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            text-align: start;
            z-index: 2;
        }

        .left-text {
            left: 15%;
        }

        .right-text {
            right: 15%;
            width: 25%;
        }

        .text-container h1 {
            font-size: 4rem;
            font-weight: bold;
            margin: 0;
        }

        .start-month {
            font-size: 1.5rem;
            color: rgba(186, 52, 166, 0.829);
            font-family: "Sora", sans-serif;
        }

        .start-date {
            color: rgba(61, 6, 109, 0.8);
            font-size: 4rem;
            font-weight: bold;
            font-family: "Sora", sans-serif;
        }

        .start-year {
            font-size: 2rem;
            font-weight: bold;
            position: relative;
            font-family: "Sora", sans-serif;
            left: 6px;
        }

        .first-color {
            color: rgba(61, 6, 109, 0.8);
        }

        .second-color {
            color: rgba(186, 52, 166, 0.829);
        }

        .reg-btn {
            background-color: rgba(61, 6, 109, 0.8);
            border: 1px solid rgba(61, 6, 109, 0.8);
            padding: 10px;
        }

        .cst-font {
            font-family: "Sora", sans-serif;
        }

        .srpt-font {
            font-family: "Caveat", cursive;
        }

        @-webkit-keyframes last_rotate {
            0% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                z-index: 1;
            }

            100% {
                -webkit-transform: rotateX(-180deg);
                transform: rotateX(-180deg);
                z-index: 0;
            }
        }

        @keyframes last_rotate {
            0% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                z-index: 1;
            }

            100% {
                -webkit-transform: rotateX(-180deg);
                transform: rotateX(-180deg);
                z-index: 0;
            }
        }

        @-webkit-keyframes new_rotate {
            0% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                z-index: 0;
            }

            100% {
                -webkit-transform: rotateX(-180deg);
                transform: rotateX(-180deg);
                z-index: 1;
            }
        }

        @keyframes new_rotate {
            0% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                z-index: 0;
            }

            100% {
                -webkit-transform: rotateX(-180deg);
                transform: rotateX(-180deg);
                z-index: 1;
            }
        }

        .flip-countdown {
            display: flex;
            justify-content: center;
            font-family: auto;
            font-size: 4.1em;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            overflow: hidden;
        }

        .interval_cont {
            display: flex;
            justify-content: space-around;
            width: auto;
            overflow: hidden;
        }

        .interval_cont:nth-child(n+1):not(:last-child) {
            margin-right: 0.15em;
        }

        .description {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 0.5em;
            margin-right: 0.55em;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            font-family: "Sora", sans-serif;
            color: rgba(61, 6, 109, 0.8);
            text-shadow: 0.05em 0.05em 0.1em rgba(136, 110, 87, 0.3);
            overflow: hidden;
        }

        .digit_cont {
            position: relative;
            width: 65px;
            height: 100px;
            font-weight: 900;
            line-height: 1.5em;
            border-radius: 0.25em;
            color: rgba(61, 6, 109, 0.8);
            border-bottom: 0.01em solid rgba(76, 99, 119, 0.1);
            box-shadow: 0 0.2em 0.3em -0.1em rgba(76, 99, 119, 0.1);
            -webkit-perspective: 3em;
            perspective: 3em;
            box-sizing: border-box;
            overflow: hidden;
        }

        .digit_cont:after {
            content: "";
            position: absolute;
            top: 50%;
            width: 100%;
            height: 0.015em;
            background: rgba(141, 163, 182, 0.25);
            box-shadow: 0 0.01em 0.02em 0 rgba(255, 255, 255, 0.1);
            z-index: 1;
        }

        .digit_cont:nth-child(n+1):not(:last-child) {
            margin-right: 0.05em;
        }

        .digit_cont span {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            bottom: 50%;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .digit_cont .last_placeholder,
        .digit_cont .new_placeholder,
        .digit_cont .last_rotate,
        .digit_cont .new_rotate {
            position: absolute;
            left: 0;
            width: 100%;
            height: 50%;
            text-align: center;
            overflow: hidden;
            box-sizing: border-box;
        }

        .digit_cont .last_placeholder {
            bottom: 0;
            border-radius: 0 0 0.25em 0.25em;
            background: linear-gradient(to bottom, #dae1e8 -90%, #fff 100%), #dae1e8;
        }

        .digit_cont .new_placeholder {
            box-shadow: inset 0 0.01em 0 0 rgba(255, 255, 255, 0.5);
        }

        .digit_cont .new_placeholder,
        .digit_cont .last_rotate,
        .digit_cont .new_rotate {
            top: 0;
            border-radius: 0.25em 0.25em 0 0;
            background: linear-gradient(to bottom, #dae1e8 10%, #fff 200%), #dae1e8;
        }

        .digit_cont .last_rotate {
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
            -webkit-animation: last_rotate 0.5s linear forwards;
            animation: last_rotate 0.5s linear forwards;
        }

        .digit_cont .new_rotate {
            border-top: 0.01em solid rgba(76, 99, 119, 0.3);
            background: linear-gradient(to top, #dae1e8 -90%, #fff 100%), #dae1e8;
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
            -webkit-animation: new_rotate 0.5s linear forwards;
            animation: new_rotate 0.5s linear forwards;
        }

        .digit_cont .new_rotate .rotated {
            width: 100%;
            height: 100%;
            border-radius: 0 0 0.25em 0.25em;
            -webkit-transform: rotateX(180deg);
            transform: rotateX(180deg);
            overflow: hidden;
        }

        .action-bg {
            background-image: linear-gradient(to right, #6b207a, #6b207a, #6b207a, #6b207a, #6b207a, #75207c, #80207e, #8a2080, #a12083, #b82084, #ce2284, #e32782);
        }

        .action-title {
            font-size: 4rem
        }

        strong {
            color: #a12083;
        }

        .navbar-blur {
            background-color: rgba(255, 255, 255, 0.4);

            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);

        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg  navbar-dark fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="http://127.0.0.1:8000">
                    <img class="img-fluid"
                        src="https://www.ngenittraining.com/storage/images/settings/26znqdblzfWUKbfm30YplsyXy3U7J32MCaFnMs7g.png"
                        alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#homepage">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#overview-section">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#details-requirements">Details & Requirements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#projects">Projects</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <main>
        <section id="homepage">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 px-0">
                        <div class="image-container">
                            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Event Image">
                            <div class="overlay"></div>
                            <div class="text-container left-text">
                                <h6>November 2024 Spotlight Event</h6>
                                <h2 class="mb-0 pt-5 srpt-font">You Are Invited to Join Us For</h2>
                                <h1>Project Showcase</h1>
                                <p class="pt-5 fw-bold">Presented by NGen IT Training</p>
                                <div class="pt-2">
                                    <button class="btn btn-outline-light me-2 rounded-pill"><i
                                            class="fa-solid fa-location-crosshairs pe-2"></i>Track</button>
                                    <button class="btn btn-outline-light me-2 rounded-pill"><i
                                            class="fa-solid fa-laptop pe-2"></i>Visit</button>
                                    <button class="btn btn-outline-light rounded-pill" data-bs-toggle="modal"
                                        data-bs-target="#sharemodal"><i
                                            class="fa-solid fa-share-nodes pe-2"></i>Share</button>
                                </div>
                            </div>
                            <div class="text-container right-text">
                                <div class="card">
                                    <div
                                        class="card-header border-0 py-0 d-flex justify-content-between align-items-end">
                                        <p class="mb-0 pb-3">
                                            <small class="cst-font">Start At</small> <br>
                                            <span class="fs-6 fw-bold first-color cst-font">9:30 AM</span>
                                        </p>
                                        <p class="text-center mb-0">
                                            <span class="start-month">Aug</span>
                                            <span class="start-date">18</span>
                                            <span class="start-month ps-2">2024</span>
                                        </p>
                                        <p class="mb-0 pb-3">
                                            <small class="cst-font">End At</small> <br>
                                            <span class="fs-6 fw-bold first-color cst-font">4:30 PM</span>
                                        </p>
                                    </div>
                                    <div class="card-body py-5">
                                        <h3 class="text-center fw-bold pb-2">Let's Countdown</h3>
                                        <div class="flip-countdown"></div>
                                    </div>
                                    <div class="card-footer border-0">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <i class="fa-solid fa-location-dot fs-3 first-color"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <small><small class="fw-bold cst-font">Mahfuza Tower(5th floor)
                                                                Mohammadpur, Dhaka-1207</small></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <h5 class="mb-0 fw-bold cst-font second-color text-end pe-2">Free Cost
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0">
                                        <button
                                            class="btn btn-primary reg-btn w-100 fw-bold mb-2 rounded-2 cst-font">Registraion
                                            Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="overview-section" style="background-color: #eee">
            <div class="container py-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="py-5">
                            <h1 class="pb-3 cst-font first-color">Event Overview</h1>
                            <p class="fw-semibold" style="text-align: justify">Join us for an exciting day filled with
                                innovation and
                                creativity at the Project Showcase. This event is designed to highlight the
                                groundbreaking projects developed by participants of the NGen IT Training program.
                                Attendees will have the opportunity to explore a diverse range of projects, interact
                                with the creators, and gain insights into the latest trends in technology and design.

                                Throughout the day, there will be engaging presentations, hands-on demonstrations, and
                                networking opportunities with industry professionals. Whether you're a student, a tech
                                enthusiast, or a business leader, this showcase is a chance to discover new ideas and
                                connect with like-minded individuals.

                                Don't miss this opportunity to witness the future of technology and innovation! Mark
                                your calendar for November 2024, and join us as we celebrate the hard work and
                                creativity of our talented participants.
                            </p>

                            <div class="pt-3">
                                <button class="btn btn-primary reg-btn mb-2 rounded-2 cst-font">Registraion
                                    Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card rounded-2 border-0">
                            <div class="card-body ">
                                <img class="img-fluid rounded-2"
                                    src="https://images.unsplash.com/photo-1579389082978-de4aece6f446?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="details-requirements">
            <div class="container py-5">
                <div class="row" style="text-align: justify;">
                    <div class="col-lg-12">
                        <h1 class="first-color cst-font">Project Details and Requirements</h1>
                        <p class="pt-2">The Project Showcase invites participants to present innovative software
                            development projects
                            that demonstrate technical proficiency, creativity, and problem-solving abilities. This is
                            an excellent opportunity for developers, designers, and project managers to showcase their
                            skills and share their insights with a broader audience.</p>

                        <b class="pb-3">Project Details:</b>
                        <ul class="pt-2">
                            <li>
                                <strong>Project Theme:</strong> Focus on addressing real-world problems through
                                technology. Projects can range from mobile applications, web development, and software
                                tools to data analytics solutions and AI implementations.
                            </li>
                            <li>
                                <strong>Project Duration:</strong>All projects should have been developed within the
                                last year to reflect current trends and technologies.
                            </li>
                            <li>
                                <strong>Presentation Format:</strong>Participants will have a 10-minute slot to present
                                their projects, followed by a 5-minute Q&A session. Presentations can include live
                                demos, slides, or video showcases.
                            </li>
                        </ul>
                        <h4>Requirements for Participants:</h4>
                        <ol>
                            <li><strong>Team Composition:</strong> Projects can be developed individually or in teams of
                                up to five members.</li>
                            <li><strong>Documentation:</strong> Participants must provide a project summary (1-2 pages)
                                detailing:
                                <ul>
                                    <li>The problem addressed</li>
                                    <li>Technical stack used</li>
                                    <li>Development process</li>
                                    <li>Key features and functionalities</li>
                                    <li>Future enhancements</li>
                                </ul>
                            </li>
                            <li><strong>Prototype/Demo:</strong> A working prototype or demo of the project must be
                                available for the presentation.
                            <li><strong>Eligibility:</strong> Open to all participants of the NGen IT Training program.
                                However, all submissions will be reviewed, and only selected projects will be showcased
                                at the event.
                            <li><strong>Submission Deadline:</strong> All project summaries and documentation must be
                                submitted by [Insert Submission Date].
                        </ol>
                        <h4>Evaluation Criteria:</h4>
                        <p>Projects will be evaluated based on the following criteria:</p>
                        <ul>
                            <li><strong>Innovation:</strong>Originality and creativity in addressing the identified
                                problem.</li>
                            <li><strong>Technical Complexity:</strong> The level of technical challenge involved in the
                                project.
                            <li><strong>Functionality:</strong>The usability and effectiveness of the developed
                                solution.
                            <li><strong>Presentation:</strong>Clarity and professionalism during the presentation.
                        </ul>
                        <p>This showcase is a fantastic platform to not only exhibit your work but also to
                            receive constructive feedback from industry professionals. We encourage all
                            participants to engage in discussions and network with fellow developers, potential
                            employers, and investors.
                        </p>
                        <p>Mark your calendars and prepare to showcase your hard work and innovation!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="action-bg py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 ">
                        <div class="text-white">
                            <h3 class="srpt-font">Lorem ipsum dolor sit amet.</h3>
                            <h1 class="action-title pb-2 cst-font">Business Meet Inovation</h1>
                            <p class="fw-bold" style="text-align: justify">Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Dolorem dolores deserunt aut quisquam vel provident animi rem est.
                                Iste eos repellendus fugiat tempore! Cupiditate quibusdam debitis, necessitatibus
                                sapiente autem et!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects" style="background-color: #eee">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-12">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt adipisci libero explicabo
                        saepe architecto, nihil, provident iste aut sint minima obcaecati aperiam nobis assumenda
                        exercitationem harum odit odio voluptatum recusandae veniam perferendis unde? Obcaecati mollitia
                        illum qui, facilis aliquid excepturi nobis. Impedit, blanditiis. Quam sint magnam maxime qui
                        sit. Ad, laboriosam? Repudiandae maiores ullam rem in error iusto, dolor quisquam libero amet et
                        nisi blanditiis doloribus nesciunt similique aliquid nulla neque fuga magni sint atque molestias
                        veritatis provident. Voluptas accusantium possimus est perferendis quaerat quisquam molestiae
                        deleniti adipisci qui harum libero reiciendis ipsum autem nostrum quae exercitationem facilis
                        fuga laboriosam velit ab laborum, similique vero? Quas accusantium, consequatur eaque
                        praesentium, suscipit repellat ipsum illo quis, tenetur deleniti voluptate laudantium recusandae
                        architecto sapiente excepturi molestias dignissimos ipsa cupiditate deserunt maxime doloribus.
                        Provident, adipisci cumque! Labore pariatur incidunt obcaecati eius quas magni vitae, quisquam
                        perspiciatis cum blanditiis distinctio, veritatis placeat ea non molestiae. Illo suscipit
                        accusantium temporibus repellat officia earum adipisci ipsa aliquid velit quis amet similique,
                        dolor veniam labore laudantium vel officiis repudiandae blanditiis eveniet iste at assumenda?
                        Itaque rerum possimus, aperiam facere nesciunt provident consectetur maxime voluptatem quis iste
                        aliquid commodi veniam voluptates placeat voluptatibus fugit aspernatur perspiciatis minus enim?
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="sharemodal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-sm modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button class="btn btn-outline-primary btn-sm rounded-circle">FB</button>
                        <button class="btn btn-outline-primary btn-sm rounded-circle">WP</button>
                        <button class="btn btn-outline-primary btn-sm rounded-circle">Linkedin</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>
    <script>
        // == Settings ==
        const lang = 'EN'; // RU or EN description
        const typeCountdown =
            'time'; // 'time' to set the countdown to a specific time or 'date' to set the countdown to the designated date

        let EndDate = '2019/07/10, 22:00'; // Expiration Date yyyy/mm/dd, hh:mm. Working only if typeCountdown = 'date'

        let days = 1; // Number of days before the end. Working only if typeCountdown = 'time'
        let timeOut =
            '00:00'; // 'hh:mm'. Number of hours and minutes before the end. Working only if typeCountdown = 'time'

        const ColorDigitEnd = '#bfbfbf';
        // == Settings END ==

        let hours, minutes, target_date, ExpirationDate;
        let formatCountdown = null;
        let day_lang = hour_lang = minute_lang = second_lang = '';


        function daysLeft(target) {
            if (target > (24 * 60 * 60 * 1000)) {
                formatCountdown = 'day|hour|minute|second';
            } else if (target > (60 * 60 * 1000)) {
                formatCountdown = 'hour|minute|second';
            } else {
                formatCountdown = 'minute|second';
            }
        }

        if (typeCountdown === 'time') {
            timeOut = timeOut.split(':');
            hours = timeOut[0];
            minutes = timeOut[1];
            target_date = ((days * 24 * 60 * 60 + hours * 60 * 60 + minutes * 60) * 1000);

            daysLeft(target_date);
            target_date += new Date().getTime();
        } else if (typeCountdown === 'date') {
            ExpirationDate = new Date(EndDate);
            target_date = (ExpirationDate - new Date());
            daysLeft(target_date);
            target_date += new Date().getTime();
        } else {
            target_date = 0;
            formatCountdown = 'day|hour|minute|second';
        }

        if (lang === 'RU') {
            day_lang = 'Дней';
            hour_lang = 'Часов';
            minute_lang = 'Минут';
            second_lang = 'Секунд';
        } else if (lang === 'EN') {
            day_lang = 'Days';
            hour_lang = 'Hours';
            minute_lang = 'Minutes';
            second_lang = 'Seconds';
        }

        class Countdown {
            get TIMESTAMP_SECOND() {
                return 1000;
            }
            get TIMESTAMP_MINUTE() {
                return 60 * this.TIMESTAMP_SECOND;
            }
            get TIMESTAMP_HOUR() {
                return 60 * this.TIMESTAMP_MINUTE;
            }
            get TIMESTAMP_DAY() {
                return 24 * this.TIMESTAMP_HOUR;
            }

            constructor(userOptions) {
                this.options = {
                    cont: null,
                    countdown: true,
                    endDate: {
                        day: 0,
                        hour: 0,
                        minute: 0,
                        second: 0
                    },
                    endCallback: null,
                    outputFormat: formatCountdown,
                    outputTranslation: {
                        day: day_lang,
                        hour: hour_lang,
                        minute: minute_lang,
                        second: second_lang
                    }
                };

                this.lastTick = null;
                this.intervalsBySize = ['day', 'hour', 'minute', 'second'];
                this.interval = null;
                this.digitConts = {};
                this._assignOptions(this.options, userOptions);
            }

            start() {
                let endDate, endDateData;
                this._fixCompatibility();

                endDate = this._getDate(this.options.endDate);
                endDateData = this._prepareTimeByOutputFormat(endDate);

                this._writeData(endDateData);
                this.lastTick = endDateData;

                if (this.options.countdown && endDate.getTime() <= Date.now()) {
                    if (typeof this.options.endCallback === 'function') {
                        this.stop();
                        this.options.endCallback();
                    }
                } else {
                    this.interval = setInterval(() => {
                            this._updateView(this._prepareTimeByOutputFormat(endDate));
                        },
                        this.TIMESTAMP_SECOND);
                }
            }

            stop() {
                if (this.interval !== null) {
                    clearInterval(this.interval);
                }
            }

            _getDate(date) {
                if (typeof date === 'object') {
                    if (date instanceof Date) {
                        return date;
                    } else {
                        let expectedValues = {
                            day: 0,
                            hour: 0,
                            minute: 0,
                            second: 0
                        };

                        for (let i in expectedValues) {
                            if (expectedValues.hasOwnProperty(i) && date.hasOwnProperty(i)) {
                                expectedValues[i] = date[i];
                            }
                        }
                        return new Date(expectedValues.day, expectedValues.hour, expectedValues.minute, expectedValues
                            .second);
                    }
                } else if (typeof date === 'number' || typeof date === 'string') {
                    return new Date(date);
                } else {
                    return new Date();
                }
            }

            _prepareTimeByOutputFormat(dateObj) {
                let usedIntervals, output = {},
                    timeDiff;

                usedIntervals = this.intervalsBySize.filter(item => {
                    return this.options.outputFormat.split('|').indexOf(item) !== -1;
                });

                timeDiff = this.options.countdown ? dateObj.getTime() - Date.now() : Date.now() - dateObj.getTime();

                usedIntervals.forEach(item => {
                    let value;
                    if (timeDiff > 0) {
                        switch (item) {
                            case 'day':
                                value = Math.trunc(timeDiff / this.TIMESTAMP_DAY);
                                timeDiff -= value * this.TIMESTAMP_DAY;
                                break;
                            case 'hour':
                                value = Math.trunc(timeDiff / this.TIMESTAMP_HOUR);
                                timeDiff -= value * this.TIMESTAMP_HOUR;
                                break;
                            case 'minute':
                                value = Math.trunc(timeDiff / this.TIMESTAMP_MINUTE);
                                timeDiff -= value * this.TIMESTAMP_MINUTE;
                                break;
                            case 'second':
                                value = Math.trunc(timeDiff / this.TIMESTAMP_SECOND);
                                timeDiff -= value * this.TIMESTAMP_SECOND;
                                break;
                        }
                    } else {
                        value = '00';
                        const elements = document.querySelectorAll('.digit_cont');
                        for (let i = 0; i < elements.length; i++) {
                            elements[i].style.color = ColorDigitEnd;
                        }
                    }
                    output[item] = (('' + value).length < 2 ? '0' + value : '' + value).split('');
                });
                return output;
            }

            _fixCompatibility() {
                Math.trunc = Math.trunc || function(x) {
                    if (isNaN(x)) {
                        return NaN;
                    }
                    if (x > 0) {
                        return Math.floor(x);
                    }
                    return Math.ceil(x);
                };
            }

            _writeData(data) {
                let code = ``,
                    intervalName;

                for (intervalName in data) {
                    if (data.hasOwnProperty(intervalName)) {
                        let element = `<div><div class="interval_cont interval_cont_${intervalName}">`,
                            intervalDescription =
                            `<div class="description"> ${this.options.outputTranslation[intervalName]}</div>`;

                        data[intervalName].forEach((digit, index) => {
                            element +=
                                `<div class="digit_cont digit_cont_${index}" id="test">${this._getDigitElementString(digit, 0)}</div>`;
                        });

                        code += element + '</div>' + intervalDescription + '</div>';
                    }
                }
                this.options.cont.innerHTML = code;
                this.lastTick = data;
            }

            _getDigitElementString(newDigit, lastDigit) {
                return `<div class="last_placeholder"><span>${lastDigit}</span></div>
						<div class="new_placeholder">${newDigit}</div>
						<div class="last_rotate">${lastDigit}</div>
						<div class="new_rotate">
							<div class="rotated"><span>${newDigit}</span></div>
						</div>`;
            }

            _updateView(data) {
                for (let intervalName in data) {
                    if (data.hasOwnProperty(intervalName)) {
                        data[intervalName].forEach((digit, index) => {
                            if (this.lastTick !== null &&
                                this.lastTick[intervalName][index] !==
                                data[intervalName][index]) {
                                this._getDigitCont(intervalName, index).innerHTML = this._getDigitElementString(
                                    data[intervalName][index], this.lastTick[intervalName][index]);
                            }
                        });
                    }
                }
                this.lastTick = data;
            }

            _getDigitCont(intervalName, index) {
                if (!this.digitConts[`${intervalName}_${index}`]) {
                    this.digitConts[`${intervalName}_${index}`] = this.options.cont.querySelector(
                        `.interval_cont_${intervalName} .digit_cont_${index}`);
                }
                return this.digitConts[`${intervalName}_${index}`];
            }

            _assignOptions(options, userOptions) {
                for (let i in options) {
                    if (options.hasOwnProperty(i) && userOptions.hasOwnProperty(i)) {
                        if (options[i] !== null && typeof options[i] === 'object' && typeof userOptions[i] ===
                            'object') {
                            this._assignOptions(options[i], userOptions[i]);
                        } else {
                            options[i] = userOptions[i];
                        }
                    }
                }
            }
        }

        let cd = new Countdown({
            cont: document.querySelector('.flip-countdown'),
            endDate: target_date,
            outputTranslation: {
                day: day_lang,
                hour: hour_lang,
                minute: minute_lang,
                second: second_lang
            },
            endCallback: null,
            outputFormat: formatCountdown
        });
        cd.start();
    </script>
    <script>
        window.onscroll = function() {
            if ((window.pageYOffset) >= 50) {
                var navbar = document.getElementById('navbar')
                navbar.classList.remove('navbar-dark');
                navbar.classList.add('navbar-light');
                navbar.classList.add('navbar-blur');
            } else {
                var navbar = document.getElementById('navbar')
                navbar.classList.remove('navbar-light');
                navbar.classList.remove('navbar-blur');
                navbar.classList.add('navbar-dark');
            };
        }
    </script>
</body>

</html>
