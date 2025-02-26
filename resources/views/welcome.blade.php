<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/product/create">create Product</>
    <table>
        <thead>
            <th>name</th>
            <th>description</th>
            <th>price</th>
            <th>action</th>
        </thead>
        <tbody id="tbody">

        </tbody>
            
            
    </table>

    <script>
        async function getproduct(){
            let products;
            await fetch('/products')
                  .then(res=>res.json())
                  .then(data=>{
                    console.log(data);
                    products= data;
                //    console.log(typeof(products));      
                  })
                  let tbody=document.getElementById('tbody');
                    // console.log(tbody);
                    
                        tbody.innerHTML='';
                    products.forEach(product => {
                        // console.log(p);
                        let row=document.createElement('tr');
                        row.innerHTML=`
                        
                            <tr>
                    <td>${product.name}</td>
                    <td>${product.description}</td>
                    <td>${product.price}</td>
                    <td>
                       <button onclick='deleteProduct(${product.id})' >delete </button>
                    </td>
                </tr>    
                    
                        `;
                        tbody.appendChild(row);

                        
                        
                    });

            
        }
    
        getproduct();


        async function deleteProduct(id) {
            await fetch(`deleteProduct/${id}`)
            getproduct();
        }
    </script>
</body>
</html>