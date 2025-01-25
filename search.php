<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Search</title>
    <style>
        section.search {
            background-image: url(assets/images/banner3.jpeg);
            background-position: center center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 80px 0px 20px 0px;
        }

        .search-container1 {
            background-color: #fff;
            border-radius: 20px;
            padding: 70px;
            margin: 0 auto;
            max-width: 800px;
            margin-bottom: 20px;
        }

        .search-container {
            background-color: #fff;
            border-radius: 20px;
            padding: 70px;
            margin: 0 auto;
            max-width: 800px;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 250px;
            padding: 8px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .search-container h1 {
            text-align: center;
            font-family: 'Georgia', serif;
            margin-bottom: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        table {
            background-color: white;
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Get all details</h6>
                    <h2>ARAC Alumni’s Search Record</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Form -->
    <section class="search">
        <div class="search-container">
            <h1>ARAC Alumni's Search Record</h1>
            <form action="" method="GET">
                <div style="text-align: center;">
                    <input type="text" name="name" placeholder="Enter Name...">
                    <input type="text" name="year" placeholder="Enter Year of Passing...">
                    <button type="submit">Search</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Search Results -->
    <section class="search">

        <?php
        // Include database connection
        include "config.php";

        // Initialize variables
        $name = isset($_GET['name']) ? trim($_GET['name']) : '';
        $year = isset($_GET['year']) ? trim($_GET['year']) : '';

        if (!empty($name) || !empty($year)) {
            // Prepare SQL query
            $sql = "SELECT * FROM register WHERE 1=1";

            if (!empty($name)) {
                $sql .= " AND Name LIKE '%$name%'";
            }
            if (!empty($year)) {
                $sql .= " AND year = '$year'";
            }
            // Execute the query    
            $result = $conn->query($sql);
        ?>
            <div class="search-container1">
            <?php
            // Display results
            echo "<h2>Search Results </h2> <hr>";
            if ($result && $result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Name</th><th>Year of Passing</th><th>Course</th><th>Email</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['Name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['year']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Degree_completed']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p style='text-align: center; color: red;'>No records found.</p>";
            }
            // Close connection
            $conn->close();
        }
            ?>
            </div>
    </section>

    <?php include "footer.php"; ?>

</body>

</html>