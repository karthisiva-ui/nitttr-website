<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directors and Chairmen</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            width: 200px;        /* Set the width of the image */
            height: 200px;      /* Set the height of the image */
            object-fit: cover;  /* Ensures the image covers the entire area without distortion */
            margin: 0 auto;     /* Centers the image horizontally */
        }
        
        .card {
            display: flex;       /* Use flexbox to center the content */
            justify-content: center;  /* Center content horizontally */
        }

        .card-body {
            text-align: center;  /* Center the text in the card body */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <h2>First Row Data</h2>
        <div class="col-md-12">
            <div class="row">
                <!-- First Row Data -->
                <div class="col-md-3 mb-4" id="first-row"></div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <h2>Second Row Data</h2>
        <div class="col-md-12">
            <div class="row">
                <!-- Second Row Data -->
                <div class="col-md-3 mb-4" id="second-row"></div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <h2>Third Row Data</h2>
        <div class="col-md-12">
            <div class="row">
                <!-- Third Row Data -->
                <div class="col-md-3 mb-4" id="third-row"></div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <h2>Fourth Row Data</h2>
        <div class="col-md-12">
            <div class="row">
                <!-- Fourth Row Data -->
                <div class="col-md-3 mb-4" id="fourth-row"></div>
            </div>
        </div>
    </div>
</div>

<script>
const first_row_data = [
    { designation: "Chariman, Board of Governor (BOG) and Director", img: "https://www.nitttrc.ac.in/uploads/bog_dir/09ede3b219bf950c23f25048cf677b1c__Chariman, Board of Governor (BOG) and Director.jpg", name: "Shri. G K Chandramani", year: "1967- 1968" },
    { designation: "Chariman, Board of Governor (BOG) and Director", img: "https://www.nitttrc.ac.in/uploads/bog_dir/999eee6fbf91e5b69f83ace367cfa287__Chariman, Board of Governor (BOG) and Director.png", name: "Shri. L.S. Chandrakant", year: "1968 -1973" },
    { designation: "Chariman, Board of Governor (BOG) and Director", img: "https://www.nitttrc.ac.in/uploads/bog_dir/4b17581fba78b911275f072b810aaabc__Chariman, Board of Governor (BOG) and Director.jpg", name: "Shri. H.S. Shahani", year: "1973-1978" },
    { designation: "Chariman, Board of Governor (BOG) and Director", img: "https://www.nitttrc.ac.in/uploads/bog_dir/134ef6f47f4804e3b748658c6904d569__Chariman, Board of Governor (BOG) and Director.jpg", name: "Shri. V. R. Deenadayalu", year: "1978-1983" },
    { designation: "Chariman, Board of Governor (BOG) and Director", img: "https://www.nitttrc.ac.in/uploads/bog_dir/4e42a6e52ce729843bbf407311126d21__Chariman, Board of Governor (BOG) and Director.jpg", name: "Shri. A. L. Mudaliyar", year: "1983 - 1988" },
    { designation: "Chariman, Board of Governor (BOG) and Director", img: "https://www.nitttrc.ac.in/uploads/bog_dir/5ff5a5a9fe7924ad1ae9914a3f35cfcf__Chariman, Board of Governor (BOG) and Director.jpg", name: "Dr. A P J Abdul Kalam", year: "1988-1992" },
    { designation: "Chariman, Board of Governor (BOG) and Director", img: "https://www.nitttrc.ac.in/uploads/bog_dir/eaa82d0ce20d8a86b7c6d93a89ce22be__Chariman, Board of Governor (BOG) and Director.png", name: "Shri. Pradip D Kothari", year: "1992-1997" },
    { designation: "Chariman, Board of Governor (BOG) and Director", img: "https://www.nitttrc.ac.in/uploads/bog_dir/35bd33b541d12ca7591cc8e6a6882308__Chariman, Board of Governor (BOG) and Director.jpg", name: "Shri. H S Chandrasekharaiah", year: "1997-1999" },
    { designation: "Chariman, Board of Governor (BOG) and Director", img: "https://www.nitttrc.ac.in/uploads/bog_dir/30a4ea08c863ca0beec7e87da926f0d9__Chariman, Board of Governor (BOG) and Director.jpg", name: "Shri. K.S Raju", year: "1999 - 2003" },
];

const second_row_data = [
    { designation: "Chairman BOG NITTTR", img: "https://www.nitttrc.ac.in/uploads/CHAIRMAN BOG/5f1f7688fd3edb559fbbfec7e0f48744__Chairman BOG NITTTR.jpg", name: "Shri. K.S Raju", year: "2003 - 2009" },
    { designation: "Chairman BOG NITTTR", img: "https://www.nitttrc.ac.in/uploads/CHAIRMAN BOG/3b3e323815e25bfedf45b1b01ac510ca__Chairman BOG NITTTR.jpg", name: "Dr. S R K Prasad", year: "2009 - 2014" },
    { designation: "Chairman BOG NITTTR", img: "https://www.nitttrc.ac.in/uploads/CHAIRMAN BOG/b77419529c58498cb4a9f8956e4f99c9__Chairman BOG NITTTR.jpg", name: "Prof. Dr. Allam Appa Rao", year: "2014 - 2019" },
    { designation: "Chairman BOG NITTTR", img: "https://www.nitttrc.ac.in/uploads/CHAIRMAN BOG/fc47c7655e470e021eb9e7fb2ccf33a0__.jpg", name: "Prof. V.S.S Kumar", year: "2019 - 2024" },
];

const third_row_data = [
    { designation: "Principal TTTI", img: "https://www.nitttrc.ac.in/uploads/principal tti/da37d4122ce966db0d243f634368a14f__Principal TTTI.jpg", name: "Prof. A. P. Jambulingam", year: "1964-1977" },
    { designation: "Principal TTTI", img: "https://www.nitttrc.ac.in/uploads/principal tti/a9895a69a6513529bbc807bed8329315__Principal TTTI.png", name: "Prof. M.A. Natarajan In-Charge", year: "1977- 1977" },
    { designation: "Principal TTTI", img: "https://www.nitttrc.ac.in/uploads/principal tti/820da0faa6d998a6be67e2a3e65a6e39__Principal TTTI.png", name: "Prof. T. Subba Rao", year: "1977-1992" },
    { designation: "Principal TTTI", img: "https://www.nitttrc.ac.in/uploads/principal tti/275e5e643d70698b04aa4ab0c50ff563__Principal TTTI.jpg", name: "Prof. V. M. Bansal", year: "1992-1997" },
    { designation: "Principal TTTI", img: "https://www.nitttrc.ac.in/uploads/principal tti/4fd41678ee9430d37b72d43c0814a479__Principal TTTI.jpg", name: "Prof. R. V. Sharma", year: "1997-2002" },
    { designation: "Principal TTTI", img: "https://www.nitttrc.ac.in/uploads/principal tti/f4c8254d58c41f6c5095c1385716cc36__Principal TTTI.jpg", name: "Prof. R. S. Gharpure", year: "2002-2008" },
    { designation: "Principal TTTI", img: "https://www.nitttrc.ac.in/uploads/principal tti/67bb799cb2f621c57a4c0070f55bde3d__Principal TTTI.jpg", name: "Prof. R. S. Prasad", year: "2008-2013" },
    { designation: "Principal TTTI", img: "https://www.nitttrc.ac.in/uploads/principal tti/1541f23bb3996368b95ca50b1af63c74__Principal TTTI.jpg", name: "Dr. S. P. Singh", year: "2013-2015" },
    { designation: "Principal TTTI", img: "https://www.nitttrc.ac.in/uploads/principal tti/4b68f6ba1603f504069dc071e2b8a2d6__Principal TTTI.jpg", name: "Prof. K. S. R. R. Prasad", year: "2015 - 2019" },
];

const fourth_row_data = [
    { designation: "Director, NITTTR", img: "https://www.nitttrc.ac.in/uploads/Director/4b7243da2c61da55e6fc4d40ec370fe4__Director, NITTTR.jpg", name: "Dr. P. P. S. Kumaran", year: "1988-1993" },
    { designation: "Director, NITTTR", img: "https://www.nitttrc.ac.in/uploads/Director/50008d4f37663c3d4b235c84715ed1ed__Director, NITTTR.jpg", name: "Dr. S. S. Harish", year: "1993-1998" },
    { designation: "Director, NITTTR", img: "https://www.nitttrc.ac.in/uploads/Director/1749c249118f9aa27c0d2a12b06ca396__Director, NITTTR.jpg", name: "Dr. K. S. Vishwanath", year: "1998-2003" },
    { designation: "Director, NITTTR", img: "https://www.nitttrc.ac.in/uploads/Director/05c9435a943d9d7e6d12c8430fc5b9cb__Director, NITTTR.jpg", name: "Dr. P. P. Thangaraj", year: "2003-2007" },
    { designation: "Director, NITTTR", img: "https://www.nitttrc.ac.in/uploads/Director/cb99d2c8da6e09a8820cc83a208d1879__Director, NITTTR.jpg", name: "Dr. K. S. Chandrasekaran", year: "2007-2012" },
    { designation: "Director, NITTTR", img: "https://www.nitttrc.ac.in/uploads/Director/90c682f35429f88b1d294881688bcba7__Director, NITTTR.jpg", name: "Dr. M. S. Asha", year: "2012-2019" },
    { designation: "Director, NITTTR", img: "https://www.nitttrc.ac.in/uploads/Director/fcc2f2300f64c66f0ab585768ee70e7e__Director, NITTTR.jpg", name: "Dr. S. Murugaiyan", year: "2019 - Present" },
];

// Function to create cards for a specific row
function createCards(rowData, rowId) {
    const rowContainer = document.getElementById(rowId);
    rowData.forEach(item => {
        const cardHTML = `
            <div class="card">
                <img src="${item.img}" class="card-img-top" alt="${item.name}">
                <div class="card-body">
                    <h5 class="card-title">${item.name}</h5>
                    <p class="card-text">${item.designation}</p>
                    <p class="card-text"><small class="text-muted">${item.year}</small></p>
                </div>
            </div>
        `;
        rowContainer.innerHTML += cardHTML;
    });
}

// Create cards for each row
createCards(first_row_data, "first-row");
createCards(second_row_data, "second-row");
createCards(third_row_data, "third-row");
createCards(fourth_row_data, "fourth-row");
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
