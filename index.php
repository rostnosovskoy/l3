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
<!-- JSON example-->
<h2>Create Object from JSON String</h2>
<p id="demo">111</p>
<p id="demo1">111</p>
<p id="demo2">111</p>
<script>
    var con_el;
    var text = '{"employees":[' +
    '{"firstName":"John ", "lastName":"Doe" },'+
    '{"firstName":"Anna ", "lastName":"Smith" },'+
    '{"firstName":"Peter ", "lastName":"Jones" }]}';
    obj = JSON.parse(text);
    con_el = document.getElementById("demo");
    con_el1 = document.getElementById("demo1");
    con_el2 = document.getElementById("demo2");
    con_el.innerHTML = obj.employees[0].firstName + obj.employees[0].lastName;
    con_el1.innerHTML = obj.employees[1].firstName + obj.employees[1].lastName;
    con_el2.innerHTML = obj.employees[2].firstName + obj.employees[2].lastName;
</script>


</body>
</html>
