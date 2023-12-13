<!-- navbar -->
<nav class="navbar navbar-expand text-light fixed-top shadow shadow-sm" style="background-color: #213555">
  <div class="container-fluid">
    <img src="pic/2.png" alt="Bootstrap" width="100" height="80">
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="grid text-center" style="row-gap: 0;">
        <div align="left" class="g-col-6 text-uppercase mb-0 pt-0">BBPPMPV BMTI</div>
        <div align="left" class="g-col-6" style="font-size: 14px;">jl.pesantren cimahi Utara</div>
        <div align="left" class="g-col-6" style="font-size: 14px;">no.tlpn 08xxxxxxxxx</div>
      </div>
      <div class="grid text-center ms-auto" style="row-gap: 0;">
        <div align="right" class="g-col-6 m-0 p-0"><?php echo date ("d/F/o"); ?></div>
        <div align="right" class="g-col-6 mt-0 pt-0" style="font-size: 30px;" id="current-time"></div>
      </div>

      
    </div>
  </div>
</nav>
    <!-- end -->

    <script>
    let time = document.getElementById("current-time");

    setInterval(() =>{
      let d = new Date();
      time.innerHTML = d.toLocaleTimeString();
    },1000)
</script>

