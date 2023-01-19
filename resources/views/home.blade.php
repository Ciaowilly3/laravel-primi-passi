<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PrimiPassi</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="css/style.css"> -->
    </head>
    <body class="bg-dark">
        <div class="container">
            <nav>
                <ul class="nav d-flex justify-content-center fs-4">
                    @foreach($lista as $link)
                        
                    <li class="nav-item"> <a class="nav-link" href="#">{{$link}}</a> </li>
                    @endforeach
                </ul>
            </nav>
            <h1 class="text-center text-primary mb-5">Home Page</h1>
            
        </div>
    </body>
</html>