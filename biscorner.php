<?php include 'menu.php'; ?>
<!-- Page Title -->
<div class="page-title" data-aos="fade">

<div class="container-fluid">
<div class="row">
<div class="col-12 p-0">
    <section class="inner-banner-section">
        <div class="container">
            <h1 class="banner-title">BIS CORNER</h1>
        </div>
    </section>
</div>
</div>
</div>
<nav class="breadcrumbs">
<div class="container">
  <ol>
    <li><a href="index.php">Home</a></li>
    <li class="vision">Information Corner</li> 
    <li class="vision">BISCorner</li> 
  </ol>
</div>
</nav>
</div><!-- End Page Title -->


<div class="container justify-content-center" data-aos="fade-up">
<div style="margin-top:-10px;"></div>


    <script>
        async function fetchData() {
            const formData = new FormData();
            formData.append('Instemailid', 'ks.giridharan@nitttrc.ac.in');
            formData.append('Loginid', 'bisscmd');
            formData.append('Loginpwd', 'SNr@12#$%&!Rk');

            try {
                const response = await fetch('https://www.services.bis.gov.in/php/BIS_2.0/dgdashboard/Standards_master/get_academic_dashboard_banner_scroll_items', {
                    method: 'POST',
                    body: formData
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }

                const result = await response.json();
                console.log(result);  // Log the result to understand its structure
                displayResult(result);
            } catch (error) {
                document.getElementById('result').textContent = 'Fetch error: ' + error.message;
            }
        }

        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        function displayResult(data) {
            const resultElement = document.getElementById('result');
            resultElement.innerHTML = ''; // Clear previous results

            // Extract the relevant data
            const items = data.banner_scroll_data || [];

            if (items.length > 0) {
                const table = document.createElement('table');
                table.className = 'table table-bordered';

                const thead = document.createElement('thead');
                const headerRow = document.createElement('tr');

                // Create table headers excluding 'id' and adding 'S.No'
                const headers = ['S.No', ...Object.keys(items[0]).filter(key => key !== 'id')];
                headers.forEach(key => {
                    const th = document.createElement('th');
                    th.scope = 'col';
                    th.style.fontWeight = 'bold';
                    th.textContent = capitalizeFirstLetter(key);
                    headerRow.appendChild(th);
                });

                thead.appendChild(headerRow);
                table.appendChild(thead);

                const tbody = document.createElement('tbody');

                items.forEach((item, index) => {
                    const row = document.createElement('tr');
                    const serialTd = document.createElement('td');
                    serialTd.textContent = index + 1; // Add S.No
                    row.appendChild(serialTd);

                    Object.keys(item).forEach(key => {
                        if (key !== 'id') { // Exclude 'id' column
                            const td = document.createElement('td');
                            td.textContent = item[key];
                            row.appendChild(td);
                        }
                    });
                    tbody.appendChild(row);
                });

                table.appendChild(tbody);
                resultElement.appendChild(table);
            } else {
                resultElement.textContent = 'No data available';
            }
        }

        window.onload = fetchData;
    </script>
<div class="container">
 
        <br/>
        <div id="result"></div>
    </div>


</div>
</div>
<p>&nbsp;</p><p>&nbsp;</p>
<br/>


</div>






<?php include 'footer.php'; ?>