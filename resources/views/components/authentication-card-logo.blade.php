<?php 
  $konf = DB::table('setting')->first();
?>
<a href="/">
    <img src="{{ asset('logo/'.$konf->logo_setting) }}" class="img-circle elevation-2" style="width: 200px; height: 200px; margin-bottom: -40px; margin-top: -170px;">
</a>
