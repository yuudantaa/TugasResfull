<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <title></title>
    <script type="text/javascript" language="javascript">
    function getBuku(){
        let xhr=new XMLHttpRequest();
        xhr.open("GET","http://https://localhost:7030/api/books/");
        xhr.onload=function(){
            let table=document.getElementById("OutputTable");
            let data = JSON.parse(xhr.responseText);
        }
                data.forEach(function(item){
                    var row =document.createElement("tr");
                    var id=document.createElement("td");
                    id.textContent=item.id;
                    row.appendChild(id);

                    var name=document.createElement("td");
                    Name.textContent=item.Name;
                    row.appendChild(name);

                    var price=document.createElement("td");
                    price.textContent=item.Price;
                    row.appendChild(price);

                    var category=document.createElement("td");
                    category.textContent=item.Category;
                    row.appendChild(category);
                    table.appendChild(row);
                });
            };
            xhr.send();
        }
</body>
</html>