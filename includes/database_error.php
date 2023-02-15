<?php include 'includes/header.php'?>
<!-- the head section -->
<head>
    <title>Product Manager</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div class="container text-center mt-4">
        <main>
            <h1 class="error">Database Error</h1>
            <p>There was an error connecting to the database.</p>
            <p>The database must be installed as described in the appendix.</p>
            <p>Error message: <?php echo $error_message; ?></p>
            <p>&nbsp;</p>
        </main>
    </div>

<?php include 'includes/footer.php'?>
