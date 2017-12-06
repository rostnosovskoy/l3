<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New document</title>
</head>
<body>
// JSON example
<h2>Create Object from JSON String</h2>
<p id="demo"></p>
<script>
    var text = '{"employees":[' +
    '{"firstName":"John", "lastName":"Doe" },'+;
    '{"firstName":"Anna", "lastName":"Smith" },'+;
    '{"firstName":"Peter", "lastName":"Jones" }]}';
    obj = JSON.parse(text);
    document.getElementById("demo").innerHTML = obj.employees[1].firstName + obj.employees[1].lastName;
</script>


</body>
</html>
