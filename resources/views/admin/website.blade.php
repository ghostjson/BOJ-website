@extends('admin.base')

@section('content')

    <section class="panel important">
        <form action="#">
            <div class="twothirds">
                <label for="name">Enter url</label>
                <input type="url" name="url" id="url" placeholder="www.example.com" /><br>
                <label for="name">Enter Reward</label>
                <input type="text" name="reward" id="reward" placeholder="1.5" />
                <div>
                    <input type="submit" value="Submit" />
                </div>
            </div>

        </form>
    </section>

@endsection
