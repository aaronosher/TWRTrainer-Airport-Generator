<?php

$kml = new SimpleXMLElement($_POST['kml']);

$kml = $kml->Document->Folder->Folder;

foreach ($kml as $folder)
{
    switch ($folder->name) {
        case 'Runways':
            $runways = $folder->Placemark;
            break;

        case 'Taxiways':
            $taxiways = $folder->Placemark;
            break;

        case 'Stands':
            $stands = $folder->Placemark;
            break;
        
        default:
            die($folder->name . " is not a valid folder name. Expecting 'Runways', 'Taxiways', and 'Stands'");
            break;
    }
}

Header("Content-Type: text/plain");
Header("Content-Disposition: attachment; filename=" . $_POST['icao'] . ".apt");

echo "icao=" . $_POST['icao'] . "\n";
echo "magnetic variation=" . $_POST['magneticVariation'] . "\n";
echo "field elevation=" . $_POST['fieldElevation'] . "\n";
echo "pattern elevation=" . $_POST['patternElevation'] . "\n";
echo "pattern size=" . $_POST['patternLength'] . "\n";
echo "initial climb props=" . $_POST['initalClimbProps'] . "\n";
echo "initial climb jets=" . $_POST['initalClimbJets'] . "\n";
echo "jet airlines=" . $_POST['jetAirlines'] . "\n";
echo "turboprop airlines=" . $_POST['turbopropAirlines'] . "\n";
echo "Registration=" . $_POST['registration'] . "\n\n";

foreach ($stands as $stand)
{
    echo "[PARKING " . $stand->name . "]\n";
    echo $stand->LookAt->latitude . " " . $stand->LookAt->longitude . "\n\n";
}

foreach ($runways as $runway)
{
    echo "[RUNWAY " . $runway->name . "]\n";
    echo "displaced threshold=0/0\n";
    echo "turnoff=\n";
    $coordinates = explode(" ", trim($runway->LineString->coordinates));
    foreach ($coordinates as $coordinate)
    {
        $seprateCoordinate = explode(",", $coordinate);
        $latitude = $seprateCoordinate[1];
        $longitude = $seprateCoordinate[0];
        echo $latitude . " " . $longitude . "\n";
    }
    echo "\n";
}

foreach ($taxiways as $taxiway)
{
    echo "[TAXIWAY " . $taxiway->name . "]\n";
    $coordinates = explode(" ", trim($taxiway->LineString->coordinates));
    foreach ($coordinates as $coordinate)
    {
        $seprateCoordinate = explode(",", $coordinate);
        $latitude = $seprateCoordinate[1];
        $longitude = $seprateCoordinate[0];
        echo $latitude . " " . $longitude . "\n";
    }
    echo "\n";
}
