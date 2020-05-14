@extends('admin.base')

@section('content')

    <section class="panel important">
        <form action="/admin/video/add/edit" method="post"  enctype="multipart/form-data" >

            {{ csrf_field() }}

            <div class="twothirds">
                <label for="name">Upload Video</label>
                <input type="file" accept="video/*" name="video" id="video"/><br>
                <label for="name">Enter Reward</label>
                <input type="text" name="reward" id="reward" placeholder="1.5" />
                <div>
                    <input type="submit" value="Add video" />
                </div>
            </div>
        </form>
    </section>
@endsection
