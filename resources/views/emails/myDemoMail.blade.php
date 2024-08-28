{{-- <x-mail::message>
# Introduction

The body of your message.
{{$data}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
{{-- <h1>Notification for our coming event </h1>
<p>{{$data}}</p> --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Your CSS here */
    </style>
</head>
<body>
    <div style="font-family: 'Zawgyi-One', sans-serif; text-align: center;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxOBqdlPyiNan5mTcCJo5KxSTWmpO-evGxFw&s" alt="Donating with Devotion" />
        <h1>Donating with Devotion</h1>
        <h3>Donation Receipt</h3>
        <p>သင်၏လှူဒါန်းမှုအားကျေးဇူးတင်ပါသည်</p>
        <hr>
        <p><strong>Name:</strong> {{ $data->name }}</p>
       
        <hr>
        <p><strong>Date:</strong> {{ $data->created_at }}</p>
        <button>Download</button>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Receipt</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.receipt {
    width: 600px;
    background-color: #ffffff;
    padding: 20px;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.receipt-header {
    text-align: center;
    border-bottom: 2px solid #000;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.receipt-header h1 {
    margin: 0;
    font-size: 1.8em;
}

.receipt-header p {
    margin: 5px 0;
    font-size: 1em;
    color: #555;
}

.organization-info {
    text-align: center;
    margin-bottom: 20px;
}

.organization-info h2 {
    margin: 0;
    font-size: 1.4em;
}

.organization-info p {
    margin: 5px 0;
    font-size: 0.9em;
    color: #777;
}

.donor-info,
.donation-details {
    margin-bottom: 20px;
}

.donor-info h3,
.donation-details h3 {
    margin-bottom: 10px;
    font-size: 1.2em;
    color: #333;
}

.donor-info p,
.donation-details p {
    margin: 5px 0;
    font-size: 1em;
    color: #555;
}

.tax-info {
    text-align: center;
    margin: 20px 0;
    font-size: 0.9em;
    color: #777;
    border-top: 1px solid #ddd;
    padding-top: 10px;
}

.receipt-footer {
    text-align: center;
    font-size: 0.9em;
    color: #555;
}

.receipt-footer p {
    margin: 5px 0;
}

    </style>
</head>
<body>
    <div class="receipt">
        <header class="receipt-header">
            <h1>Donation Receipt</h1>
            <p>Thank you for your generous donation!</p>
        </header>
        <section class="organization-info">
            <h2>Religious Department Pyay</h2>
            <p>Marn Aung Street, Pyay</p>
            <p>Email: mora.pyay@gmail.com | Phone: (123) 456-7890</p>
        </section>
        <section class="donor-info">
            <h3>Donor Information</h3>
            <p>Name: {{$data->name}}</p>
            <p>Email: {{$data->email}}</p>
        </section>
        <section class="donation-details">
            <h3>Donation Details</h3>
            <p>Donation Amount: {{$amount}} Ks</p>
            <p>Donation Date: {{$data->created_at}}</p>
            
            {{-- <p>Donation Type: [One-time/Recurring]</p> --}}
        </section>
        
        <footer class="receipt-footer">
            <p>Thank you for supporting Religious Department Pyay and our mission.</p>
            <p>If you have any questions, please contact us at the details above.</p>
        </footer>
    </div>
</body>
</html>


