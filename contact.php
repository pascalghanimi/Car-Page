<?php
require_once "include/session_config.inc.php";
require_once "include/contact_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha - Contact</title>
    <link rel="stylesheet" href="styles/contact.css">
    <script type="module" src="contact.js" defer></script>
</head>

<body>
    <header>
        <?php include "components/topbar.php" ?>
        <div class="header-image-container">
            <img src="images/support.jpg" alt="">
        </div>
    </header>
    <main>
        <section class="info-container">
            <h1>INFORMATION FOR A SUCCESSFUL CONTACT</h1>
            <h2>FREQUENTLY ASKED QUESTIONS AND CONTACT OPTIONS.</h2>
            <p>Getting in touch with the Alpha Group is simple and transparent.
                Below, you’ll find answers to frequently asked questions and useful information about how to reach us.
                Whether you’re interested in our projects, partnerships, or general inquiries — we’re here to help.

                Further down, you’ll also find a contact form for direct communication with our team —
                feel free to reach out if your question isn’t covered below.</p>
        </section>
        <section class="questions">
            <div class="questions-container">
                <h2>MOST IMPORTANT QUESTIONS</h2>
                <div class="accordion">
                    <button class="accordion-header" data-header="1">
                        How can I get in touch with the Alpha Group?
                    </button>
                    <div class="accordion-body-container" data-body="1">
                        You can contact us easily through the contact form further down on this page.
                        Whether you have general questions, partnership ideas, or inquiries about our projects —
                        our team will make sure your message reaches the right department.
                        We aim to respond within two business days.
                    </div>

                    <button class="accordion-header" data-header="2">
                        What areas does the Alpha Group operate in?
                    </button>
                    <div class="accordion-body-container" data-body="2">
                        The Alpha Group focuses on innovation across multiple industries —
                        from technology and mobility to sustainability and digital infrastructure.
                        Our goal is to connect people and ideas through forward-thinking projects
                        that push the boundaries of what’s possible.
                        We collaborate with international partners to achieve measurable impact.
                    </div>

                    <button class="accordion-header" data-header="3">
                        Where are the Alpha Group offices located?
                    </button>
                    <div class="accordion-body-container" data-body="3">
                        Our main headquarters are located in Munich, Germany,
                        with several branches and project offices across Europe and Asia.
                        Each office specializes in different aspects of our work —
                        from strategic planning and research to development and customer relations.
                        You’ll find detailed contact information for each location in the contact section below.
                    </div>

                    <button class="accordion-header" data-header="4">
                        How can I collaborate or start a partnership with Alpha?
                    </button>
                    <div class="accordion-body-container" data-body="4">
                        We’re always open to new collaborations with individuals and organizations
                        who share our vision for innovation and responsible growth.
                        The easiest way to start is by sending us a short description of your idea
                        via the contact form. Our partnership team will review your proposal
                        and get back to you with possible next steps.
                    </div>

                    <button class="accordion-header" data-header="5">
                        How does Alpha handle personal data and privacy?
                    </button>
                    <div class="accordion-body-container" data-body="5">
                        Protecting your data is extremely important to us.
                        All information submitted through our website is encrypted
                        and processed according to the GDPR and other relevant privacy regulations.
                        We only store data for as long as it’s necessary to process your request.
                        You can find more details in our Privacy Policy section below.
                    </div>

                    <button class="accordion-header" data-header="6">
                        Who can I contact regarding press or media inquiries?
                    </button>
                    <div class="accordion-body-container" data-body="6">
                        Our communications department handles all press and media inquiries.
                        For interviews, image requests, or press releases,
                        please reach out via the contact form or send an email to
                        <strong>press@alpha-group.com</strong>.
                        We’ll connect you directly with our media relations team.
                    </div>

                    <button class="accordion-header" data-header="7">
                        I have a technical issue with the website — what should I do?
                    </button>
                    <div class="accordion-body-container" data-body="7">
                        If something isn’t working as expected, please describe the issue
                        (including your browser and device) in the contact form below.
                        Our web support team will review it as soon as possible
                        and ensure that the issue is resolved quickly.
                        We appreciate you helping us improve the experience for everyone.
                    </div>

                    <button class="accordion-header" data-header="8">
                        Can I visit the Alpha Group in person?
                    </button>
                    <div class="accordion-body-container" data-body="8">
                        Visits to our offices are possible by appointment only.
                        This ensures we can connect you with the right department and prepare accordingly.
                        Please reach out through the contact form with a short note about
                        what you’d like to discuss, and we’ll coordinate a suitable time for your visit.
                    </div>

                    <button class="accordion-header" data-header="9">
                        How can I stay updated on Alpha Group news and projects?
                    </button>
                    <div class="accordion-body-container" data-body="9">
                        You can subscribe to our newsletter directly on our website
                        to receive updates about new projects, collaborations, and insights.
                        We also share announcements on our LinkedIn and Instagram channels —
                        follow us there to stay in the loop about upcoming events and opportunities.
                    </div>

                    <button class="accordion-header" data-header="10">
                        I can’t find the answer I’m looking for. What should I do?
                    </button>
                    <div class="accordion-body-container" data-body="10">
                        No problem — that’s exactly why our contact form exists.
                        Just scroll down and send us your message.
                        The more details you provide, the faster we can direct it to the right person.
                        Whether it’s a specific question, feedback, or a new idea,
                        we’re always happy to hear from you.
                    </div>

                </div>
            </div>
        </section>

        <section class="contact">
            <div class="contact-container">
                <form action="include/contact.inc.php" method="post" id="contact-form" class="contact-form">
                    <h2>Contact Us</h2>
                    <label for="email">Email*</label>
                    <input type="email" name="email" id="email">
                    <label for="first-name">First Name</label>
                    <input type="text" name="first-name" id="first-name">
                    <label for="last-name">Last Name</label>
                    <input type="text" name="last-name" id="last-name">
                    <label for="topic">Topic</label>
                    <input type="text" name="topic" id="topic">
                    <label for="message">Message*</label>
                    <textarea name="message" id="message"></textarea>

                    <button type="submit" class="contact-btn">Send</button>
                    <?php
                    showError();
                    showSuccess();
                    ?>
                </form>
            </div>
        </section>
    </main>
    <?php include "components/footer.php" ?>
</body>

</html>