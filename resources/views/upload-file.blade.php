<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Upload File</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('js/upload-file.js') }}"></script>
</head>
<body>
    {{-- <form action="{{ route('upload_file') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="fileSubmit">
        <input type="submit" name="submit">
    </form> --}}
    <input type="file" name="file" id="fileSubmit" value="">
    <button id="submit-btn">Upload File</button>
</body>
</html>
