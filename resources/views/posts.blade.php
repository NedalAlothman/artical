
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <style>
    /* Optional: CSS for table styling */
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
    <body>

        <h1>قائمة المقالات</h1>
        @if ($posts->count() > 0)
<table>
    <thead>
        <tr>
            <th>عنوان المقال</th>
            <th>تاريخ النشر</th>
            <th>محتوى المقال</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->created_at->format('Y-m-d') }}</td>
            <td>{{ $post->body }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>لا توجد مقالات حالياً.</p>
@endif
    
</body>
</html>
