<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Generation</title>

</head>
<body style="background-color: grey;
    font-size: large;
    font-family: 'Times New Roman', Times, serif;">


    <form class="gradef" action="" method="POST" 
    style="
    background-color: white;
    text-align: left;
    height: 180px;
    width: 400px;
    margin: 0 auto;
    margin-top: 350px;
    padding: 20px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">

    <!-- title on the top of the form -->
        <h2>Grade Generation</h2>
        <!-- label of the form -->
        <label for="marks">Type Marks:</label>
        <!-- where marks are inputted -->
        <input type="text" name="marks" required>
        <!-- submit button -->
        <button type="submit" name="submit">Show Grade</button>
        <!-- section of the form where the result is displayed -->
        <div id="result">
            <!-- php code that retrieves the function of grading the marks inputted -->
            <?php
                // Include the logic from generator.php
                if (isset($_POST['submit'])) {
                    include('generator.php');
                    // Display result from generator.php
                    if (isset($result)) {
                        echo $result;
                    }
                }
            ?>
        </div>
    </div>
    </form>


</body>
</html>