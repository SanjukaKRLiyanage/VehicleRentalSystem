<!DOCTYPE html>
<html>
<head>
    <link href="css/stylecoustermer.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">



input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 18px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #af09eb;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 12px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #de31f5;
}

.containerco {
  border-radius: 17px;
  background-color: #f2f2f2;
  padding: 70px;
  margin: 26px;
}


</style>
</head>
<body><br>
    <table border="0" class="maintblc" style="width: 100%; height: 100%;" >
        <tr>
            <td colspan="2" class="maintrc1">
                <center>
                <table border="0" style="width: 100%; ">
                    <tr>
                        <td style="width: 25%; border-radius: 80px;" class=" clicked">
                        <center><a href=""><a href="datetime.php" target="iframe_b"><button class="circle-buttonc">1</button><br>Date & location</a>
                        </center>
                        </td>
                        <td style="width: 25%; border-radius: 80px;" class="">
                        <center><a href="selectvehicle.php" target="iframe_b"><button class="circle-buttonc">2</button><br>Search For A Vehicle</a></center>
                        </td>
                        <td style="width: 25%; border-radius: 80px;">
                        <center><a href="payment.php" target="iframe_b"><button class="circle-buttonc">3</button><br>Payment</a></center>
                        </td >
                        <td style="width: 25%; border-radius: 80px;">
                        <center><a href="bookingsummary.php" target="iframe_b"><button class="circle-buttonc">4</button><br>Booking Summery</a></center>
                        </td>
                </tr>
                    
        <tr>
            <td class="maintrc2" style="width: 100%;" colspan="4">
                <center>
                <iframe src="datetime.php" name="iframe_b" height="840px" width="100%" title="Iframe Example"></iframe>
                 </center>
                 <br>
            </td>

        </tr>
    </table>
    <script type="text/javascript">
        function changeColor(td) {
  td.classList.toggle('clicked');
}
    </script>
</body>
</html>


