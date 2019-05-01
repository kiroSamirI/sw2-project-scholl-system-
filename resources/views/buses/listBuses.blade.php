@extends('AdminPanels.user')
@section('content')




    <link rel="stylesheet" href="table/css/style.css">

    <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /> <a class="button"><i class="fa fa-exclamation-circle"></i> Report Error</a>
    <section class="table-box">
        <table class="order-table">
            <thead>
                <tr>
                    <th>place</th>
                    <th>price</th>
                    <th>poke</th>
                </tr>
            </thead>
            <tbody>
            @foreach($buses as $bus)
                <tr>
                    <td>{{$bus->place}}</td>
                    <td>{{$bus->price}}</td>
                    <td><a href="/bus/{{$bus->id}}" class="btn btn-primary">poke </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>


    <!-- jQuery via Google's CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>



    <script  src="table/js/index.js"></script>


@endsection