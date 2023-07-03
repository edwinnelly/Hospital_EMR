<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://icdcdn.azureedge.net/embeddedct/icd11ect-1.1.css">
    <title>ECT v1.1</title>
</head>

<body>

<!-- input element used for typing the search  -->
<input type="text" class="ctw-input" autocomplete="off" data-ctw-ino="1">

<!-- div element used for showing the search results -->
<div class="ctw-window" data-ctw-ino="1"></div>


<!-- example of an extra input element for testing the Embedded Coding Tool select entity function -->
Selected code: <input type="text" id="paste-selectedEntity" value="">

<script src="https://icdcdn.azureedge.net/embeddedct/icd11ect-1.1.js"></script>
<script>
    // Embedded Coding Tool settings object
    // please note that only the property "apiServerUrl" is required
    // the other properties are optional
    const mySettings = {
        apiServerUrl: "http://mycontainerhost.com"
    };

    // example of an Embedded Coding Tool using the callback selectedEntityFunction
    // for copying the code selected in an <input> element and clear the search results
    const myCallbacks = {
        selectedEntityFunction: (selectedEntity) => {
        // paste the code into the <input>
        document.getElementById('paste-selectedEntity').value = selectedEntity.code;
    // clear the searchbox and delete the search results
    ECT.Handler.clear("1")
    }
    };

    // configure the ECT Handler with mySettings and myCallbacks
    ECT.Handler.configure(mySettings, myCallbacks);
</script>

</body>