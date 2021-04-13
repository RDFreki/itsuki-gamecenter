<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200&display=swap");

        html {
            background-image: url(img/main/bg.jpg);
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            background-blend-mode: multiply;
            background-color: rgb(0, 0, 0, 0.6);
            font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', Arial, sans-serif;
        }

        html {
            cursor: url(img/cursor/arrow.png), auto;
        }

        a, select, button, label {
            cursor: url(img/cursor/link.png), auto;
        }

        input, textarea {
            cursor: url(img/cursor/text.png), auto;
        }

        .content {
            margin: 15% 80px;

        }

        .title {
            margin-top: 100px;
            padding: 7px 0;
            text-align: center;
            color: #fff;
            font-size: 35px;
            line-height: 36px;
            border: 1px solid #8739f9;
            border-radius: 8px;
            box-shadow: 0px 0px 20px #8739f9;
            text-shadow: 0px 0px 5px whitesmoke;
        }

        .change__name {
            text-decoration: underline;
        }

        .subtitle {
            margin-top: 60px;
            font-size: 28px;
            color: whitesmoke;
            text-shadow: 0 0 5px whitesmoke;
            text-decoration: underline;
        }

        .comment {
            margin-top: -20px;
            font-size: 25px;
            color: whitesmoke;
            border-radius: 13px;
            border-top: 2px solid #8739f9;
            border-bottom: 2px solid #8739f9;
            text-shadow: 0 0 5px whitesmoke;
            padding: 30px 10px 40px 10px;
            backdrop-filter: blur(15px);

        }

        .type__date {
            color: whitesmoke;
            float: right;
            font-size: 14px;
            font-style: italic;
        }

        @media(max-width: 760px) {
            .content {
                margin: 0;
            }

            .comment {
                font-size: 17px;
                padding: 10px 30px;
            }
        }
    </style>
</head>

<body>
    <div class="content">
        <?php
        $name = $_POST["name"];
        $comment = $_POST["message"];
        $type = $_POST["type"];
        $date = date("d/m/Y") . ", " . date("l");
        echo "<h1 class='title'>Thank you for your feedback, <span class='change__name'>$name</span>!</h1>";
        echo "<p class='subtitle'>Comment:</p><div class='comment'>$comment</div>";
        echo "<span class='type__date'>Feedback type: $type<br>Sent date: $date</span>";
        ?>
    </div>
</body>

</html>