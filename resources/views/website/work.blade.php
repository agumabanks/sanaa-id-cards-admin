@extends('layouts.app')
@section('content')
am work
<div class="p-12 max-w-2xl mx-auto m-8 bg-slate-200 rounded-md">
    <form method="POST" action="/upload2" enctype="multipart/form-data">
        @csrf
        <div class="m-2 p-2">
            <label >title</label>
            <input type="text" name='title' />
        </div>
        <div class="m-2 p-2">
                <label for="image">image</label>
                <input type="file" name="image"/>
        </div>
        <button type="submit" class="btn btn-primary w-24 mr-1 mb-2">Save</button>
     </form>
</div>
@endsection