<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABbout</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>


    <style>
        .nav {
            background-color: #17ce82;
            padding: 10px 70px 10px 70px;


        }

        .cp {
            background-color: #17ce82;

        }

        .about {
            padding: 50px 200px 50px 200px;
            margin: 50px 200px 50px 200px;

            height: fit-content;

            font-family: "Noto Sans", "Helvetica Neue", "Helvetica", "Arial", "Liberation Sans", "Roboto", "Noto", sans-serif;
        }

        .aboutc1 {


            color: aliceblue;
            background-color: rgba(26, 112, 182, 0.671);
        }

        .aboutc2 {
            color: aliceblue;
            background-color: rgba(55, 19, 184, 0.863);
        }

        .aboutc3 {
            color: aliceblue;
            background-color: rgba(173, 97, 10, 0.719);
        }

        .aboutc4 {
            color: aliceblue;

            background-color: rgba(19, 179, 190, 0.925);
        }

        .container-fluid {
            margin-top: 100px;
            margin-bottom: 100px;
        }

        .but {
            background-color: #12d494;
            padding: 5px;
            width: 300px;
            text-align: center;
            color: black;
            border-radius: 50px;
        }
    </style>
</head>

<body>

   <?php  require('./components/header.php'); ?>

    <div class="container-fluid">
        <div class="aboutc1 about">
            <h1>
                What is a CV?
            </h1><br>
            <p>
                A CV (short for the Latin phrase curriculum vitae, which means “course of life”) is a detailed document
                highlighting your professional and academic history. CVs typically include information like work
                experience, achievements and awards, scholarships or grants you’ve earned, coursework, research projects
                and publications of your work. You may be asked to submit a CV when applying for jobs in academia or
                jobs outside India.
            </p>
            <p>
                If you need help determining how to write a CV, it can be helpful to consult a template. Here is
                additional background on the document along with an easy-to-follow CV example template to ensure you
                craft a powerful curriculum vitae that stands out to employers.
            </p>
        </div>
        <div class="aboutc2 about">
            <h1>
                CV vs. Resume
            </h1>
            <br>
            <p>
                It is important to note that in the United States and most of Europe, resumes and CVs are not
                interchangeable. A resume is a shorter-form document that provides a concise overview of your previous
                roles, skills and details about your education. (The French word résumé translates to “abstract” or
                “summary”.) A CV, on the other hand, is typically a longer, more detailed document focused largely on
                academic coursework and research.
            </p>
            <p>
                There are a few exceptions, however. In India, South Africa and Australia, the terms CV and resume are
                interchangeable.
            </p>

        </div>
        <div class="aboutc3 about">
            <h1>
                How to write a CV
            </h1>
            <h>Most CVs include the following information:</h2>

                <br>
                <br>
                <ul>

                    <li>Contact information</li>
                    <li>Academic history</li>
                    <li>Professional experience</li>
                    <li>Qualifications and skills</li>
                    <li>Awards and honours</li>
                    <li>Publications</li>
                    <li>Professional associations</li>
                    <li>Grants and fellowships</li>
                    <li>Licenses and certificates</li>
                    <li>Volunteer work</li>
                    <li>Personal information (Optional)</li>
                    <li>Hobbies and interests (Optional)</li>
                </ul>
                <button class="but bi" onclick="window.location.href='login.html'">lets Make it Simple</button>
        </div>
        <div class="aboutc4 about">
            <h1>BULD cv</h1>
            <p>
                Make Cv super easy is with vairty of template lest join Build cv.
            </p>


        </div>
    </div>

<?php include('./components/footer.php') ?>


</body>

</html>