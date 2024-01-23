<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,300;1,6..12,300&display=swap');

        * {
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'Nunito Sans', sans-serif;
            background-color: #F9F1F0;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        /* detail content */
        .container {
            width: 540px;
            margin-left: auto;
            margin-right: auto;
        }

        .card-menu {
            background-color: white;
            position: relative;
            margin-bottom: 15px;
        }

        .card-menu .btn-back {
            border: 1px solid #ccc;
            padding: 10px 15px;
            display: inline-block;
            border-radius: 50%;
            background-color: white;
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .card-menu img {
            width: 100%;
        }

        .card-body {
            padding: 15px;

        }

        .card-body .menu-name {
            font-size: 18px;
        }

        .card-body .menu-description {
            font-size: 14px;
            color: #282828;
            margin-bottom: 15px;
        }

        .card-body .menu-price {
            font-weight: bold;
        }

        .extra-menu {
            background-color: white;
            padding: 15px;
            margin-bottom: 15px;
        }

        .extra-menu h3 {
            margin-bottom: 8px;
        }

        .extra-menu ul {
            list-style: none;
        }

        .extra-menu ul li {
            padding: 5px 0;
            display: flex;
            justify-content: space-between;
        }

        .extra-menu ul li:not(:last-child) {
            border-bottom: 1px dashed;
        }

        @media (max-width: 768px) {
            .container {
                width: 100%;
            }
        }
    </style>

</head>

<body>
    <!-- detail content -->
    <div class="container">
        <div class="card-menu">

            <a href="index.php" class="btn-back"><i class="fa fa-arrow-left"></i></a>

            <img src="assets/img/produk/nasi.jpg" alt="">

            <div class="card-body">
                <div class="menu-name">nasi paket ayam gprek</div>
                <div class="menu-description">nasi + ayam + sambel + lalapan</div>
                <div class="menu-pricr">30.000</div>
            </div>
        </div>

        <div class="extra-menu">

            <h3>Menu Tambahan</h3>
            <ul>
                <li><span>Sambar Terasi</span>0</li>
                <li><span>Sambar Goreng</span>3.000</li>
                <li><span>Sambar Cabe Ijo</span>5.000</li>
                <li><span>Kerupuk Emping</span>2.000</li>
            </ul>
        </div>
    </div>
</body>

</html>