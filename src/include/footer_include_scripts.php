
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="../dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="../dist/js/jquery.scrolla.min.js"></script>
    <script type="text/javascript" src="../dist/js/script.js"></script>
</body>
</html>
<?php
    /* Create HTML File */
    $path = $_SERVER['REQUEST_URI'];
    $file = basename($path);         // $file is set to "index.php"
    if (strpos($file, '.php') !== false) {
        $file = basename($path, ".php"); // $file is set to "index"
    }else{
        $file = "index";
    }
    $HtmlCode= ob_get_contents(); ob_end_flush();
    //print_r($HtmlCode);die;
    $fh=fopen("../html/".$file.".html",'w'); 
    fwrite($fh,$HtmlCode);
    fclose($fh);
    /* ---------------------------- */
?>