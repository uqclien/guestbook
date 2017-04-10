<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Entries</title>
</head>
<body>
@foreach($entries as $entry)
    <p>{{ $entry->name }}</p>
    <p>{{ $entry->message }}</p><hr />
@endforeach

{{ $entries->links() }}
</body>
</html>