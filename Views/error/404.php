<html>
    <head>
    <title>Error 404</title>

    </head>
    <style>
        .class1 {
            position:absolute;
            margin-top: 18%; 
            margin-left: 45%; 
        }
        .class2 {
            position:absolute;
            margin-top: 21%; 
            margin-left: 43%; 
        }
        .class3 {
            position:absolute;
            margin-top: 23%; 
            margin-left: 36%; 
        }
        .class4 {
            position:absolute;
            margin-top: 28%; 
            margin-left: 45%; 
        }
        .class4 > a{
            color : black ;
        }
    body
    {
        background-color:#AB0000;
    }

    </style>

    <body>

            <h1 class="class1">Oops!</h1>

            <h2 class="class2">404 Not Found</h2>

            <div class="class3">Sorry, an error has occured, Requested page not found!</div>

            <div class="class4">
                <a href="<?=URL.'/index'?>">Take Me Home </a>
            </div>


    </body>
</html>