
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
   <div class="wrapper">
        <header><h1>header</h1></header>
        <div class="content">
            <aside><h1>left</h1></aside>
            <content>
                <?php
                    //đổ dữ liệu của view trong MVC vào đây
                    echo $view;
                ?>

            </content>
        </div>
        <footer><h1>footer</h1></footer>
   </div>
   <style type="text/css">
        .wrapper{width: 1100px; margin:auto;}
        body,h1{padding: 0px; margin: 0px}
        header,footer{height: 100px; background: yellow;}
        .content{display: flex;}
        aside{width: 300px; height: 400px; background: green;}
        content{width: 800px; height: 400px;}
   </style>
</body>
</html>
