<!-- success.blade.php -->
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Display success message -->
    <p>Thank you for shopping with us.However,the transaction has been declined.</p>

    <!-- Add a link to go to the home page if $web is "web" -->
    <!--@if ($web == "web")-->
    <!--    <a href="/" style="background-color: #4CAF50;-->
    <!--        border: none;-->
    <!--        color: white;-->
    <!--        padding: 15px 32px;-->
    <!--        text-align: center;-->
    <!--        text-decoration: none;-->
    <!--        display: inline-block;-->
    <!--        font-size: 16px;-->
    <!--        margin: 4px 2px;-->
    <!--        cursor: pointer;">Go to Home</a>-->
    <!--@endif-->

    <!-- Display decrypted values in a table -->
    <table cellspacing="4" cellpadding="4">
        @for ($i = 0; $i < $dataSize; $i++)
            @php
                $information = explode("=", $decryptValues[$i]);
            @endphp
            <tr>
                <td>{{ $information[0] }}</td>
                <td>{{ $information[1] }}</td>
            </tr>
        @endfor
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire(
            {
                icon: "warning",
                title: "Aborted",
                text: "The transaction has been Aborted. Please try again.",
                showConfirmButton: false,
                timer: 1000
            }
        ).then((result) => {
            setTimeout(() => {
                console.log("hello");
                handleApp.postMessage('error');
            }, 1000)
        })
    </script>
</body>
</html>