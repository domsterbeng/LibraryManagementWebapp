<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <p style="font-size: 20px;text-align:center"><strong>ReadMore Admin Site</strong></p>
        <ul class="nav navbar-top-links navbar-right">
            <?php
                $ret1=mysqli_query($con,"select tbluser.FirstName,tblorderaddresses.ID,tblorderaddresses.Ordernumber from tblorderaddresses join tbluser on tbluser.ID=tblorderaddresses.UserId where tblorderaddresses.OrderFinalStatus is null");
                $num=mysqli_num_rows($ret1);
            ?> 
            
        </ul>
    </nav>
</div>