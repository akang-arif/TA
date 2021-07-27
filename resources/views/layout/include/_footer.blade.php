
@if(auth() ->user()-> role == 'admin')
<!-- Footer -->
<div class="footer">

  <!-- Footer Text -->
  
    <div class="site-footer" style="margin-top:100px; padding-bottom: 20px;" >
    <div class="container">

            
              <table width="800" align="center">
                <th>
                   <p class="copyright-text" style="color: white; text-align: center;">Kementrian Republik Indonesia, dinas pendidikan provinsi kalimantan timur, dinas pendidikan kota samarinda, tim pengembangan it polnes, tim pengembangan e-learning polnes 
         
            </p>
                </th>
              </table>
        <hr>
      </div>
      
      <div class="container">
            <ul class="social-icons"  style="text-align: center;">
              <li><a class="facebook" href="#" ><i class="fab fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>   
            </ul>


               <p class="copyright-text" style="color: white; text-align: center;">Copyright &copy; 2017 All Rights Reserved by yii team 
         
            </p>
          
        
    
</div>
</div>
  
  <!-- Footer Text -->


</div>
<!-- Footer -->

@endif

@if(auth() ->user()-> role == 'walikelas')
<div class="footer">

  <!-- Footer Text -->
  
    <div class="site-footer" style="background-color: #008000; margin-top:50px; padding-bottom: 20px;" >
    <div class="container">

            
               
              <table   width="800" align="center">
                <th>
                   <p class="copyright-text" style="color: white; text-align: center;">Kementrian Republik Indonesia, dinas pendidikan provinsi kalimantan timur, dinas pendidikan kota samarinda, tim pengembangan it polnes, tim pengembangan e-learning polnes 
         
            </p>
                </th>
              </table>
        <hr>
      </div>
      
      <div class="container">
            <ul class="social-icons"  style="text-align: center;">
              <li><a class="facebook" href="#" ><i class="fab fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>   
            </ul>

              <p class="copyright-text" style="color: white; text-align: center;">Copyright &copy; 2017 All Rights Reserved by yii team 
         
            </p>
          
        
    
</div>
</div>
  
  <!-- Footer Text -->


</div>
<!-- Footer -->
@endif

@if(auth() ->user()-> role == 'siswa')
<div class="footer">

  <!-- Footer Text -->
  
    <div class="site-footer"  style=" background: #003399; margin-top:10px; padding-bottom: 20px;" >
    <div class="container">

             <table   width="800" align="center">
                <th>
                   <p class="copyright-text" style="color: white; text-align: center;">Kementrian Republik Indonesia, dinas pendidikan provinsi kalimantan timur, dinas pendidikan kota samarinda, tim pengembangan it polnes, tim pengembangan e-learning polnes 
         
            </p>
                </th>
              </table>
        <hr>
      </div>
      
      <div class="container">
            <ul class="social-icons"  style="text-align: center;">
              <li><a class="facebook" href="#" ><i class="fab fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>   
            </ul>
           <p class="copyright-text" style="color: white; text-align: center;">Copyright &copy; 2017 All Rights Reserved by yii team 
         
            </p>
        
    
</div>
</div>
  
  <!-- Footer Text -->


</div>
@endif
</div>

 