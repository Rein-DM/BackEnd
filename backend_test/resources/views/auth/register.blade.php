<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group form-column">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                </div>
                <div class="form-group form-column">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group form-column">
                    <label for="telephone">Telephone</label>
                    <input type="number" name="telephone" id="telephone" class="form-control" value="{{ old('telephone') }}" required>
                </div>
                <div class="form-group form-column">
                    <label for="add1">Address 1</label>
                    <input type="text" name="add1" id="add1" class="form-control" value="{{ old('add1') }}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group form-column">
                    <label for="add2">Address 2</label>
                    <input type="text" name="add2" id="add2" class="form-control" value="{{ old('add2') }}" required>
                </div>
                <div class="form-group form-column">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group form-column">
                    <label for="state">State/Province</label>
                    <input type="text" name="state" id="state" class="form-control" value="{{ old('state') }}" required>
                </div>
                <div class="form-group form-column">
                    <label for="zip">Zip/Post Code</label>
                    <input type="number" name="zip" id="zip" class="form-control" value="{{ old('zip') }}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group form-column">
                    <label for="user">Username</label>
                    <input type="text" name="user" id="user" class="form-control" value="{{ old('user') }}" required>
                </div>
                <div class="form-group form-column">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group form-column-full">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>
