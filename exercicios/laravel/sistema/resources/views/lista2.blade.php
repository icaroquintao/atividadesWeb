<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Programação<b>WEB</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
           
                <li class="nav-item active">
                    <a class="nav-link" href="">Blade <span class="sr-only">(current)</span></a>
                </li>
              



            </ul>

        </div>
    </nav>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">

            <caption>Tabela 01</caption>

            <thead>

                <tr class="thead-dark">
                    <th>Dados</th>
                   
                </tr>
            </thead>

            <tbody>
                <tr class="table-primary">
                   <td> {{ 

                        $dados

                    }}
    </td>
                </tr>

             
            </tbody>

           

        </table>
    </div>

 


</body>
</html>