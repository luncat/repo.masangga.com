<?php
    $dir = "files/";
    $blogpage = "http://siunus.blogspot.co.id/p/blog-page_17.html";
    if(isset($_FILES['file'])) {
        if($_FILES['file']['error'] > 0) {
            echo "
                <script>
                    window.alert('Error Code: " . $_FILES['file']['error'] . "');
                    window.location=('$blogpage');
                </script>
            ";
        } else {
            $file = $_FILES['file']['name'];
            if(file_exists($dir.$file)) {
                echo "
                    <script>
                        window.alert('$file already exists!');
                        window.location=('$blogpage');
                    </script>
                ";
            } else {
                move_uploaded_file($_FILES['file']['tmp_name'],$dir.$file);
                echo "
                    <script>
                        window.alert('$file uploaded!');
                        window.location=('$blogpage');
                    </script>
                ";
            }
        }
    } else {
        echo "LOL";
    }
?>
