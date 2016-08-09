<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>demo1</title>
    <script src="jquery.min.js"></script>



</head>
<body>
    <a href="#">我是a標籤</a>
    <p>sadsadsadsadsadsadsadsad</p>
    <script>
        /*
        var a = document.getElementsByTagName('a')[0];
        a.style.color="red";
        */


         var a = $('a');
         a.css('color','gray').click(function () {
         $(this).css('border','4px solid #38a38a');
         });

    </script>

</body>

</html>