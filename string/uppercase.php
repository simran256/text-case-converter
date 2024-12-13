<?php
$change_case = "";
if (isset($_POST['lower'])) {

    $user_input = trim($_POST['user_input']);
    $change_case = strtolower($user_input);
} else if (isset($_POST['upper'])) {
    $user_input = trim($_POST['user_input']);
    $change_case = strtoupper($user_input);
}


?>
<!doctype html>
<html lang="en">

<head>
    <title>CASE_CHANGER</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />

    <style>
        body {
            background: rgba(0, 0, 0, 0.57)url('images/pattern-7451714.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-blend-mode: darken;
        }

        .form_con textarea {
            height: 300px;
            overflow-y: auto;
            background: #F5F5F5;
            border-radius: 0px;
            /* scrollbar-width: thin;
            scrollbar-color: #4c4189 #d7d8d9; */

        }


        #style-10::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        #style-10::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-10::-webkit-scrollbar-thumb {
            background-color: #AAA;
            border-radius: 10px;
            background-image: -webkit-linear-gradient(90deg,
                    rgba(0, 0, 0, .2) 25%,
                    transparent 25%,
                    transparent 50%,
                    rgba(0, 0, 0, .2) 50%,
                    rgba(0, 0, 0, .2) 75%,
                    transparent 75%,
                    transparent)
        }

        .form_main {
            margin: 40px auto;
        }

        form .upper {
            background-image: linear-gradient(112.1deg, rgba(32, 38, 57, 1) 11.4%, rgba(63, 76, 119, 1) 70.2%);
            border: none;
            /* No border for cleaner appearance */
            color: rgb(243, 239, 239);
            font-weight: 600;
            letter-spacing: 1px;
            /* Ensure text is visible against the gradient */
            padding: 10px 20px;
            /* Add padding to make the button larger */
            font-size: 16px;
            /* Adjust font size */
            border-radius: 5px;
            /* Optional: Rounded corners */
            cursor: pointer;
            /* Add pointer cursor on hover */
            text-align: center;
            /* Center-align text */
            /* background-image: radial-gradient(circle 867px at -5.8% 1.8%, rgba(255, 255, 255, 1) 0%, rgba(7, 0, 216, 1) 100.3%); */
        }

        form .lower {

            border: none;
            /* No border for cleaner appearance */
            color: rgb(34, 29, 29);
            font-weight: 600;
            letter-spacing: 1px;
            /* Ensure text is visible against the gradient */
            padding: 10px 20px;
            /* Add padding to make the button larger */
            font-size: 16px;
            /* Adjust font size */
            border-radius: 5px;
            /* Optional: Rounded corners */
            cursor: pointer;
            /* Add pointer cursor on hover */
            text-align: center;
            /* Center-align text */
            background-image: linear-gradient(177.9deg, rgba(255, 228, 254, 1) 5.3%, rgba(255, 228, 254, 1) 5.3%, rgba(188, 132, 173, 1) 94.7%);
        }

        form button:hover {
            filter: brightness(1.1);
            /* Optional: Slightly brighten on hover */
        }

        .heading {
            background-image: linear-gradient(109.6deg, rgba(44, 83, 131, 1) 18.9%, rgba(95, 175, 201, 1) 91.1%);
            padding: 10px 20px;
            color: whitesmoke;
            border-radius: 10px 10px 0px 0px;
        }

        .title {
            animation: title 1.5s infinite;
            /* font-size: 30vh; */
            background: rgb(236, 217, 39);
            background: linear-gradient(0deg,
                    rgb(233, 181, 243) 0%,
                    rgb(124, 223, 253) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            background-size: 300%;
        }
    </style>



</head>

<body>

    <main>
        <div class="container form_container">
            <div class="row">
                <div class="col-lg-12 form_main">
                    <form action="" method="post" class="form_con">
                        <div class="heading">
                            <h3 class="title">Text Converter</h3>
                        </div>
                        <textarea name="user_input" id="style-10" class="form-control mb-4" rows="7"> <?= $change_case ?></textarea>
                        <button class="me-3 upper" type="submit" name="upper">Uppercase</button>
                        <button class="lower" type="submit" name="lower">Lowercase</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>