<table class="ui table single line scrolling">
    <thead>
    <tr>
        <th>Title</th>
        <th width="50%">Content</th>
        <th width="150">Category</th>
        <th width="150">Published Date</th>
        <th width="150">Very long column</th>
    </tr>
    </thead>
    <tbody>
    @foreach(range(1,30) as $item)
        <tr>
            <td>{{ $faker->sentence(10) }}</td>
            <td>{{ $faker->paragraph(3) }}</td>
            <td>Uncategorized</td>
            <td>{{ $faker->date('j F Y') }}</td>
            <td>{{ $faker->sentence(200) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
