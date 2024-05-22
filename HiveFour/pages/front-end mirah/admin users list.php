<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Hive4</title>
    <style>
        body{
            background-color: #E6DAD1;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0;
			padding: 0;    
        }
        #bar{
            width: 100%;
            background-color: #C7D8CF;
            border-radius: 30px;
            color: #8AB49C;
            padding-left: 10px;
            padding-right: 10px;
            margin-left: auto;
            margin-right: auto;
        }
        table{
            margin-left: auto;
            margin-right: auto;
        }
        .searchbar{
            height: 20px;
            
        }  
        input[type="text"] {
            width: 100%;
            height: 40px;
            padding: 5px;
            border: 1px solid #C7D8CF;
            background-color: #C7D8CF;
            border-radius: 50px;
            box-sizing: border-box;
            margin-bottom: 5px;
            padding-left: 10px;
        }
        .sIcon{
            border: 1px solid #C7D8CF;
            background-color: #C7D8CF;
        } 
        .sIcon:hover {
            opacity: 0.8;
        }
        #list{
            margin-left: auto;
            margin-right: auto;
            border-spacing: 10px;
            padding-left: 50px;
            background-color:#8AB49C;
            border-radius: 50px;  
            width: 800px;   
            color: #E6DAD1;
            font-size: 20px;
            text-align: left; 
        }
        #header{
            width:100%;
            background-image: url('header bg pattern.png');
            background-repeat: repeat;
            background-size: contain;
            background-color: #846228;
            padding-left:10px;	
            font-size:30px;	
            color:#E6DAD1;
        }
        a{
            text-align: center;
            color: #E6DAD1;
            text-decoration: none;
        }
        a:hover{
            color: #DE8E04;
        }
        .user:hover {
            opacity: 0.8;
        }

        .user:hover + p {
            display: block;
        }
    </style>
</head>
<body>
	<table id=header  border="0">
		<tr>
			<th style="padding-left: 20px;">
				<a href="admin view user details.php">
					USERS
				</a>
			</th>
			<th>
				<a href="admin product list.php">
					PRODUCTS
				</a>
			</th>
			<th>
				<a href="admin orders.php">
				ORDERS
				</a>
			</th>
			<td colspan=2><img src="design 1.png"  style="width:60px; height:60px;"></td>
			<th style="padding-left:60px;">
				<a href="admin dashboard.php">
					DASHBOARD
				</a>
			</th>
			<td>
				<a href="admin view account.php">
					<img src="user.png" style="width:71px; height:40px;" class="user">
				</a>
			</td>
		</tr>
	</table>
    <h1 style="text-align: center; color: #8AB49C;">SEARCH CUSTOMER</h1>
    <form id="searchForm" action="search users.php" method="get">
        <table style="width: 800px; border-spacing: 5px;" border="0">
            <tr>
                <td>
                    <table id="bar" border="0">
                        <tr>
                            <td style="text-align: center;">
                                    <input type="text" id="searchInput" name="query" placeholder="Insert product name" class="searchbar">
                            </td>
                            <td style="text-align: right;">
                                <button type="submit" class="sIcon"><img src="search.png" style="width: 22px; height: 22px;"></button>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
    <div id="searchResults"></div>
    <br>    
    <table id="list"border="0">
    <!-- template for how the list of users will look -->
        <tr >
            <td rowspan=2 style="width: 54px;"><img src="yawnzzn.png"></td>
            <td style="width: 80px;">username:</td>
            <td>yawnzzn</td>
            <td rowspan=2 style="width: 120px;">
                <a href="admin view user details.php"> 
                    <!-- link to specific user details -->
                    <b>view</b>
                </a>
            </td>
        </tr>
        <tr>
            <td style="width: 80px;">user ID:</td>
            <td>123456</td>
        </tr>
    </table>
    <br>
    <table id="list"border="0">
        <tr >
            <td rowspan=2 style="width: 54px;"><img src="mineji.png"></td>
            <td style="width: 80px;">username:</td>
            <td>mineji</td>
            <td rowspan=2 style="width: 120px;">
                <a href="admin view user details.php">
                    <b>view</b>
                </a>
            </td>
        </tr>
        <tr>
            <td style="width: 80px;">user ID:</td>
            <td>654321</td>
        </tr>
    </table>
    <br>
    <table id="list" border="0">
        <tr >
            <td rowspan=2 style="width: 54px;""><img src="for_everyoung10.png"></td>
            <td style="width: 80px;">username:</td>
            <td>for_everyoung10</td>
            <td rowspan=2 style="width: 120px;">
                <a href="admin view user details.php">
                    <b>view</b>
                </a>
            </td>
        </tr>
        <tr>
            <td style="width: 80px;">user ID:</td>
            <td>456123</td>
        </tr>
    </table>
    <br>
    <table id="list"border="0">
        <tr >
            <td rowspan=2 style="width: 54px;"><img src="hoonparker.png"></td>
            <td style="width: 80px;">username:</td>
            <td>hoonparker</td>
            <td rowspan=2 style="width: 120px;">
                <a href="admin view user details.php">
                    <b>view</b>
                </a>
            </td>
        </tr>
        <tr>
            <td style="width: 80px;">user ID:</td>
            <td>321654</td>
        </tr>
    </table>
    <script>
        document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        const query = document.getElementById('searchInput').value;

        // Make an AJAX request to fetch search results
        fetch('search.php?q=' + query)
            .then(response => response.json())
            .then(data => {
                // Display search results in the 'searchResults' div
                document.getElementById('searchResults').innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>