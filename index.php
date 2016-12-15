<?php

echo '<html>
<head>
<title>TSS TOOL</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>
<h1>TSS TOOL</h1>
<button>Save to JSON</button>
<button>E-mail me tdis interaction</button>
<input type="button" value="Clear all fields" onClick="window.location.reload()">
<h3>Client Interaction Information</h3>
<div ng-app="">
<table>
  <tr>
    <td>Start time:</td>
    <td><input type="text" ng-model="timestart"></td>
  </tr>
  <tr>
    <td>End time:</td>
    <td><input type="text" ng-model="timeend"></td>
  </tr>
  <tr>
    <td>Sensor #:</td>
    <td><input type="text" maxlengtd="4" ng-model="sensornumber"></td>
  </tr>
  <tr>
    <td>Client:</td>
    <td><input type="text" ng-model="clientname"></td>
  </tr>
  <tr>
    <td>Customer Name:</td>
    <td><input type="text" ng-model="customername"></td>
  </tr>
  <tr>
    <td>Ticket #:</td>
    <td><input type="text" ng-model="ticketnumber"></td>
  </tr>
  <tr>
    <td>Username:</td>
    <td> <input type="text" ng-model="username"></td>
  </tr>
  <tr>
    <td>Resolved?</td>
    <td><select ng-model="resolved"><option value="yes">Yes</option><option value="no">No</option></select></td>
  </tr>
</table>
<p>Webex/Phone Notes:</p>
<p><textarea style="font-family:Courier New;white-space:pre-wrap" ng-model="notes" cols="100" rows="4"></textarea></p>
</font>
<p>Action items:</p>
<p><textarea style="font-family:Courier New;white-space:pre-wrap" ng-model="actionitems" cols="100" rows="4"></textarea></p>

</br>

<hr>
<h3>E-mail Summary:</h3>
<p>Hello <span ng-bind="customername"></span>,
<p>It was good working with you today on Ticket #<span ng-bind="ticketnumber"></span>.
For your records, I have attached my notes from todays call.
<p><span style="font-family:Courier New;white-space:pre-wrap" ng-bind="notes"></span>
<p>Additionally, the following action items resulted from todays call:
<p><span style="font-family:Courier New;white-space:pre-wrap" ng-bind="actionitems"></span>


<p>Thank you again for your time. If you have any further questions, please contact the SOC. I have included their contact information, as well as my own, at the bottom of this e-mail.

<p>Regards,
<p><span ng-bind="myname"></span>
</br>eSentire Inc. 
</br>Endpoint Managed Detection and Response
</br>T +1 519.651.2200
</br>http://www.esentire.com 

<hr>



<h3>Ticket Summary:</h3>
Client: <span ng-bind="clientname"></span></br>
Sensor #: <span ng-bind="sensornumber"></span></br>
Sensor IP: </p>
<p>Notes:</p>
<p><span style="font-family:Courier New;white-space:pre-wrap" ng-bind="notes"></span>
<p>Action Items:</p>
<p><span style="font-family:Courier New;white-space:pre-wrap" ng-bind="actionitems"></span>


</div>

</body>
</html>
'

?>
