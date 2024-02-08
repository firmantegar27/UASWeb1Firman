<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-...">

    {{-- <style>
        .container {
            max-width: 600px; /* Atur lebar maksimum container sesuai kebutuhan */
            margin: 0 auto; /* Memusatkan container di tengah halaman */
            padding: 20px; /* Menambahkan padding untuk memberikan ruang di sekitar elemen-elemen */
            background-color: brown;
        }
    
        /* ... tambahkan gaya lainnya sesuai kebutuhan ... */
    </style> --}}
    
</head>
<body>
    @include('partials.navbar')
    <div class="container" style="text-align: center; max-width: 600px; margin: 0 auto; padding-top: 100px;">

        <h2 for="Game" data-dev="{{ $game->dev }}" data-image="{{ $game->image }}">Top Up {{ $game->title }}</h2>
    
        <form id="topup-form" action="{{ route('submit-form') }}" method="post">
            @csrf
    
            <div style="margin-bottom: 10px;">
                <label for="email">Email (Opsional):</label>
                <input type="email" id="email" name="email">
            </div>
    
            <div style="margin-bottom: 10px; margin-left:89px;">
                <label for="uid">UID:</label>
                <input type="text" id="uid" name="uid">
            </div>
    
            <div style="margin-bottom: 10px; margin-left:40px; width: 500px;">
                <label for="topup_amount">Top Up Amount:</label>
                <select style="width: 190px;" name="topup_amount" id="topup_amount">
                    <option>Select an Amount</option>
                    @include('partials.optionsPC')
                </select>
            </div>
        
            <div style="margin-bottom: 10px; margin-right:4px">
                <label for="payment_method">Payment Method:</label>
                <select name="payment_method" id="payment_method">
                    <option>Select Payment Method</option>
                    <option>DANA</option>
                    <option>OVO</option>
                    <option>GOPAY</option>
                    <option>BCA</option>
                </select>
            </div>

            <button type="submit">Top Up</button>
        </form>
    </div>
     
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

<!-- resources/views/topup/form.blade.php -->
