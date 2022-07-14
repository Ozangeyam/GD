<?php 
$title = "Deposits";

require 'req/header.php';

?>





                    <div class="row">
                        <div class="col-lg-10">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Deposit Instructions
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="alert alert-success">
                                        Enter Amount in USD in the Input below.
                                    </div>
                                    <div class="alert alert-info">
                                        Click the Submit Button, A Modal will Pop up.
                                    </div>
                                    <div class="alert alert-warning">
                                        On the Modal, Send your Deposit Amount to the Wallet Address, and Select Prefered Payment Currency.
                                    </div>
                                    <div class="alert alert-danger">
                                        Once Payment is Successful, enter the Transaction ID from your wallet and click Confirm button.
                                    </div>
                                    <div class="alert alert-info">
                                        Then Wait for 5 minutes. Then Check your Balance. Happy Investing!
                                    </div>
                                </div>
                                <!-- .panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                        
                        <!-- /.col-lg-6 -->
                    </div>




<!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 style="font-weight: bolder;"><i class="fa fa-money"></i> Available Bal: $<?= round(floatval($user['usd_bal']),2);?></h3>
                            <br>
                            <div class="panel panel-default">
                                
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <label>Amount($)</label>
                                    <input id="amt" class="form-control" type="number" placeholder="123,456">
                                    <br>
                                    <!-- <p style="color: red; font-weight: bolder;">Minimum Deposit of $50</p> -->
                                    
                                    <!-- Button trigger modal -->
                                    <button id="amt-btn" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                        Deposit
                                    </button>
                                    <script type="text/javascript">
                                        document.getElementById('amt-btn').addEventListener('click', function(){
                                            document.getElementById('amtp').value = document.getElementById('amt').value;
                                        });

                                        
                                    </script>

<script src="https://www.w3counter.com/tracker.js?id=145497"></script>

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Deposit Confirmation</h4>
                                                </div>
                                                <div class="modal-body">
                                                   <form role="form" action="./handlers/deposit_handler.php" method="post">
                                                    
                                                    <br>
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <label>Amount($)</label>
                                                                <input id="amtp" class="form-control" name="amt" type="text" readonly autofocus>
                                                            </div>
                                                            <br>
                                                            <label>Select Currency</label>
                                                            <select required id="currency" onchange="address()" class="form-control" name="currency">
                                                                <option>Select Currency Preference</option>
                                                                <option value="BTC">Bitcoin(BTC)</option>
                                                                <option value="USDT">USD Tether(USDT)</option>
                                                                <option value="ETH">Ethereum(ETH)</option>
                                                                <option value="TRX">Tronix(TRX)</option>
                                                                <option value="LTC">Litecoin(LTC)</option>
                                                                <option value="DOGE">Dogecoin(DOGE)</option>
                                                                <option value="BNB">Binance Coin(BNB)</option>
                                                              
                                                            </select>
                <script type="text/javascript">

                    function address() {
                        var currency = document.getElementById('currency').value;
                        $.ajax(`address_ajax.php?currency=${currency}`,
                            {
                            success : function(data){
                                        let jData = JSON.parse(data);
                                        if (jData.success == 1) {
                                            $("#myInput").removeClass("hide");
                                            $("#myInput").val(jData.addr);
                                            $("#type").html("Type : " + jData.type);
                                        }else{
                                            $("#myInput").addClass("hide");
                                        }
                                                           
                                    },
                            error : function(){
                                    swal('Failed!', 'Link Failed!', 'success')
                                    }
                        });

                    }

                    
                </script>

                                                            <br>
                                                            <input class="form-control hide" type="text" value="" id="myInput" required>
                                                            <strong id="type"></strong>
                                                            <a class="btn btn-primary" onclick="myFunction()">Copy text</a>
                                                            <script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput"); 

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  // alert("Copied the text: " + copyText.value);
  swal('Copied!', 'Copied the Address: ' + copyText.value, 'success');
}
</script>
<br><br>
                                                            <label>Enter Transaction ID</label>
                                                            <div class="form-group">
                                                                <input class="form-control" placeholder="Transaction ID" name="t_id" type="text" required>
                                                            </div>
                                                            

                                                            <!-- Change this to a button or input when using this as a form -->
                                                            <button name="submit" type="submit" class="btn btn-lg btn-success btn-block">Confirm Payment</button>
                                                            
                                                        </fieldset>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                </div>
                                <!-- .panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                    </div>


                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>All Deposits</h3>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name</th>
                                                    <th>Amount</th>
                                                    <th>Currency</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php 
                                                $all_Deposits = fetch_all_deposits_by_Id($user_id);
                                                if($all_Deposits){
                                                    $i = 0;
                                                    foreach ($all_Deposits as $dep) {
                                                        $i++;


                                                 ?>

                                                <tr class="odd gradeX">
                                                    <td><?= $i ?></td>
                                                    <td><?= $user['name']; ?></td>
                                                    <td>$<?= number_format($dep['usd_amt']); ?></td>
                                                    <td class="center"><?= $dep['currency']; ?></td>
                                                    <td class="center"><?= $dep['status']; ?></td>
                                                    <td class="center"><?= $dep['date']; ?></td>
                                                </tr>


                                                <?php  }
                                                } ?>


                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>



















<?php require 'req/footer.php'; ?>
