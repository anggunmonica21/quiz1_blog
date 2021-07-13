<!DOCTYPE html>
<html lang="en">
<head>
    <title>MEMORI FAMILY</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
    <header>
        <img src="assets/image/logo_memories.png" alt="IMG" id="gam">
        <h1 class="jumbotron">  </h1>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php"class="active">Home</a> 
            </li>
            <li>
            <a href="index.php?page=login">Login</a> 
            </li> 
            <li>
                <a href="index.php?page=edit.php"></a>
            </li>     
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main.php ";
        }
        ?>
    </section>
    <footer>
        Copyright &copy; AnggunMonicaDewi(0702181078) 2021
    </footer>
    </main>
</body>
</html>