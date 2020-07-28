<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Data Qualyt</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  style="margin-bottom: 40px;">
        <a class="navbar-brand" href="#">Data Qualyt</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav mr-auto">

            <li class="nav-item">
              <a class="btn btn-secondary btn-md " role="button" aria-pressed="true" href="{{route('interviewers.index')}}">
                  Entrevistadores
              </a>
            </li>

            <li class="nav-item">
              <a class="btn btn-secondary btn-md " role="button" aria-pressed="true" href="{{route('questionnaires.index')}}">
                  Questionários
              </a>
            </li>

            <li class="nav-item">
              <a class="btn btn-secondary btn-md " role="button" aria-pressed="true" href="{{route('questions.index')}}">
                  Perguntas
              </a>
            </li>
    
          </ul>
        </div>
      </nav>
    <div class="container">
        @yield('content') <!-- chamar con teudo da section das heranças -->
    </div>
</body>
</html>