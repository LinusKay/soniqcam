<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SmartHome</title>
    <script>
        window.onload = function() {
            initCamera();
        }

        function initCamera() {
            let sectionTitleElements = document.getElementsByClassName("sectiontitle");
            for(var i=0; i < sectionTitleElements; i++) {
                if(sectionTitleElements[i].innerHTML == "Cameras") {
                    focusCamera(sectionTitleElements[i].nextElementSibling.querySelector("p"));
                }
            }
        }

        function focusCamera(item) {
            let focusTitle = item.parentElement.getElementsByClassName("buttontitle")[0].innerHTML;
            let focusTitleElement = document.getElementById("focusTitle");
            focusTitleElement.innerHTML = focusTitle;
            console.log("a")

            let focusImage = item.alt;
            console.log(item.alt)
            let focusImageElement = document.getElementById("focusImage");
            focusImageElement.src = focusImage;
        }

        function toggleButton(button) {
            const buttonValue = button.value;
            let newButtonValue = "";
            if(buttonValue.includes("ON")) {
                newButtonValue = buttonValue.replace("ON", "OFF");
            }
            else {
                newButtonValue = buttonValue.replace("OFF", "ON");
            }
            button.value = newButtonValue;
        }
    </script>
</head>
<body>
    <h1 class="title">Home SmartPod</h1>
    <p class="usertitle">John Smith Smart Home</p>
    <div class="splitwrapleft">
        <div class="sectionwrap">
            <p class="sectiontitle">Lights</p>
            <div class="buttonwrap">
                <p class="buttontitle">Deck Lights</p>
                <input type="button" name="lightsDeck"      value="Deck Lights: ON"     onclick="toggleButton(this)">
            </div>
            <div class="buttonwrap">
                <p class="buttontitle">Porch Lights</p>
                <input type="button" name="lightsPorch"     value="Porch Lights: ON"    onclick="toggleButton(this)">
            </div>
            <div class="buttonwrap">
                <p class="buttontitle">Balcony Lights</p>
                <input type="button" name="lightsBalcony"   value="Balcony Lights: ON"  onclick="toggleButton(this)">
            </div>
        </div>

        <div class="sectionwrap">
            <p class="sectiontitle">Sensors</p>
            <div class="buttonwrap">
                <p class="buttontitle">Front Sensor</p>
                <input type="button" name="sensorFrontView"     value="View Sensor"         onclick="focusItem(this)">
                <input type="button" name="sensorfront"         value="Front Sensor: ON"    onclick="toggleButton(this)">
            </div>
            <div class="buttonwrap">
                <p class="buttontitle">Sideway Sensor</p>
                <input type="button" name="sensorSidewayView"   value="View Sensor"         onclick="focusItem(this)">
                <input type="button" name="sensorSideway"       value="Sideway Sensor: ON"  onclick="toggleButton(this)">
            </div>
            <div class="buttonwrap">
                <p class="buttontitle">Yard Sensor</p>
                <input type="button" name="sensorYardView"      value="View Sensor"         onclick="focusItem(this)">
                <input type="button" name="sensorYard"          value="Yard Sensor: ON"     onclick="toggleButton(this)">
            </div>
        </div>

        <div class="sectionwrap">
            <p class="sectiontitle">Cameras</p>
            <div class="buttonwrap">
                <p class="buttontitle">Entry Camera</p>
                <input type="button" name="cameraEntryView" value="View Camera"         alt="stream/camera_1_latest.jpg" onclick="focusCamera(this)" >
                <input type="button" name="cameraEntry"     value="Front Camera: ON"    onclick="toggleButton(this)">
            </div>
            <div class="buttonwrap">
                <p class="buttontitle">Yard Camera</p>
                <input type="button" name="cameraYardView"  value="View Camera"         alt="stream/camera_2_latest.jpg" onclick="focusCamera(this)" >
                <input type="button" name="cameraYard"      value="Yard Camera: ON"     onclick="toggleButton(this)">
            </div>
        </div>
    </div>
    <div class="splitwrapright">
        <div id="focusArea">
            <p id="focusTitle">0</p>
            <img src="media/offline.jpg" id="focusImage">
        </div>
    </div>
</body>
</html>