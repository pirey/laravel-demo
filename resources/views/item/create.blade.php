<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Item</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <h2>Create new item</h2>
    @if (session('message'))
        <div>{{ session('message') }}</div>
        <br />
    @endif
    <form method="POST" action="{{ url('items') }}">
        @csrf
        <div>
            <label for="name">Name</label>
            <br />
            <input type="text" name="name" value="" id="name">
        </div>
        <br />
        <div>
            <label>Category</label>
            <br />
            <select class="select2-item-category" name="item_category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <br />
        <div>
            <button>Submit</button>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script charset="utf-8">
        $(document).ready(function() {
            $('.select2-item-category').select2();
        });
    </script>
</body>
</html>
