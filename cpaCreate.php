<html>

<head>
    <title>hi</title>
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <?php require_once('partials/nav.php') ?>
    <br>
    <br>
    <br>
    <h2>CPA View</h2>
    <div id="signup">
        <form method="post" action="assets/regprocess.php" enctype="multipart/form-data">

            <div class="container">

                <input type="file" name="pic" accept="image/*">

                <br>
                <select name="services" title="Services Provided">
                    
                    <option value="services">Services Provided</option>

                    <option value="AssetProtection">Asset Protection</option>

                    <option value="Audits">Audits</option>

                    <option value="Bankruptcy">Bankruptcy</option>

                    <option value="Bookkeeping">Bookkeeping</option>

                    <option value="Business Planning">Business Planning</option>

                    <option value="Business Start-ups">Business Start-ups</option>

                    <option value="Business Valuations">Business Valuations</option>

                    <option value="Computer Consulting">Computer Consulting</option>

                    <option value="Consulting Services">Consulting Services</option>

                    <option value="Continuing Education">Continuing Education</option>

                    <option value="Corporate Taxes">Corporate Taxes</option>

                    <option value="Cost Accounting">Cost Accounting</option>

                    <option value="Elder Care">Elder Care</option>

                    <option value="Estate Planning">Estate Planning</option>

                    <option value="Estate Tax Returns">Estate Tax Returns</option>

                    <option value="Expatriate Tax">Expatriate Tax</option>

                    <option value="Fiduciary Accounting">Fiduciary Accounting</option>

                    <option value="Financial Management">Financial Management</option>

                    <option value="Financial Planning">Financial Planning</option>

                    <option value="Financial Statements">Financial Statements</option>

                    <option value="Foreign National Tax">Foreign National Tax</option>

                    <option value="Forensic Accounting">Forensic Accounting</option>

                    <option value="Fraud Prevention">Fraud Prevention</option>

                    <option value="Incorporation &amp; Dissolution">Incorporation &amp; Dissolution</option>

                    <option value="Incorporation Services">Incorporation Services</option>

                    <option value="Individual Taxation">Individual Taxation</option>

                    <option value="Insurance">Insurance</option>

                    <option value="International Taxation">International Taxation</option>

                    <option value="Internet/High Tech">Internet/High Tech</option>

                    <option value="Inventory">Inventory</option>

                    <option value="Investment Advisory">Investment Advisory</option>

                    <option value="Leasing/Asset Acquisition">Leasing/Asset Acquisition</option>

                    <option value="Litigation Support">Litigation Support</option>

                    <option value="Management Advisory">Management Advisory</option>

                    <option value="Marriage &amp; Divorce">Marriage &amp; Divorce</option>

                    <option value="Mergers &amp; Acquisitions">Mergers &amp; Acquisitions</option>

                    <option value="Partnership LLC/LLP">Partnership LLC/LLP</option>

                    <option value="Partnership Taxation">Partnership Taxation</option>

                    <option value="Payroll &amp; Sales Tax">Payroll &amp; Sales Tax</option>

                    <option value="Peer Review">Peer Review</option>

                    <option value="Pension &amp; Retirement">Pension &amp; Retirement</option>

                    <option value="Projections &amp; Forecasts">Projections &amp; Forecasts</option>

                    <option value="Small Business">Small Business</option>

                    <option value="Software Support">Software Support</option>

                    <option value="State Taxation">State Taxation</option>

                    <option value="Taxation-General">Taxation-General</option>

                    <option value="Trusts">Trusts</option>

                    <option value="Write Ups">Write Ups</option>

                </select>
                <br>

                <select name="industry" title="Industries Serviced">
                    <option value="">Industries Serviced</option>

                    <option value="Architects">Architects</option>

                    <option value="Arts &amp; Creative Services">Arts &amp; Creative Services</option>

                    <option value="Automotive">Automotive</option>

                    <option value="Banks">Banks</option>

                    <option value="Broker-Dealers">Broker-Dealers</option>

                    <option value="Casinos &amp; Gaming">Casinos &amp; Gaming</option>

                    <option value="Colleges &amp; Schools">Colleges &amp; Schools</option>

                    <option value="Computer Consulting">Computer Consulting</option>

                    <option value="Construction">Construction</option>

                    <option value="Credit Unions">Credit Unions</option>

                    <option value="Dentists &amp; Doctors">Dentists &amp; Doctors</option>

                    <option value="Electronic Commerce">Electronic Commerce</option>

                    <option value="Embroidery/Textiles">Embroidery/Textiles</option>

                    <option value="Entertainment">Entertainment</option>

                    <option value="Environmental Services">Environmental Services</option>

                    <option value="Equipment Leasing">Equipment Leasing</option>

                    <option value="Farming &amp; Agriculture">Farming &amp; Agriculture</option>

                    <option value="Financial Institutions">Financial Institutions</option>

                    <option value="Gas &amp; Oil">Gas &amp; Oil</option>

                    <option value="Government Center">Government Center</option>

                    <option value="Healthcare">Healthcare</option>

                    <option value="Homeowners Associations">Homeowners Associations</option>

                    <option value="Hotels/Motels">Hotels/Motels</option>

                    <option value="Imports/Exports">Imports/Exports</option>

                    <option value="Information Systems">Information Systems</option>

                    <option value="Insurance">Insurance</option>

                    <option value="Interior Design">Interior Design</option>

                    <option value="Internet">Internet</option>

                    <option value="Lawyers">Lawyers</option>

                    <option value="Leasing Companies">Leasing Companies</option>

                    <option value="Manufacturing">Manufacturing</option>

                    <option value="Mining">Mining</option>

                    <option value="Mortgage Banking">Mortgage Banking</option>

                    <option value="Not-For-Profit Organizations">Not-For-Profit Organizations</option>

                    <option value="Real Estate">Real Estate</option>

                    <option value="Restaurants">Restaurants</option>

                    <option value="Retail">Retail</option>

                    <option value="SEC-Public Companies">SEC-Public Companies</option>

                    <option value="Software Design">Software Design</option>

                    <option value="Technology">Technology</option>

                    <option value="Thoroughbreds">Thoroughbreds</option>

                    <option value="Transportation">Transportation</option>

                    <option value="Utilities">Utilities</option>

                    <option value="Wholesalers &amp; Jobbers">Wholesalers &amp; Jobbers</option>
                </select>
                <br>
                <label for="fn"><b>Full Name:</b></label><br>
                <input type="text" placeholder="John A Doe" name="fn" required>
                <br>
                <label for="zip"><b>Zip Code:</b></label><br>
                <input type="text" placeholder="Zip" name="zip" required>
                <br>
                <label for="email"><b>Email:</b></label><br>
                <input type="text" placeholder="JohnADoe@email.com" name="em" required>
                <br>
                <label for="username"><b>Username:</b></label><br>
                <input type="text" placeholder="Username" name="un" required>
                <br>
                <!--change password?-->
                <label for="psw"><b>Password:</b></label><br>
                <input type="password" placeholder="Password" name="pw" required>
                <br>
                <label for="psw-repeat"><b>Repeat Password:</b></label><br>
                <input type="password" placeholder="Repeat Password" name="pwr" required>
                <br>
                <textarea name="text" cols="50" rows="5" placeholder="Bio"></textarea>
                <br>
                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>
                <br>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <?php require_once('partials/footer.php') ?>
</body>

</html>
