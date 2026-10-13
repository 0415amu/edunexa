
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add School | EduNexa</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 30px 16px;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #1f2937;
        }

        .container {
            max-width: 850px;
            margin: auto;
        }

        .header {
            margin-bottom: 24px;
        }

        .header a {
            color: #4f46e5;
            text-decoration: none;
        }

        .card {
            background: white;
            padding: 28px;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        label {
            font-size: 14px;
            font-weight: 600;
        }

        input, textarea, select {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font-size: 14px;
        }

        input:focus, textarea:focus, select:focus {
            outline: 2px solid #c7d2fe;
            border-color: #6366f1;
        }

        textarea {
            min-height: 85px;
            resize: vertical;
        }

        .actions {
            display: flex;
            gap: 12px;
            margin-top: 24px;
        }

        button, .cancel {
            padding: 11px 18px;
            border-radius: 7px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
        }

        button {
            background: #4f46e5;
            color: white;
            border: none;
        }

        .cancel {
            color: #374151;
            background: #e5e7eb;
        }

        .errors {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px 16px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        @media (max-width: 600px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .full-width {
                grid-column: auto;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <a href="{{ url('/company/dashboard') }}">← Back to Dashboard</a>
            <h1>Add New School</h1>
            <p>Register a school on the EduNexa platform.</p>
        </div>

        <div class="card">
            @if ($errors->any())
                <div class="errors">
                    <strong>Please correct the following errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('company.schools.store') }}">
                @csrf
                <div class="form-grid">
                    <div class="field">
                        <label for="name">School Name *</label>
                        <input id="name" type="text" name="name"
                            value="{{ old('name') }}" required>
                    </div>

                    <div class="field">
                        <label for="code">School Code *</label>
                        <input id="code" type="text" name="code"
                            value="{{ old('code') }}" required>
                    </div>

                    <div class="field">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email"
                            value="{{ old('email') }}">
                    </div>

                    <div class="field">
                        <label for="phone">Phone</label>
                        <input id="phone" type="text" name="phone"
                            value="{{ old('phone') }}">
                    </div>

                    <div class="field full-width">
                        <label for="address">Address</label>
                        <textarea id="address" name="address">{{ old('address') }}</textarea>
                    </div>

                    <div class="field">
                        <label for="city">City</label>
                        <input id="city" type="text" name="city"
                            value="{{ old('city') }}">
                    </div>

                    <div class="field">
                        <label for="state">State</label>
                        <input id="state" type="text" name="state"
                            value="{{ old('state') }}">
                    </div>

                    <div class="field">
                        <label for="pincode">Pincode</label>
                        <input id="pincode" type="text" name="pincode"
                            value="{{ old('pincode') }}">
                    </div>

                    <div class="field">
                        <label for="status">Status</label>
                        <select id="status" name="status">
                            <option value="1" selected>Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="actions">
                    <button type="submit">Save School</button>
                    <a class="cancel" href="{{ url('/company/dashboard') }}">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
