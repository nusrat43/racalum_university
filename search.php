<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* login page
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f2f2f2;
    font-family: 'Arial', sans-serif;
} */
        section.search {
            background-image: url(assets/images/banner3.jpeg);
            background-position: center center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 140px 0px 50px 0px;

        }

        .search-container {
            height: 500px;
            width: 1000px;
            margin-top: 100px;
            margin-bottom: 80px;
            /* margin-left: 300px; */
            margin: auto;
            background-color: white;
            padding: 60px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);

        }

        .search-container h2 {
            border-bottom: 2px solid black;
            padding: 5px;

        }

        label {
            padding: 100px;
            /* margin: auto; */
            font-weight: bold;
        }

        input {
            padding: 5px;
            margin: 10px;
            width: 200px;
        }

        .search-btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-left: 320px;

        }

        .search-btn:hover {
            background-color: #45a049;
        }

        @media (max-width: 768px) {
            .search-container {
                /* margin-left: 100px; */
                width: 650px;
                height: 400px;
                
            }
            label{
                padding: 10px;
                margin-top: 100px;
                font-size: 12px;
            }
            .search-btn{
                margin-left: 150px;
                margin-top: 60px;
            }
        }
      
        /* @media (max-width: 1085px) {
            .search-container {
                /* margin-left: 190px; 
                width: 650px;
                height: 400px;
                margin-top: 50px;
                
            }
            label{
                padding: 10px;
                margin-top: 100px;
                font-size: 12px;
            }
            .search-btn{
                margin-left: 150px;
                margin-top: 60px;
            }
        } */
        /* @media (max-width: 425px) {
            .search-container {
                /* margin-left: 190px;
                width: 300px;
                height: 100px;
                margin-top: 50px;
                
            }
        } */
    </style>
</head>

<body>

    <?php include "header.php" ?>


    <section class="search">
        <div>

            <!-- <h2 style="color:red;">Search</h2> -->
            <form action="search.php" method="POST" class="search-container">
                <h2>Search</h2>
                <label>Search By First or Last Name / Year of Passing: </label>
                <input type="text" name="" id="" placeholder="">


                <br>
                <input type="submit" value="Show" class="search-btn">
            </form>

            <div class="results">
                <!-- The result data will be displayed here after search -->
                <?php
                if (isset($_GET['results'])) {
                    echo $_GET['results'];
                }
                ?>
            </div>
        </div>
    </section>
    <!-- <script src="script.js"></script> -->

    <?php include "footer.php" ?>
</body>

</html>