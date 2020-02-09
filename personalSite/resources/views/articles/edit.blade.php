@extends('layout')

@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
    .create(document.querySelector('.editor'))
    .catch(error=>{
        console.error(error);
    });                                             
</script>
@endsection

@section('content')

<h3>Form</h3>

<form method="POST" action="/articles/{{$article->id}}">
    @csrf
    @method('PUT')
    <div class="row gtr-uniform">
        <div class="col-12">
            <input type="text" name="title" id="title" placeholder="Title" value="{{$article->title}}"/>
            @error('title')
            <p>{{$errors->first('title')}}</p>
            @enderror
        </div>
        <div class="col-12">
            <textarea name="excerpt" placeholder="Excerpt" rows="6">{{$article->excerpt}}</textarea>
            @error('excerpt')
            <p>{{$errors->first('excerpt')}}</p>
            @enderror
        </div>


        <!-- Break -->
        <div class="col-12">
            <textarea name="body" class="editor" placeholder="Body" rows="6">{{$article->body}}</textarea>
            @error('body')
            <p>{{$errors->first('body')}}</p>
            @enderror
        </div>

        <!-- Break -->
        <div class="col-12">
            <label for="tags">Tags</label>
            <select name="tags[]" id="tag" multiple>
                @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>
        </div>

        <!-- Break -->
        <div class="col-12">
            <ul class="actions">
                <li><input type="submit" value="Save" class="primary" /></li>
                <li><input type="reset" value="Reset" /></li>
            </ul>
        </div>
    </div>
</form>
@endsection