<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Payroll | Other Income</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<!-- Google Font -->
<link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <h1>Income Sources <small>Other Income</small> </h1>
        <ol class="breadcrumb">
          <li><a href="../home.html"><i class="fa fa-cogs"></i> Home</a></li>
          <li><a href="#">Income Sources</a></li>
          <li class="active">Other Income</li>
        </ol>
      </div>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="container">
      <div class="box-body">
        <form id="calculate_tax" > <!-- method="post" action="{{action('TaxController@calculateTax')}}"-->
            {{csrf_field()}}
          <table class="table table-bordered table-responsive" style="padding:10px">
            <tbody>
              <tr>
                <td colspan="3" bgcolor="#dd4a38"style="color:white"><h4>Salary Income</h4></td>
              </tr>
              <tr>
                <td> Salary From Company <span class="pull-right-container"> <span class="label label-primary">April 18 to March 19</span> </span></td>
                <td><input type="number" min="0" class="form-control" value="600000" name="ihs_salary" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#CCCCCC"><label>Less: Section 10(i)</label></td>
              </tr>
              <tr>
                <td> Standard Deduction for Salaried & Pensioner</td>
                <td><input type="number" min="0" class="form-control" value="50000" name="ihs_deduction" placeholder=""></td>
                <td></td>
              </tr>
              <tr>
                <td> Profession Tax</td>
                <td><input type="number" min="0" class="form-control" value="2500" name="ihs_pt" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> House Rent Allowance</td>
                <td><input type="number" min="0" class="form-control" value="66000" name="ihs_hra" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td><label>Total Income under the head salaries</label></td>
                <td></td>
                <td id="iuhs" >0</td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#dd4a38" style="color:white"><h4>Income from Profession</h4></td>
              </tr>
              <tr>
                <td> Net Income From Profession</td>
                <td><input type="number" min="0" class="form-control" value="412000" name="income_from_profession" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#dd4a38" style="color:white"><h4>Income from Rent</h4></td>
              </tr>
              <tr>
                <td> Rent Received for the Year</td>
                <td><input type="number" min="0" id="income_from_rent" class="form-control" value="252000" name="income_from_rent" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#CCCCCC"><label>Less: Deduction</label></td>
              </tr>
               <tr>
                <td> Standard Deduction @ 30% (u/s 24a)</td>
                <td><input id="standard_deduction" type="number" min="0" class="form-control" readonly name="standard_deduction" placeholder=""></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#CCCCCC"><label>Less: Exemption on Home Loan Interest (Sec 24)</label></td>
              </tr>
              <tr>
                <td> Home Loan Interest</td>
                <td><input type="number" min="0" class="form-control" readonly name="" value="200000" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td><label>Total Rent Income</label></td>
                <td></td>
                <td id="tri">0</td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#dd4a38" style="color:white"><h4>Income from Other Source</h4></td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#CCCCCC"><label>Interest received from following Investments</label></td>
              </tr>
               <tr>
                <td> Bank (Saving/FD/Rec)</td>
                <td><input type="number" min="0" class="form-control" value="0" name="ios_bank" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> Post Office Recring Deposit(5 Years)</td>
                <td><input type="number" min="0" class="form-control" value="0" name="ios_po_rd" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> N.S.C.(assured/Rec)</td>
                <td><input type="number" min="0" class="form-control" value="0" name="ios_nsc" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td>Post Office M.I.S (6 years)</td>
                <td><input type="number" min="0" class="form-control" value="0" name="ios_po_mis" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td><label>Total Income From The Other Source</label></td>
                <td></td>
                <td id="infos">0</td>
              </tr>
              <tr>
                <td><label>Gross Total Income</label></td>
                <td></td>
                <td id="gti_sum">0</td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#dd4a38" style="color:white"><h4>Deduction</h4></td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#CCCCCC"><label>Less: Deduction under Sec 80C (Max Rs.1,50,000/-)</label></td>
              </tr>
               <tr>
               
                <td> EPF & VPF Contribution</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d80_epf" placeholder="Enter ..."></td>
                <td></td>
              </tr>
               <tr>
                <td> Public Provident Fund (PPF)</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d80_ppf" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> Senior Citizen’s Saving Scheme (SCSS)</td>
                <td><input type="number" min="0" class="form-control" value="39600" name="d80_scss" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> D. N.S.C (Investment + accrued Interest before Maturity Year)</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d80_nsc" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td>Tax Saving Fixed Deposit (5 Years and above)</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d80_ts_fd" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> Tax Savings Bonds</td>
                <td><input type="number" min="0" class="form-control" value="25500" name="d80_ts_bond" placeholder="Enter ..."></td>
                <td></td>
              </tr>
               <tr>
                <td>  E.L.S.S (Tax Saving Mutual Fund)</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d80_mf" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> Life Insurance Premiums</td>
                <td><input type="number" min="0" class="form-control" value="38167" name="d80_lip" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> New Pension Scheme (NPS) (u/s 80CCC)</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d80_nps" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td>Pension Plan from Insurance Companies/Mutual Funds (u/s 80CCC)</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d80_pp" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> 80 CCD Central Govt. Employees Pension Plan (u/s 80CCD)</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d80_80ccd" placeholder="Enter ..."></td>
                <td></td>
              </tr>
               <tr>
                <td> Housing. Loan (Principal Repayment) [Principal - Rs. 140000]</td>
                <td><input type="number" min="0" class="form-control" value="96000" name="d80_hl" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td>Sukanya Samriddhi Account </td>
                <td><input type="number" min="0" class="form-control" value="0" name="d80_sukanya" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> Stamp Duty & Registration Charges</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d80_charges" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> Tuition fees for 2 children</td>
                <td><input type="number" min="0" class="form-control" value="33600" name="d80_tution_fee" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td><label>Total of 80C</label></td>
                <td id="80c_total">0</td>
                <td id="80c_min_value">0</td>
              </tr>
              <tr bgcolor="#CCCCCC">
                <td><label>Less: Additional Deduction under Sec 80CCD NPS (Max Rs 50,000/-)</label></td>
                <td><input type="number" min="0" class="form-control" value="0" name="deduction_80ccd" placeholder="Enter ..."></td>
                <td id="80ccd">0</td>
              </tr>
              <tr bgcolor="#CCCCCC">
                <td><label>Less: Deduction under RGESS Sec 80CCG (Max Rs. 50,000/-)</label></td>
                <td><input type="number" min="0" class="form-control" value="0" name="deduction_rgess" placeholder="Enter ..."></td>
                <td id="rgess">0</td>
              </tr>
              <tr bgcolor="#CCCCCC">
                <td colspan="3"><label>Less: Deduction under chapter VI A</label></td>
              </tr>
              <tr>
                <td>80 D Medical Insurance premiums (for Self )</td>
                <td><input type="number" min="0" class="form-control" value="25000" name="d4a_mi_self" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> 80 D Medical Insurance premiums (for Parents)</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d4a_mi_parent" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td>80 E Int Paid on Education Loan</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d4a_int_edu" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> 80 DD Medical Treatment of handicapped Dependent</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d4a_med_treatment" placeholder="Enter ..."></td>
                <td></td>
              </tr>
               <tr>
                <td> 80DDB Expenditure on Selected Medical Treatment for self/ dependent</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d4a_exp_med_treatment" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td>80G, 80GGA, 80GGC Donation to approved funds </td>
                <td><input type="number" min="0" class="form-control" value="0" name="d4a_donation" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> 80GG For Rent in case of NO HRA Component <span class="pull-right-container"><span class="label label-primary"> (Budget 2016)</span> </span></td>
                <td><input type="number" min="0" class="form-control" value="56000" name="d4a_rent" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> 80U For Physically Disable Assesse</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d4a_pda" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td> 80TTA Interest earned on fixed deposits (Rs 50,000 for Senior Citizens & Rs 10,000 for others) (Budget 2018)</td>
                <td><input type="number" min="0" class="form-control" value="0" name="d4a_int_earn_fd" placeholder="Enter ..."></td>
                <td></td>
              </tr>
              <tr>
                <td><label>Total Deduction under chapter VI A</label></td>
                <td></td>
                <td id="under4a">0</td>
              </tr>
              <tr>
                <td><label>Total of Deductions</label></td>
                <td></td>
                <td id="td_sum">0</td>
              </tr>
              <tr>
                <td><label>Taxable Income</label></td>
                <td></td>
                <td id="taxable_income">0</td>
              </tr>
              <tr>
                <td><label>Tax Rebate of Rs. 12,500 (For Income of less than 5 lakhs) (Budget 2019)</label></td>
                <td id="tax_rebate"></td>
                <td>0</td>
              </tr>
              <tr>
                <td><label>Net Taxable Income</label></td>
                <td></td>
                <td id="net_taxable_income">0</td>
              </tr>
              <tr>
                <td><label>Total Tax Payable</label></td>
                <td></td>
                <td id="total_tax_payable">0</td>
              </tr>
              <tr>
                <td><label>Tax Surcharge @ 10%/15%/25%/37% (Income more than 50 Lakhs/1 cr/2 cr/5 cr respectively) (Budget 2019)</label></td>
                <td></td>
                <td id="tax_surcharge">0</td>
              </tr>
              <tr>
                <td><label>Add; Edn Cess + Health Cess @ 4%</label></td>
                <td></td>
                <td id="edu_health_cess"">0</td>
              </tr>
              <tr>
                <td><label style="color:blue;">Net Tax Payable</label></td>
                <td></td>
                <td id="net_tax_payable">0</td>
              </tr>
              <tr>
                <td><label style="color:blue;">Advance Tax Paid/ TDS</label></td>
                <td></td>
                <td><input type="number" min="0" class="form-control" name="adv_tax_paid_tds" value=0 placeholder="Enter ..."></td>
              </tr>
              <tr>
                <td><label style="color:blue;">Tax Remianing to be Paid</label></td>
                <td></td>
                <td id="tax_remaining_to_paid">0</td>
              </tr>
            </tbody>
          </table>
          <div class="text-center">
          <button id="submit" load-url="/calculateTax" type="button"class="btn btn-success btn-lg"> Calculate </button>
          </div>
        </form>
      </div>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
  <footer style="padding:10px 0">
    <div class="container">
      <div class="pull-right hidden-xs"> <b>Version</b> 2.4.0 </div>
      <strong>Copyright &copy; 2019 <a href="#">Indian Payroll</a>.</strong> All rights
      reserved. 
    </div>
  </footer>
  
  <!-- Control Sidebar --> 
  
  <!-- /.control-sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper --> 

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset('js/tax-calculation.js') }}"></script>


</body>
</html>
