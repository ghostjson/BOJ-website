@extends('admin.base')

@section('content')

    <section class="panel important">
        <form action="/admin/website/add" method="post">

            {{ csrf_field() }}

            <div class="twothirds">
                <label for="name">Enter url</label>
                <input type="url" name="url" id="url" placeholder="www.example.com" /><br>
                <label for="name">Enter Reward</label>
                <input type="text" name="reward" id="reward" placeholder="1.5" />
                <div>
                    <input type="submit" value="Add a url" />
                </div>
            </div>
        </form>
    </section>

    <section class="panel important urls" style="padding: 30px">
        <br>
        <h2>Current Urls</h2> <br>
        <table id="url-table" class="display" style="width:100%">
            <thead>
            <tr>
                <th>S.N</th>
                <th>URL</th>
                <th>Reward</th>
                <th>Remove</th>
            </tr>
            </thead>
            <tbody>
                {{-- $url[0]->urls  --}}

                <?php $i=1; ?>
                @foreach($url as $u)

                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $u->urls }}</td>
                        <td>{{ $u->reward }}</td>
                        <td> <a href="/admin/website/edit/{{ $u->id }}">edit</a> / <a href="/admin/website/delete/{{ $u->id }}">delete</a></td>
                    </tr>

                    <?php $i++; ?>

                @endforeach

            </tbody>
            <tfoot>
            <tr>
                <th>S.N</th>
                <th>URL</th>
                <th>Reward</th>
                <th>Remove</th>
            </tr>
            </tfoot>
        </table>
    </section>

    <script>
        $(document).ready(function() {
            $('#url-table').DataTable();
        } );
    </script>
@endsection
