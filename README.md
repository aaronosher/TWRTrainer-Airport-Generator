# TWRTrainer-Airport-Generator
Feel free to deploy this yourself or go to https://twr-trainer.aaronosher.io to use it.

## Preparation
In Google Earth make sure your coordinates are in decimal format

Create a folder structure similar to the one below.

## Guide
Runways and taxiways are paths

Stands are points

### Runways
Runways should be a path with the name <1st side>/<2nd side>. When creating the runway the path should go from the 1st side to the 2nd side.

Make sure to have a point at every intersection.

### Taxiways
Taxiways should be a path with the name being the taxiway identifier.

Make sure to have a point at every intersection.

### Stands
Stands should be a point with the name for the specific identifier.

### Using the tool
* Copy the root folder (KMDW in the example) and past it in the Googel Earht KML Field.
* Fill out the header fields the way you would in a file you make yourself. Check the TWR Trainer Docs for the syntax
* Click generate
* Edit the dispaced thresholds and default vacte sides in the generated file and save the .apt file

## Google Earth Structure
```
KMDW
├── Runways
│   ├── 22L/4R
│   ├── 22R/4L
│   ├── 31C/13C
│   ├── 31L/13R
│   └── 31R/13L
├── Stands
│   ├── A1
│   ├── A2
│   ├── A3
│   ├── A4
└── Taxiways
    ├── A
    ├── B
    ├── E
    ├── E1
    ├── E2
    ├── E3
    ├── F1
    ├── F2
    ├── F3
    ├── F4
```

## Issues
If you have any problems feel free to create an issue or a pull request. I do not plan to support this software beyond hosting it.
