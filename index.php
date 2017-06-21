<!DOCTYPE html>
<html>
<head>
    <title>TWR Trainer Airpot File Generator</title>
</head>
<body>
<h1>TWR Trainer Airport File Generator <small style="font-size: 13pt;"><a href="https://github.com/aaronosher/TWRTrainer-Airport-Generator">GitHub Link</a> | <a href="LICENSE">License</a></small></h1>
<form method="post" action="generate.php">
<h3>Aiport File Header Details</h3>
<b>ICAO: </b><input type="text" name="icao" maxlength="4"><br />
<b>Magnetic Variation: </b><input type="text" name="magneticVariation"><br />
<b>Field Elevation: </b><input type="text" name="fieldElevation" placeholder="Field Elevation (ft)"><br />
<b>Pattern Elevation: </b><input type="text" name="patternElevation" placeholder="Pattern Elevation (ft)"><br />
<b>Pattern Length: </b><input type="text" name="Pattern Length" placeholder="Nautical Miles (NM)"><br />
<b>Initial Climb (Props): </b><input type="text" name="initalClimbProps" placeholder="Initial Climb for Props (ft)"><br />
<b>Initial Climb (Jets): </b><input type="text" name="initalClimbJets" placeholder="Initial Climb for Jets (ft)"><br />
<b>Jet Airlines: </b><input type="text" name="jetAirlines" placeholder="Jet Airlines (seperate with commas)"><br />
<b>Turboprop Airlines: </b><input type="text" name="turbopropAirlines" placeholder="Turboprop Airlines (seperate with commas)"><br />
<b>Registration: </b><input type="text" name="registration" placeholder="Country Registration Prefix (N for USA)"><br />
<hr>
<b>Google Earth KML:</b><br>
<textarea name="kml" rows="20" cols="150"></textarea>
</form>
</body>
</html>