<html>
    <head>
        <script>
            document.write("Date and Time : "+Date() + "<br/>");

            </script>

</head>
<body>
    <?php 
    date_default_timezone_set("Asia/Calcutta");
    echo "date : ".date("d-m-y");
    echo "<br>";
;    echo "time : ".date("h:m:s");
    ?>
    </body>
</html>