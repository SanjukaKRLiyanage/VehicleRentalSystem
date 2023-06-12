<!DOCTYPE html>
<html>
<head>
    <link href="css/stylecoustermer.css" rel="stylesheet">
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
<body>
       <form method="post" action="datetime_post.php">
    <table border="0" style="width: 98%;">
        <tr>
            <td style="width: 50%;">
                <center>
                    <table border="0" style="width: 95%;">
                        <tr>
                            <td><label for="pickuplocation"><p class="bold-text">Pickup Location</p></label></td>
                        </tr>
                        <tr>
                            <td>
                                <div style="margin-right: 14px; margin-left: 14px;">
                                    <label for="pickuplocation"><p class="bold-text">Enter Pickup Location</p></label>
                                    <input type="text" id="pickuplocation" name="pickuplocation" placeholder="Enter Location..">
                                    <label for="pickupdate"><p class="bold-text">Pickup Date</p></label>
                                    <input type="date" id="pickupdate" name="pickupdate">
                                    <label for="pickuptime"><p class="bold-text">Pickup Time</p></label>
                                    <input type="time" id="pickuptime" name="pickuptime">
                                </div>
                            </td>
                        </tr>
                    </table>
                </center>
                <br><br>
                <center>
                    <table border="0" style="width: 95%;">
                        <tr>
                            <td><label for="returnlocation"><p class="bold-text">Return Location</p></label></td>
                        </tr>
                        <tr>
                            <td>
                                <div style="margin-right: 14px; margin-left: 14px;">
                                    <label for="returnlocation"><p class="bold-text">Enter Return Location</p></label>
                                    <input type="text" id="returnlocation" name="returnlocation" placeholder="Enter Location..">
                                    <label for="returndate"><p class="bold-text">Return Date</p></label>
                                    <input type="date" id="returndate" name="returndate">
                                    <label for="returntime"><p class="bold-text">Return Time</p></label>
                                    <input type="time" id="returntime" name="returntime">
                                </div>
                            </td>
                        </tr>
                    </table>
                </center>
                <br><br>
                <center>
                    <table border="0" style="width: 95%;">
                        <tr>
                            <td><label for="drivertype"><p class="bold-text">Driver</p></label></td>
                        </tr>
                        <tr>
                            <td>
                                <div style="margin-right: 14px; margin-left: 14px;">
                                    <label for="drivertype"><p class="bold-text">Select With Driver Or Without Driver</p></label>
                                    <select id="drivertype" name="drivertype">
                                        <option value="withdriver"><p class="bold-text">With Driver</p></option>
                                        <option value="withoutdriver"><p class="bold-text">Without Driver</p></option>  
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                </center>
                <br>
            </td>
            <td class="maintrc2" style="width: 50%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.8117167366645!2d79.9714414!3d6.9131022!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1686343917245!5m2!1sen!2slk" width="100%" height="770px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </td>
        </tr>
    </table>
    <input type="submit" value="Search For A Vehicle >">
</form>

</body>
</html>


