<?php
require_once "include/dbh.inc.php";
require_once "include/comment_model.inc.php";
require_once "include/comment_contr.inc.php";
require_once "include/session_config.inc.php";
require_once "include/comment_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha - Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/index.css">
    <script type="module" src="index.js" defer></script>
</head>

<body>
    <header>
        <?php include "components/topbar.php" ?>
        <div class="header-img-container">
            <button id="left">
                <svg width="20px" height="20px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path d="M768 903.232l-50.432 56.768L256 512l461.568-448 50.432 56.768L364.928 512z" fill="#2f3641" />
                </svg>
            </button>
            <button id="right">
                <svg width="20px" height="20px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path d="M768 903.232l-50.432 56.768L256 512l461.568-448 50.432 56.768L364.928 512z" fill="#2f3641" />
                </svg>
            </button>
            <img src="images/car1.jpg" alt="" class="header-img slide active" id="top-img">
            <img src="images/car2.jpg" alt="" class="header-img slide" id="bottom-img">
        </div>
    </header>
    <main>
        <section class="cars">
            <div class="carousel">
                <div class="carousel-item" data-item="1">
                    <img src="images/car7.jpg" alt="">
                    <div class="carousel-item-info">
                        <p class="model-name">Alpha A3
                        </p>
                        <p class="info-text">Available for 499$/month</p>
                        <button class="info-btn" data-model-btn="0">Learn More</button>
                    </div>
                </div>
                <div class="carousel-item" data-item="2">
                    <img src="images/car8.jpg" alt="">
                    <div class="carousel-item-info">
                        <p class="model-name">Alpha A4
                        </p>
                        <p class="info-text">Available for 399$/month</p>
                        <button class="info-btn" data-model-btn="1">Learn More</button>
                    </div>
                </div>
                <div class="carousel-item" data-item="3">
                    <img src="images/car9.jpg" alt="">
                    <div class="carousel-item-info">
                        <p class="model-name">Alpha A4X
                        </p>
                        <p class="info-text">Available for 699$/month</p>
                        <button class="info-btn" data-model-btn="2">Learn More</button>
                    </div>
                </div>
                <div class="carousel-item" data-item="4">
                    <img src="images/car10.jpg" alt="">
                    <div class="carousel-item-info">
                        <p class="model-name">Alpha A5 GT
                        </p>
                        <p class="info-text">Available for 299$/month</p>
                        <button class="info-btn" data-model-btn="3">Learn More</button>
                    </div>
                </div>
                <div class="carousel-item" data-item="5">
                    <img src="images/car11.jpg" alt="">
                    <div class="carousel-item-info">
                        <p class="model-name">Alpha A6 Performance
                        </p>
                        <p class="info-text">Available for 199$/month</p>
                        <button class="info-btn" data-model-btn="4">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="carousel-button-container">
                <button class="active" data-carousel-btn="1"></button>
                <button data-carousel-btn="2"></button>
                <button data-carousel-btn="3"></button>
                <button data-carousel-btn="4"></button>
                <button data-carousel-btn="5"></button>
            </div>
        </section>
        <section class="jobs-section">
            <div class="jobs-wrapper">
                <div class="jobs-heading">
                    <h2>ENTRY OPPORTUNITIES</h2>
                    <p>Whether you’re a pupil, student, or direct entrant – we welcome passionate talents who are eager to reinvent the mobility of the future. Whatever your heart beats for – with us, everyone has the opportunity to share their passion.</p>
                </div>
                <div class="jobs">
                    <div class="job-images-container">
                        <div class="image-container">
                            <img src="images/job1.jpg" alt="">
                            <p>Pupils</p>
                        </div>
                        <div class="image-container">
                            <img src="images/job2.jpg" alt="">
                            <p>Students</p>
                        </div>
                        <div class="image-container">
                            <img src="images/job3.jpg" alt="">
                            <p>Graduates</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="effect">
            <div class="effect-container">
                <img src="images/car1.jpg" alt="">
            </div>
        </section>
        <section class="team-section">
            <div class="team-wrapper">
                <div class="teams-heading">
                    <h2>TEAM MEMBERS</h2>
                    <p>Whether you’re a pupil, student, or direct entrant – we welcome passionate talents who are eager to reinvent the mobility of the future. Whatever your heart beats for – with us, everyone has the opportunity to share their passion.</p>
                </div>
                <div class="team-image-container">
                    <div class="team-member-container">
                        <img src="images/profile1.jpg" alt="">
                        <p class="member-description">"I’ve always wanted to understand how technology truly works. At Alpha Motors, I get to work on vehicles that combine innovation and precision – and learn from some of the best in the field."</p>
                        <p class="member-name">Jonas</p>
                        <p class="member-job">Apprentice Mechatronics Technician</p>
                    </div>

                    <div class="team-member-container">
                        <img src="images/profile2.jpg" alt="">
                        <p class="member-description">"What fascinates me is the intersection of software and mobility. Here I develop connected systems that make vehicles smarter and driving more seamless every day."</p>
                        <p class="member-name">Marc</p>
                        <p class="member-job">Software Engineer – Connected Drive</p>
                    </div>

                    <div class="team-member-container">
                        <img src="images/profile3.jpg" alt="">
                        <p class="member-description">"My goal is to make production processes smarter and more efficient. Every project challenges me to blend digital innovation with sustainable, real-world impact."</p>
                        <p class="member-name">Lukas</p>
                        <p class="member-job">Project Manager – Production Digitalization</p>
                    </div>

                    <div class="team-member-container">
                        <img src="images/profile4.jpg" alt="">
                        <p class="member-description">"I love connecting people and ideas. At Alpha Motors, I organize events and internal campaigns that bring our company culture to life and inspire collaboration."</p>
                        <p class="member-name">Lea</p>
                        <p class="member-job">Communications & Events Specialist</p>
                    </div>

                    <div class="team-member-container">
                        <img src="images/profile5.jpg" alt="">
                        <p class="member-description">"For me, sustainability is not a trend – it’s a responsibility. I’m proud to contribute to projects that help make mobility more environmentally conscious and future-ready."</p>
                        <p class="member-name">Sophie</p>
                        <p class="member-job">Intern – Sustainability Management</p>
                    </div>

                </div>
            </div>
        </section>
        <section id="comments">
            <div class="comment-wrapper">
                <div class="comments-heading">
                    <h2>LEAVE US A COMMENT</h2>
                    <p>Have any thoughts or feedback? Leave us a comment and let us know what you think — we’d love to hear from you!</p>
                </div>
                <form action="include/comment.inc.php" method="post">
                    <label for="comment">Comment*</label>
                    <textarea name="comment" id="comment"></textarea>
                    <?php
                    showSuccess();
                    showError();
                    ?>
                    <button type="submit" class="comment-btn">Comment</button>
                </form>
                <?php displayComment($pdo) ?>
            </div>
        </section>

    </main>
    <?php include "components/footer.php" ?>
</body>

</html>