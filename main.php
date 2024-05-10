<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PC Builder</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">PC Builder</h1>
    <form action="insert.php" method="post">
        <div class="row">
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="processorDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        PROCESSOR
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="processorDropdown">
                        <li><button type="submit" class="dropdown-item" name="processor" value="Intel i5 12th gen - ₹11500">Intel i5 12th gen - ₹11500</button></li>
                        <li><button type="submit" class="dropdown-item" name="processor" value="Intel i3 10th gen - ₹8000">Intel i3 10th gen - ₹8000</button></li>
                        <li><button type="submit" class="dropdown-item" name="processor" value="Intel i9 14th gen - ₹30000">Intel i9 14th gen - ₹30000</button></li>
                        <li><button type="submit" class="dropdown-item" name="processor" value="Ryzen 5 H series - ₹22000">Ryzen 5 H series - ₹22000</button></li>
                        <li><button type="submit" class="dropdown-item" name="processor" value="Ryzen 5 U series - ₹15000">Ryzen 5 U series - ₹15000</button></li>
                        <li><button type="submit" class="dropdown-item" name="processor" value="Ryzen 7 U series - ₹18000">Ryzen 7 U series - ₹18000</button></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="ramDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        RAM
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="ramDropdown">
                        <li><button type="submit" class="dropdown-item" name="ram" value="Seagate 8gb - ₹5000">Seagate 8gb - ₹5000</button></li>
                        <li><button type="submit" class="dropdown-item" name="ram" value="Seagate 16gb - ₹9900">Seagate 16gb - ₹9900</button></li>
                        <li><button type="submit" class="dropdown-item" name="ram" value="Asus 16gb - ₹9000">Asus 16gb - ₹9000</button></li>
                        <li><button type="submit" class="dropdown-item" name="ram" value="Zeb 8gb - ₹5000">Zeb 8gb - ₹5000</button></li>
                        <li><button type="submit" class="dropdown-item" name="ram" value="Zeb 12gb - ₹8500">Zeb 12gb - ₹8500</button></li>
                        <li><button type="submit" class="dropdown-item" name="ram" value="Intel 16gb - ₹11000">Intel 16gb - ₹11000</button></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="motherboardDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Motherboards
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="motherboardDropdown">
                        <li><button type="submit" class="dropdown-item" name="motherboard" value="AsRock 1 - ₹5000">AsRock 1 - ₹5000</button></li>
                        <li><button type="submit" class="dropdown-item" name="motherboard" value="Asus - ₹5500">Asus - ₹5500</button></li>
                        <li><button type="submit" class="dropdown-item" name="motherboard" value="Zeb221 - ₹7000">Zeb221 - ₹7000</button></li>
                        <li><button type="submit" class="dropdown-item" name="motherboard" value="Nvidia - ₹8600">Nvidia - ₹8600</button></li>
                        <li><button type="submit" class="dropdown-item" name="motherboard" value="Samsung - ₹9500">Samsung - ₹9500</button></li>
                        <li><button type="submit" class="dropdown-item" name="motherboard" value="Nord - ₹11000">Nord - ₹11000</button></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="cabinetDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Cabinets
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="cabinetDropdown">
                        <li><button type="submit" class="dropdown-item" name="cabinet" value="Cabinet 1 - ₹5000">Cabinet 1 - ₹5000</button></li>
                        <li><button type="submit" class="dropdown-item" name="cabinet" value="Cabinet 2 - ₹5500">Cabinet 2 - ₹5500</button></li>
                        <li><button type="submit" class="dropdown-item" name="cabinet" value="Cabinet 3 - ₹7000">Cabinet 3 - ₹7000</button></li>
                        <li><button type="submit" class="dropdown-item" name="cabinet" value="Cabinet 4 - ₹8600">Cabinet 4 - ₹8600</button></li>
                        <li><button type="submit" class="dropdown-item" name="cabinet" value="Cabinet 5 - ₹9500">Cabinet 5 - ₹9500</button></li>
                        <li><button type="submit" class="dropdown-item" name="cabinet" value="Cabinet 6 - ₹11000">Cabinet 6 - ₹11000</button></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="psuDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        PSU
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="psuDropdown">
                        <li><button type="submit" class="dropdown-item" name="psu" value="PSU 1 - ₹5000">PSU 1 - ₹5000</button></li>
                        <li><button type="submit" class="dropdown-item" name="psu" value="PSU 2 - ₹5500">PSU 2 - ₹5500</button></li>
                        <li><button type="submit" class="dropdown-item" name="psu" value="PSU 3 - ₹7000">PSU 3 - ₹7000</button></li>
                        <li><button type="submit" class="dropdown-item" name="psu" value="PSU 4 - ₹8600">PSU 4 - ₹8600</button></li>
                        <li><button type="submit" class="dropdown-item" name="psu" value="PSU 5 - ₹9500">PSU 5 - ₹9500</button></li>
                        <li><button type="submit" class="dropdown-item" name="psu" value="PSU 6 - ₹11000">PSU 6 - ₹11000</button></li>
                    </ul>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
