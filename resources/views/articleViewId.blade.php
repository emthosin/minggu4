<html>
<body>
<h1 align = center>Ini adalah halaman data Artikel</h1><br>
    <table border = 1>
        <tr align = center>
            <td>ID</td>
            <td>Title</td>
            <td>Content</td>
            <td>Image</td>
            <td>Create At</td>
            <td>Update At</td>
        </tr>
        <tr align = center>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->content}}</td>
            <td>{{$article->image}}</td>
            <td>{{$article->created_at}}</td>
            <td>{{$article->updated_at}}</td>
        </tr>
    </table>
</body>
</html>