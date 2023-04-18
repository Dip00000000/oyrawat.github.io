<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Oyrawat Properties|Commercial Properties</title>
     <link rel="icon" href="./main_images/oyrawat.gif" type="image/gif" sizes="16x16">

     
     
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

      <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
      <link rel="stylesheet" href="./css/gen.css">
      <link rel="stylesheet" href="./css/carousel.css">
      <script src="./js/table_show.js"></script>
        <style>
.material-symbols-sharp {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>
  
</head><body><div class="container-fluid">
   
   <div class="row">
           <div class="col-sm-12 bg-body">
            <p>&nbsp;</p>
            <h2><span style="color:darkorange;">EMI</span> Calculator</h2>
            <p>&nbsp;</p>
           </div>
       </div>
       <div class="row">
              <div class="col-sm-6 bg-body">
                  <div class="card">
                         <div class="card-header">
                          <h2>Calculate Your Loan EMI</h2>
                         </div>
                         <div class="card-body bg-light">
                                 <form id="loan" method="post">
                                      <div class="form-group">
                                           <label for="la" class="form-label fw-bold">Loan Amount</label>
                                           <input type="text" class="form-control" id="la" name="loan_amount">
                                       </div>
                                       <div class="form-group">
                                           <label for="ir" class="form-label fw-bold">Interest Rate</label>
                                           <input type="text" class="form-control" id="ir" name="interest_rate">
                                       </div>
                                       <div class="form-group">
                                           <label for="ld" class="form-label fw-bold">Loan Duration (Years)</label>
                                           <input type="text" class="form-control" id="ld" name="loan_duration">
                                       </div>
                                       <div class="form-group">
                                           <label for="s_emi" class="form-label fw-bold">&nbsp;</label>
                                           <button type="submit" class="form-control bg-primary" id="s_emi" name="submit_emi">Calculate EMI</button>
                                       </div>
                                  </form>
                                  <script src="./js/emi.js"></script>
                         </div>
              
                   </div>
                </div>
               <div class="col-sm-6 bg-body">
                      <table class="table">
                              <tr>
                                    <td>Loan EMI</td>
                              </tr>
                              <tr>
                                    <td>Rs&nbsp;<span id="emi"></span></td>
                              </tr>
                              <tr>
                                    <td>Total Interest Payable</td>
                              </tr>
                              <tr>
                                    <td>Rs&nbsp;<span id="ti"></span></td>
                              </tr>
                              <tr>
                                    <td>Total Payments(Principal+Interest)</td>
                              </tr>
                              <tr>
                                    <td>Rs&nbsp;<span id="tp"></span></td>
                              </tr>

                      </table>
               </div>
            <p>&nbsp;</p>

       </div>



   
</div></body></html>