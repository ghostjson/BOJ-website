@extends('admin.base')

@section('content')

    <section class="panel important">
        <form action="/admin/website/edit/{{$id}}" method="post">

            {{ csrf_field() }}

            <div class="twothirds">
                <label for="name">Enter url</label>
                <input type="url" name="url" id="url" placeholder="www.example.com" value="{{$url->urls}}"/><br>
                <label for="name">Enter Reward</label>
                <input type="text" name="reward" id="reward" placeholder="1.5"  value="{{$url->reward}}"/>
                <div>
                    <input type="submit" value="Make Change" />
                </div>
            </div>
        </form>
    </section>


    <script>
        $(document).ready(function() {
            $('#url-table').DataTable();
        } );
    </script>
@endsection
