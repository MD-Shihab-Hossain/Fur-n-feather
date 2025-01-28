<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration Form</title>
    <script src="validation.js" defer></script>
</head>
<body>
    <h1>Customer Registration Form</h1>
    <form id="registrationForm" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <table>
            <tr>
                <td><label for="name">Name:</label></td>
                 <td><input type="text" id="name" name="name" maxlength="40" ></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" ></td>
             </tr>
            <tr>
                <td><label for="phone">Phone Number:</label></td>
                <td><input type="tel" id="phone" name="phone" ></td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><textarea id="address" name="address" ></textarea></td>
            </tr>
            <tr>
                <td><label for="nid">NID (Image):</label></td>
                <td><input type="file" id="nid" name="nid" ></td>
            </tr>
            <tr>
                 <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password" ></td>
            </tr>
            <tr>
                <td><label for="confirmPassword">Confirm Password:</label></td>
                 <td><input type="password" id="confirmPassword" name="confirmPassword" ></td>
            </tr>
            <tr>
                <td>Payment Method:</td>
                <td>
                    <input type="radio" id="bkash" name="paymentMethod" value="Bkash" >
                    <label for="bkash">Bkash</label>
                    <input type="radio" id="nagad" name="paymentMethod" value="Nagad">
                    <label for="nagad">Nagad</label>
                    <input type="radio" id="bank" name="paymentMethod" value="Bank">
                    <label for="bank">Bank</label>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" id="terms" name="terms" value="agree" ></td>
                <td><label for="terms">I agree to the terms and conditions</label></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Register</button></td>
            </tr>
        </table>
    </form>
    <p id="errorMessage" ></p>
    <script src="../js/myjs.js"></script>
</body>
</html>
