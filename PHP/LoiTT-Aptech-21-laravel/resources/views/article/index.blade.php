<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>INDEX</title>
</head>
<body>
    <div class="w-75 mx-auto">
        <h1 class="text-center text-primary">ALL ARTICLES</h1>
        <div class="mb-2">
            <form action="{{ route('articles.create') }}">
                <button type="submit" class="btn btn-success btn-lg">ADD NEW ARTICLE</button>
            </form>
        </div>
            <table class="table table-hover table-dark">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <th>{{ $article -> title }}</th>
                            <td>{{ $article -> description }}</td>
                            <td>
                                <div class="d-flex">
                                        <form action="{{ route('articles.show',$article->title_slug) }}" method="GET">
                                                <button type="submit" class="btn-info btn-lg">SHOW</button>
                                            </form>
                                            <form action="{{ route('articles.edit',$article->title_slug) }}" method="GET">
                                                <button type="submit" class="btn-warning btn-lg">EDIT</button>
                                            </form>
                                            <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn-danger btn-lg">DELETE</button>
                                            </form>
                                </div>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
       </div>
</body>
</html>