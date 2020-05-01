@extends('admin.base')

@section('content')

    <section class="panel important">

        <h2>Video Ad</h2>

        <form action="/admin/ads/video/update" method="post"  enctype="multipart/form-data" >

            {{ csrf_field() }}

            <div class="twothirds">
                <label for="name">Upload Video</label>
                <input type="file" accept="video/*" name="video" id="video"/><br>
                <div>
                    <input type="submit" value="Update Video Ad" />
                </div>
            </div>
        </form>

    </section>

    <section class="panel important">

        <h2>Banner Ad</h2>

        <form action="/admin/ads/banner/update" method="post"  enctype="multipart/form-data" >

            {{ csrf_field() }}

            <div class="twothirds">
                <label for="name">Upload Video</label>
                <input type="file" accept="image/*" name="image" id="image"/><br>
                <div>
                    <input type="submit" value="Update Banner Ad" />
                </div>
            </div>
        </form>

    </section>
@endsection
