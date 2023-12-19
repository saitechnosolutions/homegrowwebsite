<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non-Seamless-kit</title>

</head>
<body>
    <center>
        <form method="post" id="redirectForm" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction">
        <!--<form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> -->
            @csrf
            <input type="hidden" name="encRequest" value="{{ $encrypted_data }}">
            <input type="hidden" name="access_code" value="{{ $access_code }}">
        </form>
    </center>
    <script language='javascript'>document.redirect.submit();</script>
</body>
</html>