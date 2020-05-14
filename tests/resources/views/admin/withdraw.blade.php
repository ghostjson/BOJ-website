@extends('admin.base')

@section('content')

    <section class="panel important urls" style="padding: 30px">
        <br>
        <h2>Withdrawal Requests</h2> <br>
        <table id="withdrawal-table" class="display" style="width:100%">
            <thead>
            <tr>
                <th>S.N</th>
                <th>Username</th>
                <th>Payment Method</th>
                <th>Target</th>
                <th>Amount</th>
                <th>Done</th>
            </tr>
            </thead>
            <tbody>
            {{-- $url[0]->urls  --}}

            <?php $i=1; ?>
            @foreach($with as $w)

                @if($w->status == 'pending')
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $w->name }}</td>
                    <td>{{ $w->type }}</td>
                    <td>{{ $w->target }}</td>
                    <td>{{ $w->amount }}</td>
                    <td> <a href="/admin/withdraws/done/{{ $w->id }}">Done</a></td>
                </tr>

                <?php $i++; ?>
                @endif
            @endforeach

            </tbody>
            <tfoot>
            <tr>
                <th>S.N</th>
                <th>Username</th>
                <th>Payment Method</th>
                <th>Target</th>
                <th>Amount</th>
                <th>Done</th>
            </tr>
            </tfoot>
        </table>
    </section>

    <script>
        $(document).ready(function() {
            $('#withdrawal-table').DataTable();
        } );
    </script>
@endsection
