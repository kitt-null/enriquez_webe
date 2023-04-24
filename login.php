<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" id="form">
        <div>
            <label for="username">username</label>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="username">
        </div>
        
        <div>
            <button>Log In</button>
        </div>
    </form>

    <script src="js/jquery.min.js"></script>
    <script>
        $('button').click(function(){
            $.ajax({
                url:'router/router.php?ref=login',
                data:$('#form').serialize(),
                type:'POST',
                beforeSend:function(){

                },
                success:function(e){
                    alert(e)
                    if(e == 'login successful'){
                        window.location.href = 'welcome.php';
                    }
                }
            })
        })
    </script>
</body>
</html>