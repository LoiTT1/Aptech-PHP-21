<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="w-50 mx-auto">
        <h1 class="text-center text-primary">EDIT</h1>
        <form action="{{ route('articles.update',$article->title_slug) }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="exampleInputEmail1">TITLE</label>
                    <input type="text" class="form-control" name="title" value="{{ $article->title }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="" rows="2" name="description">{!! $article->description !!} }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea class="form-control" id="ckeditor" rows="2" name="content">{!! $article->content !!}</textarea>
                </div>
            <button type="submit" class="btn btn-lg btn-success float-right">SUBMIT</button>
        </form>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>
</body>
</html>