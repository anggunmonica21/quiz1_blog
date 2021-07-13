<!DOCTYPE html>
<html lang="en">
<head>
    <title>MY MEMORIES</title>
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
                <a href="index_admin.php"class="active">INPUT</a> 
            </li>
            
            <li>
                <a href="index_admin.php?page=input_kategori">KATEGORI</a> 
            </li>
            <li>
                <a href="index_admin.php?page=input_album">ALBUM</a>
            </li>
            
            <li>
                <a href="index_admin.php?page=input_photo">PHOTO</a>
            </li>
            
            <li>
                <a href="index_admin.php?page=input_post">POST</a>
            </li>
            
            <li>
                <a href="index_admin.php?page=data">CEK DATA</a>
            </li>
            <li>
                <a href="index_admin.php?page=edit.php"></a>
            </li>     
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main1.php ";
        }
        ?>
    </section>
    <footer>
        Copyright &copy; AnggunMonicaDewi(0702181078) 2021
    </footer>
    </main>
</body>
</html>