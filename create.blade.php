<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add College</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/bg2.png') }}') no-repeat center center fixed;
            background-size: cover;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            width: 100%;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="form-container text-dark">
                    <h2 class="text-center mb-4">Add College</h2>
                    <form action="{{ route('colleges.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">College ID</label>
                            <input type="text" name="college_id" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">College Name</label>
                            <input type="text" name="college_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">College Code</label>
                            <input type="text" name="college_code" class="form-control" required>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ route('colleges.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-success">Save College</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>