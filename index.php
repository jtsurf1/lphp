<html>
    <head>
        <title>Learning PHP</title>
        <style>
            p
            {
            text-align:justify;
            font-family:Georgia;
            }
        </style>
    </head>
    <body>
        <p>
            <script type="text/javascript">
                document.write("Hello World. Today is " + Date() );
            </script>
        </p>
        <?php
        
        // Show all information, defaults to INFO_ALL
        phpinfo();
        
        // Show just the module information.
        // phpinfo(8) yields identical results.
        phpinfo(INFO_MODULES);
        
        ?>
    </body>
</html>
