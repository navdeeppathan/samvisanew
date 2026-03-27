<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Payment Cancelled</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.card {
    background: #fff;
    padding: 40px;
    border-radius: 16px;
    text-align: center;
    max-width: 420px;
    width: 100%;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

.icon {
    width: 80px;
    height: 80px;
    background: #dc2626;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 32px;
    color: white;
}

h2 {
    margin: 0 0 10px;
    color: #1a4aab;
}

p {
    color: #555;
    font-size: 14px;
    margin-bottom: 25px;
}

.btn {
    display: inline-block;
    padding: 12px 24px;
    background: #dc2626;
    color: #fff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

.btn:hover {
    background: #b91c1c;
}
</style>
</head>

<body>

<div class="card">
    <div class="icon">✕</div>
    <h2>Payment Cancelled</h2>
    <p>Your payment was not completed.  
    You can try again anytime.</p>

    <a href="/" class="btn">Try Again</a>
</div>

</body>
</html>