@if(auth() ->user()-> role == 'admin')
<div id="sidebar-nav" class="sidebar"  style="background-color: #26272b;">
@elseif(auth() ->user()-> role == 'siswa')
<div id="sidebar-nav" class="sidebar" style="background-color: #003399;">
@elseif(auth() ->user()-> role == 'walikelas')
<div id="sidebar-nav" class="sidebar" style="background-color: #008000;">
@endif
      <div class="sidebar-scroll">
        <nav>
          
          <ul class="nav">
            
            @if(auth() ->user()-> role == 'admin')
             <p>
                  <li class="dropdown" align="center">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img width="45" height="45" src="{{asset('admin/assets/img/user.png')}}" class="img-circle" alt="Avatar"> <br><br>

                      <p align="center"><span style="font-size: 20px; font-family:Matura MT Script Capitals;">{{auth()->user()->name}}</span><br></p>
      
                      <p align="center"><span style="font-size: 15px; font-family:Matura MT Script Capitals;"> {{auth()->user()->role}}</span> 
                        <hr>

               </p> 
             
            </p>
            <p>
            <li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            </p>
            <p>
              <li><a href="#"><i class="lnr lnr-user"></i> <span>Data Diri</span></a></li>  
            </p>
            
            <p>
            <li><a href="/admin1" class=""><i class="lnr lnr-database"></i> <span>Data Admin</span></a></li>
            </p>
            <p>
            <li><a href="/walikelas" class=""><i class="lnr lnr-user"></i> <span>Data Wali Kelas</span></a></li>
            </p>
            <p>
            <li><a href="/siswa" class=""><i class="lnr lnr-users"></i> <span>Data Siswa</span></a></li>
            </p>
            <p>
            
            <li>
                     <a href="#subPages" data-toggle="collapse" class="collapsed" aria-expanded="false"><i class="lnr lnr-graduation-hat"></i> <span>Akademik</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPages" class="collapse" aria-expanded="false" style="height: 0px;">
                                <ul class="nav">
                                    <li><a href="/mapel" class="lnr lnr-book">&nbsp;Mata Pelajaran</a></li>
                                    
                                    <li><a href="/kelas_mapel" class="lnr lnr-book">&nbsp;Kelas Mapel</a></li>
                                    
                                </ul>
                        </div>
            </li>

            </p>
            <p>
              <li><a href="/bantuan" class=""><i class="fas fa-question-circle"> </i> <span>Bantuan</span></a></li>
              </p>
                <p>
              <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Keluar</span></a></li>
            </p>
            @endif

            <!-- walikelas -->

            @if(auth() ->user()-> role == 'walikelas')

             <p>
                  <li class="dropdown" align="center">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img width="45" height="45" src="{{asset('admin/assets/img/user.png')}}" class="img-circle" alt="Avatar"> <br><br>

                      <p align="center"><span style="font-size: 20px; font-family:Matura MT Script Capitals;">{{auth()->user()->name}}</span><br></p>
      
                      <p align="center"><span style="font-size: 15px; font-family:Matura MT Script Capitals;"> {{auth()->user()->role}}</span> 
                        <hr>
                      </p>
                    </a>
                  </li>
                  
            </p>
            <p>
            <p>
            <li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            </p>

            <p>
              <li><a href="#"><i class="lnr lnr-user"></i> <span>Data Diri</span></a></li>  
            </p>

            <p>
            <li><a href="/dataSiswa" class=""><i class="lnr lnr-users"></i> <span>Data Siswa</span></a></li>
            </p>
            <p>
            
            <li>
                     <a href="#subPages" data-toggle="collapse" class="collapsed" aria-expanded="false"><i class="lnr lnr-graduation-hat"></i> <span>Akademik</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPages" class="collapse" aria-expanded="false" style="height: 0px;">
                                <ul class="nav">
                                <li><a href="/nilai1" class="lnr lnr-star">&nbsp;Nilai</a></li>
                                </ul>
                        </div>
            </li>

            </p>
            <p>
            <li><a href="/cetak/siswa" class=""><i class="lnr lnr-printer"></i> <span>Cetak Rapot</span></a></li>
            </p>
            <p>
              <li><a href="/bantuan" class=""><i class="fas fa-question-circle"> </i> <span>Bantuan</span></a></li>
              </p>
               <p>
                <li><a href="/logout" class=""><i class="lnr lnr-exit"></i> <span>Keluar</span></a></li>
            </p>
            @endif

            @if(auth() ->user()-> role == 'siswa')
            <p >
              <li align="center">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img width="45" height="45" src="{{asset('admin/assets/img/user.png')}}" class="img-circle" alt="Avatar"> <br><br>

                  <p align="center"><span style="font-size: 20px; font-family:Matura MT Script Capitals;">{{auth()->user()->name}}</span><br></p>
  
                  <p align="center"><span style="font-size: 15px; font-family:Matura MT Script Capitals;"> {{auth()->user()->role}}</span> 
                    <hr>

            <p>
            <li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            </p>

            <p>
              <li><a href="#"><i class="lnr lnr-user"></i> <span>Data Diri</span></a></li>  
            </p>
            
            <p>   
              <li><a href="#" class=""><i class="fas fa-book"></i></i> <span>Lihat Nilai</span></a></li>
           
            </p>

            <p>
            <li><a href="#" class=""><i class="lnr lnr-printer"></i> <span>Cetak Rapot</span></a></li>
            </p>

            <p>
              <li><a href="/bantuan" class=""><i class="fas fa-question-circle"> </i> <span>Bantuan</span></a></li>
              </p>
              
            <p>
                <li><a href="/logout" class=""><i class="lnr lnr-exit"></i> <span>Keluar</span></a></li>
            </p>
            

            @endif

      
        </nav>
      </div>
    </div>