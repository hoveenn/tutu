<?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
 
            switch ($page) {
                case 'home':
                include "home.php";
                break;
                case 'about':
                include "about.php";
                break;
                case 'contact':
                include "contact.php";
                break;          
            }
        }
else{
            include "home.php";
        }
        ?>
 
    </div>
    <footer>
        &copy Copyright Niagahoster 2021 | Web Hosting Terbaik Indonesia
    </footer>
</body>
</html>