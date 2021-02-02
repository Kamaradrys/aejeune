<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Visiteurs</title>
    <style type="text/css">
        table{
            border-collapse: collapse;
            width: 100%;
        }
        .maclass th{
            color: #fff;
            background-color: orange;
            text-align: center;
            border: 1px solid rgba(32,32,32,0.5);
        }
        .maclass td{
            padding: 5px 10px;
            border: 1px solid rgba(32,32,32,0.5);
            text-align: center;
        }
        .table tr{
            width: 100%;
            border-collapse: none;
        }
        .table td{
            width: 50%;
            text-align: center;
        }
        .table{
            border: none;
        }
        .table td:nth-child(2){
            text-align: top;
        }
        .nomagent td{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid">        
                                 <table>
                                    <tr>
                                        <td><img src="{{ asset('image/mp1.png') }}" alt=""></td>
                                        <td><img style="padding-left: 50%" class="pt-4 mt-4" src="{{ asset('image/aej1.png') }}" alt="">
                                        </td>
                                    </tr>
                                 </table>                  
                                 <p class="text-center">
                                     <strong><u>Nom de l'agent</u></strong>:  {{ $user }}
                                 </p>
                                    <table class="maclass">
                                        <thead>  
                                            <tr>
                                                <th>N</th>
                                                <th>Noms</th>
                                                <th>Prenoms</th>
                                                <th>Sexes</th>
                                                <th>Structures</th>
                                                <th>Contacts</th>
                                                {{-- <th>Emails</th>--}}                <th>Objets</th>
                                                <th>Dates</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($visiteurs as $visiteur)
                                            <tr>
                                                <td>{{ $visiteur->id }}</td>
                                                <td>{{ $visiteur->nom }}</td>
                                                <td>{{ $visiteur->prenoms }}</td>
                                                <td>{{ $visiteur->sexe->name }}</td>
                                                <td>{{ $visiteur->structure }}</td>
                                                <td>{{ $visiteur->contacts }}</td>
                                                {{-- <td>{{ $visiteur->mail }}</td>--}}                                         <td>{{ $visiteur->objet->name }}</td>
                                                <td>{{ date_format($visiteur->created_at, 'd/m/Y').' à '.date_format($visiteur->created_at, 'H:i') }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
    </div>
    
</body>
</html>

