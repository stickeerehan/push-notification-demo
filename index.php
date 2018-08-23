<!DOCTYPE html>
<!--
Copyright 2014 Google Inc. All Rights Reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Sample illustrating the use of Push Messaging and Notifications.">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Push Messaging &amp; Notifications</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="../images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-title" content="Push Messaging and Notifications Sample">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon-precomposed" href="../images/apple-touch-icon-precomposed.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="icon" href="../images/favicon.ico">

    <!-- Include manifest file in the page -->
    <link rel="manifest" href="manifest.json">

</head>

<body>
<h1>Push Messaging &amp; Notifications</h1>

<p>Available in <a href="https://www.chromestatus.com/feature/5416033485586432">Chrome 42+</a> &amp; <a href="https://www.chromestatus.com/feature/5480344312610816">Chrome 42+</a></p>

<p>To use this sample please do the following:</p>

<ol>
    <li>Create a project in the <a href="https://console.firebase.google.com"  target="_blank">Firebase Developer Console</a>.</li>
    <li>Go to Settings (The cog near the top left corner), click the 'Cloud Messaging Tab'.</li>
    <li>Create a copy of [config.sample.js](config.sample.js) called config.js.</li>
    <li>Create a copy of [manifest.sample.json](manifest.sample.json) called manifest.json.</li>
    <li>Replace "&lt;Your Cloud Messaging API Key ...&gt;" in your new `config.js` file with your own API key from your new project on Firebase Developer Console.</li>
    <li>Replace "&lt;Your Cloud Sender ID ...&gt;" in your new `manifest.json` with your own sender ID from the Firebase Developer Console project.</li>
</ol>


<p>
    <button class="js-push-button" disabled>
        Enable Push Messages
    </button>
</p>

<br />
<br />

<h2>cURL Command to Send Push</h2>
<div class="js-curl-command"></div>

<script src="config.js"></script>
<script src="demo.js"></script>
<script src="main.js"></script>

</body>
</html>