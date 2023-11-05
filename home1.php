<?php

session_start();
if (isset($_SESSION['username'])) {
} else {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/home1.css">
</head>

<body>
    <div class="head">
        <div>
            <h1>Hi <?php echo $_SESSION['username']; ?>👋</h1>
        </div>

        <div>
            <h2>Welcome to your dashboard!</h2>
        </div>
    </div>

    <div class="p">
        <h3>Access all our learning materials below!(PHP)</h3>
    </div>
    <div>
        <table class="t" id="temp">
            <tr>
                <th>S.No</th>
                <th>Videos courses</th>
                <th>Audio material</th>
                <th>Books(text)</th>
            </tr>

            <tr>
                <td>1</td>
                <td>
                    <h4>FCC course</h4>
                    <iframe src=" https://www.youtube.com/embed/OK_JCtrrv-c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </td>
                <td>
                    <h4>PHP Basics</h4>
                    <audio src="assets/a.mp3" controls></audio>
                </td>
                <td>
                    <h4>Arrays</h4>
                    <iframe src="assets/arrays.pdf" frameborder="0"></iframe>
                    <a href="assets/arrays.pdf" target="_blank">View</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <h4>Net Ninja</h4>
                    <iframe src=" https://www.youtube.com/embed/pWG7ajC_OVo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </td>
                <td>
                    <!-- <iframe src="assets/a.mp3" frameborder="0"></iframe> -->
                    <h4>Strings</h4>
                    <audio src="assets/b.mp3" controls></audio>
                </td>
                <td>
                    <h4>Flow-charts</h4>
                    <iframe src="assets/logic.pdf" frameborder="0"></iframe>
                    <a href="assets/logic.pdf" target="_blank">View</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    <h4>Traversy Media</h4>
                    <iframe src="https://www.youtube.com/embed/2eebptXfEvw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </td>
                <td>
                    <h4>Operators</h4>
                    <audio src="assets/c.mp3" controls></audio>
                </td>
                <td>
                    <h4>Short Notes</h4>
                    <iframe src="assets/notes.pdf" frameborder="0"></iframe>
                    <a href="assets/notes.pdf" target="_blank">View</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>
                    <h4>NodeJS vs PHP</h4>
                    <iframe src="https://www.youtube.com/embed/fcvgVfo2GAg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </td>
                <td>
                    <h4>Arrays</h4>
                    <audio src="assets/e.mp3" controls></audio>
                </td>
                <td>
                    <h4>Question Bank</h4>
                    <iframe src="assets/questionbank.pdf" frameborder="0"></iframe>
                    <a href="assets/questionbank.pdf" target="_blank">View</a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>
                    <h4>Laravel Crash Course</h4>
                    <iframe src="https://www.youtube.com/embed/MFh0Fd7BsjE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </td>
                <td>
                    <h4>PHP and MySQL</h4>
                    <audio src="assets/f.mp3" controls></audio>
                </td>
                <td>
                    <h4>Intro with problems</h4>
                    <iframe src="assets/samplenotes.pdf" frameborder="0"></iframe>
                    <a href="assets/samplenotes.pdf" target="_blank">View</a>
                </td>
            </tr>
        </table>


    </div>
    <div class="final">
        <h1>Quiz Time!📄</h1>
        <form class="f" action="output.php" method="post">
            <div class="col-xs-4">
                <label class="form-label">1. Get the length of the string "Hello World!".</label>
                <input type="text" class="form-control" name="q1" required>

            </div><br>

            <label class="form-label">2. Correct way of declaring integer of value 10 in PHP.</label><br>
            <div class="form-check form-check-inline">

                <input class="form-check-input" type="radio" name="a" value="a1">
                <label class="form-check-label">int a=10;</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="a" value="a2">
                <label class="form-check-label">a=10;</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="a" value="a3">
                <label class="form-check-label">$a=10;</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="a" value="a4" required>
                <label class="form-check-label">10=$a;</label>
            </div><br><br>
            <div>
                <label class="form-label">3. Find the output of the given code.</label><br>
                <label class="form-label">$fruits = array("Apple", "Banana", "Orange");</label><br>
                <label class="form-label">echo $fruits[1];</label><br>
            </div>
            <div class="form-check form-check-inline">

                <input class="form-check-input" type="radio" name="b" value="b1" required>
                <label class="form-check-label">Banana</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="b" value="b2">
                <label class="form-check-label">Apple</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="b" value="b3">
                <label class="form-check-label">Array</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="b" value="b4">
                <label class="form-check-label">Orange</label>
            </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>